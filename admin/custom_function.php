<?php 
	
	require '../db_config.php';

	  function fetch_data_pdo_from_table($pdo,$table_name)
	  {

	    $sql="Select * FROM ".$table_name.";";
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

	  function fetch_data_approve_status_os($pdo,$table_name,$approve_status)
	  {

	    $sql="Select * FROM ".$table_name." where approve_status = ".$approve_status.";";
	    $statement = $pdo->prepare($sql);
	    $statement->execute();
	    $row = $statement->fetchAll();
	  
	    return $row;
	    
	  }

?>