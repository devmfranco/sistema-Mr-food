<?php
	include 'config.php';
	$id = $_GET['id'];
	$sql = "Delete from products where md5(id) = '$id'";
	if($db_link->query($sql) === true){
		echo "Se ha eliminado el producto";
		header('location:products.php');
	}else{
		echo "Oppps something error ";
	}
	$db_link->close();
?>