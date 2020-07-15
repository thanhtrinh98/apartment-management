<?php
if(isset($_POST['jsonData'])){
	require_once './word/phpoffice/phpword/bootstrap.php';
	$dataHoaDon = json_decode($_POST['jsonData'],true);
	$tenFile = $dataHoaDon['sophong']."_".date("dmy");


	// Creating the new document...
	$phpWord = new \PhpOffice\PhpWord\PhpWord();
	$section = $phpWord->addSection();
	$section->addTitle('HOA DON');


	// // Adding Text element with font customized using explicitly created font style object...
	$fontStyle = new \PhpOffice\PhpWord\Style\Font();
	$fontStyle->setBold(true);
	$fontStyle->setName('Tahoma');
	$fontStyle->setSize(14);
	$myTextElement = $section->addText("Hoá Đơn:".$dataHoaDon['date']);
	$myTextElement->setFontStyle($fontStyle);

	
	// Adding Text element to the Section having font styled by default...
	$section->addText(
	    "Số Phòng: ".$dataHoaDon['sophong']
	);
	$section->addText(
	    "Internet Cáp Quang: ".number_format($dataHoaDon['dv1'])." VND"
	);
	$section->addText(
	    "Truyền Hình Cáp: ".number_format($dataHoaDon['dv2'])." VND"
	);
	$section->addText(
	    "Khác: ".number_format($dataHoaDon['dv3'])." VND"
	);
	$section->addText(
	    "Tiền Phòng: ".number_format($dataHoaDon['giaphong'])." VND"
	);
	$section->addText(
	    "Tổng Tiền Điện: ".number_format($dataHoaDon['dien'])." VND"
	);
	$section->addText(
	    "Tổng Tiền Nước: ".number_format($dataHoaDon['nuoc'])." VND"
	);
	$section->addText(
	    "Tổng Nợ: ".number_format($dataHoaDon['sumDebt'])." VND"
	);
	$section->addText(
	    "Trừ Khấu Hao: ".number_format($dataHoaDon['khauhao'])." VND"
	);
	$myTextElement = $section->addText("Tổng Tiền:".number_format($dataHoaDon['tongtien'])." VND");
	$myTextElement->setFontStyle($fontStyle);

	$section->addText(
	    '<script type="text/javascript">
    		window.focus();
    		window.print(); //DOES NOT WORK
			</script>'
	);


	// // Saving the document as HTML file...
	$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
	$objWriter->save('../hoadon/'.$tenFile.'.html');
	// check file exists
	if (file_exists('../hoadon/'.$tenFile.'.html'))
	{
    	echo 'hoadon/'.$tenFile.'.html';
	}else{
		echo 0;
	}
}

