<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/versebuster2/core/init.php';
$_db = DB::getInstance();

// define("USE_SANDBOX", 1);
// if(USE_SANDBOX == true) {
//   $paypal_url = "https://www.sandbox.paypal.com/cgi-bin/webscr";
// } else {
//   $paypal_url = "https://www.paypal.com/cgi-bin/webscr";
// }
//   $_SSL_SAND_URL = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
//   $_SSL_URL = 'https://www.paypal.com/cgi-bin/webscr';
// $url = (Config::get('paypal/paypal_live_mode')) ? Config::get('paypal/live_url') : Config::get('paypal/sandbox_url');

// STEP 1: read POST data

// Reading POSTed data directly from $_POST causes serialization issues with array data in the POST.
// Instead, read raw POST data from the input stream.
$raw_post_data = file_get_contents('php://input');
$raw_post_array = explode('&', $raw_post_data);
$myPost = array();
foreach ($raw_post_array as $keyval) {
  $keyval = explode ('=', $keyval);
  if (count($keyval) == 2)
    $myPost[$keyval[0]] = urldecode($keyval[1]);
}

// read the IPN message sent from PayPal and prepend 'cmd=_notify-validate'
$req = 'cmd=_notify-validate';
if(function_exists('get_magic_quotes_gpc')) {
  $get_magic_quotes_exists = true;
}
foreach ($myPost as $key => $value) {
  if($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1) {
    $value = urlencode(stripslashes($value));
  } else {
    $value = urlencode($value);
  }
  $req .= "&$key=$value";
}


// STEP 2: POST IPN data back to PayPal to validate

$ch = curl_init(Config::get('paypal/url'));
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));

// In wamp-like environments that do not come bundled with root authority certificates,
// please download 'cacert.pem' from "http://curl.haxx.se/docs/caextract.html" and set
// the directory path of the certificate as shown below:
// curl_setopt($ch, CURLOPT_CAINFO, dirname(__FILE__) . '/cacert.pem');
if( !($res = curl_exec($ch)) ) {
// error_log("Got " . curl_error($ch) . " when processing IPN data");
  curl_close($ch);
  exit;
}
curl_close($ch);

$to = Input::get('payer_email');
$subject = "Versebuster Payment Confirmation";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@versebuster.com>' . "\r\n";
// $headers .= 'Cc: herminioyatarjr@gmail.com' . "\r\n";
$message = "Thank you for your registration. This is the revision!!!! ";
if(Input::get('payment_status') === 'Completed'){
  $message .= Input::get('payment_status');
}

// STEP 3: Inspect IPN validation result and act accordingly
if (strcmp ($res, "VERIFIED") == 0) {
// The IPN is verified, process it:
// check whether the payment_status is Completed
// check that txn_id has not been previously processed
// check that receiver_email is your Primary PayPal email
// check that payment_amount/payment_currency are correct
// process the notification


// IPN message values depend upon the type of notification sent.
// To loop through the &_POST array and print the NV pairs to the screen:

// foreach($_POST as $key => $value) {
//   $message .= $key." = ". $value."<br>";
// }

//convert date timestamp
  $payment_date = Input::get('payment_date');
  $payment_date = date('Y-m-d h:i:s',strtotime($payment_date));

//update database here
  try{
    $_db->insert('transac_tbl', array(
      'txn_id' => Input::get('txn_id'),
      'memID' => Input::get('custom'),
      'first_name' => Input::get('first_name'),
      'last_name' => Input::get('last_name'),
      'payer_email' => Input::get('payer_email'),
      'payer_id' => Input::get('payer_id'),
      'payment_status' => Input::get('payment_status'),
      'payment_date' => $payment_date,
      'payment_gross' => Input::get('payment_gross'),
      'payment_fee' => Input::get('payment_fee')
      ));
    if(Input::get('payment_status') === 'Completed'){
      $_db->update('members_tbl', 'memID', Input::get('custom'), array(
        'grp' => 1
        ));
    }
// $_db->dbConn()->lastInsertId();

  }catch(Exception $e){
    die($e->getMessage());
  }

//notify user here
  mail($to,$subject,$message,$headers);
} else if (strcmp ($res, "INVALID") == 0) {
// IPN invalid, log for manual investigation

//email developer here
// $message =  "The response from IPN was: <b>" .$res ."</b>";
// mail($to,$subject,$message,$headers);
}
?>
