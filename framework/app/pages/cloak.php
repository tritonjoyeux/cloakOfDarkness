<?php
include("../app/include/layout.html");

printf('<div style="text-align: center">Bienvenu dans la CloakRoom');

?>
<br>

<div style="width: 500px; height: 500px; background-color: grey; display: inline-block; text-align: left;  background-image:  url('assets/foyer.png');">
	<div style="text-align:left; background-color: transparent; display: inline-block; width: 250px">
		<a href='#' style="padding-left: 10px; line-height: 500px" id="hook">
			<img src="assets/hook.png" style="width: 20px;">
			<span id="jacket">
<?php 
if(isset($_SESSION['lightBar'])){
	echo '<img src="assets/jacket.png" style="width: 30px">';
}
?>
		</span>
		</a>
	</div>
	<div style="text-align:right; background-color: transparent; display: inline-block; width: 245px">
		<a href='foyer' data-ajax="false" style="padding-right: 10px; line-height: 500px">
			<img src="assets/door.png" style="width: 50px;">
		</a>
	</div>
</div>
</div>
<a href="#popupHook" data-rel="popup" id="hookDisplay">
</a>

<div data-role="popup" id="popupHook" data-position-to="window">
	<p id="popupContent">A light absorbing jacket.</p>
</div>

<script>
	$(function(){
		$('#hook').on('click', function(){
			$.ajax({
				url: '/hook',
				method: 'post',
				data: 'secret=<?php echo $_SESSION['secret']; ?>',
				success: function(data){
					$('#popupContent').html(data);
					$('#hookDisplay').click();
					if(data == "You put your jacket on the hook"){
						$('#jacket').html('<img src="assets/jacket.png" style="width: 30px">');
						$('#jacketInventory').remove();
					}
				}
			})
		});
	});
</script>