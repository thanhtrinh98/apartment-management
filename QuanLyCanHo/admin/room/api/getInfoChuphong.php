<?php 
if(isset($_POST['sophong'])){
	include('../../includes/database.php');
	$sophong = $_POST['sophong'];
	$query = "Select tennguoithue,cmnd,dob,quequan,sodienthoai,sex From nguoithue Where sophong=?";
	$stmt = $con->prepare($query);
	$stmt->bind_param("i",$sophong);
	$stmt->execute();
	$result = $stmt->get_result();
	if(mysqli_num_rows($result)>0){
		$row = $result->fetch_assoc();
		$row['dob'] = date("d/m/Y", strtotime($row['dob']));
		$row['sex'] = ($row['sex']==1)?"Nam":"Nữ";
		$row['sodienthoai'] ="0".$row['sodienthoai'];
		echo json_encode($row,JSON_UNESCAPED_UNICODE);	
	}

}
 ?>