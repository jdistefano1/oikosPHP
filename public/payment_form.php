<h3>Sign up and buy a quote now! Only $535.00!</h3>
<form action="charge.php" method="POST">
	<input type="password" name="password" placeholder="Password" />
	<input type="amount" name="amount" placeholder="Amount" />
	
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $stripe['publishable_key']; ?>"
    data-description="One Wilde quote"
    data-amount=$Amount>
  </script>
</form>
<hr />
<?php require_once('./login_form.php'); ?>
