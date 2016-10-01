<?php 

if (isset($_POST['regis'])) {
// connecter til database
require_once("connect_db.php"); 


$user = filter_input(INPUT_POST, 'user');
$passinput = filter_input(INPUT_POST, 'pass'); 
$pass = password_hash($passinput, PASSWORD_DEFAULT);
echo password_verify($passinput, $pass) ? 'Success: User created!' : 'Error: Something went wrong!';
 
    $stmt = $connection->prepare("INSERT INTO users (Username, Password) VALUES (?,?)"); 
	$stmt->bind_param('ss', $user, $pass);                
    $stmt->execute();
}
?>