<?php
if(!isset($_SESSION['lightBar'])){
	if($request->get('secret') == $_SESSION['secret']){
		$_SESSION['lightBar'] = true;
		$_SESSION['inventory'] = [];
		echo 'You put your jacket on the hook';
	}else{
		echo 'Did you try to cheat ?';
	}
}else{
	echo 'You already did this before';
}