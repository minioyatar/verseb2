<?PHP
require_once 'core/init.php';

$user = new User();

if(!$user->isLoggedIn()){
    Redirect::to('index.php');
}

if(Input::exists()){
    if(Token::check(Input::get('token'))){
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'password_current' => array(
                'required' => true
            ),
            'password_new' => array(
                'required' => true,
                'min' =>6
            ),
            'password_new_again' => array(
                'required' => true,
                'matches' => 'password_new'
            )
        ));
        if($validation->passed()){
            if(Hash::make(Input::get('password_current'), $user->data()->salt) !== $user->data()->password){
                echo 'Your current password is wrong';
            }else{
                $salt = Hash::salt(32);
                $user->update(array(
                    'password' => Hash::make(Input::get('password_new'), $salt),
                    'salt' => $salt
                ));

                Session::flash('home', 'Your password has been changed!');
                Redirect::to('index.php');
            }              
        }else{
                foreach ($validation->errors() as $error) {
                    echo $error, '<br>';
                }  
        }
    }
}
?>
<div class="row main-text"><!-- #col-lg-9 introduction content -->

                <form id='' action='' method='post' >
                    <fieldset >
                        <input class="button orange" type='hidden' name='token' value="<?php echo Token::generate(); ?>" />
                        <!-- <div><span class='error'>{$ERROR:this is an error div}</span></div> -->
                       
                        <div class='loginBoxes'>
                            <label for='password_current' >Current Password</label>
                            <input type='password' name='password_current' id='password_current'/>
                            <span id='login_fname_errorloc' class='error'></span>
                        </div>

                        <div class='loginBoxes'>
                            <label for='password_new' >New Password</label>
                            <input type='password' name='password_new' id='password_new'/>
                            <span id='login_fname_errorloc' class='error'></span>
                        </div>

                        <div class='loginBoxes'>
                            <label for='password_new_again' >New again Password</label>
                            <input type='password' name='password_new_again' id='password_new_again'/>
                            <span id='login_fname_errorloc' class='error'></span>
                        </div>                  
                         
                        <div class='loginBoxes'>
                            <input class="button orange" type='submit' name='update' value='Update' />
                        </div>

                    </fieldset>
                </form>
</div><!-- /#row main-text-->