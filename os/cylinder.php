<?php 

	session_start();
	$os_user= $_SESSION['os_user'];
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>CVER | OS Panel</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>

	<?php require 'navigation_bar.php' ?>

	<div class="container">
	
		<h3 class="text-center mt-5">Cylinder Information Input</h3>
		<div class="registration_form mt-5">
			
			<form action="cylinder_backend.php" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="os_id" value="<?= $os_user['id'] ?>">
			  <div class="row">

			  	<div class="col">
			      <label>Cylinder name:</label>
			      <input type="text" class="form-control" name="cylinder_name" required>
			    </div>

			    <div class="col">
			      <label>Cylinder Type:(litre)</label>
			     
			      <select class="form-control" name="type" required>
			      	  <option >--Select--</option>
			      	  <option value="1500">1500</option>
			      	  <option value="1700">1700</option>
			      	  <option value="2400">2400</option>
					</select>
			    </div>

			    <div class="col">
			      <label>Quantity:</label>
			      <input type="number" class="form-control" name="quantity" required>
			    </div>

			    <div class="col">
			      <label>Price:</label>
			      <input type="number" class="form-control" name="price" required>
			    </div>

			    
			  	
			  </div>
			
			


			    
			  <button class="btn btn-outline-primary mt-3" name="btn-cylinder">Submit</button>

			  
			</form>
			
		</div>
	</div>


	
	
	<?php require 'footer.php' ?>
	


	

	

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

