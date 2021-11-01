<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="./img/logo.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../admin/css/bootstrap.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../admin/icons/css/all.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../admin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../admin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../admin/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../admin/css/util.css">
	<link rel="stylesheet" type="text/css" href="../admin/css/main.css">

<!--===============================================================================================-->
<title>Forget Password</title>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../img/logo.jpg" alt="IMG">
				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title">
					Forgot Password
					</span>
						<div class="mb-3">
							<div class="alert">

							</div>
						</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" id="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" id="btn" class="login100-form-btn">
              Verify Your Email
						</button>
					</div>
				</form>
				<p class="my-3 mx-5 text-danger"><a href="./">&#8592; &nbsp;Back</a> &nbsp; </p>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="../admin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../admin/vendor/bootstrap/js/popper.js"></script>
	<script src="../admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../admin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../admin/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<script>
	$('document').ready(function(){
		$('#btn').on('click',function(e){
	e.preventDefault();
	var email = $('#email').val();
	if (email == "") {
		$('.alert').addClass("alert-danger");
		$('.alert').text("'Email required");
	}else{
		$.ajax({
			url:'veryfy.php',
			method:"POST",
			data:{email:email},
			success:function(data){
				$('.alert').removeClass("alert-danger");
				$('.alert').html(data);
			}
		})
	}
		})
	})
</script>
</body>
</html>