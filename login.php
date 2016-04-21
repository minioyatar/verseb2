<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/versebuster/core/init.php';
$user = new User();
?>
<?php
if(Input::get('registered')){
    require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/php/header.php" : $_SERVER['DOCUMENT_ROOT'] . "/php/header.php");
    ?>
    <div class="row">
        <section class="login-form">
            <?php 
            if(Session::exists('loginError')){
                ?>
                <div>
                    <p style="color:red; font-size:14px; margin-bottom: 0; letter-spacing: 1px;"><?php echo Session::flash('loginError'); ?> </p>
                </div>
                <?php
            }
            ?>        
            <form method="post" action="" role="login">
                <input class="button orange" type='hidden' name='token' value="<?php echo $token; ?>" />
                <div class="form-group">
                    <input type='text' name="username" required class="form-control" placeholder="Enter Username" />
                    <span class="glyphicon glyphicon-user"></span>
                    <span id='login_username_errorloc' class='error'></span>                    
                </div>
                
                <div class="form-group">
                    <input type="password" name="password" required class="form-control" placeholder="Enter password" />
                    <span class="glyphicon glyphicon-lock"></span>
                    <span id='login_password_errorloc' class='error'></span>                    
                </div>
                <input class="button orange" type='hidden' name='token' value="<?php echo Token::generate(); ?>" />
                <input class="btn btn-primary btn-block" type='submit' name='login' value='Login' />
                            
                <a href="#">Reset password</a> <!-- or <a href="#">create account</a>  -->
            </form>
        </section>
    </div>
    <style rel="stylesheet">
    .login-form {
        text-align: center;
        margin: 0 auto;

        max-width: 460px;
    }
    .login-form > section {
        padding: 35px 35px 25px 35px;
        border-radius: 5px;
    }
    .login-form a {
        color: #fff;
    }
    .login-form img {
        display: block;
        margin: 0 auto;
        margin-bottom: 55px;
    }

    form[role=login] {
        font: 14px/2.2em Lato, serif;
        color: #aaa;
    }   
    form[role=login] input,
    form[role=login] > button {
        font-size: 15px;
        padding: 10px 30px;
    }
    form[role=login] input {
        /*color: #777;*/
        /*background: rgba(180,180,180,.9);*/
        border: none;
        height: 2.6em;
        padding: 10px 40px;
        border-radius: 3px;
        -webkit-box-shadow: inset 0 0 1px 1px rgba(150, 150, 150, .1);
        -moz-box-shadow: inset 0 0 1px 1px rgba(150, 150, 150, .1);
        box-shadow: inset 0 0 1px 1px rgba(150, 150, 150, .1);
    }
    form[role=login] > div {
        margin: 30px 0;
        position: relative; 
    }
    form[role=login] > button {
        margin-top: 15px;
        margin-bottom: 15px;
        background: #0c56a9;
        border: 1px solid #0c4584;
    }

    .form-control + .glyphicon {
        position: absolute;
        left: 0;
        top: 14%;
        padding: 8px 0 0 17px;
        font-size: 15px;
        color: #757575;
    }    
    </style>

    <?php
    require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/php/footer.php" : $_SERVER['DOCUMENT_ROOT'] . "/php/footer.php");
        //ENF OF LOGIN FOR NEW REGISTERED
}elseif($user->isLoggedIn()){    
    ?>
    <li><span style="color:#fff !important;">Welcome back </span><a href="<?php echo SITE_URL; ?>account/"><?php echo escape($user->data()->username);?></a>!</li>
    <li><a href="<?php echo SITE_URL; ?>includes/login/logout.php">Log out</a></li>
<?php //END OF WELCOME TO THE REGISTERED USER
    }else if(Session::exists('loginError') || !$user->isLoggedIn() ){//LOGIN FORM
        ?>
        <li class="dropdown <?php if(Session::exists('loginError')){ echo "open"; }?> ">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
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
                            <!-- <label for='username' >UserName</label><br/> -->
                            <input type='text' name='username' id='username' placeholder="Username" /><br/>
                            <span id='login_username_errorloc' class='error'></span>
                        </div>
                        
                        <div class='loginBoxes'>
                            <!-- <label for='password' >Password</label><br/> -->
                            <input type='password' name='password' id='password' size="" maxlength="50" autocomplete="off" placeholder="Password" /><br/>
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
        <!-- <li style="background-color:#ED1C24"><a href="<?php echo SITE_URL; ?>sign-up.php">Become a Member</a></li> -->
        <li style=""><a href="/versebuster/membership.html">Become a Member</a></li>
        <?php
    }//END OF LOGIN FORM
    ?>
