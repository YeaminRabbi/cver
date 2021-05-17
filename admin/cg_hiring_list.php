<!DOCTYPE html>
<html>
<head>
	<title>CVER | Admin Panel</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>

	<?php require 'navigation_bar.php' ?>


	<?php

		require '../db_config.php';

		$sql="select * from cg_hiring join users on users.id=cg_hiring.user_id join care_giver_users on cg_hiring.cg_id=care_giver_users.id";
		$statement = $pdo->prepare($sql);
	    $statement->execute();
	    $all_data = $statement->fetchAll();
	  

	?>
	<div style="width: 90%;margin-left: 5%;">
		<h3 class="mt-5 mb-5 text-center">Care Giver Hiring History</h3>

		<table class="table table-bordered">
		  <thead class="bg-dark">
		    <tr style="color: white;">
		      <th>SL</th>
		      <th>User Name</th>
		      <th>Address</th>
		      <th>Phone</th>
		      <th>Email</th>
		      <th>Patient Type</th>
		      <th>CG Name</th>
		      <th>CG Phone</th>

		      <th>Start Date</th>
		      <th>End Date</th>
		      <th>Hired Time</th>
		    </tr>
		  </thead>
		  <tbody>
		     <?php

		     	foreach ($all_data as $key => $data) {
		    ?>

		    <tr>
		    	<td><?= $key+1 ?></td>
		      <td><?= $data['username'] ?></td>
		      <td style="width: 150px;"><?= $data['address'] ?></td>
		      <td><?= $data['phone'] ?></td>
		      <td><?= $data['email'] ?></td>
		      <td><?= $data['patient_type'] ?></td>
		      <td><?= $data['cg_username'] ?></td>
		      <td><?= $data['cg_phone'] ?></td>

		      <td><?= $data['start_date'] ?></td>
		      <td><?= $data['end_date'] ?></td>
		      <td><?= $data['created_at'] ?></td>




		    </tr>

		    <?php 
		     	}

		     ?>
		    
		      
		  </tbody>
		</table>	
	</div>
	
	<?php require 'footer.php' ?>
	


	

	

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

