<?php
session_start();
if(isset($_POST['logout'])) {
	include("logout.php");
    header ('Location: http://www.philipnielsen.net/php2/index.php');
}
?>

<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<meta charset="UTF-8">
<title>side6</title>
</head>
<body>

<div id="menu">
<?php include 'menu.php';?>
</div>

<br>
<div id="userpage">
    <h3>Succesfully logged in!</h3><br><br>
    <img src="img/pancake_bunny.png">
    <br><br>
  
    <form action='logout.php'>
        <button>Log out</button>
    </form>
</div>

</body>
</html>
