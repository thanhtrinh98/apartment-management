<?php 
	if(isset($_POST['jsonData']) && isset($_POST['sophong'])){
		//include class person
		include('../../includes/class/person.php');
		include('../../includes/database.php');
		$per = new person();

		// get 2 ARRAY
		// arrData la array Debt can xoa
		// arrGet la array get vao tim de xoa 
		$arrData = $per->getDebt($con,$_POST['sophong']);
		$arrGet = json_decode($_POST['jsonData'],true);

		// tim date cung nhau roi delete ra khoi mang $arrData
		foreach ($arrGet as $date ) {
			foreach ($arrData as $key => $value) {
				if($date==$value['date']){
					unset($arrData[$key]);
				}
			}
		}
		
		
		// tao lai chi so index-> chuyen ve JSOn cho arrData roi update
		$arrData = array_values($arrData);
		$arrData = json_encode($arrData,JSON_UNESCAPED_UNICODE);
		$per->updateDebt($con,$arrData,$_POST['sophong']);

		echo $arrData;
		
	}



 ?>