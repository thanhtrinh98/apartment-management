<?php 
if(isset($_POST['jsonData']) && isset($_POST['sophong'])){
	// include thu vien - classs
	include('../../includes/database.php');
	include('../../includes/class/person.php');
	$person = new person();				// khoi tao doi tuong nguoi thue

	// nhan du lieu tu $_POST
	$arrAdd = json_decode($_POST['jsonData'],true);			
	$sophong = $_POST['sophong'];

	// get debt tu DB roi push debt moi vao
	$arrData = $person->getDebt($con,$sophong);
	array_push($arrData,$arrAdd);
	// chuyen debt moi thanh json roi update
	$debt = json_encode($arrData,JSON_UNESCAPED_UNICODE);
	$person->updateDebt($con,$debt,$sophong);
	echo $debt;
}

 ?>