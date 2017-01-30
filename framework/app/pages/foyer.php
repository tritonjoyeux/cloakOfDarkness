<?php
include("../app/include/layout.html");
var_dump($_SESSION['foyer']);

printf('<div style="text-align: center">Bienvenu dans le foyer</div>');
?>

<br>
<div style="width: 500px; height: auto; background-image:  url('assets/<?php echo $_SESSION['doors']['background'] ?>'); display: inline-block; text-align: left;">
	<div style="text-align:center; background-color: transparent; padding-top: 10px; height: 60px">
        <?php if($_SESSION['doors']['foyer']['north'] != 'empty'){ ?>

            <?php if($_SESSION['doors']['foyer']['north'] == 'lock'){ ?>
                <a href='#'>
                    <img src="assets/endDoor.png" style="width: 50px;">
                </a>
            <?php }else{ ?>
                <a href="/<?php echo $_SESSION['doors']['foyer']['north'] ?>" data-ajax="false">
                    <img src="assets/door.png" style="width: 50px;">
                </a>
            <?php } ?>
        <?php } ?>
	</div>
    <div style="display: inline-block; width: 245px; height: 355px; text-align: left; vertical-align: top">
        <?php if($_SESSION['doors']['foyer']['west'] != 'empty'){ ?>

            <?php if($_SESSION['doors']['foyer']['west'] == 'lock'){ ?>
                <a href='#' data-ajax="false" style="padding-left: 1px;line-height: 355px;">
                    <img src="assets/endDoor.png" style="width: 50px;">
                </a>
            <?php }else{ ?>
                <a href="/<?php echo $_SESSION['doors']['foyer']['west'] ?>" data-ajax="false" style="padding-left: 1px;line-height: 355px;">
                    <img src="assets/door.png" style="width: 50px;">
                </a>
            <?php } ?>
        <?php } ?>
    </div>
    <div style="display: inline-block; width: 245px; text-align: right; height: 355px; vertical-align: top">
        <?php if($_SESSION['doors']['foyer']['est'] != 'empty'){ ?>

            <?php if($_SESSION['doors']['foyer']['est'] == 'lock'){ ?>
                <a href='#' data-ajax="false" style="padding-right: 10px; line-height: 355px">
                    <img src="assets/endDoor.png" style="width: 50px;">
                </a>
            <?php }else{ ?>
                <a href="/<?php echo $_SESSION['doors']['foyer']['est'] ?>" data-ajax="false" style="padding-right: 10px; line-height: 355px">
                    <img src="assets/door.png" style="width: 50px;">
                </a>
            <?php } ?>
        <?php } ?>
    </div>

    <div style="text-align:right; background-color: transparent; height: 70px; display: inline-block; width: 283px; padding-bottom: 20px;">
        <?php if($_SESSION['doors']['foyer']['south'] != 'empty'){ ?>

            <?php if($_SESSION['doors']['foyer']['south'] == 'lock'){ ?>
                <a href='#' data-ajax="false" style="padding-right: 10px;" data-ajax="false">
                    <img src="assets/endDoor.png" style="width: 50px;">
                </a>
            <?php }else{ ?>
                <a href='/<?php echo $_SESSION['doors']['foyer']['south'] ?>' data-ajax="false" style="padding-right: 10px;">
                    <img src="assets/door.png" style="width: 50px;">
                </a>
            <?php } ?>
        <?php } ?>
    </div>
</div>
</div>