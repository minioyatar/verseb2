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
			//this values needs to be change
			'fname' => array(
				'required' => true,
				'min' =>2,
				'max' =>50
				),
			'lname' => array(
				'required' => true,
				'min' =>2,
				'max' =>50
				)
		));

		if($validation->passed()){
			try{
				$user->update(array(
					'fname' => Input::get('fname'),
					'lname' => Input::get('lname'),
					'username' => Input::get('username')
					));

				Session::flash('home', 'Your details has been updated.');
				Redirect::to('index.php');

			}catch(Exception $e){
				die($e->getMessage());
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
                            <label for='fname' >First Name</label>
                            <input type='text' name='fname' id='fname' value="<?php echo escape($user->data()->fname); ?>"/>
                            <span id='login_fname_errorloc' class='error'></span>
                        </div>

                        <div class='loginBoxes'>
                            <label for='lname' >Last Name</label>
                            <input type='text' name='lname' id='lname' value="<?php echo escape($user->data()->lname); ?>"/>
                            <span id='login_lname_errorloc' class='error'></span>
                        </div>

<!--                         <div class='loginBoxes'>
                            <label for='username' >Username</label>
                            <input type='text' name='username' id='username' value="<?php echo escape($user->data()->username); ?>"/>
                            <span id='login_username_errorloc' class='error'></span>
                        </div>    -->                
                         
                        <div class='loginBoxes'>
                            <input class="button orange" type='submit' name='update' value='Update' />
                        </div>

                    </fieldset>
                </form>
</div><!-- /#row main-text-->

<div>
<a href="changepassword.php">Update Password</a>
</div>
