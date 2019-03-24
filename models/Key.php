<?php
include_once "connection.php";
class Key{
    public static function getKey($pid,$oid,$number){
        $key = array();
        $sql= "SELECT * FROM keylist WHERE product_code=$pid and order_id IS NULL LIMIT $number";
        $stmt = DB::getInstance()->prepare($sql);
        if($stmt->execute()){
            if($stmt->rowCount() == 0){

            }else{
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $key[] = $row['code'];
                    $sql2 = "UPDATE keylist SET order_id=$oid WHERE code='{$row["code"]}'";
                    $stmt2 = DB::getInstance()->prepare($sql2);
                    $stmt2->execute();
                }
            }
        }
        return $key;
    }
}
?>