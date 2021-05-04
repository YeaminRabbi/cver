<!DOCTYPE html>
<html>
<head>
	<title>CVER | User Panel</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>

	<?php require 'navigation_bar.php' ?>

	<?php require 'data_collection.php' ?>





	<div class="container mt-4 mb-4">
	  <h4 class="text-center"> Showing All Available Care Giver(s)</h4>

	 
	  	<div class="row" style="padding-bottom: 50px;">
	  		 <?php

			  	foreach ($cg_users_from_Database as $key => $data) {
			  ?>

	  		<div class="col mt-2">
	  			<div class="card" style="width:350px">
				    <img class="card-img-top mt-2" src="../<?= $data['cg_image'] ?>" alt="Card image" style="width:250px;margin-left: 13%;height:250px;">
				    <div class="card-body text-center">
				      <h4 class="card-title"><?= $data['cg_username'] ?></h4>
				      <p class="card-text">Experience: <?= $data['cg_experience'] ?></p>
				      <p class="card-text">DOB: <?= $data['cg_dob'] ?></p>
				      <p class="card-text">Phone no: <?= $data['cg_phone'] ?></p>

				      <a href="#" class="btn btn-primary">Hire Me</a>
				    </div>
				 </div>
	  		</div>

	  		  <?php 
				  	}


				  ?>
	  	</div>
		  
	
	 
	  
	  
	</div>

	
	<?php require 'footer.php' ?>
	


	

	

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

