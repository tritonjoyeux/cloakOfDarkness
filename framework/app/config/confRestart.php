<?php 
if(!isset($_SESSION['inventory'])){
	$_SESSION['inventory'] = ['jacket'];
	$key = md5(microtime().rand());
	$_SESSION['secret'] = $key;
}
