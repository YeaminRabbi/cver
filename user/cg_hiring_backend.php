<?php
	
	require '../db_config.php';

	if(isset($_POST['btn-hiring']))
	{
		$user_id=$_POST['user_id'];
		$cg_id=$_POST['cg_id'];
		$start_date=$_POST['start_date'];
		$end_date=$_POST['end_date'];

		$sql = "INSERT INTO cg_hiring (user_id,cg_id,start_date,end_date) VALUES ('$user_id', '$cg_id', '$start_date','$end_date')";
		$db->query($sql);

		header("Location: cg_hiring.php?id=$cg_id&msg=insert");

	}


?>