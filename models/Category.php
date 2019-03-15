<?php
include_once "connection.php";
class Category{
    public static function getAllCategory(){
        $sql = "SELECT id,name,sortname FROM category";
        $stmt = DB::getInstance()->prepare($sql);
        $stmt->execute();
        $data = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data[$row['id']]=$row['name'];
        }
        return $data;
    }
}
?>