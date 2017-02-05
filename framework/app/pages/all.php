<?php
include("../app/include/layout.php");

$path = substr($path, 1);
$check = false;

foreach ($_SESSION['actions'] as $action) {
    if(isset($action['done']) && $action['done'] == false){
        $check = true;
    }
}

if($check == false && $path == $_SESSION['actions']['last']['where']){
    ?><script>alert('Bien joue morray');</script><?php
}

function lightDoor($path){
    if($_SESSION['light'][$path] == 'light'){
        ?><img src="assets/door.png" style="width: 50px;"><?php
    }else{
        ?><img src="assets/doorLight.png" style="width: 50px;"><?php
    }
}

function isObject($path, $direction){
    $val = explode('-', $_SESSION['doors'][$path][$direction]);
    if($val[0] == 'action'){
        if($direction == "west" || $direction == "est"){ ?>
            <a href='/action' data-ajax="false" style="display: inline-block; margin-top: 164px;" class="action" id="<?php echo $val[1]; ?>">
        <?php }else { ?>
            <a href='/action' data-ajax="false" class="action" id="<?php echo $val[1]; ?>">
        <?php } ?>
            <img src="assets/<?php echo $val[1]; ?>.png" style="width: 30px; margin: 10px;">
        </a>
        <?php
    }else {
        if($direction == "west" || $direction == "est"){?>
            <a href="/<?php echo $_SESSION['doors'][$path][$direction] ?>" data-ajax="false" style="display: inline-block; margin-top: 164px;">
        <?php }else {?>
            <a href="/<?php echo $_SESSION['doors'][$path][$direction] ?>" data-ajax="false">
        <?php } ?>
            <?php lightDoor($path); ?>
        </a>
        <?php
    }
}
?>
<div style="text-align: center"><h1><?php echo $path ?></h1>
    <h5><?php echo $_SESSION['doors'][$path]['desc']; ?> <img src="assets/friend.gif"></h5>
<br>
<div style="width: 500px; height: auto; background-image:  url('assets/<?php
if($_SESSION['light'][$path] == 'light'){
    echo $_SESSION['doors']['background'];
}else{
    echo 'unlight.png';
}
?>'); display: inline-block; text-align: left;">
    <div style="text-align:center; background-color: transparent; padding-top: 10px; height: 60px">
        <?php if($_SESSION['doors'][$path]['north'] != 'empty'){ ?>

            <?php if($_SESSION['doors'][$path]['north'] == 'lock'){ ?>
                <a href='#' data-ajax="false">
                    <img src="assets/endDoor.png" style="width: 50px;">
                </a>
            <?php }else{ isObject($path, "north"); } ?>
        <?php } ?>
    </div>
    <div style="display: inline-block; width: 245px; height: 355px; text-align: left; vertical-align: top">
        <?php if($_SESSION['doors'][$path]['west'] != 'empty'){ ?>

            <?php if($_SESSION['doors'][$path]['west'] == 'lock'){ ?>
                <a href='#' data-ajax="false" style="padding-left: 1px;line-height: 355px;">
                    <img src="assets/endDoor.png" style="width: 50px;">
                </a>
            <?php }else{ isObject($path, "west"); } ?>
        <?php } ?>
    </div>
    <div style="display: inline-block; width: 245px; text-align: right; height: 355px; vertical-align: top">
        <?php if($_SESSION['doors'][$path]['est'] != 'empty'){ ?>

            <?php if($_SESSION['doors'][$path]['est'] == 'lock'){ ?>
                <a href='#' data-ajax="false" style="padding-right: 10px; line-height: 355px">
                    <img src="assets/endDoor.png" style="width: 50px;">
                </a>
            <?php }else{ isObject($path, "est"); } ?>
        <?php } ?>
    </div>

    <div style="text-align:right; background-color: transparent; height: 70px; display: inline-block; width: 283px; padding-bottom: 20px;">
        <?php if($_SESSION['doors'][$path]['south'] != 'empty'){ ?>

            <?php if($_SESSION['doors'][$path]['south'] == 'lock'){ ?>
                <a href='#' data-ajax="false" style="padding-right: 10px;">
                    <img src="assets/endDoor.png" style="width: 50px;">
                </a>
            <?php }else{ isObject($path, "south"); } ?>
        <?php } ?>
    </div>
</div>
</div>