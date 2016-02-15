<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_vrlJzvYx3uPbyLVsGboMg5h0",
  "publishable_key" => "pk_test_lXReVaKu10izIVP0RRmg0y5q"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
