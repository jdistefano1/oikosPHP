<?php
require_once('stripe/init.php');
$stripe = array(
  secret_key      => getenv('sk_test_vrlJzvYx3uPbyLVsGboMg5h0'),
  publishable_key => getenv('pk_test_lXReVaKu10izIVP0RRmg0y5q')
);
\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>