<form action="charge.php" method="POST">
	Payment Amount: <input type="text" name="amount">

  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $stripe['publishable_key']; ?>"
    data-description="One Wilde quote"
    data-amount="<?php echo $_POST['amount']; ?>">
  </script>
</form>
