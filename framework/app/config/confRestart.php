<?php 

session_destroy();
session_start();
$key = md5(microtime().rand());
$_SESSION['secret'] = $key;
include("parseymlDoors.php");
include("parseymlInventory.php");
include("parseymlStart.php");

