<?php
	
	require '../db_config.php';

	if(isset($_POST['btn-cylinder']))
	{

		$os_id=$_POST['os_id'];
		$cylinder_name=$_POST['cylinder_name'];
		$type=$_POST['type'];
		$quantity=$_POST['quantity'];
		$price=$_POST['price'];
		
		$sql = "INSERT INTO cylinder (os_id,cylinder_name,type,quantity,price) VALUES ('$os_id', '$cylinder_name', '$type','$quantity','$price')";
		$db->query($sql);



		
		header('Location: cylinder.php');

		
	}



	if(isset($_GET['id']))
	{

		$id = $_GET['id'];

		$sql = "DELETE FROM cylinder WHERE id='$id';";
		$db->query($sql);

		header('Location: index.php');

	}

	if(isset($_POST['btn-cylinder_update']))
	{
		$id=$_POST['id'];
		$cylinder_name=$_POST['cylinder_name'];
		$type=$_POST['type'];
		$quantity=$_POST['quantity'];
		$price=$_POST['price'];
		
		$sql = "UPDATE `cylinder` SET cylinder_name = '$cylinder_name' , type = '$type' , quantity = '$quantity' , price = '$price' WHERE id='$id'";

		$db->query($sql);



		
		header('Location: index.php');
	}


?>