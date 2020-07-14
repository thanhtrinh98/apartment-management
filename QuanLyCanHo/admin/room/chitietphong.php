    <?php 
session_start();

if(isset($_SESSION['username']) && $_SESSION['username']=="admin"){
    include('../includes/class/phong.php');
    include('../includes/class/person.php');
    include('../includes/database.php');
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Xem Nhà Trọ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="../assets/scss/style.css">
    <link href="../assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/hover_css/hover-min.css">
    <!-- custom css -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/layout.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">



</head>
<body style=>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><p style="font-size: 20px;color: white;font-family: 'Roboto Condensed', sans-serif;">Căn Hộ Cho Thuê</p></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"  style="font-family: 'Roboto Condensed', sans-serif;"> <i class="menu-icon fa fa-dashboard"></i>Trung Tâm Quản Lí </a>
                    </li>
                    <h3 class="menu-title">Quản lí phòng</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a style="font-family: 'Roboto Condensed', sans-serif;" href="./"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop" ></i>Thống Kê Phòng</a>
                        <a style="font-family: 'Roboto Condensed', sans-serif;" href="./taophong.php"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plus" ></i>Tạo Phòng</a>
                        <a style="font-family: 'Roboto Condensed', sans-serif;" href="./regRoom.php"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-address-book" ></i>Đăng Ký Phòng</a>
                    </li>


                    <h3 class="menu-title">thông tin tài khoản</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a  style="font-family: 'Roboto Condensed', sans-serif;" href="userlist.php" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Tài Khoản</a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks" style="margin-top: 10px;"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#"  aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../upload/<?php echo $avatar ?>" alt="User Avatar">
                        </a>
                        <br>
                        <a href="../includes/deletesesion.php">Thoát</a>

                    </div>                 
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="container">
               <p>Chi tiết phòng</p>

               <!-- bat dau tien hanh kiem tra get va get so phong -->
                <?php if(isset($_GET['sophong'])){$sophong = $_GET['sophong'] ?> 
                    <div class="row"        >
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <h3 style="margin-bottom: 10px">Thông tin Phòng Trọ : <?php echo $sophong ?></h3>
    <table class="table table-hover">
        <tbody>
            <tr>
                <td><p>Mã Thuê</p></td>
                <td><p style="color: red" id="mathue"></p></td>
            </tr>
            <tr>
                <td><p>Số Phòng</p></td>
                <td><p style="color: red" id="sophong" ></p></td>
            </tr>
            <tr>
                <td><p>Trạng Thái</p></td>
                <td><p id="trangthai"></p></td>
            </tr>
            <tr>
                <td><p>Ngày Thuê</p></td>
                <td><p style="color: red" id="ngaythue"></p></td>
            </tr>
            <tr>
                <td><p>Dịch Vụ</p></td>
                <td>
                    <p><input type="checkbox" id="dv1" value="220000" disabled=""> Internet Cáp Quang (220 000VND)</p>
                    <p><input type="checkbox" id="dv2" value="50000" disabled=""> Truyền Hình Cáp (50 000VND)</p>
                    <p><input type="text" id="dv3" disabled=""></p>
                </td>
            </tr>
            <tr>
                <td><p>Giá Phòng</p></td>
                <td><p style="color: red" id="giaphong"></p></td>
            </tr>
            <tr>
                <td><p>Nợ</p></td>
                <td><div style="color: red" class="debt"></div></td>
            </tr>
            <!-- BAT DAU MODAL -->
                            <div class="modal fade" id="modalXoaNo">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title text-left">Xoá Nợ</h4>
                                        </div>
                                        <div class="modal-body">

                                        <form action="api/xoano.php" method="GET" enctype="multipart/form-data">
                                                           <div class="form-group row">
                                                            <div class="form-group row">
                                                                <div class="offset-sm-4" id="xoaNo">
                                                                    
                                                                </div>
                                                            </div>
                                                            </div>
                                                                    
                                        </form> <!-- .END FORM DANG KY -->

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" id="btnXoaNo">Đồng Ý</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <!-- KET THUC MODAL -->
            <tr>
                <td><p>Tổng Tiền Ước Tính:</p><p>(chưa bao gồm điện,nước)</p></td>
                <td><p style="color: red;font-size:30px;font-weight: bold" id="tongtienuoctinh"></p></td>
            </tr>
        </tbody>
    </table>
                        </div><!--  end col 10 -->


                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background: #514E4E;">
                            <h3 style="margin-bottom: 10px;color:white;text-align: center;margin-bottom: 25px">Chủ Phòng</h3>
                            <div class="row text-center">
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                    <p style="color: white;">Họ Tên</p>
                                    <p style="color: white;">CMND</p>
                                    <p style="color: white;">Ngày Sinh</p>
                                    <p style="color: white;">Quê Quán</p>
                                    <p style="color: white;">Điện thoại</p>
                                    <p style="color: white;">Giới Tính</p>
                                </div>
                                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                    <p style="color: #5EA8F3; font-weight: bold" id="hoten"></p>
                                    <p style="color: #5EA8F3; font-weight: bold" id="cmnd"></p>
                                    <p style="color: #5EA8F3; font-weight: bold" id="dob"></p>
                                    <p style="color: #5EA8F3; font-weight: bold" id="quequan"></p>
                                    <p style="color: #5EA8F3; font-weight: bold" id="sodienthoai"></p>
                                    <p style="color: #5EA8F3; font-weight: bold" id="gioitinh"></p>
                                </div>
                            </div>
                        </div><!-- end col 2 -->
                        <a data-toggle="modal" href="#tinhhoadon" class="btn btn-warning"><i class="fa fa-calculator"></i> Tính Hoá Đơn</a>
                        <button class="btn btn-primary"  id="saoluu"><i class="fa fa-copy"></i> Sao Lưu Dữ Liệu</button>
                        <button id="traphong" class="btn btn-secondary"><i class="fa fa-sign-out"></i> Trả Phòng</button>
                    </div> <!-- .end row -->
                    <!-- BAT DAU MODAL -->
                            <div class="modal fade" id="tinhhoadon">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                        <form action="#" method="POST" enctype="multipart/form-data" id="tinhhoadon">
                                                           <div class="form-group row">
                                                            <legend>Tính Hoá Đơn</legend>
                                                               <label class="col-sm-2 form-control-label"></label>
                                                               <div class="col-sm-10">
                                                                   <input type="text" class="form-control" id="date" placeholder="Nhập Họ Tên Người Thuê"  name="date" value="<?php echo date("m/Y") ?>" disabled="">
                                                               </div>
                                                           </div>
                                                           <div class="form-group row">
                                                               <label class="col-sm-2 form-control-label">Internet</label>
                                                               <div class="col-sm-10">
                                                                   <input type="text" class="form-control" id="dv1_1" placeholder="Giá Internet (mặc định là 220,000 VND)" name="dv1_1">
                                                               </div>
                                                           </div>
                                                            <div class="form-group row">
                                                               <label class="col-sm-2 form-control-label">Truyền hình cáp</label>
                                                               <div class="col-sm-10">
                                                                   <input type="text" class="form-control" id="dv2_1" placeholder="Giá Truyền Hình cáp (mặc định là 50,000 VND)" name="dv2_1">
                                                               </div>
                                                           </div>
                                                           <div class="form-group row">
                                                               <label class="col-sm-2 form-control-label">Phí khác</label>
                                                               <div class="col-sm-10">
                                                                   <input type="text" class="form-control" id="dv3_1" placeholder="Phí Phát Sinh" name="dv3_1">
                                                               </div>
                                                           </div>
                                                           <div class="form-group row">
                                                               <label class="col-sm-2 form-control-label">Giá Phòng</label>
                                                               <div class="col-sm-10">
                                                                   <input type="text" class="form-control" id="giaphong1" placeholder="Nhập Giá Phòng"  name="giaphong1" disabled="">
                                                               </div>
                                                           </div>   
                                                           <div class="form-group row">
                                                               <label class="col-sm-2 form-control-label">Điện</label>
                                                               <div class="col-sm-5">
                                                                   <input type="text" class="form-control" id="dienCount" placeholder="Nhập Số Ký Điện"  name="dienCount">
                                                               </div>
                                                               <div class="col-sm-5">
                                                                   <input type="text" class="form-control" id="dienPrice" placeholder="Nhập Đơn Giá Điện"  name="dienPrice">
                                                               </div>
                                                           </div>
                                                           <div class="form-group row">
                                                                <div class="offset-sm-3">
                                                                    Tổng tiền Điện:<p style="color: red;font-weight: bold" id="tongtienDien"></p>
                                                                </div>
                                                           </div>
                                                           <div class="form-group row">
                                                               <label class="col-sm-2 form-control-label">Nước</label>
                                                               <div class="col-sm-5">
                                                                   <input type="text" class="form-control" id="nuocCount" placeholder="Nhập Số Lít Nước"  name="nuocCount">
                                                               </div>
                                                               <div class="col-sm-5">
                                                                   <input type="text" class="form-control" id="nuocPrice" placeholder="Nhập Đơn Giá Nước"  name="nuocPrice">
                                                               </div>
                                                           </div>
                                                           <div class="form-group row">
                                                                <div class="offset-sm-3">
                                                                    Tổng tiền Nước:<p style="color: red;font-weight: bold" id="tongtienNuoc"></p>
                                                                </div>
                                                           </div>
                                                           <div class="form-group row">
                                                               <label class="col-sm-2 form-control-label">Khấu Hao</label>
                                                               <div class="col-sm-10">
                                                                   <input type="text" class="form-control" id="khauhao" placeholder="Nhập Số Tiền Khấu Hao"  name="khauhao">
                                                               </div>
                                                           </div>
                                                           <div class="form-group row">
                                                               <label class="col-sm-2 form-control-label">Nợ</label>
                                                               <div class="col-sm-10">
                                                                    <div style="color: red" class="debt"></div>
                                                               </div>
                                                           </div>
                                                           <div class="form-group row">
                                                               <label class="col-sm-2 form-control-label">Tổng Tiền:</label>
                                                               <div class="col-sm-10">
                                                                   <p id="tongtienthucte" style="color: red;font-size: 25px;font-weight: bold;"></p>
                                                               </div>
                                                           </div>
                                                        
               
                                        </form> <!-- .END FORM DANG KY -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" id="btnGhiNo">Ghi Nợ</button>
                                            <button type="button" class="btn btn-danger" id="btnInHoaDon"><i class="fa fa-print"></i> In Hoá Đơn Thanh Toán</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <!-- KET THUC MODAL -->

                    <!-- SCRIPT TINH HOA DON -->
                    <script>
                        
                    </script>
                    <!-- END SCRIPT -->

                    <div class="row" style="margin-top:120px">
                        <h4 style="padding-bottom: 8px;color: red;">Người Ở Cùng</h4>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Tên</th>
                                        <th>CMND</th>
                                        <th>DOB</th>
                                        <th>Quê Quán</th>
                                        <th>SDT</th>
                                        <th>Giới Tính</th>
                                        <th><a data-toggle="modal" href='#themNguoiThue' class="btn btn-primary"> <i class="fa fa-plus"></i> Thêm</a></th>

                    <!-- BAT DAU MODAL -->
                            <div class="modal fade" id="themNguoiThue">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title text-left">Thêm Bạn Cùng Phòng</h4>
                                        </div>
                                        <div class="modal-body">

                                        <form action="#" method="POST" enctype="multipart/form-data">
                                                           <div class="form-group row">
                                                               <label class="col-sm-2 form-control-label">Họ Tên</label>
                                                               <div class="col-sm-10">
                                                                   <input type="text" class="form-control" id="tennguoithue1" placeholder="Nhập Họ Tên Người Thuê"  name="tennguoithue">
                                                               </div>
                                                           </div>
                                                           <div class="form-group row">
                                                               <label class="col-sm-2 form-control-label">CMND</label>
                                                               <div class="col-sm-10">
                                                                   <input type="text" class="form-control" id="cmnd1" placeholder="Nhập CMND"  name="cmnd">
                                                               </div>
                                                           </div>
                                                           <div class="form-group row">
                                                               <label class="col-sm-2 form-control-label">Ngày Sinh</label>
                                                               <div class="col-sm-10">
                                                                   <input type="date" class="form-control" id="dob1" placeholder="Nhập Ngày Sinh"  name="dob">
                                                               </div>
                                                           </div>
                                                           <div class="form-group row">
                                                               <label class="col-sm-2 form-control-label">Quê Quán</label>
                                                               <div class="col-sm-10">
                                                                   <input type="text" class="form-control" id="quequan1" placeholder="Nhập Quê QUán"  name="quequan">
                                                               </div>
                                                           </div>
                                                           <div class="form-group row">
                                                               <label class="col-sm-2 form-control-label">SDT</label>
                                                               <div class="col-sm-10">
                                                                   <input type="text" class="form-control" id="sodienthoai1" placeholder="Nhập SDT"  name="sodienthoai1">
                                                               </div>
                                                           </div>


                                                            <div class="form-group row">
                                                                <label class="col-sm-2">Giới Tính</label>
                                                                <div class="col-sm-10">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="sex1" id="sex" value="1" checked>
                                                                             Nam
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="sex1" id="sex" value="0">
                                                                             Nữ
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                        </form> <!-- .END FORM DANG KY -->

                                         <div class="thongbaoThemThue"><p id="infoThemThue" style="color: red;"></p></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                            <button type="button" class="btn btn-primary" id="btnThemNguoiThue">Thêm</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <!-- KET THUC MODAL -->

                                    </tr>
                                </thead>
                                <tbody id="nguoithuecung">

                                </tbody>
                            </table>

                        </div>
                    </div> <!-- .nguoi oet cung -->
                <?php } ?>
                <!-- ket thuc -->
               
        </div> <!-- .content -->
    </div><!-- /#right-panel -->


    <!-- Right Panel -->

    <script src="../../vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>


    <script src="../assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <script src="../assets/js/widgets.js"></script>
    <script src="../assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="../assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="../assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="../assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script src="../../vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="./api/khoitao.js"></script>
    <script src="./api/event.js"></script>


    <!-- SCRIPT XU LI THONG TIN TRANG -->
    <script>
        var sumDebt = 0;
        var dv1 = 0 ;
        var dv2 = 0 ;
        var dv3 = 0 ;
        var giaphong=0;
        var sophong = <?php echo $sophong ?>;
        var khauhao = 0
        var tongtienthucte = 0
        $(document).ready(function() {
            getInfoChuPhong();
            getInfoRoom();            
            getNguoiThueCung();
        }); 

            // them nguoi thue cung
            addNguoiThan();   
            
            // bat su kien trong form hoa don
            handleFormHoaDon();

            // in hoa don
            inHoaDon();
            let tongtienDien=0;
            let dienCount =0;
            let dienPrice =0;
            let tongtienNuoc=0;
            let nuocCount =0;
            let nuocPrice =0;
            // ghi no thang 
            $('#btnGhiNo').click(function(){
                let tongtien = 0;
                let objDebt = {
                                date : $('#date').val(),
                                dv1  : dv1,
                                dv2  : dv2,
                                dv3  : dv3,
                                giaphong : giaphong,
                                dien : tongtienDien,
                                nuoc : tongtienNuoc,
                                khauhao:khauhao,
                                tongtien:Number(dv1)+Number(dv2)+Number(dv3)+Number(giaphong)+Number(tongtienDien)+Number(tongtienNuoc)-Number(khauhao)
                            }
                $.ajax({
                    url: 'api/addDebt.php',
                    type: 'POST',
                    dataType:'text',
                    data: {jsonData: JSON.stringify(objDebt),sophong:sophong},
                    success:function(data){
                        updateDebt(data);
                        updateTongTienThucTe(dv1,dv2,dv3,giaphong,sumDebt);
                    }
                })
            })
            // xoa NO THANG
            $('#btnXoaNo').click(function(){
                var checkArr = [];
                $('.xoaDebt:checked').each(function(){
                    checkArr.push($(this).val());
                });
                $.ajax({
                    url: 'api/xoano.php',
                    type: 'POST',
                    dataType: 'text',
                    data: {jsonData: JSON.stringify(checkArr),sophong:sophong},
                    success:function(data){
                        updateDebt(data);
                        updateTongTienThucTe(dv1,dv2,dv3,giaphong,sumDebt);
                    }
                })
            })
            // sao luu
            $('#saoluu').click(function(){
                if(confirm("Bạn Muốn Sao Lưu Dữ Liệu ?")){
                    $.ajax({
                        url: '../includes//saoluu.php',
                        type: 'POST',
                        dataType: 'text',
                        data: {sophong: sophong},
                        success:function(data){
                            if(data!=0){
                                alert("Sao Lưu Thành Công");
                                window.open(`../logs/${data.trim()}.json`,'_blank');
                            }
                        }
                    })
                 
                }
            })
            // tra phong 
            $('#traphong').click(function(){
                if(confirm("Bạn đã chắc chắn sao lưu dữ liệu trước khi trả phòng ?")){
                    $.ajax({
                        url: './api/traphong.php',
                        type: 'POST',
                        dataType: 'text',
                        data: {sophong: sophong},
                        success:function(data){
                            location.reload();
                        }
                    })
                 
                }
            })

    </script>
</body>
</html>
<?php 
    if(isset($_POST['btnXoaPerson'])){
        $id = $_POST['id'];
        // khoi tao obj person
        $person = new person();
        $arrData= $person->getNguoithuecung($con,$sophong);     // lay json va chuyen thanh arr
        unset($arrData[$id]);                                   // xoa arr offset vi tri $id
        $arrData=array_values($arrData);                        // dinh dang lai cac offset
        $arrData = json_encode($arrData,JSON_UNESCAPED_UNICODE);    // chuyen ve dang JSON
        $person->updateNguoithuecung($con,$arrData,$sophong);   // update lai nguoi thue cung
    }
 ?>
<?php } ?>
