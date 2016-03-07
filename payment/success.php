<?php
require_once '../core/init.php';
$_db = DB::getInstance();

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

			//update database base on status Input::exists('st')
			if(Input::get('st') === 'Completed'){

				$_db->update('members_tbl', 'memID', $matchId, array(
					'grp' => 1
					));
				// Session::flash('home', 'Please see email for verification of your account.');
				// Redirect::to('../../versebuster2/login.php?registered=true');
			}

		}else{
			// no transcode found found
			die();
		}
	}else{//success = false
		Redirect::to(SITE_URL . 'membership.html');
		//cancel transaction
		//update database that this ID had canceled payment
		//display text asking what was the problem of the cancel
	}
}else{//no post/get data
	//redirect for error
	die();
}
	
// foreach ($_REQUEST as $key=>$value) {
//     echo $key, ' || ' , $value , " <br>";
// }
// $sql = "UPDATE transac_tbl SET status='complete' WHERE payeeid=1239" ;
//    return returning_query_value($sql);
// echo $receiver_email ;
//Rechecking the product price and currency details
// if($item_price==$price && $item_currency==$currency)
// {
// echo "<h1>Welcome, Guest</h1>";
// echo "<h1>Payment Successful</h1>";
// }
// else
// {
//     echo "<h1>Payment Failed</h1>";
// }
?>