<?php 

include 'conn.php';

$first = $_POST['user_Name'];
$second = $_POST['pass'];

$sql ="INSERT INTO User(User_name, User_password) VALUES ('$first','$second')";
$result = $conn -> query($sql);
header("Location: bars.php")
?>