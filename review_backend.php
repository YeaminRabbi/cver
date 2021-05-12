<?php
	
	
	require 'db_config.php';


	if(isset($_POST['btn-reviewsubmission']))
	{
		$review_email=$_POST['review_email'];
		$review_phone=$_POST['review_phone'];
		$review_servicename=$_POST['review_servicename'];
		$review_rating=$_POST['review_rating'];
		$feedback=$_POST['feedback'];


		$sql = "INSERT INTO review (email,phone,service_name,rating,feedback) VALUES ('$review_email', '$review_phone', '$review_servicename','$review_rating','$feedback')";
		$db->query($sql);

		header('Location: index.php?msg=success&id=#REVIEW');






	}

?>