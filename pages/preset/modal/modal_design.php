<div class="modal fade" id="<?php echo $id ?>">
	<div class="modal-dialog">
		<div class="modal-content text-center">
			
			<div class="modal-header">
				<h4 class="modal-title cldh-header"><?php echo $title; ?></h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<div class="modal-body">
				<?php
				include $body;
				?>
			</div>

		</div>
	</div>
</div>