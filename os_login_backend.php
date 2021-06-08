<?php
	
	session_start();

	require 'db_config.php';

	if(isset($_POST['btn-login']))
	{

		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "select * from os_users where company_email = '$email' and password = '$password' and approve_status=1;";
		$stmt = $pdo->prepare($sql);
	    $stmt->execute(array(
	        ':company_email' => $email,
	        ':password' => $password));

	     if($stmt->rowCount()==1){
	     	
	     	  $os_user=getOS_UserData($db,$email,$password);

               //Keeping useres all data in the session
               $_SESSION['os_user']=$os_user;

			header("Location: os/index.php");


	     }
	     else{
	     	
	     	header("Location: os_login.php?msg=error");
	     }

	}


	function getOS_UserData($db,$email,$password){

       	  $sql="Select * FROM os_users where company_email = '".$email."' and password = '".$password."';";
	      $result = mysqli_query($db,$sql);

	      // Assoc array
	      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	            
	      // Free result set
	      mysqli_free_result($result);
	      mysqli_close($db);

	      return $row;
  	 }


?>