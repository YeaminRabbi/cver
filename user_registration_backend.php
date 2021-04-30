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
	
		$sql = "INSERT INTO users (username,email,dob,nid,phone,blood_group,address,patient_type) VALUES ('$name', '$email', '$dob','$nid','$phone','$blood_group','$address','$patient_type')";
		$db->query($sql);



		//Sending mail after USER Registration
		$msg = "Hello! ".$name.", your account has been created.\nWelcome to CVER.";
		mail($email,"CVER Notification",$msg);

		header('Location: user_registration.php?imsg=insert');

	}




?> 