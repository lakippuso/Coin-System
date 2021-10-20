<!doctype HTML>
<html>
	<head>
		<title>Coin Counter Machine</title>
		<meta charset="utf-8">
	<!--	<meta http-equiv="refresh" content="5"> -->
		<link rel="stylesheet" href="Login.css">
		<link rel="stylesheet" href="css/bootstrap.css"/>
	</head>
	<style>
		
	</style>
	
	<body>
		<div class="open_form"><button>Login</button></div>
		<div class="login_form">
			<label class="close_btn">&times;</label>
			<div class="title">Login</div>
			<form method="POST">
				<div class="inputs">
					<label>Username</label>
					<input type="text" name="username" required>
				</div>
				<div class="inputs">
					<label>Password</label>
					<input type="password" name="password">
				</div>
				<div class="forgot">
					<label><a href="#">Forgot Password?</a></label>
				</div >
				<div class="submit">
					<div class="design"></div>
					<input type="submit" name="submit" value="LOGIN">
				</div>
				<div class="register" style="text-align: center;">New User?&nbsp;<a href="#">Register Here!</a></div>
			</form>
		</div>

		<script src="login.js"></script>
	</body>

	
</html>

