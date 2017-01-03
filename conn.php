<?php 

$conn = mysqli_connect("sql7.freemysqlhosting.net", "sql7151951", "BywmHlSxyP", "sql7151951"  ) ;

if(!$conn){
	die("connection failed: ".mysqli_connct_error());
	echo "error";
}

?>