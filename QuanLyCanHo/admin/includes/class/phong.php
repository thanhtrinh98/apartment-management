<?php 
/**
* class phong
*/
class phong 
{
	// cac thuoc tinh cua class phong
	private $sophong;
	private $giaphong;
	private $trangthai;
	private $mota;

	// ham khoi tao doi tuong phong
	function khoitao($giaphong,$trangthai,$mota)
	{
		$this->giaphong = $giaphong;
		$this->trangthai = $trangthai;
		$this->mota = $mota;
	}
	function setSophong($sophong){
		$this->sophong = $sophong;
	}

	// insert doi tuong vao DB
	function insertPhongtoDataBase($con){
		$query = "INSERT INTO `phong`(`giaphong`, `trangthai`, `mota`) VALUES (?,?,?)";
		$stmt = mysqli_prepare($con,$query);
		mysqli_stmt_bind_param($stmt,"iis",$this->giaphong,$this->trangthai,$this->mota);
		mysqli_stmt_execute($stmt);
	}

	// query trang thai
	function getTrangthaibySophong($con,$sophong){
		$query = "Select trangthai From phong Where sophong = ?";
		$stmt = mysqli_prepare($con,$query);
		mysqli_stmt_bind_param($stmt,"i",$sophong);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		$data = $result->fetch_assoc();
		return $data['trangthai'];
	}

	// query gia phong
	function getGiaphongbySophong($con,$sophong){
		$query = "Select giaphong From phong Where sophong = ?";
		$stmt = mysqli_prepare($con,$query);
		mysqli_stmt_bind_param($stmt,"i",$sophong);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		$data = $result->fetch_assoc();
		return $data['giaphong'];
	}

	// query mota
	function getMotabySophong($con,$sophong){
		$query = "Select mota From phong Where sophong = ?";
		$stmt = mysqli_prepare($con,$query);
		mysqli_stmt_bind_param($stmt,"i",$sophong);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		$data = $result->fetch_assoc();
		return $data['mota'];
	}

	//Update Trang Thai 
	function setTrangthaiBySophong($con,$data,$sophong){
		$query = "UPDATE `phong` SET `trangthai`= ? WHERE sophong = ?";
		$stmt = mysqli_prepare($con,$query);
		$stmt->bind_param("ii",$data,$sophong);
		$stmt->execute();
	}

	//Update Gia Phong 
	function setGiaphongBySophong($con,$data,$sophong){
		$query = "UPDATE `phong` SET `giaphong`= ? WHERE sophong = ?";
		$stmt = mysqli_prepare($con,$query);
		$stmt->bind_param("ii",$data,$sophong);
		$stmt->execute();
	}
	//Update Mo Ta 
	function setMotaBySophong($con,$data,$sophong){
		$query = "UPDATE `phong` SET `Mota`= ? WHERE sophong = ?";
		$stmt = mysqli_prepare($con,$query);
		$stmt->bind_param("si",$data,$sophong);
		$stmt->execute();
	}

	//DETELETE PHONG
	function deletePhongbySoPhong($con,$sophong){
		$query = "DELETE FROM `phong` WHERE sophong = ?";
		$stmt = mysqli_prepare($con,$query);
		$stmt->bind_param("i",$sophong);
		$stmt->execute();
	}

	//getAllRow
	function getAllRows($con){
		$arrData = array();
		$query = "Select * From `phong`";
		$result = mysqli_query($con,$query);
		while($row=mysqli_fetch_assoc($result)){
			$sophong = $row['sophong'];
			$giaphong = $row['giaphong'];
			$trangthai = $row['trangthai'];
			$mota = $row['mota'];
			$arrTmp = array("sophong"=>$sophong,"giaphong"=>$giaphong,"trangthai"=>$trangthai,"mota"=>$mota);
			array_push($arrData,$arrTmp);
		}
		return $arrData;
	}

	//getActive
	function getActiveRom($con){
		$arrData = array();
		$query = "Select * From `phong` where trangthai=1";
		$result = mysqli_query($con,$query);
		while($row=mysqli_fetch_assoc($result)){
			$sophong = $row['sophong'];
			$giaphong = $row['giaphong'];
			$trangthai = $row['trangthai'];
			$mota = $row['mota'];
			$arrTmp = array("sophong"=>$sophong,"giaphong"=>$giaphong,"trangthai"=>$trangthai,"mota"=>$mota);
			array_push($arrData,$arrTmp);
		}
		return $arrData;
	}

	//getDisableRom
	function getDisableRom($con){
		$arrData = array();
		$query = "Select * From `phong` where trangthai=0";
		$result = mysqli_query($con,$query);
		while($row=mysqli_fetch_assoc($result)){
			$sophong = $row['sophong'];
			$giaphong = $row['giaphong'];
			$trangthai = $row['trangthai'];
			$mota = $row['mota'];
			$arrTmp = array("sophong"=>$sophong,"giaphong"=>$giaphong,"trangthai"=>$trangthai,"mota"=>$mota);
			array_push($arrData,$arrTmp);
		}
		return $arrData;
	}

	//update Status Rooom 
	function updateStatusRoom($con,$status,$id){
		$query="UPDATE `phong` SET `trangthai`= ? WHERE sophong = ?";
		$stmt = mysqli_prepare($con,$query);
		$stmt->bind_param("ss",$status,$id);
		$stmt->execute();
	}

	// UPDATE ROOM
	function updateRoom($con,$sophong){
		$query = "UPDATE `phong` SET `sophong`=?,`giaphong`=?,`trangthai`=?,`mota`=? WHERE sophong=?";
		$stmt = $con->prepare($query);
		$stmt->bind_param("iiisi",$this->sophong,$this->giaphong,$this->trangthai,$this->mota,$sophong);
		$stmt->execute();
	}

	//DELETE ROOOM
	function deleteRoom($con,$sophong){
		$query ="DELETE FROM `phong` WHERE sophong = ?";
		$stmt = $con->prepare($query);
		$stmt->bind_param("i",$sophong);
		$stmt->execute();
	}

	// COUNT
	//count tong so phong
	function countRoom($con){
		$query = "Select count(sophong) As count FROM phong";
		$res = $con->query($query);
		$row = $res->fetch_assoc();
		return $row['count'];
	}
	function countRoomActive($con){
		$query = "Select count(sophong) As count FROM phong Where trangthai=1";
		$res = $con->query($query);
		$row = $res->fetch_assoc();
		return $row['count'];
	}
	function countRoomDisable($con){
		$query = "Select count(sophong) As count FROM phong Where trangthai=0";
		$res = $con->query($query);
		$row = $res->fetch_assoc();
		return $row['count'];
	}




}


 ?>