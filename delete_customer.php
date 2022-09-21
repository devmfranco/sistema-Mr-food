<?php
	include 'config.php';
	$id = $_GET['id'];
	$sql = "Delete from customers where md5(id) = '$id'";
	if($db_link->query($sql) === true){
		echo "Se han eliminado los datos";
		header('location:customers.php');
	}else{
		echo "Ha ocurrido un error";
	}
	$db_link->close();
?>