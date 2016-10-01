<?php
if (isset($_POST['login'])) {
    require_once("connect_db.php");
// connecter til database
	$user = filter_input(INPUT_POST, 'userreg'); 
	$passinput = filter_input(INPUT_POST, 'passreg'); 
    $sql = "SELECT id, Password FROM users WHERE Username = ?";

$stmt = $connection->prepare($sql);
$stmt->bind_param('s', $user);
$stmt->execute();
// begynder password hash for sikkerhed
$stmt->bind_result($uid, $pwHash);

    if($stmt->fetch()){		
        $passinput = $passinput;
		$pwHash = $pwHash;
		
		if (password_verify($passinput, $pwHash)) {
			$_SESSION['uid'] = $user;
?><meta http-equiv="refresh" content="0; url=http://www.philipnielsen.net/php2/secret/side6.php" /> <?php
    } else {
            echo 'It failed';
    }
	} 
}
?>