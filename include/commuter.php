<?php
session_start();
require 'dbconnector.php';
$page=isset($_GET['page'])?$_GET['page']:'';
$id=isset($_GET['id'])?(int)$_GET['id']:0;
$page_title = '';
$page_type = '';
$page_body = '';
$conn = new DBConnector;

if($page){ // load by name
	$result = $conn->query("SELECT * FROM pages WHERE name='$page'");
	if($conn->getNumRows($result)>0){
		while($row = $conn->fetchArray($result)){
			$page_title = $row['title'];
			$page_type = $row['type'];
			$page_body = $row['body'];
		}
	}else{
		$page_title = "404 Error!";
		$page_body = "<h3>Sorry</h3><p>The page your requesting is not availabe in our system!</p>";
	}
}
elseif($id){ // load by id
	$result = $conn->query("SELECT * FROM pages WHERE id='$id'");
	if($conn->getNumRows($result)>0){
		while($row = $conn->fetchArray($result)){
			$page_title = $row['title'];
			$page_type = $row['type'];
			$page_body = $row['body'];
		}
	}else{
		$page_title = "404 Error!";
		$page_body = "<h3>Sorry</h3><p>The page your requesting is not availabe in our system!</p>";
	}
}
else{ // load by special
	$result = $conn->query("SELECT * FROM pages WHERE name='home'");
	if($conn->getNumRows($result)>0){
		while($row = $conn->fetchArray($result)){
			$page_title = $row['title'];
			$page_type = $row['type'];
			$page_body = $row['body'];
		}
	}else{
		$page_title = "404 Error!";
		$page_body = "<h3>Sorry</h3><p>The page your requesting is not availabe in our system!</p>";
	}
}
?>
