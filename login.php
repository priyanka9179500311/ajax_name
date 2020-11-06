<?php
	//1.DB connection open
	$con = mysqli_connect('localhost','root','','ajax_name') or die (mysqli_error($con));
	
	if($_GET['action'] == 'fullname'){
		//always filter incoming data
		$fname = filter_var($_GET['fname'], FILTER_SANITIZE_STRING);
		
		//2. Build the query
		$sql = "INSERT INTO users_tbl(fname) VALUES ('$fname')";
		
		//3. Execute the query
		$result = mysqli_query($con,$sql);
		$data = [
			'status' =>200,
			'msg' =>'user registered successfully'
		];
		echo json_encode($data);
	}
	
	//5.DB connection close
	mysqli_close($con);
?>