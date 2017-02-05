<?php
$actionAjax = $request->get('action');
$secret = $request->get('secret');
$response = [];
if($request->get('secret') == $_SESSION['secret']){
    foreach ($_SESSION['actions'] as $key => $action) {
        if($action['done'] == false && $action['where'] == $actionAjax){
            $response['text'] = 'you put your '.$action['object'].' on the '.$actionAjax;
            $response['object'] = $action['object'];
            $_SESSION['actions'][$key]['done'] = true;
            unset($_SESSION['inventory'][$action['object']]);
            $_SESSION['light'][$action['light']] = 'light';
        }else if ($action['where'] == $actionAjax){
            $response['text'] = 'you already did this before';
        }
    }
}else{
    $response['text'] = 'Did you try to cheat ?';
}
$json = json_encode($response);
echo $json;
exit();