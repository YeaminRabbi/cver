<?php 
	
	require 'db_config.php';

	if(isset($_POST['btn-register']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];
		$nid=$_POST['nid'];
		$phone=$_POST['phone'];
		$patient_type=$_POST['patient_type'];
		$address=$_POST['address'];
		$blood_group=$_POST['blood_group'];
		$password=$_POST['password'];
	
		$sql = "INSERT INTO users (username,email,dob,nid,phone,blood_group,address,patient_type,password) VALUES ('$name', '$email', '$dob','$nid','$phone','$blood_group','$address','$patient_type','$password')";
		$db->query($sql);

		header('Location: user_registration.php?imsg=insert');

	}




?> 