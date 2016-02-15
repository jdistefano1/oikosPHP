<?php
  require_once(dirname(__FILE__) . '/config.php');

  $token  = $_POST['stripeToken'];

  

  var_dump($customer->keys());
  
  echo '<h1>Successfully charged $50.00!</h1>';
