<?php 
if(isset($_POST['sophong'])){
	include('../../includes/database.php');
	$sophong = $_POST['sophong'];
	$query = "Select mathue,phong.sophong,trangthai,ngaythue,dichvu,giaphong,debt From nguoithue,phong Where phong.sophong=? and nguoithue.sophong=phong.sophong";
	$stmt = $con->prepare($query);
	$stmt->bind_param("i",$sophong);
	$stmt->execute();
	$result = $stmt->get_result();
	if(mysqli_num_rows($result)>=0){
		$row = $result->fetch_assoc();
		$row['trangthai']=($row['trangthai']==1) ? "Active":"Trống";
		echo json_encode($row,JSON_UNESCAPED_UNICODE);
	}

}

 ?>