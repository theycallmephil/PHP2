<?php
session_start();
session_destroy();
header ('Location: http://www.philipnielsen.net/php2/index.php');
?>

// slutter session og fører til index.php