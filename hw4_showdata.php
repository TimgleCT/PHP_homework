<DOCTYPE html>
<head>

</head>
<body>
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
<?php
	
		echo "<table border=1>";
		echo "<tr>";
		echo "<td>功能</td>";
		echo "<td>ID</td>";
		echo "<td>Name</td>";
		echo "<td>Price</td>";
		echo "<td>Quantity</td>";
		echo "</tr>";
		$total=0;
		while(list($arr)=each($_COOKIE)){
			$price=0;
			$quantity=0;
			echo "<tr>";
			echo "<td><a href='hw4_delete.php?Id=".$arr."'>刪除</a></td>";
			while(list($name,$value)=each($_COOKIE[$arr]))
			{	
			echo "<td>".$value."</td>";
			if($name=="price")
				{
					$price=$value;
				}
			if($name=="quantity")
				{
					$quantity=$value;
				}
			}
			$total=$total+($quantity*$price);
			echo "</tr>";
		}
		
		if ($total != 0) {  // 顯示總金額
			echo "<tr><td>";
			echo "總金額 = NT$".$total."元</td></tr>";
		}
	//else{
	//	echo "您尚未訂購商品";
	//}



?>
</body>
</DOCTYPE>