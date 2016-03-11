<?php
	require_once '../core/init.php';
	$_db = DB::getInstance();

    //setup email format
    $subject = "Versebuster Registration";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <webmaster@versebuster.com>' . "\r\n";




//check data from paypal
if(Input::exists('get')){//if there is post/get data
	if(Input::get('success') == 'true'){//success = true

		//catch data
		$usermemID = (String)Input::get('cm');

		//find in database if match
		$result = $_db->get('members_tbl', array('memID', '=', $usermemID));

		//update if there is match
		if($result->count()){
			$matchId = $result->first()->memID;
			$to = $result->first()->email;
			$title = $result->first()->title;
			$fname = $result->first()->fname;
			$lname = $result->first()->lname;

			if(Input::get('st') == 'Completed'){
				//update database
					try{
						$_db->update('members_tbl', 'memID', $matchId, array(
							'grp' => 1
							));
						    $message = "Dear {$title} {$fname} {$lname} <br>"
						    			. "Thank you for your registration. Follow link to login to your Versebuster account. <a href='" . SITE_URL . "/index.php'>Versebuster<sup>&copy;</sup></a> <br><br>"
						    			. "If you did not try to register with this email address, someone else has registered using your email account and password. You may want to change your password as a precaution.<br>"
						    			. "For further assistance, please contact us at webmaster@versebuster.com. You’ll need to provide Customer Care with your Versebuster Credentials. Your credentials are required to link your Versebuster ID to your Versebuster products. <br>"
						    			. "Thank you, <br> Versebuster Customer Care";
						    Redirect::to(SITE_URL .'login.php?registered=true');
					}catch(Exception $e){
						Redirect::to(500);
					}
			}else{
				//email client and update database
					try{
						$_db->update('members_tbl', 'memID', $matchId, array(
							'transStatus' => Input::get('st')
							));
				    $message = "Dear {$result->first()->title} {$result->first()->fname} {$result->first()->lname} <br>"
				    			. "Unfortunately we could not process your registration due to problem with some issue account. We received the status of your payment from Paypal as : " . Input::get('st') . ".<br><br>"
				    			. "If you did not try to register with this email address, someone else has registered using your email account and password. You may want to change your password as a precaution.<br>"
				    			. "For further assistance, please contact us at webmaster@versebuster.com. You’ll need to provide Customer Care with your Versebuster Credentials. <br>"
				    			. "Thank you, <br> Versebuster Customer Care";		
					//alert webmaster for this error
    			    $headers .= 'Bcc: webmaster@versebuster.com' . "\r\n";
    			    Redirect::to(SITE_URL . 'membership.html');
					}catch(Exception $e){
						// print_r('Something went wrong');
						Redirect::to(500);
					}				
			}
			mail($to,$subject,$message,$headers);

		}else{
			// no transcode found found
			Redirect::to(404);
		}
	}else{//success = false
		//cancel transaction
		Redirect::to(SITE_URL . 'membership.html');
		//update database that this ID had canceled payment
		//display text asking what was the problem of the cancel
	}
}else{//no post/get data
	//redirect for error
	Redirect::to(404);
}

?>