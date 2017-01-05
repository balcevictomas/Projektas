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
	echo '<script language="javascript">';
	echo 'alert("Sorry your pass or login is incorect you will be redirected to the main in 3 seconds")';
	echo '</script>';
	sleep(3);
	for ($i=1; $i < 3; $i++) { 
		
	echo '<script language="javascript">';
	echo 'alert("'.$i.'")';
	echo '</script>';
	sleep(1);
		
	}
	 header("Location: ../index.php");
}

else{$_SESSION['ID'] = $row['ID']; header("Location: ../index.php");}

	
?>
