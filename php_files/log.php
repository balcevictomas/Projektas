<?php
session_start();
include 'conn.php';

$first = $_POST['user_Name'];
$second = $_POST['pass'];

$sql ="SELECT * FROM User WHERE User_Name = '$first'
AND User_password = '$second'" ;

$result = $conn -> query($sql);

if(!$row = mysqli_fetch_assoc($result))
{	
	 header("Location: ../craft.php");
}

else{$_SESSION['ID'] = $row['ID']; header("Location: ../index.php");}


?>
