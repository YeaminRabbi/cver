<?php 
	
	require '../db_config.php';


	if(isset($_GET['approveID']))
	{

		$id = $_GET['approveID'];
		$email =$_GET['approveEMAIL'];
		$name=$_GET['approveNAME'];

		$sql = "UPDATE care_giver_users SET approve_status=1 WHERE id='$id';";
		$db->query($sql);

		

		header('Location: request_approval_caregiver.php');

	}


	if(isset($_GET['deleteID']))
	{

		$id = $_GET['deleteID'];

		$sql = "DELETE FROM care_giver_users WHERE id='$id';";
		$db->query($sql);

		header('Location: request_approval_caregiver.php');

	}

?>

