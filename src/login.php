<?php
ob_start();
session_start();
require_once 'dbconnect.php';

if (isset($_SESSION['user']) != "") {
	header("Location: home.php");
	exit;
}

$email = "";
$pass = "";
$emailError = "";
$passError = "";

$error = false;

if(isset($_POST['btn-login'])) {

	$email = trim($_POST['email']);
	$email = strip_tags($email);
	$email = htmlspecialchars($email);

	$pass = trim($_POST['pass']);
	$pass = strip_tags($pass);
	$pass = htmlspecialchars($pass);

	if(empty($email)){
		$error = true;
		$emailError = "Inserisci la tua email.";
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL) ) {
		$error = true;
		$emailError = "Inserisci un'email valida.";
	}

	if(empty($pass)){
		$error = true;
		$passError = "Inserisci la tua password.";
	}

	if (!$error) {
		$password = hash('sha256', $pass);

		$query = "SELECT `id`, `email`, `password` FROM `user` WHERE `email`='".$email."'";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
		$count = $result->num_rows;

		if($count == 1 && $row['password'] == $password) {
			$_SESSION['user'] = $row['id'];
			header("Location: home.php");
		} else {
			$outMessage = "Credenziali non valide, riprovare.";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Carthafind - Login</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"/>
  	<link rel="stylesheet" href="assets/css/carthafind.css" type="text/css"/>
</head>
<body>
	<div class="container">
		<div id="login-form">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
				<div class="col-md-12">
					<div class="form-group">
						<h2 class="">Login</h2>
					</div>

					<div class="form-group">
						<hr/>
					</div>

					<?php
					if (isset($outMessage)) {
					?>
						<div class="form-group">
							<div class="alert alert-danger">
								<span class="glyphicon glyphicon-info-sign"></span> <?php echo $outMessage; ?>
							</div>
						</div>
					<?php
					}
					?>

					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
							<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>" maxlength="40" />
						</div>
						<span class="text-danger"><?php echo $emailError; ?></span>
					</div>

					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
							<input type="password" name="pass" class="form-control" placeholder="Password" maxlength="15" />
						</div>
						<span class="text-danger"><?php echo $passError; ?></span>
					</div>

					<div class="form-group">
						<hr/>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-block btn-primary" name="btn-login">Login</button>
					</div>

					<div class="form-group">
						<a href="register.php">Registrati</a>
					</div>
				</div>
			</form>
		</div>
	</div>
	<footer style="position: absolute;bottom: 0;width: 100%;height: 60px;line-height: 60px; background-color: #f5f5f5">
		<div class="footer-copyright py-3 text-center">
			© 2018 Copyright: Nadir Barlozzo
		</div>
	</footer>
</body>
</html>
<?php ob_end_flush(); ?>
