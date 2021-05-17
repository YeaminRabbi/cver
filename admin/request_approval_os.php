<!DOCTYPE html>
<html>
<head>
	<title>CVER | Admin Panel</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

	<?php require 'navigation_bar.php' ?>
	<?php 

		require 'custom_function.php';

		$approve_request_os=fetch_data_approve_status_os($pdo,"os_users",0);
		$approve_request_os_approved=fetch_data_approve_status_os($pdo,"os_users",1);


	?>



	
	<div class="mt-5 ml-5 mb-5" style="width: 95%;">

		<h3 class="text-center">Approval Request for oxygen Service</h3>
		<table class="table">
		    <thead class="thead-dark">
		      <tr>
		      	<th>SL</th>
		        <th>Name</th>
		        <th>Email</th>
		        <th>Phone</th>
		        <th>Location</th>
		        <th>Licensed Date</th>
		        <th>License Paper</th>
		        <th>Action</th>
		      </tr>
		    </thead>
		    <tbody>
		      <?php 

		      	foreach ($approve_request_os as $key => $data) {
		     ?>

		     	<tr>
		     		<td><?= $key+1 ?></td>
		     		<td><?= $data['company_name'] ?></td>
		     		
		     		<td><?= $data['company_email'] ?></td>
		     		<td><?= $data['company_phone'] ?></td>
		     		<td><?= $data['company_location'] ?></td>
		     		<td><?= $data['company_license_date'] ?></td>
		     				     		
		     		<td>
		     			<a href="pdf_reading_backend.php?file=<?= $data['company_license'] ?>" class="btn btn-dark" target="_blank">View PDF</a>
		     		</td>
		     		<td>
		     			
						<a href="request_approval_os_backend.php?approveID=<?= $data['id'] ?>&approveEMAIL=<?= $data['company_email'] ?>&approveNAME=<?= $data['company_name'] ?>" class="btn btn-dark"><i class="fa fa-check" aria-hidden="true"></i></a>
		     			
		     			<a href="request_approval_os_backend.php?deleteID=<?= $data['id'] ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
		     				
		     		</td>


		     	</tr>

		     <?php
		      	}

		      ?>
		    </tbody>
		  </table>
	</div>


	<div class="mt-5 ml-5 mb-5" style="width: 95%;">

		<h3 class="text-center">Approved Care Giver(s)</h3>
		<table class="table">
		    <thead class="thead-dark">
		      <tr>
		      	<th>SL</th>
		        <th>Name</th>
		        <th>Email</th>
		        <th>Phone</th>
		        <th>Location</th>
		        <th>Licensed Date</th>
		        <th>License Paper</th>
		        <th>Action</th>
		      </tr>
		    </thead>
		    <tbody>
		      <?php 

		      	foreach ($approve_request_os_approved as $key => $data) {
		     ?>

		     	<tr>
		     		<td><?= $key+1 ?></td>
		     		<td><?= $data['company_name'] ?></td>
		     		
		     		<td><?= $data['company_email'] ?></td>
		     		<td><?= $data['company_phone'] ?></td>
		     		<td><?= $data['company_location'] ?></td>
		     		<td><?= $data['company_license_date'] ?></td>
		     				     		
		     		<td>
		     			<a href="pdf_reading_backend.php?file=<?= $data['company_license'] ?>" class="btn btn-dark" target="_blank">View PDF</a>
		     		</td>
		     		<td>
		     			
					
		     			
		     			<a href="request_approval_os_backend.php?deleteID=<?= $data['id'] ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
		     				
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

