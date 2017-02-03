<?php

session_start();

require_once ("../vendor/autoload.php");


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();

include('../app/config/routing.php');

$path = $request->getPathInfo();

if(isset($map[$path]) && $map[$path] == '../include/reset.php'){
    include('../app/config/confRestart.php');
}
if(isset($map[$path])){
    ob_start();
    include $pageDir.$map[$path];
    $path = '/'.$path;
    $content = ob_get_clean();
    $response->setContent($content);
}else{
    $response->setStatusCode(404);
    $response->setContent("Oops nothing here ! Redirect in 3 sec..");
   	echo '<meta http-equiv="refresh" content="3;url=/foyer" />';
}

$response->send();
if(isset($map[$path]) && $map[$path] != 'hook.php' && $map[$path] != '../include/reset.php'){
    include('../app/include/inventory.php');
	include('../app/include/footer.php');
}
