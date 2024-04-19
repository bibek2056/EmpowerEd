<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="images/icon/favicon.png">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="admin_loginStyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- It will redirect to the Home Page after submitting the form -->
</head>
<body>
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" id="log" onclick="login()" style="color: #ffffffc2;"> Admin Log In Page</button>
			</div>
			<div class="social-icons">
				<img src="images/icon/fb2.png">
				<img src="images/icon/insta2.png">
				<img src="images/icon/tt2.png">
			</div>
			
			<!-- Login Form -->
			<form id="login" class="input-group" action="admin_logon.php" method="post">
				<div class="inp">
					<img src="images/icon/user.png"><input type="text" id="name" name="email" class="input-field" placeholder="Username" style="width: 88%; border:none;" required="required">
				</div>
				<div class="inp">
					<img src="images/icon/password.png"><input type="password" id="password" name="password" class="input-field" placeholder="Password" style="width: 88%; border: none;" required="required">
				</div>
				<input type="checkbox" class="check-box">Remember Password
				<button type="submit" class="submit-btn">Log In</button>
			</form>


			<div class="other" id="other">
				<div class="instead">
					<h3>or</h3>
				</div>
				<button class="connect" onclick="google()">
					<img src="images/icon/google.png"><span>Sign in with Google</span>
				</button>
			</div>
			
			
		</div>
</body>

</html>