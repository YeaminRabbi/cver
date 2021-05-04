<?php
	
	require 'db_config.php';

	if(isset($_POST['btn-login']))
	{

		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "select * from users where email = '$email' and password = '$password';";
		$stmt = $pdo->prepare($sql);
	    $stmt->execute(array(
	        ':email' => $email,
	        ':password' => $password));

	     if($stmt->rowCount()==1){
	     	
			header("Location: user/index.php");

	     }
	     else{
	     	
	     	header("Location: user_login.php?msg=error");
	     }

	}



?>