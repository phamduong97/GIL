<?php
include_once "connection.php";
class Ticket{
    public static function getTicket($count = 5,$keyword = ""){
        $sql = "SELECT * FROM support_ticket WHERE isok=1 AND question like '%{$keyword}%' ORDER BY id DESC LIMIT {$count}";
        $stmt = DB::getInstance()->prepare($sql);
        $stmt->execute();
        $result=array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            # code...
            $result[$row['id']] = array(
                "question"=>$row['question'],
                "answer"=>$row['answer']
            );
        }
        return $result;
    }
    public static function createTicket($data){
        extract($data);
        $sql = "INSERT INTO support_ticket(name,email,question) VALUES('{$name}','{$email}','{$question}')";
        $stmt = DB::getInstance()->prepare($sql);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
}
?>