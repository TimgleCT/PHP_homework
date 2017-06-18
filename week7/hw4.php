<DOCTYPE html>
<head>

</head>
<body>

<?php
	session_start();
	if(isset($_POST["cellphone"]))
	{
		$_SESSION["quantity"]=$_POST["quantity"];
		$id=$_POST["cellphone"];
		$_SESSION["id"]=$id;
		switch($id){
			case "CT001";
			$_SESSION["name"]="HTC";
			$_SESSION["price"]=20000;
			break;
			case "CT002";
			$_SESSION["name"]="Sony";
			$_SESSION["price"]=19800;
			break;
			case "CT003";
			$_SESSION["name"]="OPPO";
			$_SESSION["price"]=12000;
			break;
			case "CT004";
			$_SESSION["name"]="Apple";
			$_SESSION["price"]=23000;
			break;
			case "CT005";
			$_SESSION["name"]="Samsung";
			$_SESSION["price"]=26000;
			break;
		}
		header("Location: hw4_savedata.php");
	}
?>
<form action="hw4.php" method="post">
選擇商品:<select name="cellphone">
			<option value="CT001" select="true">HTC</option>
			<option value="CT002" >Sony</option>
			<option value="CT003" >OPPO</option>
			<option value="CT004" >Apple</option>
			<option value="CT005" >Samsung</option>
			</select>
			
			數量:<input type="number" name="quantity"  value="0" min="0" max="5">
			<input type="submit" value="放入購物車">
			<br>
			<hr>
			<a href="http://localhost/hw4_showdata.php">檢視購物車</a>
</form>
</body>
</html>