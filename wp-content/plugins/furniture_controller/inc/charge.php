<?php
	require_once('config.php');

  $token  = $_POST['stripeToken'];
  $amount = $_POST['amount'] * 100;

  $customer = \Stripe\Customer::create(array(
      'email' => 'customer@example.com',
      'source'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => $amount, //$50
      'currency' => 'usd'
  ));

  echo '<h1>Successfully charged '.$amount.'.00!</h1>';
?>	