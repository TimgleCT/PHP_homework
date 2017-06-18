<DOCTYPE html>
<head>
<title>hw6_upload.php</title>
<meta charset="utf8">
</head>
<body>
<?php
session_start();
if(isset($_POST["num"])){
	$quantity=$_POST["num"];
	echo $quantity."<br>";
	echo "<form  action='hw6_upload.php' method='post' enctype='multipart/form-data'>";
	for($i=1;$i<=$quantity;$i++){
		echo "<input type='file' name='upload[]'><br>";
	}
	$_SESSION["count"]=$quantity;
	echo "<input type='submit' value='上傳'>";
	echo "</form>";
	//header("Location:hw6_upload.php");
}

	
	if(isset($_FILES["upload"])){
		$count=$_SESSION["count"];
		echo $count."<br>";
		for($i=0;$i<$count;$i++){
		echo $_FILES["upload"]["name"][$i]."<br>";
		echo $_FILES["upload"]["tmp_name"][$i]."<br>";
		echo $_FILES["upload"]["size"][$i]."<br>";
		echo $_FILES["upload"]["type"][$i]."<br>";
		
		$a=pathinfo($_FILES["upload"]["name"][$i]);
		$t=time();
		if(copy($_FILES["upload"]["tmp_name"][$i],$t.".".$a["extension"])){
			echo "檔案上傳成功<br>";
			}
			else{
					echo "失敗<br>";
			}
		}
	}
?>

</body>
</DOCTYPE>