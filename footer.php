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

// ====== Fetch Socials ======
$statement1 = $pdo->prepare("SELECT social_name, social_url, social_icon FROM tbl_social  WHERE social_url <> '' ORDER BY social_id ASC");
$statement1->execute();
$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
?>
<link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" 
integrity="sha512-+bZqSmEeM2E5c2n1JtErTx6C40m3vJm9H0r9E2NuLgMQC0bcOSi9suThEn6KCOhN64fLsJ0b9JCfT3Hk2RFz5Q==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
  .footer-column ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-column ul li {
  margin-bottom: 8px;
  font-size: 14px;
  line-height: 1.6;
  display: flex;
  align-items: center;
}

.footer-column ul li i {
  margin-right: 8px;
  font-size: 14px;
  min-width: 16px;
}

.footer-column a {
  color: inherit;
  text-decoration: none;
}

.footer-column a:hover {
  text-decoration: underline;
}

</style>

<?php if($newsletter_on_off == 1): ?>
<footer id="footer1" style="display:none;">
  <div class="footer-content">
    <div class="footer-column">
      <h3>REXBIKES</h3>
      <p>The premier marketplace for bikes services, providing you with the best bikes world wide.</p>
      
    </div>
    <div class="footer-column">
      <h3>Contact Us</h3>
      <ul>
        <li>
          <i class="fa-solid fa-location-dot"></i> 
          2080 S 1500 E, Vernal, UT 84078, United States
        </li>

        <li>
          <i class="fa-solid fa-location-dot"></i> 
          275 Chestnut Grove Road, Dillsburg, PA 17019, United States
        </li>

        <li>
          <i class="fa-solid fa-phone"></i> 
          <a href="tel:+16502395123">+1 (650) 239-5123</a>
        </li>

        <li>
          <i class="fa-solid fa-envelope"></i> 
          <a href="mailto:rexbmxbikecollection@gmail.com">rexbmxbikecollection@gmail.com</a>
        </li>
      </ul>
    </div>
    <div class="footer-column">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="allproduct.php">shop</a></li>
        <li><a href="product-category.php?id=1&type=top-category">Categories</a></li>
        <li><a href="about.php">About Us</a></li>
      </ul>
    </div>
    

    <div class="footer-column">
    <h3>Follow Us</h3>
        <ul>
            <?php foreach($result1 as $row): ?>
                <li>
                    <a href="<?php echo $row['social_url']; ?>" target="_blank">
                        <i class="fa-brands <?php echo $row['social_icon']; ?>"></i> 
                        <?php echo $row['social_name']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
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
function toggleFooter() {
    const largeFooter = document.getElementById('footer1');
    const smallFooter = document.getElementById('footer2');
    const left = document.getElementById('left');
    const width = window.innerWidth;

        largeFooter.style.display = 'block';
        smallFooter.style.display = 'none';
        if(width < 992) left.style.display = 'none';
}
// Run on load
window.addEventListener('load', toggleFooter);
// Run on resize
window.addEventListener('resize', toggleFooter);
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