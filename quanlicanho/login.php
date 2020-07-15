<?php 
	if(isset($_POST['username']) && isset($_POST['password'])){
		require('./lib/database.php');
		// get username,password 
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		//check
		$query = "Select username,password From `user` Where username=? and password=?";
		$stmt = $con->prepare($query);
		$stmt->bind_param("ss",$username,$password);
		$stmt->execute();
		$result = $stmt->get_result();
		$countRow = mysqli_num_rows($result);
		if($countRow > 0){
			session_start();
			$_SESSION['username'] = "admin";
			echo 1 ;
		}else{
			echo 0;
		}


	}
 ?>