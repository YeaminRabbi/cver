<?php 
	
	require '../db_config.php';

	if(isset($_POST['btn-place_order']))
	{
		$user_id=$_POST['user_id'];
		$os_id=$_POST['os_id'];
		$cylinder_name=$_POST['cylinder_name'];
		$type=$_POST['type'];
		$unit_price=$_POST['price'];
		$address=$_POST['address'];
		$quantity=$_POST['quantity'];
		$total_price=$_POST['total_price'];
		$transaction_id=$_POST['transaction_id'];
		$transaction_media=$_POST['transaction_media'];
		

		$sql = "INSERT INTO `orders` (`user_id`, `os_id`, `type`, `cylinder_name`, `quantity`, `unit_price`, `total_price`, `address`, `transaction_id`, `transaction_media`) VALUES ('$user_id', '$os_id', '$type', '$cylinder_name', '$quantity', '$unit_price', '$total_price', '$address', '$transaction_id', '$transaction_media')";

		$db->query($sql);




		$cylinder_table_id=$_POST['cylinder_table_id'];

		$sql2="Select * from cylinder where id='$cylinder_table_id'";
		$result = mysqli_query($db,$sql2);
		$data = mysqli_fetch_array($result, MYSQLI_ASSOC);


		$existing_quantity = (int)$data['quantity'];
		$updated_quantity = (int)$existing_quantity - (int)$quantity;


		$update_sql = "UPDATE `cylinder` SET quantity = '$updated_quantity' WHERE id='$cylinder_table_id'";

		$db->query($update_sql);
		
		header('Location: order_cylinder.php?order=success');

	}

	function fetch_all_data_usingDB($db,$sql){
			
			$result = mysqli_query($db,$sql);
		    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		    mysqli_free_result($result);
		    return $row;
	}


?> 