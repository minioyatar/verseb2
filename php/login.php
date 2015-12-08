<?php
require_once 'core/init.php';
    if(Input::exists()){//validation process
        if(Token::check(Input::get('token'))){

            $validate = new Validate();
            $validation = $validate->check($_POST, array(
                'username' => array('required' => true),
                'password' => array('required' => true)
                ));

            if($validation->passed()){
                $user = new User();
                $login = $user->login(Input::get('username'), Input::get('password'));

                if($login){
                    Redirect::to('index.php');// page should redirect to user profile page
                }else {
                    echo "<p>sorry, logging in failed.</p>";
                }

            }else{
                foreach ($validation->errors() as $error) {
                    echo $error, "<br>";
                }
            }
        }
    }
?>


<li class=" dropdown ">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
    
    <!-- Form Code Start -->
    <div id='fg_membersite' class="dropdown-menu dropdwon-login">
        <form id='login' action='' method='post' accept-charset='UTF-8'>
            <fieldset >
                
                <input type='hidden' name='submitted' id='submitted' value='1'/>
                
                <!-- <div class='short_explanation'>* required fields</div> -->
                
                <div><span class='error'>{$ERROR:this is an error div}</span></div>
                
                <div class='loginBoxes'>
                    <label for='username' >UserName</label><br/>
                    <input type='text' name='username' id='username' value=''<?php //echo $fgmembersite->SafeDisplay('username') ?> size="" maxlength="50" autocomplete="off" autofocus /><br/>
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
                    <input class="button orange" type='hidden' name='token' value="<?php echo Token::generate(); ?>" />
                    <input class="button orange" type='submit' name='login' value='Login' />
                </div>
                <div class='short_explanation' ><a style="color:#f59c3b !important" href='reset-pwd-req.php'>Forgot Password?</a></div>
            </fieldset>
        </form>
    </div>
</li>
<li class=""><a href="sign-up.php">Subscribe</a></li>
