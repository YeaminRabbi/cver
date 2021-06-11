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

	 	$sql="Select * FROM users join orders on users.id=orders.user_id where orders.os_id='$os_id'";
	    $statement = $pdo->prepare($sql);
	    $statement->execute();
	    $alldata = $statement->fetchAll();

	?>
	
	<div class="mt-5 ml-5 mb-5" style="width: 95%;">

		<h3 class="text-center">Order Information</h3>
		<table class="table">
		    <thead class="thead-dark">
		      <tr>
		      	<th>SL</th>
		        <th>Name</th>
		        <th>Contact</th>
		        <th>Address</th>
		        <th>Cylinder Name</th>
		        <th>Type</th>
		        <th>Quantity</th>
		        <th>Total Amount</th>
		        <th>Transaction ID</th>
		        <th>Transaction Media</th>
		        <th>Date</th>


		      </tr>
		    </thead>
		    <tbody>
		      <?php 

		      	foreach ($alldata as $key => $data) {
		     ?>

		     	<tr>
		     		<td><?= $key+1 ?></td>
		     		<td><?= $data['username'] ?></td>
		     		
		     		<td><?= $data['phone'] ?></td>
		     		<td><?= $data['address'] ?></td>
		     		<td><?= $data['cylinder_name'] ?></td>
		     		<td><?= $data['type'] ?>L</td>
		     		<td><?= $data['quantity'] ?></td>
		     		<td><?= $data['total_price'] ?></td>
		     		<td><?= $data['transaction_id'] ?></td>
		     		<td><?= $data['transaction_media'] ?></td>
		     		<td><?= $data['payment_datetime'] ?></td>



		     		


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

