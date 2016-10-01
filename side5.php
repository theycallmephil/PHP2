<?php
session_start();
if(isset($_POST['logout'])) {
	include("logout.php");
  header ('Location: http://www.philipnielsen.net/php2/index.php');
}
?>
<!-- Starter session -->

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
<!-- Starter registration form -->
<div class="form">
<div id="registerform">
	<h3>User registration</h3>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Username:<br>
		<input type="text" name="user"><br>
		Password:<br>
		<input type="password" name="pass"><br><br>
		<input type="submit" name="regis" value="Submit">
</form>
</div>
</div>
<!-- regis.php for at oprette brugere -->
<div>
<?php include 'regis.php';?>
</div>	
<!-- Starter login form -->
<div class="form">
	<div id="loginform">
		<h3>User login</h3>

		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     		Username:<br>
     		<input type="text" name="userreg"><br>
      		Password:<br>
      		<input type="password" name="passreg"><br><br>
      		<input type="submit" name="login" value="Log in">
		</form>
	</div>
<!-- login.php for at logge ind -->
	<div>
		<?php include 'login.php';?>
	</div>
    </div>
</div>

</body>
</html>