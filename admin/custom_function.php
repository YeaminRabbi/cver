<?php 
	
	require '../db_config.php';
	// function fetch_data_from_table($db)
	//   {
	//     $sql="Select * FROM water_quality_monitoring_system ORDER BY id DESC limit 10;";
	//     $result = mysqli_query($db,$sql);

	//     // Assoc array
	//     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	        
	//     // Free result set
	//     mysqli_free_result($result);
	  
	//     return $row;
	    
	//   }


	  
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

?>