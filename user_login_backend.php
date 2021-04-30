<?php
	
	require 'db_config.php';

	if(isset($_POST['btn-login']))
	{

		$email = $_POST['email'];
		$nid = $_POST['nid'];

		$sql = "select * from users where email = '$email' and nid = '$nid';";
		$stmt = $pdo->prepare($sql);
	    $stmt->execute(array(
	        ':email' => $email,
	        ':nid' => $nid));

	     if($stmt->rowCount()==1){
	     	
			header("Location: user/index.php");

	     }
	     else{
	     	
	     	header("Location: user_login.php?msg=error");
	     }

	}



?>