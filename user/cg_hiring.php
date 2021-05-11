<!DOCTYPE html>
<html>
<head>
	<title>CVER | User Panel</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>

	<?php require 'navigation_bar.php' ?>

	<?php require 'data_collection.php' ?>

	<?php
		session_start();

		$user=$_SESSION['user'];



		if(isset($_GET['id']))
		{
			$cg_id=$_GET['id'];


			$sql="Select * FROM care_giver_users where id = '$cg_id';";
		    $result = mysqli_query($db,$sql);
		    $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
		}

	?>



	<div class="container mt-4 mb-4">
	  <h4 class="text-center"> Hire this Care Giver</h4>

	 
	  	<div class="row" style="padding-bottom: 50px;">
	  		
	  		<div class="col mt-2">
	  				<div class="card" style="width:350px">
				    <img class="card-img-top mt-2" src="../<?= $data['cg_image'] ?>" alt="Card image" style="width:250px;margin-left: 13%;height:250px;">
				    <div class="card-body text-center">
				      <h4 class="card-title"><?= $data['cg_username'] ?></h4>
				      <p class="card-text">Experience: <?= $data['cg_experience'] ?></p>
				      <p class="card-text">DOB: <?= $data['cg_dob'] ?></p>
				      <p class="card-text">Phone no: <?= $data['cg_phone'] ?></p>

				      
				      <a href="cg_list.php" class="btn btn-dark">Back</a>

				    </div>
				 </div>
	  		</div>


	  		<div class="col mt-2">
	  			<form action="cg_hiring_backend.php" method="POST">
					<input type="hidden" name="cg_id" value="<?= $cg_id ?>">
					<input type="hidden" name="user_id" value="<?= $user['id'] ?>">

				 	<div>
				      <label>Start Date:</label>
				      <input type="date" class="form-control" placeholder="Enter Birth date" name="start_date" required>
				    </div>

				    <div>
				      <label>End Date:</label>
				      <input type="date" class="form-control" placeholder="Enter Birth date" name="end_date" required>
				    </div>
				
				   	<?php

				   			if(isset($_GET['msg']))
				   			{
				   	?>
				   		<p style="color: green;font-weight: 700;">Hire Successfully</p>
				   	<?php 
				   			}
				   			if(isset($_GET['freedate']))
				   			{
				   	?>
				   			<p style="color: red;font-weight: 700;">This care giver is booked upto <?= $_GET['freedate'] ?></p>

				   	<?php 
				   			}

				   	?>
				  <button class="btn btn-outline-primary mt-3" name="btn-hiring">Submit</button>

				  
				</form>	
	  		</div>

	  	</div>
		  
	
	 
	  
	  
	</div>

	
	<?php require 'footer.php' ?>
	


	

	

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

