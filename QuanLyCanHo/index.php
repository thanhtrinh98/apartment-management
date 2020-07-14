<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Apartment</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images\img-03.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="#" >
					<span class="login100-form-title">
						Đăng Nhập
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Hãy nhập username của bạn" >
						<input class="input100" type="text" name="username" placeholder="Tài Khoản" id="username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Hãy nhập password của bạn">
						<input class="input100" type="password" name="password" placeholder=" Mật Khẩu" id="password" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">

						<button class="login100-form-btn" id="btnLogin" type="button">
							Đăng Nhập
						</button>
					</div>
					<div class="info">

					</div>
					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							
							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script >
		$('#btnLogin').click(function(e) {
				var username = $('#username').val();
				var password = $('#password').val();

			$.ajax({
				url: 'login.php',
				type: 'POST',
				dataType: 'text',
				data: {username: username,password:password},
				success : function(data){
					

					if(data==1){
						var log = `<div class="modal fade" id="modal-1">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-body">
												<div class="cssload-thecube" style="margin-bottom: 15px">
													<div class="cssload-cube cssload-c1"></div>
													<div class="cssload-cube cssload-c2"></div>
													<div class="cssload-cube cssload-c4"></div>
													<div class="cssload-cube cssload-c3"></div>
												</div>
												<p style="text-align: center;color: #1487B7;font-size: 20px">Đăng Nhập Thành Công!!!</p>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div><!-- /.modal -->`;
						$('.info').html(log);
						$("#modal-1").modal('show');
						setTimeout(function(){
							window.location="admin/index.php";
						},3000)
					}else{
						var errorLog = "<p>Tài Khoản Không Đúng !</p>";
						$('.info').html(errorLog);
					}
				}
			})
		});
	</script>
</body>
</html>
