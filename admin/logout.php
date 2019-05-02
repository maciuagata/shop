<?php
//include config
require_once('../includes/Dbconfig.php');
//log user out
$user->logout();
header('Location: index.php'); 
?>