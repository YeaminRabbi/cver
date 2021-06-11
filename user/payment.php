<?php
	
	session_start();
	$user=$_SESSION['user'];
	

	if(isset($_POST['btn-proceed_payment']))
	{

		$cylinder_table_id = $_POST['id'];
		$user_id = $user['id'];
		$os_id = $_POST['os_id'];
		$cylinder_name = $_POST['cylinder_name'];
		$type = $_POST['type'];
		$price = $_POST['price'];
		$address = $_POST['address'];
		$quantity = $_POST['quantity'];

		$total_price =(int)$quantity * (int)$price;
	}
?>



<?php 
	require '../db_config.php';

	if (isset($_GET['id'])) {

		$id = $_GET['id'];
		$sql="select * from cylinder where id = '$id'";

		$result = mysqli_query($db,$sql);
		$data = mysqli_fetch_array($result, MYSQLI_ASSOC);
		    
	}


?>
	

<!DOCTYPE html>
<html>
<head>
	<title>CVER | User</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>

	<?php require 'navigation_bar.php' ?>
	
	<div class="container">
	
		<h3 class="text-center mt-5">Payment Information</h3>

		<div class="m-3">
			<p>Pay the total amount of <?= $total_price ?> to the following medias:</p>

			<ol>
				<li>Bkash: 017********</li>
				<li>NAGAD: 017********</li>
				<li>ROCKET: 017********</li>

			</ol>

			<p>After payment put the Transaction ID below.</p>
		</div>
		<div class="registration_form mt-5">
			
			<form action="payment_backend.php" method="POST">
				<input type="hidden" name="user_id" value="<?= $user_id ?>">
				<input type="hidden" name="os_id" value="<?= $os_id ?>">
				<input type="hidden" name="cylinder_name" value="<?= $cylinder_name ?>">
				<input type="hidden" name="type" value="<?= $type ?>">
				<input type="hidden" name="price" value="<?= $price ?>">
				<input type="hidden" name="cylinder_table_id" value="<?= $cylinder_table_id ?>">

			  <div class="row">

			  	<div class="col">
			      <label>Cylinder name:</label>
			      <input type="text" class="form-control"  value="<?= $cylinder_name ?>" disabled>
			    </div>

			    <div class="col">
			      <label>Cylinder Type:(litre)</label>
			   
			      	  <input type="text" class="form-control"  value="<?= $type ?>" disabled>
			    </div>

			   

			    <div class="col">
			      <label>Price:</label>
			      <input type="number" class="form-control"  value="<?= $price ?>" disabled>
			    </div>

			    
			  	
			  </div>
			
				<div class="row mt-2">
					

				    <div class="col">
				      <label>Address:</label>
				      <input type="text" class="form-control" name="address" value="<?= $address ?>" required >
				    </div>

				    <div class="col">
				      <label>Quantity:</label>
				      <input type="number" class="form-control" value="<?= $quantity ?>" disabled >

				      <input type="hidden" class="form-control" name="quantity" value="<?= $quantity ?>" required >

				    </div>

				     <div class="col">
				      <label>Total Amount:</label>
				      <input type="number" class="form-control" value="<?= $total_price ?>" disabled >
				    </div>
				      <input type="hidden" class="form-control" name="total_price" value="<?= $total_price ?>" >

				    <div class="col">
				      <label>Transaction ID:</label>
				      <input type="text" class="form-control" name="transaction_id" required >
				    </div>

				    <div class="col">
				      <label>Media:</label>
				      <select class="form-control" name="transaction_media">
				      	  <option >--Select Group--</option>
				      	  <option value="Bkash">Bkash</option>
						  <option value="Rocket">Rocket</option>
						  <option value="Nagad">Nagad</option>

						</select>
				    </div>	


				</div>



			    
			  <button class="btn btn-outline-success mt-3" type="submit" name="btn-place_order">Confirm Order</button>
			  <a href="order_cylinder.php" class="btn btn-outline-dark mt-3">Main Menu</a>


			</form>
			
		</div>
	</div>


	
	<?php require 'footer.php' ?>
	


	

	

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

