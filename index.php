<!DOCTYPE html>
<?php
include "includes/connection.php";


if(isset($_POST['submit'])){

    $myusername = mysqli_real_escape_string($koneksi,$_POST['username']);
    $mypassword = mysqli_real_escape_string($koneksi,$_POST['password']);
	//$myrole 	= mysqli_real_escape_string($con,$_POST['role']);

    if ($myusername != "" && $mypassword != ""){

        $sql_query = "select * from data_guru where username='".$myusername."' and password='".$mypassword."'";
        $result = mysqli_query($koneksi,$sql_query);
        $row = mysqli_num_rows($result);

        //$count = $row['cntUser'];

        if($row > 0){
            //$_SESSION['myusername'] = $myusername;
			$data = mysqli_fetch_assoc($result);
			if ($data['role'] = "admin"){
				$_SESSION['username'] = $myusername;
				$_SESSION['role'] = "admin";
				header('Location: dashboard.php'); // buat admin
			}
			elseif ($data['role'] = "guru") {
				$_SESSION['username'] = $myusername;
				$_SESSION['role'] = "guru";
				header('Location: dashboard.php'); // buat guru
			}
            elseif ($data['role'] = "murid") {
				$_SESSION['username'] = $myusername;
				$_SESSION['role'] = "siswa";
				header('Location: dashboard.php'); // buat murid
			}

        }else{
            //prompt function
    function prompt($prompt_msg){
        echo("<script type='text/javascript'> alert('".$prompt_msg."'); </script>");
    }

    //program
    $prompt_msg = "Username dan password salah, silahkan hubungin admin terkait!";
    $name = prompt($prompt_msg);
        }

    }

}
?>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="imgs/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(img/bg-01.jpg);">
					<span class="login100-form-title-1">
						Masukan Username dan Password
					</span>
				</div>

				<form class="login100-form validate-form" method="post" action="">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" id="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" id="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="submit" name="submit">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>

</body>
</html>