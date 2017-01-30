<?php
include("../app/include/layout.html");

printf('<div style="text-align: center">Bienvenu dans le bar');

?>
<br>

<div style="width: 500px; height: 500px; 

<?php
 if (isset($_SESSION['lightBar'])){
 	echo "background-image:  url('assets/foyer.png');";
 }else{
 	echo "background-image:  url('assets/barUnlight.png');";
 }
?>

 display: inline-block; text-align: left;">
	<div style="text-align:center; background-color: transparent; padding-top: 10px">
		<a href='foyer' data-ajax="false">
			<img src="
<?php
 if (isset($_SESSION['lightBar'])){
 	echo 'assets/door.png"';
 }else{
 	echo 'assets/doorLight.png"';
 }
?>
			 style="width: 50px;">
		</a>
	</div>
</div>
</div>