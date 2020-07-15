<?php 
/**
* CLASS HOA DON
*/
class hoadon 
{
	private $date;				//dinh dang thang/nam (vd:4/1996)
	private $dv1;				// gia tien dv1 : gia tien DV INTERNET CAP QUANG --int
	private $dv2;				// gia tien dv2 : gia tien DV INTERNET CAP QUANG -- int
	private $dv3;				// gia tien dv khac (tu chon gia tien)			 --int
	private $giaphong;
	private $dien;
	private $nuoc;
	private $khauhao;
	private $tongtien;

	// khoi tao 1 array hoadon 
	function khoitao($date,$dv1,$dv2,$dv3,$giaphong,$dien,$nuoc,$khauhao,$tongtien){
		// date phong
		$this->date = $date;
		// cac thong tin về tiền
		$this->dv1 = $dv1;
		$this->dv2 = $dv2;
		$this->dv3 = $dv3;
		$this->giaphong = $giaphong;
		$this->dien = $dien;
		$this->nuoc = $nuoc;
		$this->khauhao = $khauhao;
		// tổng tiền trừ khấu hao
		$this->tongtien = $tongtien;
	}

	function arrayHoadon(){
		$arrData = array(
							"date"=>$this->date,
							"dv1"=>$this->dv1,
							"dv2"=>$this->dv2,
							"dv3"=>$this->dv3,
							"giaphong"=>$this->giaphong,
							"dien"=>$this->dien,
							"nuoc"=>$this->nuoc,
							"khauhao"=>$this->khauhao,
							"tongtien"=>$this->tongtien
						);

		return $arrData;
	}

	function jsonHoadon(){
		$arrData = $this->arrayHoadon();
		return json_encode($arrData,JSON_UNESCAPED_UNICODE);
	}

}


 ?>