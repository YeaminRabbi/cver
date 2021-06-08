<!DOCTYPE html>
<html>
<head>
	<title>CVER | OS Panel</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>

	<?php require 'navigation_bar.php' ?>
	<?php 
		require '../db_config.php';

		session_start();
		$os_user= $_SESSION['os_user'];
		$os_id = $os_user['id'];

	 	$sql="Select * FROM cylinder where os_id='$os_id'";
	    $statement = $pdo->prepare($sql);
	    $statement->execute();
	    $alldata = $statement->fetchAll();

	?>
	
	<div class="mt-5 ml-5 mb-5" style="width: 95%;">

		<h3 class="text-center">Cylinder Information</h3>
		<table class="table">
		    <thead class="thead-dark">
		      <tr>
		      	<th>SL</th>
		        <th>Cylinder Name</th>
		        <th>Type</th>
		        <th>Quantity</th>
		        <th>Price</th>
		       
		        <th>Action</th>
		      </tr>
		    </thead>
		    <tbody>
		      <?php 

		      	foreach ($alldata as $key => $data) {
		     ?>

		     	<tr>
		     		<td><?= $key+1 ?></td>
		     		<td><?= $data['cylinder_name'] ?></td>
		     		
		     		<td><?= $data['type'] ?></td>
		     		<td><?= $data['quantity'] ?></td>
		     		<td><?= $data['price'] ?></td>
		     		
		     		<td>
		     			
		     			<a href="cylinder_edit.php?id=<?= $data['id'] ?>" class="btn btn-primary">Edit</a>
		     			
						<a href="cylinder_backend.php?id=<?= $data['id'] ?>" class="btn btn-danger">Delete</a>



		     			
		     		</td>


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

