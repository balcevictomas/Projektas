<?php
session_start();
include 'conn.php';

$name = $_POST['user_Name'];
$pass = $_POST['pass'];
$img = $_POST['url'];
$email = $_POST['Email'];
if(isset($_POST['sex'])){$sex = $_POST['sex'];}
else{$sex = 0;}
$BD = $_POST['BD'];




 $sql ="INSERT INTO User(User_name, User_password,User_picture,User_BD,User_sex,User_Email) VALUES ('$name','$pass','$img','$BD','$sex','$email')";
 $result = $conn -> query($sql);
 header("Location: ../index.php")
?>
