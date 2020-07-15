<?php 
	// funcion ket noi DB va tra ve array Nguoi thue cung` phong
	function getNguoithuecung($sophong){
		include('../../includes/database.php');
		$query = "Select nguoithuecung From nguoithue Where sophong =?";
		$stmt = $con->prepare($query);
		$stmt->bind_param("i",$sophong);
		$stmt->execute();
		$result = $stmt->get_result();
		if(mysqli_num_rows($result)>0){
			$row = $result->fetch_assoc();
			$nguoithuecung = json_decode($row['nguoithuecung']);
			return $nguoithuecung;
		}
		return array();
	}

	// xu li viec tra ve ban cung phong
	if(isset($_POST['sophong']) && !isset($_POST['nguoithue'])){
		$sophong = $_POST['sophong'];
		$nguoithuecung=getNguoithuecung($sophong);
		if(count($nguoithuecung)>0){
			$i = 0 ;
			$xhtml="";
			foreach ($nguoithuecung as $key ) {
				$key->dob = date("d/m/Y",strtotime($key->dob));
				$key->sex = (($key->sex)==1)?"Nam":"Nữ";
				$xhtml.= "<tr>";
				$xhtml.= "<td>".$key->name."</td>";
				$xhtml.= "<td>".$key->cmnd."</td>";
				$xhtml.= "<td>".$key->dob."</td>";
				$xhtml.= "<td>".$key->quequan."</td>";
				$xhtml.= "<td>".$key->sodienthoai."</td>";
				$xhtml.= "<td>".$key->sex."</td>";
				// $xhtml.= "<td><input type=\"hidden\" id=\"keyNguoithue".$i."value=\"".$i."></td>";
				$xhtml.='<td>
					<form action="#" method="POST">
						<input type="hidden" value="'.$i.'" name="id">
						<input type="submit" class="btn btn-danger" value="Xoá" name="btnXoaPerson" onclick="return confirm(\'Bạn chắc chắn là xoá chưa ?\')">
					</form>
				</td>';
				$xhtml.= "<tr>";
				$i++;
			}
			echo $xhtml;
		}
	}

	if(isset($_POST['nguoithue'])&&isset($_POST['sophong'])){
		$arrAdd = $_POST['nguoithue'];
		$sophong = $_POST['sophong'];
		$nguoithuecung = getNguoithuecung($sophong);
		array_push($nguoithuecung,$arrAdd);
		$nguoithuecung = json_encode($nguoithuecung,JSON_UNESCAPED_UNICODE);
		$query = "UPDATE `nguoithue` SET`nguoithuecung`=? WHERE sophong =?";
		include('../../includes/database.php');
		$stmt = $con->prepare($query);
		$stmt->bind_param("si",$nguoithuecung,$sophong);
		$stmt->execute();
		echo "Thêm Thành Công !";
	}

?>

