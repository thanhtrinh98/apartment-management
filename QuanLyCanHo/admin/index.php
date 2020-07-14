<?php 
session_start();

if(isset($_SESSION['username']) && $_SESSION['username']=="admin"){
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard - Thông tin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/hover_css/hover-min.css">
    <link rel="stylesheet" type="text/css" href="./css/csshake-slow.min.css">
    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="./css/layout.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<script src="./js/jquery.min.js"></script>



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
                        <a style="font-family: 'Roboto Condensed', sans-serif;" href="room/"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop" ></i>Thống Kê Phòng</a>
                        <a style="font-family: 'Roboto Condensed', sans-serif;" href="room/taophong.php"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plus" ></i>Tạo Phòng</a>
                        <a style="font-family: 'Roboto Condensed', sans-serif;" href="room/regRoom.php"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-address-book" ></i>Đăng Ký Phòng</a>
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
                        <h1>Thông Báo: <span class="badge badge-danger hvr hvr-buzz" style="font-size: 18px" id="countCmtchuaduyet"></span> <a href="report.php" data-toggle="modal" data-target="#myModal">Tin Nhắn Từ Khách Trọ </a></h1>
                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Comment Chưa Duyệt</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>

                              <!-- Modal body -->
                              <div class="modal-body"  id="thongbao">


                              </div>

                              <!-- Modal footer -->
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>

                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content mt-3">

            <div class="row">
                <!-- Begin Thong ke -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="thongke1">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <span class="fa fa-home fa-5x"></span>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                <p class="thongkeTieude">Tổng số phòng:</p>
                                <p class="thongkeContent" id="countRoom"></p>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Thong Ke -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="thongke2">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <span class="fa fa-shopping-bag fa-5x "></span>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                <p class="thongkeTieude">Phòng Thuê:</p>
                                <p class="thongkeContent" id="countRoomActive"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Thong Ke -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="thongke3">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <span class="fa fa-bullhorn  fa-5x"></span>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                <p class="thongkeTieude">Phòng Trống:</p>
                                <p class="thongkeContent" id="countRoomDisable"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Thong Ke -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="thongke4">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <span class="fa fa-calculator fa-5x"></span>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                <p class="thongkeTieude">Tổng Tiền Nợ:</p>
                                <p class="thongkeContent" id="tongtienno"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Thong Ke -->

            </div>

            <div class="row" style="margin-top: 50px">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="">
                    <h3 class="text-center" style="color: #33E1BA;">Top Phòng Trống </h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr class="text-center">
                                    <th>Số Phòng</th>
                                    <th>Giá Tiền</th>
                                </tr>
                            </thead>
                            <tbody id="roomDisable" class="text-center">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <h3 class="text-center" style="color: red">Phòng còn nợ tiền</h3>
                    <div class="container">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Phòng</th>
                                    <th>Số Tiền Nợ</th>
                                </tr>
                            </thead>
                            <tbody id="debtPerson">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>




        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- js lay thong tin -->
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                url: './includes/thongke.php',
                type: 'POST',
                dataType: 'json',
                data: {thongke: 1},
                success:function(data){
                    $('#countRoom').text(data.countRoom);
                    $('#countRoomActive').text(data.countRoomActive);
                    $('#countRoomDisable').text(data.countRoomDisable);
                    $('#countRoomDisable').text(data.countRoomDisable);
                    $('#tongtienno').text(formatNumber(data.tongtienno,".",","));
                    let xhtml1 ="";
                    for(let i of data.roomDisable){
                        xhtml1+=`<tr>
                                        <td>${i.sophong}</td>
                                        <td>${formatNumber(i.giaphong,".",",")}</td>
                                </tr>`;
                    }
                    $('#roomDisable').html(xhtml1);

                    let xhtml2 ="";
                    for(let i in data.debtPerson){
                        xhtml2+=`<tr>
                                        <td>${i}</td>
                                        <td>${formatNumber(data.debtPerson[i],".",",")}</td>
                                </tr>`;
                    }
                    $('#debtPerson').html(xhtml2);


                }
            })
            
        });

//format tien te
function formatNumber(nStr, decSeperate, groupSeperate) {
        nStr += '';
        x = nStr.split(decSeperate);
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + groupSeperate + '$2');
        }
        return x1 + x2;
}
    </script>

</body>
</html>
<?php 

    }else{
        echo '<script type="text/javascript">
                    setTimeout(function(){
                        window.location="../";
                    },200)
            </script>';
    }

 ?>