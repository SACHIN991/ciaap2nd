<h1><?php echo $title ?></h1>



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
               <?php echo $post['body']?> 
            </div>
            
           
</div>
  <div class="col-md-1"></div>
  <div class="col-md-3">
  </div>
  <div class="col-md-1">
  </div>
</div>
</div>
