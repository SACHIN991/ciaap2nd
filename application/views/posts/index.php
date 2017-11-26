<h1><?php echo $title ?></h1>

<?php
foreach ($posts as $post) {
	?>

	<div class="container">
<div class="row">
    <div class="col-md-1"></div>
	<div class="col-md-6">
		<div id="postlist">
			<div class="panel">
                <div class="panel-heading">
                    <div class="text-center">
                        <div class="row">
                            <div class="col-sm-9">
                                <h3 class="pull-left"><?php echo $post['title']?></h3>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            <div class="panel-body">
               <?php echo $post['body']?> <a href="<?php echo base_url();?>posts/view/<?php echo $post['id'];?>">Read more</a>
            </div>
            
           
</div>
	<div class="col-md-1"></div>
	<div class="col-md-3">
	</div>
	<div class="col-md-1">
	</div>
</div>
</div>
<?php
}
 ?>