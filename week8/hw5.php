<DOCTYPE html>
<head>
<title>hw5database</title>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="ct35480925";
$database="homework";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
	echo "Connection is Successful !!";
}
mysqli_query($conn,"SET NAMES utf8");
$sql1="SELECT * FROM hw5";
$result=mysqli_query($conn,$sql1);

$aName=$_POST["name"];
$aSession=$_POST["session"];
$aGender=$_POST["gender"];
$aCollege=$_POST["college"];
$aDepartment=$_POST["department"];
$aInterest=implode(" ",$_POST["interest"]);
$aExpertise=implode(" ",$_POST["expertise"]);
$aHelpingweek=$_POST["helpingweek"];
$aPhone=$_POST["phone"];
$aMail=$_POST["mail"];
$aDate=$_POST["date"];
$aWhy=$_POST["why"];
mysqli_query($conn,"INSERT INTO hw5(Name, Session, Gender ,College ,Department ,Interest ,Expertise ,Helpingweek ,Phone ,Mail ,Date  ,Why) 
VALUE('$aName','$aSession','$aGender','$aCollege','$aDepartment','$aInterest','$aExpertise','$aHelpingweek','$aPhone','$aMail','$aDate','$aWhy')");
echo "<table border=1>";
echo "<tr>";
echo "<td>Name</td>";
echo "<td>Session</td>";
echo "<td>Gender</td>";
echo "<td>College</td>";
echo "<td>Department</td>";
echo "<td>Interest</td>";
echo "<td>Expertise</td>";
echo "<td>Helpingweek</td>";
echo "<td>Phone</td>";
echo "<td>Mail</td>";
echo "<td>Why</td>";
echo "</tr>";
while($row=mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>".$row["Name"]."</td>";
	echo "<td>".$row["Session"]."</td>";
	echo "<td>".$row["Gender"]."</td>";
	echo "<td>".$row["College"]."</td>";
	echo "<td>".$row["Department"]."</td>";
	echo "<td>".$row["Interest"]."</td>";
	echo "<td>".$row["Expertise"]."</td>";
	echo "<td>".$row["Helpingweek"]."</td>";
	echo "<td>".$row["Phone"]."</td>";
	echo "<td>".$row["Mail"]."</td>";
	echo "<td>".$row["Why"]."</td>";
	echo "<tr>";
}
mysqli_close($conn);




?>
</body>







</DOCTYPE>