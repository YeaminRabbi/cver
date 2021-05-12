<?php
	
	require '../db_config.php';
	require 'data_collection.php';

	if(isset($_POST['btn-hiring']))
	{
		$user_id=$_POST['user_id'];
		$cg_id=$_POST['cg_id'];
		$start_date=$_POST['start_date'];
		$end_date=$_POST['end_date'];



		$hiring_value=fetch_all_data_usingDB($db,"SELECT COUNT(*),end_date FROM `cg_hiring` where (('$start_date' between start_date and end_date) or ('$end_date' between start_date and end_date) ) and (cg_id='$cg_id')");



		$conflict=$hiring_value['COUNT(*)'];
		$available_date=$hiring_value['end_date'];
		
		if($conflict >=1)
		{

			header("Location: cg_hiring.php?id=$cg_id&freedate=$available_date");
			die();
		}
		elseif($conflict==0)
		{
			$sql = "INSERT INTO cg_hiring (user_id,cg_id,start_date,end_date) VALUES ('$user_id', '$cg_id', '$start_date','$end_date')";
			$db->query($sql);

			header("Location: cg_hiring.php?id=$cg_id&msg=insert");
		}

		

		

	}





?>