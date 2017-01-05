<?php


	include 'header.php';

	?>
<br><br><br><br>
	<?php
	$ID = $_GET['log'];
if($ID == 1){
	if(isset($_SESSION['ID'])){session_destroy();header("Location: index.php");}
	else{include 'reg_log/LoginForm.php';}
}
if($ID == 2){
	if(isset($_SESSION['ID'])){header("Location: MyProfile.php");}
	else{include 'reg_log/RegisterForm.php';}
}
include 'footer.php';

?>
