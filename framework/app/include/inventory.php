<div style="text-align: center">
	Inventaire
	<br>
	<div style="text-align: center;">
		<table border="2" style=" margin-left:auto;margin-right:auto">
			<tr>
                <?php
                foreach ($_SESSION['inventory'] as $key => $inventory){
                ?>
				<td style="width: 50px; height: 50px;">
					<a href="#popup<?php echo $key ?>" data-rel="popup">
                        <img id="jacketInventory" src="assets/<?php echo $inventory['pic'] ?>" style="width: 50px; height: 50px; padding:10px;">
                    </a>
                    <div data-role="popup" id="popup<?php echo $key ?>" data-position-to="window">
                        <p><?php echo $inventory['desc'] ?></p>
                    </div>
				</td>
				<?php } ?>
			</tr>
		</table>
	</div>
</div>