<?php
	
	require '../db_config.php';


	$cg_users_from_Database=fetch_data_pdo_from_table($pdo,'care_giver_users',1);



	 function fetch_data_pdo_from_table($pdo,$table_name,$approve_status)
	  {

	    $sql="Select * FROM ".$table_name." where approve_status=".$approve_status.";";
	    $statement = $pdo->prepare($sql);
	    $statement->execute();
	    $row = $statement->fetchAll();
	  
	    return $row;
	    
	  }


	  function fetch_data_approve_status_caregiver($pdo,$table_name,$approve_status)
	  {

	    $sql="Select * FROM ".$table_name." where approve_status = ".$approve_status.";";
	    $statement = $pdo->prepare($sql);
	    $statement->execute();
	    $row = $statement->fetchAll();
	  
	    return $row;
	    
	  }

?>