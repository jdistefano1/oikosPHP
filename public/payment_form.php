<form action="charge.php" method="POST">

<form action="charge.php" method="POST">
	Payment Amount: <input type="text" name="amount">

  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $stripe['publishable_key']; ?>"
    data-description="One Wilde quote"
	amount   => $_POST['amount'],
  </script>
</form>
