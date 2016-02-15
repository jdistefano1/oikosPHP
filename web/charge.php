<?php
  require_once(dirname(__FILE__) . '/config.php');

  $token  = $_POST['stripeToken'];

  
  $customer = Stripe_Customer::create(array(
      'email' => 'customer@example.com',
      'card'  => $token
  ));

  var_dump($customer->keys());
  
  echo '<h1>Successfully charged $50.00!</h1>';
