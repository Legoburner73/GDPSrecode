<?php
chdir(dirname(__FILE__));
include "../lib/connection.php";
include "../lib/GJPCheck.php";
require_once "../lib/antiExploit.php";
$antiExploit = new antiExploit();
if(empty($_POST["gjp"])
?>
