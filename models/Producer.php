<?php
include_once "connection.php";
class Producer{
    public static function getAllProducer(){
        $sql = "SELECT id,name from producer";
        $stmt=DB::getInstance()->prepare($sql);
        $stmt->execute();
        $data = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data[$row['id']]=$row['name'];
        }
        return $data;
    }
}
?>