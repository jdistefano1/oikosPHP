<?php
require_once('d:\home\site\wwwroot\public\vendor\autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_vrlJzvYx3uPbyLVsGboMg5h0",
  "publishable_key" => "pk_test_lXReVaKu10izIVP0RRmg0y5q"
);

d:\home\site\wwwroot\public\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>