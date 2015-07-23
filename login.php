<?php
    $user = new User();
    if($user->isLoggedIn()){    
?>
        <li><span style="color:#fff !important;">Welcome back </span><a href="<?php echo Config::get('svrInfo/path'); ?>account/index.php"><?php echo escape($user->data()->username);?></a>!</li>
        <li><a href="<?php echo Config::get('svrInfo/path'); ?>includes/login/logout.php">Log out</a></li>
<?php
    }                                                                            
    else{
?>
        <li class="dropdown <?php if(Session::exists('loginError')){ echo "open"; }?> ">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
            <div id='' class="dropdown-menu dropdwon-login">
                <form id='' action='' method='post' >
                    <fieldset >
                        <input class="button orange" type='hidden' name='token' value="<?php echo $token; ?>" />
                        <?php 
                            if(Session::exists('loginError')){
                        ?>
                            <div>
                                <p style="color:red; font-size:14px; margin-bottom: 0; letter-spacing: 1px;"><?php echo Session::flash('loginError'); ?> </p>
                            </div>
                        <?php
                            }
                        ?>
                        <div class='loginBoxes'>
                            <label for='username' >UserName</label><br/>
                            <input type='text' name='username' id='username'/><br/>
                            <span id='login_username_errorloc' class='error'></span>
                        </div>
                        
                        <div class='loginBoxes'>
                            <label for='password' >Password</label><br/>
                            <input type='password' name='password' id='password' size="" maxlength="50" autocomplete="off" /><br/>
                            <span id='login_password_errorloc' class='error'></span>
                        </div>

                        <div class="loginBoxes">
                            <label for="remember">
                                <input type="checkbox" name="remember" id="remember">Remember me
                            </label>
                        </div>
                         
                        <div class='loginBoxes'>
                            
                            <input class="button orange" type='submit' name='login' value='Login' />
                        </div>

                        <div class='short_explanation' >
                            <a style="color:#f59c3b !important;" href='reset-pwd-req.php'>Forgot Password?</a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </li>
        <li class=""><a href="<?php echo Config::get('svrInfo/path'); ?>sign-up.php">Become a member</a></li>
<?php
    }
?>