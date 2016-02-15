<?php require_once('./config.php'); ?>


<form action="charge.php" method="post">
 <input type="number" id="custom-donation" placeholder="1000.00" min="1.00"  />
  <script> ('#custom-donation').onchange(function(){
      // Stripe accepts payment amounts in cents so we have to convert dollars to cents by multiplying by 100
     var amount = parseInt( $(this).val()*100);
     $(".stripe-button").attr( "data-amount", amount );}
  <script/>
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="Rental Payment"
		  data-name="Oikos Homes"
          data-amount="0"
          data-locale="auto"
		  data-label="Make Payment"
		  >
  </script>
</form>
<
$