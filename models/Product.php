<?php
include "connection.php";
class Product{
    public static function getAll(){
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
        $inwheresql = ($inwhere=="1")?" name like '%$keyword%' AND description like '%$keyword%'":($inwhere=="0"?" 1=1":" {$inwhere} like '%$keyword%'");
        $catesql = $category==0?"":" AND category_id={$category}";
        $sql = "SELECT * FROM product WHERE".$inwheresql.$catesql.$sortsql." LIMIT {$counter}";
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
}
?>


