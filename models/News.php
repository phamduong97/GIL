<?php 
require_once "connection.php";
class News{
	
	public static function getAllNews(){
		$result = array();
		$sql = "SELECT id,TieuDe,NoiDung,Hinh,TacGia,TomTat,NgayTao FROM tintuc LIMIT 10";
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


	public static function getAllNewsRelate(){
		$result = array();
		$sql = "SELECT id,TieuDe,Hinh,TomTat FROM tintuc ORDER BY id DESC limit 6";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->execute();
	    $count= $stmt->rowCount();
	    if($count>0){
	    	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	    		$result[] = $row;
	    	}
	    }else{
	    	header("location:?controller=home&action=index");
	    }
	    return $result;
	}
    
	public static function getNewsById($id){
		$result = array();
		$sql = "SELECT id,TieuDe,NoiDung,Hinh,TacGia,TomTat,NgayTao FROM tintuc WHERE id = $id";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt->execute();
		$count= $stmt->rowCount();
		if($count>0){
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			
		}
		return $row;
	}

	public static function getCommentById($id){
		$result = array();
		$sql = "SELECT * FROM comment_news INNER JOIN customer ON comment_news.idUser = customer.id WHERE idTinTuc = '$id' order by NgayTao DESC LIMIT 0,10";
		//$sql = "SELECT * FROM  comment  WHERE idTinTuc = '$id'";
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

	public static function addComment($id,$iduser,$comment){
		$sql = "INSERT INTO comment_news (idUser, idTinTuc, NoiDung, NgayTao) VALUES ('$iduser' ,'$id' ,'$comment' , now())";
		$stmt = DB::getInstance()->prepare($sql);
		$stmt ->execute();
		header("location: ?controller=news&action=detail&id=$id");
		
	}


}

