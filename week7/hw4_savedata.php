<?php
session_start();
if(isset($_SESSION["id"])){
	echo"成功";
	$id=$_SESSION["id"];
	$name=$_SESSION["name"];
	$price=$_SESSION["price"];
	$quantity=$_SESSION["quantity"];
	$date=strtotime("+7 days",time());
	setcookie($id."[id]",$id,$date);
	setcookie($id."[name]",$name,$date);
	setcookie($id."[price]",$price,$date);
	setcookie($id."[quantity]",$quantity,$date);
	$test=$_COOKIE["id.id"];
	echo "id=".$test;
	
	}
else{
	echo "失敗~~";
}


header("Location: hw4_showdata.php");
?>