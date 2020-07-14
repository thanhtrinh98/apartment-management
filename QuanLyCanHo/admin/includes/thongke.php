 <?php
if($_POST['thongke']==1){
	 // khai bao thu vien
	 include('class/phong.php');
	 include('class/person.php');
	 include('database.php');
	 // khoi tao doi tuong nguoi thue
	 $room = new phong();
	 $per = new person();
	 // tong tien no
	 $debt=$per->getDebt($con,"");
	 // tinh tien no va ds no
	 $arrDebtPerson = array();
	 $sum = 0 ;
	 foreach ($debt as $key => $value) {
	  $arrDebtPerson[$key] = 0 ;
	   foreach ($value as $mang) {
	     $sum+= $mang['tongtien'];
	     $arrDebtPerson[$key] += $mang['tongtien'];
	   }
	 }
	  // Room Disable
	 $arrRomDisable=$room->getDisableRom($con);
	 // 
	 // array trang thai
	 $arrData = array(
	                    "countRoom"=>$room->countRoom($con),
	                    "countRoomActive"=>$room->countRoomActive($con),
	                    "countRoomDisable"=>$room->countRoomDisable($con),
	                    "tongtienno"=>$sum,
	                    "debtPerson"=>$arrDebtPerson,
	                    "roomDisable"=>$arrRomDisable
	                  );

	echo json_encode($arrData,JSON_UNESCAPED_UNICODE);

}




?> 