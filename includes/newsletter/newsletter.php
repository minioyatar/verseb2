
<div class="get-in-touch">
    <h2>Newsletter</h2>
    
    <p>Stayed tuned with our FREE monthly newsletter</p>
    
    <form action="" method="post" id="" accept-charset='UTF-8'> 
    <input class="button orange" type='hidden' name='token' value="<?php echo $token; ?>" />                       
        <div class="input-group">
          <div class="error_msg"><?php //if(in_array($operator, $operators)){}?></div>
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="news_name" type="text" class="form-control" placeholder="Your Name" autocomplete="off" value="<?php echo Input::get('news_name'); ?>">
        </div>
        <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input name='news_email' type="text" class="form-control" placeholder="your@email.com" autocomplete="off" value="<?php echo Input::get('news_email'); ?>"> 
        </div>
        <input type='submit' name='newsletter' value='Subscribe' class="btn btn-danger btn-sm btn-block sm-btn-red" />
    </form>
</div>


        
