<h1><?php echo $title ?></h1>

<?php echo validation_errors(); ?>

<div class="container">
	<div class="col-md-5">
		<div class="form-area">  
			<form role="form" action="<?php echo base_url(); ?>posts/create" method="post">
				<br style="clear:both">
				<h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
				<div class="form-group">
					<input type="text" class="form-control" id="title" name="title" placeholder="title" required>
				</div>
				

				<div class="form-group">
					<textarea name="body" class="form-control" type="textarea" id="body" placeholder="body" maxlength="140" rows="7"></textarea>
					<span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
				</div>
				<input type="submit" class="btn btn-primary pull-right" name="submit" value="submit">
							</form>

		</div>
	</div>
</div>