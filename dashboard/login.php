<?php
	$filedir = realpath(dirname(__FILE__));
	require_once $filedir.'/../libs/AdminLogin.php';
	Session::init();
	Session::checkLogin();
	$admin = new AdminLogin();		
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$usersEmail = $_POST['email'];
		$password = $_POST['password'];
		$getUser = $admin->userLogin($usersEmail, $password);
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="css/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="css/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/style.login.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
			
				<form class="login100-form validate-form" action="#" method="POST">
					<span class="login100-form-title">
						Member Login
					</span>
					<?php if (isset($getUser)) {
						echo $getUser;
					} ?>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.com">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="js/jquery/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/select2.js"></script>
	<script src="js/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script type="text/javascript">
        
	    /*$(document).ready(function () {
	    	$("#show_msg").hide();
	        $("#login").on("click", function () {
	            var email = $("#email").val();
	            var password = $("#password").val();
	            if (email == "" || password == "") {
	                alert("Field must not be empty");
	            }
	            else{
	                $.ajax({
	                    url:action/action_login.php,
	                    method:"POST",
	                    data:{email:email, password:password},
	                    dataType:"text",
	                    success:function(data){
	                    	console.log(data)
	                    }

	                });
	            }
	        });

	    });*/
    </script>
	<script src="js/main.js"></script>

</body>
</html>