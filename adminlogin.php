<?php 
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<?php  include 'links.php' ?>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>
	<header>
		<div class="container center-div shadow">
			<div class="heading text-center text-uppercase text-white mb-5">ADMIN LOGIN PAGE</div>

			<div class="container row d-flex flex-row justify-content-center mb-5">
				<div class="admin-form shadow p-3">
					<form  action="logincheck.php" method="POST">
					<div class="form-group">
						<label>Email ID</label>
						<input type="text" name="user" value="" class="form-control" autocomplete="off">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="text" name="pass" value="" class="form-control" autocomplete="off">
					</div>
					<input type="submit" class="btn btn-success" name="submit">

					</form>

				</div>
			</div>
		</div>
	</header>

</body>
</html>
