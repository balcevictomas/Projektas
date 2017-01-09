<?php
session_start();
include 'conn.php';

$first = $_GET['ID'];


$sql ="SELECT Likes FROM Bars WHERE ID = '$first';";
$result = $conn -> query($sql);
$row = mysqli_fetch_assoc($result);
$temp = $row['Likes'] + 1;

$sql ="UPDATE  `sql7151951`.`Bars` SET  `Likes` =  '$temp' WHERE  `Bars`.`ID` =$first;";
$result = $conn -> query($sql);
 header("Location: ../bars.php");

 ?>
