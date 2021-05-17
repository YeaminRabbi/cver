<!DOCTYPE html>
<html>
<head>
	<title>CVER | Homepage</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>

	<?php require 'navigation_bar.php' ?>

	<div class="container">
	
		<h3 class="text-center mt-5">Applying in Oxygen Service</h3>
		<div class="registration_form mt-5">
			
			<form action="os_application_backend.php" method="POST" enctype="multipart/form-data">
				
			  <div class="row">
			    <div class="col">
			      <label>Company Name:</label>
			      <input type="text" class="form-control" placeholder="Enter name" name="company_name">
			    </div>

			    <div class="col">
			      <label>Company Email:</label>
			      <input type="email" class="form-control" placeholder="Enter email" name="company_email">
			    </div>

			    <div class="col">
			      <label>License Date:</label>
			      <input type="date" class="form-control" placeholder="Enter Birth date" name="company_license_date">
			    </div>
			  </div>

			  <div class="row mt-4">
			    <div class="col">
			      <label>Company Phone Number:</label>
			      <input type="text" class="form-control" placeholder="Enter phone number" name="company_phone">
			    </div>

			    

			    <div class="col">
			      <label>Company Location:</label>
			      <input type="text" class="form-control" placeholder="Enter Address" name="company_location">
			    </div>
			  </div>

			 

			  <div class="row mt-4">

			  	<div class="col">
			      <label>License PDF:</label>
			      <input type="file" class="form-control" name="fileToUpload">

			      <?php 

			      	if(isset($_GET['msg']))
			      	{
			      ?>	

			      <span style="color: red;font-weight: 700;">Please insert PDF file only</span>

			      <?php 
			      	}

			      ?>
			    </div>

			  	
			  </div>
			
			</div>



			    
			  <button class="btn btn-outline-primary mt-3" name="btn-register">Submit</button>

			  
			</form>
			<?php 

			      	if(isset($_GET['imsg']))
			      	{
			      ?>	

			      <span style="color: green;font-weight: 700;">Your informations have been submitted</span>

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

