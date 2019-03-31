<?php
include_once "connection.php";
class Product{
    public static function getAllProducts(){
        $sql = "SELECT * FROM product";
        $stmt = DB::getInstance()->prepare($sql);
        $stmt->execute();
        $row = $stmt->rowCount();
        $data = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data[] = $row;
        }
        return $data;
    }

    public static function getLastestProducts(){
        $sql = "SELECT * FROM product ORDER BY release_date DESC LIMIT 10";
        $stmt = DB::getInstance()->prepare($sql);
        $stmt->execute();
        $row = $stmt->rowCount();
        $data = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data[] = $row;
        }
        return $data;
    }

    public static function getTop5(){
        $sql = "SELECT distinct product.*,SUM(order_detail.quantity) as num
        FROM product,order_detail
        WHERE product.ID=order_detail.product_id
        GROUP BY order_detail.product_id
        ORDER BY num DESC";
        $stmt = DB::getInstance()->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    
    public static function searchProducts($data){
        extract($data);
        $sortsql ="";
        switch ($sortmode) {
            case 1:
                $sortsql = " ORDER BY name ASC";
                break;
            case 2:
                $sortsql = " ORDER BY name DESC";
                break;
            case 3:
                $sortsql = " ORDER BY price ASC";
                break;
            case 4:
                $sortsql = " ORDER BY price DESC";
                break;
        }
        $inwheresql = ($inwhere=="1")?" product.name like '%$keyword%' AND product.description like '%$keyword%'":($inwhere=="0"?" 1=1":" product.{$inwhere} like '%$keyword%'");
        $catesql = $category==0?"":" AND category_id={$category}";
        if(isset($_GET['tag'])){
            $tagsql = " AND category_id=category.id AND sortname='{$_GET['tag']}'";
        }else{
            $tagsql = "";
        }
        $sql = "SELECT distinct product.* FROM product,category WHERE".$inwheresql.$catesql.$tagsql.$sortsql." LIMIT {$counter}";
        // var_dump($sql);
        $stmt = DB::getInstance()->prepare($sql);
        $stmt->execute();
        $data = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data[] = $row;
        }
        return $data;
    }
    public static function create($data){
        // echo "<pre>";
        extract($data);
        // print_r($data);
        // print_r($_FILES);
        
        $sql = "INSERT INTO product(name,code,price,description,config,sale,release_date,image,category_id,producer_id) VALUES(?,?,?,?,?,?,?,?,?,?)";
        
        $stmt = DB::getInstance()->prepare($sql);
        $config_tmp =  implode(';',$config);

        // echo "<pre>";
        // print_r($_FILES);
        $image = $_FILES['image'];
        $image_tmp = array();

        foreach ($image['tmp_name'] as $key => $value) {
            $imgname = $code."img".$key.".".str_replace("image/","",$image['type'][$key]);
            $image_tmp[] = $imgname;
            move_uploaded_file($value,"assets/image/product/".$imgname);
            // echo "assets/image/product/".$code."img".$key.".".str_replace("image/","",$image['type'][$key]);
        }
        $image_str = implode(";",$image_tmp);
        
        $stmt->bindParam(1,$name);
        $stmt->bindParam(2,$code);
        $stmt->bindParam(3,$price,PDO::PARAM_INT);
        $stmt->bindParam(4,$description);
        $stmt->bindParam(5,$config_tmp);
        $stmt->bindParam(6,$sale,PDO::PARAM_INT);
        $stmt->bindParam(7,$release);
        $stmt->bindParam(8,$image_str);
        $stmt->bindParam(9,$category,PDO::PARAM_INT);
        $stmt->bindParam(10,$producer,PDO::PARAM_INT);
        if($stmt->execute()){
            $lastid = DB::getInstance()->lastInsertId();
            $sql2 = "INSERT INTO category_product VALUES({$category},{$lastid})";
            // echo $sql2;
            $stmt2 = DB::getInstance()->prepare($sql2);
            if($stmt2->execute()){
                echo '<div class="alert alert-success">Thêm thành công</div>';
            }else{
                echo '<div class="alert alert-danger">Thêm thất bại</div>';
            }
        }else{
            echo '<div class="alert alert-danger">Thêm thất bại</div>';
        }
    }
    public static function getData($code){
        $sql = "SELECT product.*,producer.name as proname FROM product LEFT JOIN producer ON product.producer_id=producer.id WHERE product.code='{$code}'";
        $stmt = DB::getInstance()->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $row['status']="Không rõ";
        return $row;
    }

    public static function getAllProductsByPage($limit,$current_page){
		$result = array();
		$sql = "SELECT * FROM product";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->execute();
	    $total_records= $stmt->rowCount();
	     $total_page = ceil($total_records / $limit);
	     $_SESSION['total_page'] = $total_page;
	     if ($current_page > $total_page){
	     	$current_page = $total_page;
	     }
	     else if ($current_page < 1){
	     	$current_page = 1;
	     }

         $start = ($current_page - 1) * $limit;
         $sql1 = "SELECT * FROM product LIMIT $start, $limit";
         $stmt1 = DB::getInstance()->prepare($sql1);
         $stmt1->execute();
         $count= $stmt1->rowCount();
         if($count>0){
	    	while($row = $stmt1->fetch(PDO::FETCH_ASSOC)){
	    		$result[] = $row;
	    	}
	    }
	    return $result;
    }
    public static function addComment($pid,$content,$uid)
    {
        $sql="INSERT INTO comment(content,customer_id,product_id) VALUES(?,?,?)";
        $stmt = DB::getInstance()->prepare($sql);
        $stmt->bindParam(1,$content);
        $stmt->bindParam(2,$uid);
        $stmt->bindParam(3,$pid);
        if($stmt->execute()){
            return 1;
        }else{
            return 0;
        }
    }
    public static function getComment($id)
    {
        $sql = "SELECT comment.*,customer.name FROM comment LEFT JOIN customer ON customer.id=comment.customer_id WHERE product_id='{$id}' ORDER BY date_create DESC";
        $stmt = DB::getInstance()->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    public static function delComment($id)
    {
        $sql = "DELETE FROM comment WHERE id = $id";
        $stmt = DB::getInstance()->prepare($sql);
        if($stmt->execute()){
            return "Deleted";
        }else{
            return "Failed";
        }
    }
}
?>


