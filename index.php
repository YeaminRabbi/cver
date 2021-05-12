<!DOCTYPE html>
<html>
<head>
	<title>CVER | Homepage</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    
  }
  </style>
<body>

	<?php require 'navigation_bar.php' ?>

	<div style="padding-bottom: 40px;">
		<div id="demo" class="carousel slide" data-ride="carousel" style="height: 600px;">
		  <ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		    <li data-target="#demo" data-slide-to="2"></li>
		  </ul>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="images/4.jpeg" alt="Los Angeles" width="1100" height="500">
		      <div class="carousel-caption">
		        <!-- <h3>Los Angeles</h3>
		        <p>We had such a great time in LA!</p> -->
		      </div>   
		    </div>
		    <div class="carousel-item">
		      <img src="images/5.jpeg" alt="Chicago" width="1100" height="500">
		      <div class="carousel-caption">
		        <!-- <h3>Chicago</h3>
		        <p>Thank you, Chicago!</p> -->
		      </div>   
		    </div>
		    <div class="carousel-item">
		      <img src="images/8.jpg" alt="New York" width="1100" height="500">
		      <div class="carousel-caption">
		       <!--  <h3>New York</h3>
		        <p>We love the Big Apple!</p> -->
		      </div>   
		    </div>
		    <div class="carousel-item">
		      <img src="images/o2.jpg" alt="New York" width="1100" height="500">
		      <div class="carousel-caption">
		       <!--  <h3>New York</h3>
		        <p>We love the Big Apple!</p> -->
		      </div>   
		    </div>

		     <div class="carousel-item">
		      <img src="images/o1.jpg" alt="New York" width="1100" height="500">
		      <div class="carousel-caption">
		       <!--  <h3>New York</h3>
		        <p>We love the Big Apple!</p> -->
		      </div>   

		    

		  </div>
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>
		</div>

	</div>
	



	
	
	<div class="container mt-5" >
		<h3 class="text-center">Our Services</h3>

		<div class="row mt-5">
			<div class="col-4" style="border: 5px solid black;padding: 5px;margin-left:10%;">
				<h4 class="text-center">Care Giver</h4>
				<img src="images/7.jpg" style="width: 100%;overflow: hidden;">
			</div>

			<div class="col-4" style="border: 5px solid black;padding: 5px;margin-left:10%; ">
				<h4 class="text-center">Oxygen Service</h4>
				<img src="images/o1.jpg" style="width: 100%;overflow: hidden;">
			</div>
		</div>
	</div>
	


	<div class="container mt-5" id="REVIEW">
		<h3 class="text-center">Review</h3>

		 <?php

            if(isset($_GET['msg']))
            {
          ?>

           <div class="alert alert-success alert-dismissible" style="height: 50px;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
             Review Submitted!
          </div>
          <?php 
            }
          ?>

		<form action="review_backend.php" method="POST" >
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Email address</label>
		    <input type="email" class="form-control" name="review_email" id="review_email" placeholder="Input Email Address" required>
		  </div>

		  <div class="form-group">
		    <label for="exampleFormControlInput1">Phone</label>
		    <input type="text" class="form-control" name="review_phone" id="review_phone" placeholder="Input Phone numbers" required>
		  </div>



		  <div class="form-group">
		    <label for="exampleFormControlSelect1">Choose one service</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="review_servicename" required>
		      <option disabled selected>--Select One--</option>

		      <option value="Care_Giver">Care Giver</option>
		      <option value="Oxygen_Service">Oxygen Service</option>
		      
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlSelect2">Rate our service</label>
			

		    <select class="form-control" id="exampleFormControlSelect12" name="review_rating" required>
		      <option disabled selected>--Select One--</option>

		      <option value="1">1</option>
		      <option value="2">2</option>
		      <option value="3">3</option>
		      <option value="4">4</option>
		      <option value="5">5</option>

		      
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Feedback:</label>
		    <textarea class="form-control" name="feedback" rows="3" required></textarea>
		  </div>

		  <button class="btn btn-primary" type="submit" name="btn-reviewsubmission">Submit Review</button>
		</form>
		
	</div>


	

	<footer style="margin-top: 10px;margin-bottom:-70px;left: 0;bottom: 0;width: 100%;background-color: black;color: white;text-align: center;padding-top: 20px;padding-bottom: 20px;">
		<div class="text-center" >
			<p>Copyright © 2021 CVER | Design & Developed by: <a href="https://www.facebook.com/raisul.islam.12720" target="_blank" style="color:green;font-weight: 700;">Rahat</a> & <a href="https://www.facebook.com/ishrat27.jahan" target="_blank" style="color: #7BFE07;font-weight: 700;">Israt</a></p>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

