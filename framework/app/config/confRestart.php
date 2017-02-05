<?php 

session_destroy();
session_start();
$key = md5(microtime().rand());
$_SESSION['secret'] = $key;
include("parseymlDoors.php");
include("parseymlInventory.php");
include("parseymlStart.php");
<<<<<<< HEAD
include("parseymlLight.php");
=======
>>>>>>> b69fec962140274afc8c1ef9e898023e968fdfda

