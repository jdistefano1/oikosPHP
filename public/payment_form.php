<script>
AmountToFind = Request.form("amount")
</Script>

<h3>Make a Payment</h3>
<form action="charge.php" method="POST">
	
	<input type="password" name="password" placeholder="Password" />
	<input type="amount" name="amount" placeholder="amount" />
	
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $stripe['publishable_key']; ?>"
    data-description="Oikos Homes Payment"
    data-amount=<?php echo AmountToFind ;?>
  </script>
</form>
<hr />
<?php require_once('./login_form.php'); ?>
