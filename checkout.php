<?php

use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;
use PayPal\Api\CartBase;
// require_once $_SERVER['DOCUMENT_ROOT'] . '/core/init.php';

require 'app/start.php';

//validation here

// echo $_POST['price'];

$product = $_POST['pckCat'];
$price = $_POST['price'];
// echo $product . " ---" . $price;
//no shipping
$shipping = 0;

$total = $price + $shipping;

$payer = new Payer();
$payer->setPaymentMethod('paypal');

$item = new Item();
$item->setName($product)
	->setCurrency('USD')
	->setQuantity(1)
	->setPrice($price);

$itemList = new ItemList();
$itemList->setItems([$item]);

$details = new Details();
$details->setShipping($shipping)
	->setSubtotal($price);

$amount = new Amount();
$amount->setCurrency('USD')
	->setTotal($total)
	->setDetails($details);

$transaction = new Transaction()	;
$transaction->setAmount($amount)
	->setItemList($itemList)
	->setDescription('Payment for membership')
	->setInvoiceNumber(uniqid());

$CartBase = new CartBase();
$CartBase->setCustom("this is my custome message");

$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl(SITE_URL . '/pay.php?success=true')
	->setCancelUrl(SITE_URL . '/pay.php?success=false');

$payment = new Payment();
$payment->setIntent('sale')
	->setPayer($payer)
	->setRedirectUrls($redirectUrls)
	->setTransactions([$transaction]);

try{
	$payment->create($paypal);
}	catch(Exception $e){
	die($e);
}
// echo $CartBase->getCustom();  
$approvalUrl = $payment->getApprovalLink();
 header("Location: {$approvalUrl}" )
?>