<?php
include_once "connection.php";
include_once 'class.smtp.php';
include_once "class.phpmailer.php"; 
include_once "functions.php";
include_once "models/Key.php";
class Cart{
    public static function sendmail($oid,$data,$email){
    	$title = 'Key Game của đơn hàng '.$oid;
		$content = "";
		foreach ($data as $key => $value) {
			$content = $content."Key game của sản phẩm ".$value['name'].":<br>";
			foreach ($value['list'] as $x => $y) {
				$content=$content.$y."<br>";
			}
			$content=$content."--------------------------<br>";
		}
    	$nTo = 'GIL SHOP';
    	$mTo = $email;
    	$diachi = 'gilshop97@mail.com';
    	$mail = sendMail($title, $content, $nTo, $mTo,$diachicc='');
	}

	public function showcart($productid){
		$quantity = 1;
		$query = "SELECT productid, productname, price,quantity,code FROM products WHERE productid =:id";
		$stmt = DB::getInstance()->prepare($query);
		$stmt->bindParam(":id", $productid);
		$stmt->execute();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$r[] =  $row;
		}
		$item  = array($r[0]["productid"]=>array(
			'productname' => $r[0]['productname'],
			'productcode' => $r[0]['productcode'],
			'price' => $r[0]['price'],
			'quantity' => $quantity)
     	);

		if(empty($_SESSION['cart'])){
			$_SESSION['cart']= $item;
		}else{
		    	//Kiểm tra key của $item mới thêm có trùng với key đã có trong session cart hay không
			if(in_array($r[0]['productid'], array_keys($_SESSION['cart']))){
		        	//tăng số lượng trong bản ghi đã có của session
				foreach ($_SESSION['cart'] as $k => $v) {
					if($r[0]['productid']==$k){
						$_SESSION['cart'][$k]['quantity']+= 1;
					}
				}
			}else{
		        	//gộp session cart
				$_SESSION['cart']= $_SESSION['cart']+$item;
			}
		}

		return 	$_SESSION['cart'];
	
	}

	public static function addOrder(){
		$userid = $_SESSION['userid'];
		$total = 0;
		$data = array();
		$email = $_SESSION['useremail'];
		$sql1 = "INSERT INTO `order` SET user_id={$userid}";
		$stmt1 = DB::getInstance()->prepare($sql1);
		print_r($sql1); 

		if($stmt1->execute()){
			//Lay orderid vua duoc chen vao bang 'orders'
			$orderid = DB::getInstance()->lastInsertId();
			$total = 0;
			foreach ($_SESSION['cart'] as $k => $v) {
				$code = $k;
				$id = $v['pid'];
				$name = $v['name'];
				$price = $v['price'];
				$quantity = $v['quantity'];

				$key = Key::getKey($id,$orderid,$quantity);
				$data[]=array(
					"name"=>$name,
					"list"=>$key
				);

				$sql2 = "INSERT INTO order_detail SET order_id=:o,product_id=:p,unitprice=:u,quantity=:q";
				$stmt2 = DB::getInstance()->prepare($sql2);
				$stmt2->bindParam(":o", $orderid);
				$stmt2->bindParam(":p", $id);
				$stmt2->bindParam(":u", $price);
				$stmt2->bindParam(":q", $quantity);
				$stmt2->execute();
				$total += $price*$quantity;
			}

			$sent = self::sendmail($orderid,$data,$email);

			$_SESSION['usermoney'] = $_SESSION['usermoney'] - $total;

			$sql3 = "UPDATE customer SET balance={$_SESSION['usermoney']} WHERE id={$userid}";
			$stmt3 = DB::getInstance()->prepare($sql3);
			$stmt3->execute();

			unset($_SESSION['cart']);
			unset($_SESSION['total']);
			//header("location: ?controller=carts&action=order&success");
			return  true;
		}else{
			return false;
		}
	}
}



 ?>