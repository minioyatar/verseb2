<?php
require 'vendor/autoload.php';



$paypal = new \PayPal\Rest\ApiContext(
	new \PayPal\Auth\OAuthTokenCredential(
		'ARSWwAQJ-Gpgwb5GcmVgfQuXUvU_ldwtEqd_usPJ6U_kkHt8UlQcsGyqs9zbPIVBBHJrc9hjB3I_hwIK',
		'EN6vIyNxDgv6g_MPa088lN_DfhnaS9S9fLxQdglMKCkJ0AtChrC88y3z40kcOJdwW_PgDiza3SKGYEBx'
		)
	);
?>