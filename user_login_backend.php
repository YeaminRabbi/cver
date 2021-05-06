<?php
	
	session_start();

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
	     	
	     	  $user=getUserData($db,$email,$password);
               //Keeping useres all data in the session
               $_SESSION['user']=$user;

			header("Location: user/index.php");


	     }
	     else{
	     	
	     	header("Location: user_login.php?msg=error");
	     }

	}


	  function getUserData($db,$email,$password){

       	  $sql="Select * FROM users where email = '".$email."' and password = '".$password."';";
	      $result = mysqli_query($db,$sql);

	      // Assoc array
	      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	            
	      // Free result set
	      mysqli_free_result($result);
	      mysqli_close($db);

	      return $row;
  	 }


?>