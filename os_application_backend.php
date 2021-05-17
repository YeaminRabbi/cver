<?php 
	
	require 'db_config.php';

	if(isset($_POST['btn-register']))
	{
		$company_name=$_POST['company_name'];
		$company_email=$_POST['company_email'];
		$company_license_date=$_POST['company_license_date'];
		$company_phone=$_POST['company_phone'];
		$company_location=$_POST['company_location'];
		
		
			$target_dir = "os_license/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			if(!empty($_FILES["fileToUpload"]["tmp_name"]))
			{
				// Allow certain file formats
				if($imageFileType != "pdf") {
				  
				  $uploadOk = 0;
				}

				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				  
				  header('Location: os_application.php?msg=error');
				  die();

				// if everything is ok, try to upload file
				} else {
				  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
				  } else {
				    echo "Sorry, there was an error uploading your file.";
				  }
				}
			}
			

		$sql = "INSERT INTO os_users (company_name,company_email,company_license_date,company_phone,company_location,company_license) VALUES ('$company_name', '$company_email', '$company_license_date','$company_phone','$company_location','$target_file')";
		$db->query($sql);

		header('Location: os_application.php?imsg=insert');

	}

?> 