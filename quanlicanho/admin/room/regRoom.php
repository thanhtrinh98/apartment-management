<?php 
session_start();

if(isset($_SESSION['username']) && $_SESSION['username']=="admin"){
    include('../includes/class/phong.php');
    include('../includes/database.php');
    include('../includes/class/person.php');
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
                        <a style="font-family: 'Roboto Condensed', sans-serif;" href="taophong.php"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plus" ></i>Tạo Phòng</a>
                        <a style="font-family: 'Roboto Condensed', sans-serif;" href="regRoom.php"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-address-book" ></i>Đăng Ký Phòng</a>
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
               <p>Đăng Ký Phòng Cho Thuê</p>
               <form action="#" method="POST" enctype="multipart/form-data">
                   <div class="form-group row">
                    <legend>Thông tin người cho thuê</legend>
                       <label class="col-sm-2 form-control-label">Họ Tên</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="tennguoithue" placeholder="Nhập Họ Tên Người Thuê"  name="tennguoithue">
                       </div>
                   </div>
                   <div class="form-group row">
                       <label class="col-sm-2 form-control-label">CMND</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="cmnd" placeholder="Nhập CMND"  name="cmnd">
                       </div>
                   </div>
                   <div class="form-group row">
                       <label class="col-sm-2 form-control-label">Ngày Sinh</label>
                       <div class="col-sm-10">
                           <input type="date" class="form-control" id="dob" placeholder="Nhập Ngày Sinh"  name="dob">
                       </div>
                   </div>
                   <div class="form-group row">
                       <label class="col-sm-2 form-control-label">Quê Quán</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="quequan" placeholder="Nhập Quê Quán"  name="quequan">
                       </div>
                   </div>
                   <div class="form-group row">
                       <label class="col-sm-2 form-control-label">Điện Thoại</label>
                       <div class="col-sm-10">
                           <input type="text" class="form-control" id="quequan" placeholder="Nhập số điện thoại"  name="dienthoai">
                       </div>
                   </div>


                    <div class="form-group row">
                        <label class="col-sm-2">Giới Tính</label>
                        <div class="col-sm-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="sex" id="sex" value="1" checked>
                                     Nam
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="sex" id="sex" value="0">
                                     Nữ
                                </label>
                            </div>
                        </div>
                    </div>

                   <div class="form-group row">
                    <legend>Thông tin đăng ký nhà trọ</legend>
                       <label class="col-sm-2 form-control-label">Ngày Thuê</label>
                       <div class="col-sm-10">
                           <input type="date" class="form-control" id="ngaythue" placeholder="Nhập Nhgày Thuê"  name="ngaythue">
                       </div>
                   </div>

                   <div class="form-group row">
                       <label class="col-sm-2 form-control-label">Chọn Phòng Đăng Ký</label>
                       <div class="col-sm-10">
                           <select name="sophong">
                            <!-- lay thong tin phong dang trong -->
                            <?php 
                                $room = new phong();
                                $arrData=$room->getDisableRom($con);
                                foreach ($arrData as $key ) {
                                    echo "<option value=" .$key['sophong']. ">Phòng ". $key['sophong'] ."</option>";
                                }
                             ?>
                             <!-- ket thuc viec lay thong tin -->

                           </select>
                       </div>
                   </div>                  

                   <div class="form-group row">
                       <label class="col-sm-2">Dịch Vụ</label>
                       <div class="col-sm-10">
                           <div class="checkbox">
                               <label>
                                   <input type="checkbox" name="dv1[]" value="1"> Internet Cáp Quang (220 000 VND)
                               </label>
                           </div>
                           <div class="checkbox">
                               <label>
                                   <input type="checkbox" name="dv2[]" value="1"> Truyền hình cáp (50 000VND)
                               </label>
                           </div>

                           <input type="text" class="form-control" id="dichvukhac" placeholder="Nhập giá tiền các dịch vụ khác(phát sinh , rác ,gửi xe ,....)"  name="dichvukhac">
                       </div>

                   </div>
                   <div class="form-group row">
                       <div class="col-sm-offset-2 col-sm-10">
                           <button name="btnSubmit" type="submit" class="btn btn-primary">Đồng Ý</button>
                       </div>
                   </div>
               </form>
               
               <!-- xu li insertDB -->
                <?php 
                    if(isset($_POST['btnSubmit'])){
                        // khoi tao obj person
                        $person = new person();

                        // lay thong tin nguoi thue tu form
                        $tennguoithue = $_POST['tennguoithue'];
                        $cmnd = $_POST['cmnd'];
                        $dob = $_POST['dob'];
                        $quequan = $_POST['quequan'];
                        $sex = $_POST['sex'];
                        $dienthoai = $_POST['dienthoai'];
                        $infoPerson=$person->creatInfoPerson($tennguoithue,$cmnd,$dob,$quequan,$dienthoai,$sex); // createPerson
                        echo "<pre>";
                        print_r($infoPerson);
                        echo "</pre>";
                        // lay thong tin thue phong
                        $ngaythue = $_POST['ngaythue'];
                        $sophong = $_POST['sophong'];

                        // lay thong tin dich vu
                        $dv1 = (isset($_POST['dv1']))?$_POST['dv1'][0]:0;
                        $dv2 = (isset($_POST['dv2']))?$_POST['dv2'][0]:0;
                        $dv3 = (isset($_POST['dichvukhac']))?$_POST['dichvukhac']:0;
                        $dichvu=$person->dichvu($dv1,$dv2,$dv3);    // tao dich vu
                        
                        //debt
                        $debt = array();

                        // khoi tao va insert vao DB
                        $person->khoitao($infoPerson,$ngaythue,$sophong,$dichvu,$debt);
                        $person->insertDB($con);

                        // update trang thai phong 
                        $room->updateStatusRoom($con,1,$sophong);

                    }

                 ?>
               
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>


</body>
</html>
<?php } ?>

