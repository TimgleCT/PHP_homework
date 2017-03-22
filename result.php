<?php
	$input1=$_POST["name"];
	$input2=$_POST["session"];
	$input3=$_POST["gender"];
	$input4=$_POST["college"];
	$input5=$_POST["department"];
	$input6=$_POST["interest"];
	$input7=$_POST["expertise"];
	$input8=$_POST["helpingweek"];
	$date = new DateTime($input8);
	$week = $date->format("W");
	$input9=$_POST["phone"];
	$input10=$_POST["mail"];
	$input11=$_POST["date"];
	$input12=$_POST["why"];
	
	echo "你的名子為".$input1."<br>";
	echo "你為第".$input2."屆畢業生"."<br/>";
	if($input3=="male")
	{
		echo "性別為男性<br>";
	}
	else{
		echo "性別為女性<br>";
		echo "<body bgcolor='red'>";
	}
	echo "你就讀學系為".$input4."大學".$input5."學系"."<br/>";
	echo "你的興趣:<br>";
	/*foreach($input6 as $data){
		echo " ".$data;
	}
	echo "<br>";*/
	for($i=0;$i<count($input6);$i++)
	{
		echo $input6[$i]." ,";
	}
	echo "<br>";
	
	echo "你的專長為:";
	for($i=0;$i<count($input7);$i++)
	{
		echo $input7[$i]." ,";
	}
	echo "<br>";
	echo "可以幫忙的周:".$input8."<br>";
	echo "連絡電話:".$input9."<br>";
	echo "E-mail:".$input10."<br>";
	echo "你認為較佳的制服日日子:".$input11."<br>";
	echo "原因：".$input12."<br>";
	
	/*if(is_numeric($input1)){
		echo $input1*$input2."測試<br>";
	}
	else{
			echo "輸入錯誤，返回上一頁"."<a href='http://localhost/hw2.html'>Back</a>"."<br>";
	}
	echo $input1.$input2."測試<br>";
	*/
	
	
?>