<?php
include("../app/include/layout.html");
$path = substr($path, 1);
?>
<div style="text-align: center"><h1><?php echo $path ?></h1>+
<br>
<div style="width: 500px; height: auto; background-image:  url('assets/<?php echo $_SESSION['doors']['background'] ?>'); display: inline-block; text-align: left;">
	<div style="text-align:center; background-color: transparent; padding-top: 10px; height: 60px">
        <?php if($_SESSION['doors'][$path]['north'] != 'empty'){ ?>

            <?php if($_SESSION['doors'][$path]['north'] == 'lock'){ ?>
                <a href='#' data-ajax="false">
                    <img src="assets/endDoor.png" style="width: 50px;">
                </a>
            <?php }else{ ?>
                <a href="/<?php echo $_SESSION['doors'][$path]['north'] ?>" data-ajax="false">
                    <img src="assets/door.png" style="width: 50px;">
                </a>
            <?php } ?>
        <?php } ?>
	</div>
    <div style="display: inline-block; width: 245px; height: 355px; text-align: left; vertical-align: top">
        <?php if($_SESSION['doors'][$path]['west'] != 'empty'){ ?>

            <?php if($_SESSION['doors'][$path]['west'] == 'lock'){ ?>
                <a href='#' data-ajax="false" style="padding-left: 1px;line-height: 355px;">
                    <img src="assets/endDoor.png" style="width: 50px;">
                </a>
            <?php }else{ ?>
                <a href="/<?php echo $_SESSION['doors'][$path]['west'] ?>" data-ajax="false" style="padding-left: 1px;line-height: 355px;">
                    <img src="assets/door.png" style="width: 50px;">
                </a>
            <?php } ?>
        <?php } ?>
    </div>
    <div style="display: inline-block; width: 245px; text-align: right; height: 355px; vertical-align: top">
        <?php if($_SESSION['doors'][$path]['est'] != 'empty'){ ?>

            <?php if($_SESSION['doors'][$path]['est'] == 'lock'){ ?>
                <a href='#' data-ajax="false" style="padding-right: 10px; line-height: 355px">
                    <img src="assets/endDoor.png" style="width: 50px;">
                </a>
            <?php }else{ ?>
                <a href="/<?php echo $_SESSION['doors'][$path]['est'] ?>" data-ajax="false" style="padding-right: 10px; line-height: 355px">
                    <img src="assets/door.png" style="width: 50px;">
                </a>
            <?php } ?>
        <?php } ?>
    </div>

    <div style="text-align:right; background-color: transparent; height: 70px; display: inline-block; width: 283px; padding-bottom: 20px;">
        <?php if($_SESSION['doors'][$path]['south'] != 'empty'){ ?>

            <?php if($_SESSION['doors'][$path]['south'] == 'lock'){ ?>
                <a href='#' data-ajax="false" style="padding-right: 10px;">
                    <img src="assets/endDoor.png" style="width: 50px;">
                </a>
            <?php }else{ ?>
                <a href='/<?php echo $_SESSION['doors'][$path]['south'] ?>' data-ajax="false" style="padding-right: 10px;">
                    <img src="assets/door.png" style="width: 50px;">
                </a>
            <?php } ?>
        <?php } ?>
    </div>
</div>
</div>