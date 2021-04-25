<?php 
	
	require 'db_config.php';

	if(isset($_POST['btn-register']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];
		$nid=$_POST['nid'];
		$experience=$_POST['experience'];
		$phone=$_POST['phone'];
		$blood_group=$_POST['blood_group'];
		$address=$_POST['address'];


		$target_dir = "cg_resume/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


		// Allow certain file formats
		if($imageFileType != "pdf") {
		  
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  
		  header('Location: index.php?msg=error');
		  die();

		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
		  } else {
		    echo "Sorry, there was an error uploading your file.";
		  }
		}


		$sql = "INSERT INTO care_giver_users (cg_username,cg_email,cg_dob,cg_nid,cg_experience,cg_phone,cg_blood_group,cg_address,cg_resume,approve_status) VALUES ('$name', '$email', '$dob','$nid','$experience','$phone','$blood_group','$address','$target_file',0)";
		$db->query($sql);

		header('Location: index.php?imsg=insert');

	}

?> 