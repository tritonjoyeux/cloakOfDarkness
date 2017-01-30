<?php 
if(!isset($_SESSION['inventory'])){
	$key = md5(microtime().rand());
	$_SESSION['secret'] = $key;
    include("parseymlDoors.php");
    include("parseymlInventory.php");
}
