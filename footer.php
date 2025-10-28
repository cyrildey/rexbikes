<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	$footer_about = $row['footer_about'];
	$contact_email = $row['contact_email'];
	$contact_phone = $row['contact_phone'];
	$contact_address = $row['contact_address'];
	$footer_copyright = $row['footer_copyright'];
	$total_recent_post_footer = $row['total_recent_post_footer'];
    $total_popular_post_footer = $row['total_popular_post_footer'];
    $newsletter_on_off = $row['newsletter_on_off'];
    $before_body = $row['before_body'];
}
?>


<?php if($newsletter_on_off == 1): ?>
<footer id="footer1" style="display:none;">
  <div class="footer-content">
    <div class="footer-column">
      <h3>REXBIKES</h3>
      <p>The premier marketplace for business services, connecting providers with clients worldwide.</p>
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
    <div class="footer-column">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="product-category.php?id=1&type=top-category">Categories</a></li>
        <li><a href="#">How It Works</a></li>
        <li><a href="about.php">About Us</a></li>
      </ul>
    </div>
    <div class="footer-column">
      <h3>Help & Support</h3>
      <ul>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="#">Terms of Service</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="contact.php">Contact Support</a></li>
        <li><a href="#">Become a Provider</a></li>
      </ul>
    </div>
	<div class="footer-column">
		<?php $csrf->echoInputField(); ?>
		<h2><?php echo LANG_VALUE_93; ?></h2>
		<form action="" method="post">

			<div class="input-group">
			<input type="email" class="form-control" placeholder="<?php echo LANG_VALUE_95; ?>" name="email_subscribe" style="padding: 10px; width: 100%; margin-bottom: 10px; border-radius: 4px; border: 1px solid #cbd5e0;">
			<span class="input-group-btn">
			<button class="btn btn-primary" style="width: 100%;" type="submit" name="form_subscribe"><?php echo LANG_VALUE_92; ?></button>
			</span>
			</div>
			</div>
		</form>
	</div>
  </div>
  <div class="copyright">
    <?php echo $footer_copyright; ?>
  </div>
</footer>

<div id="footer2" style="display:none;">
  
</div>
<?php endif; ?>

<a href="#" class="scrollup">
	<i class="fa fa-angle-up"></i>
</a>

<script>
function toggleHeader() {
    const largeHeader = document.getElementById('footer1');
    const smallHeader = document.getElementById('footer2');
    const width = window.innerWidth;

    if (width <= 1100) {
        largeHeader.style.display = 'none';
        smallHeader.style.display = 'block';
    } else {
        largeHeader.style.display = 'block';
        smallHeader.style.display = 'none';
    }
}

// Run on load
window.addEventListener('load', toggleHeader);
// Run on resize
window.addEventListener('resize', toggleHeader);
</script>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
    $stripe_public_key = $row['stripe_public_key'];
    $stripe_secret_key = $row['stripe_secret_key'];
}
?>

<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://js.stripe.com/v2/"></script>
<script src="assets/js/megamenu.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/owl.animate.js"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/rating.js"></script>
<script src="assets/js/jquery.touchSwipe.min.js"></script>
<script src="assets/js/bootstrap-touch-slider.js"></script>
<script src="assets/js/select2.full.min.js"></script>
<script src="assets/js/custom.js"></script>
<script>
	function confirmDelete()
	{
	    return confirm("Sure you want to delete this data?");
	}
	$(document).ready(function () {
		advFieldsStatus = $('#advFieldsStatus').val();

		$('#paypal_form').hide();
		$('#stripe_form').hide();
		$('#bank_form').hide();

        $('#advFieldsStatus').on('change',function() {
            advFieldsStatus = $('#advFieldsStatus').val();
            if ( advFieldsStatus == '' ) {
            	$('#paypal_form').hide();
				$('#stripe_form').hide();
				$('#bank_form').hide();
            } else if ( advFieldsStatus == 'PayPal' ) {
               	$('#paypal_form').show();
				$('#stripe_form').hide();
				$('#bank_form').hide();
            } else if ( advFieldsStatus == 'Stripe' ) {
               	$('#paypal_form').hide();
				$('#stripe_form').show();
				$('#bank_form').hide();
            } else if ( advFieldsStatus == 'Bank Deposit' ) {
            	$('#paypal_form').hide();
				$('#stripe_form').hide();
				$('#bank_form').show();
            }
        });
	});


	$(document).on('submit', '#stripe_form', function () {
        // createToken returns immediately - the supplied callback submits the form if there are no errors
        $('#submit-button').prop("disabled", true);
        $("#msg-container").hide();
        Stripe.card.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
            // name: $('.card-holder-name').val()
        }, stripeResponseHandler);
        return false;
    });
    Stripe.setPublishableKey('<?php echo $stripe_public_key; ?>');
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('#submit-button').prop("disabled", false);
            $("#msg-container").html('<div style="color: red;border: 1px solid;margin: 10px 0px;padding: 5px;"><strong>Error:</strong> ' + response.error.message + '</div>');
            $("#msg-container").show();
        } else {
            var form$ = $("#stripe_form");
            var token = response['id'];
            form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
            form$.get(0).submit();
        }
    }
</script>


<?php echo $before_body; ?>
</body>
</html>