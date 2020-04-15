<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V20</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="contact100-map" id="google_map" ></div>

		<div class="wrap-contact100">
			<span class="contact100-form-symbol">
				<img src="images/icons/symbol-01.png" alt="SYMBOL-MAIL">
			</span>

			<form class="contact100-form validate-form flex-sb flex-w"  action="index.php" method="post" >
				<span class="contact100-form-title">
					Retrieve Your Token
				</span>

				<div class="wrap-input100 validate-input " data-validate = "Username is required">
					<input class="input100" type="text" name="username" placeholder="Username" value="<?php if ($_POST['username']) { echo $_POST['username'];}?>">
					
					 
					<span class="focus-input100"></span>
				</div>

<!-- 				<div class="wrap-input100 rs1 validate-input" data-validate = "Email is required: e@a.z">
					<input class="input100" type="text" name="email" placeholder="Email Address">
					<span class="focus-input100"></span>
				</div> -->

				<div class="wrap-input100">
				 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  # This code will run if ?run=true is set.
	  # exec("/var/www/html/get-sa-token.sh -n test -a test");
      $username = $_POST['username'];
	  $output = shell_exec("/opt/app-root/src/get-sa-token.sh -n test -a $username");
	  echo "<textarea class='input100' name='message' id='message' onclick='myFunction()' >$output</textarea>";

	  #$myfile = fopen("sa.token", "r") or die("Unable to open sa.token file!");
	  #echo fread($myfile,filesize("sa.token"));
	  #fclose($myfile);
	}
?>		
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Send
					</button>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
