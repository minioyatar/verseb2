<?php	
	function infoPaypal( $data) {

		define( 'SSL_URL', 'https://www.paypal.com/cgi-bin/webscr' );
		define( 'SSL_SAND_URL', 'https://www.sandbox.paypal.com/cgi-bin/webscr' );

		$merchant_email = Config::get('paypal/merchant_email');
		$paypal_mode = Config::get('paypal/paypal_mode');
		$currency_code = Config::get('paypal/currency_code');
		$thanks_page = Config::get('paypal/thanks_page');
		$cancel_url = Config::get('paypal/cancel_url');		

		$action = '';
	//Is this a test transaction?
		$action = ($paypal_mode) ? SSL_SAND_URL : SSL_URL;

	$form = '';
		$form .= '<form name="frm_payment_method" action="' . $action . '" method="post">';
		$form .= '<input type="hidden" name="business" value="' . $merchant_email . '" />';
	// Instant Payment Notification & Return Page Details /
		// $form .= '<input type="hidden" name="notify_url" value="' . $data['notify_url'] . '" />';
		$form .= '<input type="hidden" name="cancel_return" value="' . $cancel_url . '" />';
		$form .= '<input type="hidden" name="return" value="' . $thanks_page . '" />';
		$form .= '<input type="hidden" name="rm" value="2" />';
	// Configures Basic Checkout Fields -->
		$form .= '<input type="hidden" name="lc" value="" />';
		$form .= '<input type="hidden" name="no_shipping" value="1" />';
		$form .= '<input type="hidden" name="no_note" value="1" />';
	// <input type="hidden" name="custom" value="localhost" />-->
		$form .= '<input type="hidden" name="currency_code" value="' . $currency_code . '" />';
		$form .= '<input type="hidden" name="page_style" value="paypal" />';
		$form .= '<input type="hidden" name="charset" value="utf-8" />';
		$form .= '<input type="hidden" name="item_name" value="' . $data['product_name'] . '" />';
		$form .= '<input type="hidden" value="_xclick" name="cmd"/>';
		$form .= '<input type="hidden" name="amount" value="' . $data['amount'] . '" />';
		$form .= '<script>';
		$form .= 'setTimeout("document.frm_payment_method.submit()", 2);';
		$form .= '</script>';
		$form .= '</form>';
		return $form;
	}
?>