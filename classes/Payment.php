<?php 
class Payment{
	public static function postPayment($planID,$plantCost,$planDesc, $lastInsertId){
		// $paypal_live_mode = false;
		// $_SSL_SAND_URL = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
		// $_SSL_URL = 'https://www.paypal.com/cgi-bin/webscr';

	    //Get exact price of selected membership plan from database
		// $memPlanType = DB::getInstance()->get('membershipplans', array('memPlanID', '=', $planType));
		// $plantCost = $memPlanType->first()->cost;
		// $planID = $memPlanType->first()->planID;

		//set POST variables

		$paypalFullUrl = Config::get('paypal/url');
//hay kaueogot dapat gali hay gin 1 line string ko eang ra pde man
//d man kailangan nga e array ag forloop gid bwesit
		$fields = array(
            'item_name' => urlencode($planDesc),
            'amount' => urlencode($plantCost),
            'business' => urlencode(Config::get('paypal/merchant_email')),
            'cancel_return' => urlencode(Config::get('paypal/cancel_url')),
            'return' => urlencode(Config::get('paypal/thanks_page')),
            'rm' => urlencode(2),
            'item_number' => urlencode($planID),
            'no_shipping' => urlencode(1),
            'custom' => urlencode($lastInsertId),
            'currency_code' => urlencode(Config::get('paypal/currency_code')),
            'page_style' => urlencode('paypal'),
            'charset' => urlencode('utf-8'),
            'cmd' => urlencode('_xclick')
        );

		//url-ify the data for the POST
		$fields_string = '';
		foreach($fields as $key=>$value) { 
		    $fields_string .= $key.'='.$value.'&'; 
		}
		// $fields_string = implode('&', $fields); 
		// rtrim($fields_string, '&');

		return $paypalFullUrl . "?" . $fields_string;	

	}
	public static function confirmPayment(){

	}
}