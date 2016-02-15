<?php
  require_once(dirname(__FILE__) . '/config.php');

  $token  = $_POST['stripeToken'];


  echo '<h1>Successfully charged $50.00!</h1>';
