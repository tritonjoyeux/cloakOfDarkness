<div style="text-align: center">
	Inventaire
	<br>
	<div style="text-align: center;">
		<table border="2" style=" margin-left:auto;margin-right:auto">
			<tr>
				<td style="width: 50px; height: 50px;">
					<?php 
						if(in_array('jacket', $_SESSION['inventory']))
							echo '<a href="#popupJacket" data-rel="popup">
							<img id="jacketInventory" src="assets/jacket.png" style="width: 50px; height: 50px; padding:10px;">
						</a>
						<div data-role="popup" id="popupJacket" data-position-to="window">
							<p>A light absorbing jacket.</p>
						</div>';
					?>
				</td>
				<td style="width: 50px; height: 50px"></td>
				<td style="width: 50px; height: 50px"></td>
				<td style="width: 50px; height: 50px"></td>
			</tr>
		</table>
	</div>
</div>