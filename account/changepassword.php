<?PHP
    require_once($_SERVER['DOCUMENT_ROOT'] . "/versebuster/account/admin-header.php");
?>


<?PHP
// require_once $_SERVER['DOCUMENT_ROOT'] . '/versebuster/core/init.php';

// $user = new User();

// if(!$user->isLoggedIn()){
//     Redirect::to('index.php');
// }

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
                // var_dump(Hash::make(Input::get('password_new'), $salt));
                $user->update('members_tbl', array(
                    'password' => Hash::make(Input::get('password_new'), $salt),
                    'salt' => $salt
                ));

                Session::flash('home', 'Your password has been changed!');
                Redirect::to('../index.php');
            }              
        }else{
                foreach ($validation->errors() as $error) {
                    echo $error, '<br>';
                }  
        }
    }
}
?>






<div class="container main-text"><!-- #col-lg-9 introduction content -->
    


    <div class="col-sm-6 ">
        <h1>Change Password</h1>
        <p class="text-center">Use the form below to change your password. Your password cannot be the same as your username.</p>
        <form method="post" id="passwordForm">
            <input type='hidden' name='token' value="<?php echo Token::generate(); ?>" />
            <input type="password" class="input-lg form-control" name='password_current' id='password_current' placeholder="Current Password">

            <br>

            <input type="password" class="input-lg form-control" name="password_new" id="password_new" placeholder="New Password" autocomplete="off">
            <div class="row">
                <div class="col-sm-6">
                    <span id="8char" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> 8 Characters Long<br>
                    <span id="ucase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Uppercase Letter
                </div>
                <div class="col-sm-6">
                    <span id="lcase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Lowercase Letter<br>
                    <span id="num" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Number
                </div>
            </div>
            <input type="password" class="input-lg form-control" name="password_new_again" id="password_new_again" placeholder="Repeat Password" autocomplete="off">
            <div class="row">
                <div class="col-sm-12">
                    <span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> Passwords Match
                </div>
            </div>
            <input type="submit" class="disabled col-xs-12 btn btn-primary btn-load btn-lg" name="changepass-submit" id="changepass-submit" data-loading-text="Changing Password..." value="Change Password">
        </form>
    </div>




<!--                 <form id='' action='' method='post' >
                    <fieldset >
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
                </form> -->
</div><!-- /#row main-text-->

<?PHP
    require_once($_SERVER['DOCUMENT_ROOT'] . "/versebuster/account/admin-footer.php");
?>