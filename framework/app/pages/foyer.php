<?php
include("../app/include/layout.html");
printf('<div style="text-align: center">Bienvenu dans le foyer ');
?>

<br>
<div style="width: 500px; height: auto; background-image:  url('assets/foyer.png'); display: inline-block; text-align: left;">
	<div style="text-align:center; background-color: transparent; padding-top: 10px">
		<a href='#'>
			<img src="assets/endDoor.png" style="width: 50px;">
		</a>
	</div>

	<a href='cloak' data-ajax="false" style="padding-left: 1px;line-height: 380px;">
		<img src="assets/door.png" style="width: 50px;">
	</a>
	<div style="text-align:center; background-color: transparent; padding-bottom: 10px">
		<a href='bar' data-ajax="false">
			<img src="assets/door.png" style="width: 50px;">
		</a>
	</div>
</div>
</div>