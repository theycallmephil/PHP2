<?php
session_start();
if(isset($_POST['logout'])) {
	include("logout.php");
}
?>

<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>

<div id="menu">
<?php include 'menu.php';?>
</div>
<br>

<div id="loginPage">
<div id="registerform">
	<h3>User regristration</h3>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Username:<br>
		<input type="text" name="user"><br>
		Password:<br>
		<input type="password" name="pass">
		<input type="submit" name="regis" value="Submit">
</form>
</div>

<div>
<?php include 'regis.php';?>
</div>

	<div id="loginform">
		<h3>Login here</h3>

		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     		Username:<br>
     		<input type="text" name="userreg"><br>
      		Password:<br>
      		<input type="password" name="passreg">
      		<input type="submit" name="login" value="Log in">
		</form>
	</div>

	<div>
		<?php include 'login.php';?>
	</div>
</div>

</body>
</html>