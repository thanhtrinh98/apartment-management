<?php 
	if(isset($_POST)){
		$selectVal = $_POST['option'];
		include('../../includes/database.php');
		include('../../includes/class/phong.php');
		$room = new phong();
		if($selectVal==1){
            $arrData = $room->getAllRows($con);
            foreach ($arrData as $key ) {
            	$xhtml = "<tr>";
            	$xhtml .= "<td>".$key['sophong']."</td>";
            	$xhtml .= "<td>".$key['giaphong']."</td>";
                if($key['trangthai']==1){
                	$xhtml .= "<td>".'<div class="btn btn-success">Active</div>'."</td>";
                }else{
                    $xhtml .= "<td>".'<div class="btn btn-danger">Trống</div>'."</td>";
                }
                $xhtml .= "<td>".$key['mota']."</td>";
                $xhtml .= "<td><a href=\"chitietphong.php?sophong=".$key['sophong']."\" class=\"btn btn-info\"> <i class=\"fa fa-eye\"></i> Chi Tiết</a></td>";
                $xhtml .= "<td><a href=\"#modal-id".$key['sophong']."\" class=\"btn btn-warning\"> <i class=\"fa fa-edit\"></i> Sửa</a></td>";
                $xhtml .= "<td><a href=\"#\" class=\"btn btn-outline-danger\"> <i class=\"fa fa-trash\"></i> Xoá</a></td>";
                $xhtml .= "</tr>";
                echo $xhtml;
            }
            
		}else if($selectVal==2){
			$arrData = $room->getActiveRom($con);
			foreach ($arrData as $key ) {
            	$xhtml = "<tr>";
            	$xhtml .= "<td>".$key['sophong']."</td>";
            	$xhtml .= "<td>".$key['giaphong']."</td>";
                if($key['trangthai']==1){
                	$xhtml .= "<td>".'<div class="btn btn-success">Active</div>'."</td>";
                }else{
                    $xhtml .= "<td>".'<div class="btn btn-danger">Trống</div>'."</td>";
                }
                $xhtml .= "<td>".$key['mota']."</td>";
                $xhtml .= "<td><a href=\"chitietphong.php?sophong=".$key['sophong']."\" class=\"btn btn-info\"> <i class=\"fa fa-eye\"></i> Chi Tiết</a></td>";
                $xhtml .= "<td><a href=\"#\" class=\"btn btn-warning\"> <i class=\"fa fa-edit\"></i> Sửa</a></td>";
                $xhtml .= "<td><a href=\"#\" class=\"btn btn-outline-danger\"> <i class=\"fa fa-trash\"></i> Xoá</a></td>";
                $xhtml .= "</tr>";
                echo $xhtml;
            }
		}else{
			$arrData = $room->getDisableRom($con);
			foreach ($arrData as $key ) {
            	$xhtml = "<tr>";
            	$xhtml .= "<td>".$key['sophong']."</td>";
            	$xhtml .= "<td>".$key['giaphong']."</td>";
                if($key['trangthai']==1){
                	$xhtml .= "<td>".'<div class="btn btn-success">Active</div>'."</td>";
                }else{
                    $xhtml .= "<td>".'<div class="btn btn-danger">Trống</div>'."</td>";
                }
                $xhtml .= "<td>".$key['mota']."</td>";
                $xhtml .= "<td><a href=\"chitietphong.php?sophong=".$key['sophong']."\" class=\"btn btn-info\"> <i class=\"fa fa-eye\"></i> Chi Tiết</a></td>";
                $xhtml .= "<td><a href=\"#\" class=\"btn btn-warning\"> <i class=\"fa fa-edit\"></i> Sửa</a></td>";
                $xhtml .= "<td><a href=\"#\" class=\"btn btn-outline-danger\"> <i class=\"fa fa-trash\"></i> Xoá</a></td>";
                $xhtml .= "</tr>";
                echo $xhtml;
            }
		}
	}


 ?>
