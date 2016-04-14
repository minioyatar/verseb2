<?PHP
	require_once($_SERVER['DOCUMENT_ROOT'] . "/php/header.php");
?>

<div class="container">    
  <div class="text-center">           
      <div class="col-lg-6">
    <form action="" method="post" id="" accept-charset='UTF-8'> 
    <input class="button orange" type='hidden' name='token' value="<?php echo $token; ?>" />

        <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input name='news_email' type="text" class="form-control" placeholder="your@email.com" autocomplete="off" value="<?php echo Input::get('news_email'); ?>"> 
        </div>
        <input type='submit' name='reset' value='Send Reset Request' class="btn btn-danger btn-sm btn-block sm-btn-red" />
    </form>
      </div>
  </div>  
</div>


<?PHP
	require_once($_SERVER['DOCUMENT_ROOT'] . "/php/footer.php");
?>