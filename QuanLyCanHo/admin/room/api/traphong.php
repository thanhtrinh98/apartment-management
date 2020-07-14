<?php 
	if(isset($_POST['sophong'])){
		$sophong = $_POST['sophong'];
		include('../../includes/database.php');
		include('../../includes/class/person.php');
		include('../../includes/class/phong.php');
		$per1 = new person();
		$room1 = new phong();
		$per1->deleteRowbySophong($con,$sophong);
		$room1->updateStatusRoom($con,0,$sophong);
	}



 ?>