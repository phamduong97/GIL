<?php
include 'class.smtp.php';
include "class.phpmailer.php"; 
include "functions.php";
include_once "connection.php";
class Account{

	public function sendmail($email){
		$result = array();
		$sql = "SELECT * FROM users WHERE email=:e ";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->bindParam(":e", $email);
		$stmt->execute();
		$count= $stmt->rowCount();
		$token = rand(10,100000);
		if($count>0){
	     	$sql1 = "UPDATE users SET token=:t WHERE email=:e";
	     	$stmt1 = DB::getInstance()->prepare($sql1);
	     	$stmt1->bindParam(":t", $token);
	     	$stmt1->bindParam(":e", $email);
	     	if($stmt1->execute()){
	     		$title = 'Xác nhận mật khẩu';
	     		$content = '<p><b>Để lấy lại mật khẩu hãy nhấp vào link sau:  </b></p>'.'http://localhost/duong/?controller=account&action=resetpass&email='.$email.'&token='.$token;
	     		$nTo = 'Duong';
	     		$mTo = $email;
	     		$diachi = 'gilshop97@mail.com';
	     		$mail = sendMail($title, $content, $nTo, $mTo,$diachicc='');
	     		if($mail==1)
	     			echo '  <script>alert("Email của bạn đã được gửi đi hãy kiếm tra hộp thư đến để xem kết quả.");</script>';
	     		else echo 'Co loi!';
	     	}
			
		}
	}

	public function changepass($email,$token,$password){
		$sql = "UPDATE users SET password=:p WHERE email=:e and token=:t ";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->bindParam(":e", $email);
		$stmt->bindParam(":t", $token);
		$stmt->bindParam(":p", $password);
		
		if($stmt->execute()){
		header("location: ?controller=account&action=login&success_reset");
	     }

		
	}

	public function search($key){
		$result = array();
		$sql = "SELECT * FROM members WHERE name REGEXP '$key' ORDER BY id DESC ";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->execute();
	    $count= $stmt->rowCount();
	    if($count>0){
	    	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	    		$result[] = $row;
	    	}
	    }
	    return $result;
	}

	public function delete($id){
		$sql = "DELETE  FROM members WHERE id = ?";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->bindParam(1, $id);
		$stmt->execute();
		 header("location: ?controller=user&action=index");
	}

	public function addmoney($id,$sale,$series,$code){
		$query = "SELECT * FROM users WHERE userid=:u limit 0,1";
		$stms = DB::getInstance()->prepare($query);
		$stms->bindParam(":u",$id);
		$stms->execute();
		$data = $stms->fetch(PDO::FETCH_ASSOC);
		$add = $sale + $_SESSION['usermoney'];
		$sql = "SELECT *  FROM cards WHERE series =:s and code=:c ";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->bindParam(":s",$series);
		$stmt->bindParam(":c",$code);
		$stmt->execute();
		$count = $stmt->rowCount();
		if($count>0){
			$sql1 = "UPDATE users SET balance=:b WHERE userid =:u  ";
			$stmt1 = DB::getInstance()->prepare($sql1);
			$stmt1->bindParam(":b",$add);
			$stmt1->bindParam(":u",$id);
			$stmt1->execute();
				header("location: ?controller=account&action=addmoney&success");
		}else{
				header("location: ?controller=account&action=addmoney&fail");

		}
	}

	public function updateview($id){
		$row = array();
		$sql = "SELECT *  FROM members WHERE id = ?";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->bindParam(1, $id);
		$stmt->execute();
		$count = $stmt->rowCount();
		if($count>0){
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
		}
		return $row;
	}

	public function update($id,$name,$age,$year,$country){
		$sql = "UPDATE members SET name=:n,age=:a,yearborn=:y,country=:c WHERE id=:i";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->bindParam(":i", $id);
		$stmt->bindParam(":n", $name);
		$stmt->bindParam(":a", $age);
		$stmt->bindParam(":y", $year);
		$stmt->bindParam(":c", $country);
		$stmt->execute();
		header("location: ?controller=user&action=index");	
	}

	public function register($name,$fullname,$email,$mobile,$pass){
		$sql = "INSERT INTO users SET name=:n,fullname=:f,email=:e,mobile=:m,password=:p";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->bindParam(":n", $name);
		$stmt->bindParam(":f", $fullname);
		$stmt->bindParam(":e", $email);
		$stmt->bindParam(":m", $mobile);
		$stmt->bindParam(":p", $pass);
		if($stmt->execute()){
		   header("location: ?controller=account&action=register&success=1");	
		}else{
		   header("location: ?controller=account&action=login");	

		}	
	}

	public static function login($email,$password){
		$query= "SELECT * FROM customer,account Where account.id=customer.id and email=:e and password=:p limit 0,1";
		$stmt = DB::getInstance()->prepare($query);
		$stmt->bindParam(":e", $email);
		$stmt->bindParam(":p", $password);
		$stmt-> execute();
		$count = $stmt->rowCount();
		if($count>0){
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$_SESSION['logged_in']= true;
			$_SESSION['user']= true;
			$_SESSION['userid']= $row['id'];
			$_SESSION['username']= $row['name'];
			$_SESSION['usermoney']= $row['balance'];
			$_SESSION['useremail']= $row['email'];
			header("location: ?controller=home&action=index");
		}else{
			header("location: ?controller=account&action=login&fail=1");
		}	
	}
    
	public static function getOrderById($id){
		$result = array();
		$sql = "SELECT * FROM `order` INNER JOIN order_detail ON `order`.id = order_detail.order_id WHERE user_id =:u order by order_date DESC ";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->bindParam(":u", $id);
		$stmt-> execute();
		$count= $stmt->rowCount();
	    if($count>0){
	    	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	    		$result[] = $row;
	    	}
	    }
	    return $result;
	}

	public static function logout(){
		if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true&& $_SESSION['user']==true){
			unset($_SESSION['logged_in']);

			unset($_SESSION['user']);
			unset($_SESSION['userid']);
			unset($_SESSION['username']);
			unset($_SESSION['usermoney']);
			unset($_SESSION['useremail']);

			header("location: ?controller=home&action=index");
		}
	}

}

