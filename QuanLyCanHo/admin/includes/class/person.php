<?php 
/**
* Class quan li nguoi thue nha 
*/
class person 
{
	public $infoPerson = array();
	public $ngaythue;
	public $sophong;
	public $nguoithuecung = array();
	public $dichvu = array();
	public $debt = array();

	// khoi tao array thong tin nguoi thue
	function creatInfoPerson($tennguoithue,$cmnd,$dob,$quequan,$dienthoai,$sex){
		$arr = array("tennguoithue"=>$tennguoithue,"cmnd"=>$cmnd,"dob"=>$dob,"quequan"=>$quequan,"dienthoai"=>$dienthoai,"sex"=>$sex);
		return $arr;
	}

	// khoi tao dich vu phong su dung
	// mac dinnh : DV 1 => internet cap quang 220000;
	// 			DV 2 => Truyen hinh cap    50000;
	// 			DV 3 => DV khac            tu dien gia;
	function dichvu($dv1,$dv2,$dv3){
		$arrData = array();
		if($dv1==1){
			$arr = array("tenDv"=>"Internet cáp quang","Price"=>"220000");
			array_push($arrData,$arr);
		}
		if($dv2==1){
			$arr = array("tenDv"=>"Truyền hình cáp","Price"=>"50000");
			array_push($arrData,$arr);
		}
		if($dv3!=""){
			$arr = array("tenDv"=>"Khác(rác,gửi xe,..)","Price"=>$dv3);
			array_push($arrData,$arr);
		}
		return $this->dichvu = $arrData;
	}

	// khoi tao danh sach nguoi thue cung 
	function nguoithuecung($arr){
		array_push($this->nguoithuecung,$arr);
		return $this->nguoithuecung;
	}

	function khoitao($infoPerson,$ngaythue,$sophong,$dichvu,$debt){
		$this->infoPerson = $infoPerson;
		$this->ngaythue = $ngaythue;
		$this->sophong = $sophong;
		$this->dichvu = $dichvu;
		$this->debt = $debt;
	}

	//Insert doi tuong vao DB
	function insertDB($con){
		// chuan bi du lieu insert
		$tennguoithue = $this->infoPerson['tennguoithue'];
		$cmnd = $this->infoPerson['cmnd'];
		$dob = $this->infoPerson['dob'];
		$quequan = $this->infoPerson['quequan'];
		$dienthoai = $this->infoPerson['dienthoai'];
		$sex = $this->infoPerson['sex'];
		$dichvu = json_encode($this->dichvu,JSON_UNESCAPED_UNICODE);
		$debt = json_encode($this->debt,JSON_UNESCAPED_UNICODE);
		$nguoithuecung = json_encode($this->nguoithuecung,JSON_UNESCAPED_UNICODE);
		// tien hanh insert
		$query = "INSERT INTO `nguoithue`(`tennguoithue`, `cmnd`, `dob`, `quequan`, `sodienthoai`, `sex`, `ngaythue`, `sophong`, `nguoithuecung`, `dichvu`, `debt`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
		$stmt = mysqli_prepare($con,$query);
		$stmt->bind_param("sissiisisss",$tennguoithue,$cmnd,$dob,$quequan,$dienthoai,$sex,$this->ngaythue,$this->sophong,$nguoithuecung,$dichvu,$debt);
		$stmt->execute();

	}
	
	// get nguoi thue cung
	function getNguoithuecung($con,$sophong){
		$query = "Select nguoithuecung From nguoithue Where sophong =?";
		$stmt = $con->prepare($query);
		$stmt->bind_param("i",$sophong);
		$stmt->execute();
		$result = $stmt->get_result();
		if(mysqli_num_rows($result)>0){
			$row = $result->fetch_assoc();
			$nguoithuecung = json_decode($row['nguoithuecung'],true);
			return $nguoithuecung;
		}
		return array();
	}
	//update nguoi thue cung
	function updateNguoithuecung($con,$data,$sophong){
		$query = "UPDATE `nguoithue` SET`nguoithuecung`= ? WHERE sophong = ?";
		$stmt = $con->prepare($query);
		$stmt->bind_param("si",$data,$sophong);
		$stmt->execute();
	}
	// getDebt
	function getDebt($con,$sophong){
		$arr=array();
		if($sophong==""){
			$query="Select sophong,debt From nguoithue";
			$result = $con->query($query);
			while($row = $result->fetch_assoc()){
				$arrTmp = json_decode($row['debt'],true);
				if(!empty($arrTmp)){
					$arr[$row['sophong']]=$arrTmp;
				}
			}			
		}else{
			$query="Select debt From nguoithue Where sophong = ?";
			$stmt = $con->prepare($query);
			$stmt->bind_param("i",$sophong);
			$stmt->execute();
			$result = $stmt->get_result();
			$row = $result->fetch_assoc();
			$arr = json_decode($row['debt'],true);
		}
		return $arr;
	}
	//update debt
	function updateDebt($con,$data,$sophong){
		$query = "UPDATE `nguoithue` SET`debt`= ? WHERE sophong = ?";
		$stmt = $con->prepare($query);
		$stmt->bind_param("si",$data,$sophong);
		$stmt->execute();
	}	

	// get FULL ROW -> array
	function getFullRow($con,$sophong){
		$query = "Select * From nguoithue Where sophong = ?";
		$stmt = $con->prepare($query);
		$stmt->bind_param("i",$sophong);
		$stmt->execute();
		$result = $stmt->get_result();
		$row=$result->fetch_assoc();
		$row['nguoithuecung']=json_decode($row['nguoithuecung'],true);
		$row['dichvu']=json_decode($row['dichvu'],true);
		$row['debt']=json_decode($row['debt'],true);
		return $row;

	}
	
	// DELETE ROW
	function deleteRowbySophong($con,$sophong){
		$query = "DELETE FROM `nguoithue` WHERE sophong = ?";
		$stmt=$con->prepare($query);
		$stmt->bind_param("i",$sophong);
		$stmt->execute();
	}


}

 ?>