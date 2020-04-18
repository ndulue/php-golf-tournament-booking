<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
	<meta charset="utf-8" />
	<title>Shivas Irons: Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="The tradition continues, 16 years running and we're just getting started!">
	<meta name="author" content="Shivas Irons">
	<link rel="icon" type="image/png" href="assets/images/favicon.png">
	<meta name="thumbnail" content="assets/images/thumbnail.png">
	<meta property="og:image" content="assets/images/thumbnail.png" />
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="assets/styles/vendors.min.css" />
	<link rel="stylesheet" href="style.css" />

	<!-- JavaScripts -->
	<script src="assets/javascripts/vendor.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700|Poppins:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139861219-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-139861219-1');

	  var $form = $('#frmRegister'),
    url = 'https://script.google.com/macros/s/AKfycby386gB-X6RenKLghVNSJSYy5T4HixVaqOEqlMtKK9yQTp81xg/exec'

	$('#submit-form').on('click', function(e) {
	  e.preventDefault();
	  var jqxhr = $.ajax({
	    url: url,
	    method: "GET",
	    dataType: "json",
	    data: $form.serializeObject()
	  }).success(
	    // do something
	  );
	});
	</script>
</head>
<body on contextmenu="return false;" onselectstart="return false;" ondragstart="return false;">
	<div id="page" class="hfeed site boxed-page-full"> <!-- In order to make the page boxed, you can apply 1. boxed-page-1280, 2. boxed-page-1400, 3. boxed-page-1600 or boxed-page-1920 -->
		<div id="main" class="site-main">
			<!-- Header / Menu / Action button -->
			<header id="masthead" class="site-header position-absolute sticky-header border-bottom-white" role="banner" data-headroom>
				<div class="grid-container grid-container-padded">
					<div id="top-bar-attitude">
						<div class="grid-x grid-margin-x">
							<!-- Logo -->
							<div class="auto  medium-2 cell">
								<span class="title-bars float-left" data-responsive-toggle="top-main-menu" data-hide-for="medium">
									<i class="fa fa-bars" aria-hidden="true" data-toggle="top-main-menu"></i>
								</span>
								<h1>
									<a href="index" title="Attitude HTML Template">
										<img src="assets/images/logo.png" class="shivas-logo" />
									</a>
								</h1>
							</div>

							<!-- Menu -->
							<div class="small-12 medium-10 cell">
								 <nav class="primary navigation">
									<ul id="top-main-menu" class="expanded" data-magellan>
										<li><a href="index">Home</a></li>
										<li><a href="course">The Course</a></li>
										<li><a href="gallery">Gallery</a></li>
										<li><a href="contact">Contact</a></li>
									</ul>
								</nav>
							</div>

						</div>
					</div>
				</div>
			</header><!-- #masthead .site-header -->

			<section id="contact-page" class="home-page-hero bottom-edge" style="background-image: url('assets/images/homebg.jpg');">
				<div class="overlay gradient-a-75" > <!-- You can apply gradient-a, gradient-b, gradient-c, gradient-d -->
					<div class="grid-container grid-container-padded">
						<div class="heading fiftyHeight linear">
							<div class="grid-x align-center">
								<div class="small-12 medium-12 large-8 cell small-centered">
									<h1 class="text-center linear">Register</h1>
								</div>
							</div>
						</div><!-- /.heading.fiftyHeight -->
					</div>
				</div>	<!-- /.overlay -->
			</section><!-- /.home-page-hero -->

			<!-- Welcome Section -->
			<section id="about" class="welcome gray" data-magellan-target="about">
				<div class="grid-container grid-container-padded">
					<div class="grid-x">
						<div class="cell large-12">
							<div class="radius shadow top-negative"><!-- add top negative -->

								<section id="white" class="key-benefits gray">
									<div id="neg-top" class="grid-container grid-container-padded inner-padding">
										<div class="grid-x grid-margin-x">

											<div class="cell small-12 medium-10 medium-offset-1">

												<section id="newnew" class="section">

													<div class="animation-container">

														<form action="" method="get" class="form" id="frmRegister" onSubmit="return SubmitContactForm();">

															<!-- START STEP ONE -->
															<div id="step1">
																<h1 class="text-center pad-bot">2020 Registration Form</h1>
																<div class="grid-x">
																		<div class="cell small-12 medium-12 large-6">
																			<p class="form-instructions text-white"><strong>PERSONAL INFORMATION</strong></p>

																				<div class="fieldgroup">
																					<input type="text" name="full_name" id="full_name" placeholder="Name:"/>
																				</div>

																				<div class="fieldgroup">
																					<input type="email" name="email" id="email" placeholder="Email:"/>
																				</div>

																				<div class="fieldgroup">
																					<input type="tel" name="phone" maxlength="10" id="phone" placeholder="Phone:"/>
																				</div>

																				<div class="fieldgroup radio-group">
																					<label for="yes_no_radio" id="usga_selected">Do you have a USGA Handicap?</label>
																					<div class="radio-options">
																						<label class="radio-inline">
																							<input type="radio" name="usga" value="Yes" onClick="toggleGHIN();">Yes
																						</label>
																						<label class="radio-inline">
																							<input type="radio" name="usga" value="No" onClick="toggleGHIN();">No
																						</label>
																					</div>

																					<input style="display:none;" type="text" maxlength="7" name="ghin" id="ghin" placeholder="Enter your GHIN number:"/>
																					<div style="display:none;" id="user_no_ghin">* You will be playing with a 0 handicap</div>

																				</div>

																				<div class="fieldgroup">
																					<label for="number_years">Number of years played in the tournament:</label>
																						<select id="number_years" name="number_years" required>
																							<option value="none">-</option>
																							<option value="rookie">First year rookie</option>
																						  	<option value="one">1 year</option>
																						  	<option value="two">2 years</option>
																						  	<option value="three">3 years</option>
																						  	<option value="four">4 years</option>
																							<option value="five">5 years</option>
																						  <option value="six">6 years</option>
																						</select>
																				</div>

																				<div class="fieldgroup">
																					<input type="text" name="golf_game" id="golf_game" placeholder="Describe your golf game in one sentance." required/>
																				</div>

																				<div class="fieldgroup">
																					<input type="text" name="best_attribute" id="best_attribute" placeholder="Best attribute of your golf game?" required/>
																				</div>

																				<div class="fieldgroup">
																					<input type="text" name="worst_attribute" id="worst_attribute" placeholder="Worst attribute of your golf game?" required/>
																				</div>


																		</div>

																		<div class="cell small-12 medium-12 large-6">
																			<p class="form-instructions text-white"><strong>PARTNER INFORMATION</strong></p>

																				<div class="fieldgroup">
																					<input type="text" name="partner_full_name" id="partner_full_name" placeholder="Partner name:"/>
																				</div>

																				<div class="fieldgroup">
																					<input type="email" name="partner_email" id="partner_email" placeholder="Partner email:"/>
																				</div>

																				<div class="fieldgroup">
																					<input type="tel" name="partner_phone" maxlength="10" id="partner_phone" placeholder="Partner phone:"/>
																				</div>

																				<div class="fieldgroup radio-group">
																					<label for="yes_no_radio" id="partner_usga_selected">Do you have a USGA Handicap?</label>
																					<div class="radio-options">
																						<label class="radio-inline">
																							<input type="radio" name="partner_usga" value="Yes" onClick="toggleGHINPartner();">Yes
																						</label>
																						<label class="radio-inline">
																							<input type="radio" name="partner_usga" value="No" onClick="toggleGHINPartner();">No
																						</label>
																					</div>
																					<input style="display:none;" type="text" maxlength="7" name="partner_ghin" maxlength="7" id="partner_ghin" placeholder="Enter your Partner's GHIN number:"/>
																					<div style="display:none;" id="partner_user_no_ghin">* You will be playing with a 0 handicap</div>
																				</div>

																				<div class="fieldgroup">
																					<label for="partner_number_years">Number of years played in the tournament:</label>
																						<select id="partner_number_years" name="partner_number_years" required>
																							<option value="none">-</option>
																							<option value="rookie">First year rookie</option>
																						  <option value="one">1 year</option>
																						  <option value="two">2 years</option>
																						  <option value="three">3 years</option>
																						  <option value="four">4 years</option>
																							<option value="five">5 years</option>
																						  <option value="six">6 years</option>
																						</select>
																				</div>

																				<div class="fieldgroup">
																					<input type="text" name="partner_golf_game" id="partner_golf_game" placeholder="Describe your golf game in one sentance."/>
																				</div>

																				<div class="fieldgroup">
																					<input type="text" name="partner_best_attribute" id="partner_best_attribute" placeholder="Best attribute of your golf game?"/>
																				</div>

																				<div class="fieldgroup">
																					<input type="text" name="partner_worst_attribute" id="partner_worst_attribute" placeholder="Worst attribute of your golf game?"/>
																				</div>

																		</div>

																		<div class="cell small-12">
																			<div class="buttons">
																			  <button id="submit-form" type="submit" class="btn">Submit</button>
																			</div>
																		</div>

																</div>
															</div>
															<!-- END STEP ONE -->

															<!-- START STEP FOUR -->
															<div id="step-last" style="display:none;">

																<h1 class="text-center pad-bot">Process payment for registration to be complete.</h1>

																<h3><span style="color: #076B21; font-weight: bold;">$600</span> per team includes:</h3>
																		<ul class="register-list" style="list-style-type: none;">
																			<li>Two Custom Branded Shivas Irons Hats - Sponsored by <a style="color:#076B21;" href="https://www.handshakehomeloans.com" target="_blank">Handshake Home Loans</a></li>
																			<li>Two rounds of golf per day</li>
																			<li>Unlimited range balls</li>
																			<li>Dinner and drinks at the Calcutta Auction</li>
																			<li>Sunday brunch at the Roadhouse Restaurant</li>
																			<li>Other sponsored goodies and prizes</li>
																			<li>**The opportunity to win the coveted Shivas Irons Cup**</li>
																		</ul>


																	<div class="spacer-30"></div>

																	<!-- AQ_v-a2lE8X9Qcaic1EWhibf-8NaiCwVBTOo1L1AjCnkSNtSAFvlOVxZ6lkZ2CfS2XFKDu3tMfJZJzMm -->

<div id="paypal-button-container"></div>
<script src="https://www.paypal.com/sdk/js?client-id=AQ_v-a2lE8X9Qcaic1EWhibf-8NaiCwVBTOo1L1AjCnkSNtSAFvlOVxZ6lkZ2CfS2XFKDu3tMfJZJzMm&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
    paypal.Buttons({
        style: {
            shape: 'rect',
            color: 'black',
            layout: 'vertical',
            label: 'paypal',

        },
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '1'
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                alert('Transaction completed by ' + details.payer.name.given_name + '!');
            });
        }
    }).render('#paypal-button-container');
</script>

																	Follow <a href="https://www.instagram.com/shivas_irons_golf/" class="text-green">@Shivas_Irons_Golf</a> on Instagram for updates. </p>

																	<div class="spacer-30"></div>

																	<div class="buttons">
																			<a href="gallery" class="btn center">Photos from last year</a>
																	</div>

															</div>
															<!-- END STEP FOUR -->

														</form>
													</div>
												</section>
											</div>



									</div>
								</section>


							</div>
						</div><!-- /.radius.shadow -->
					</div>
				</div>
			</section><!-- /.welcome -->
			<!-- Teaser -->

		</div><!-- #main -->

		<!-- Footer Section -->
		<footer id="colophon" class="site-footer gradient-a-100 white-text-color" role="contentinfo">
			<div class="site-info">
				<div class="grid-container grid-container-padded">

					<div class="grid-x grid-margin-x">

						<!-- Footer Widget area #1 -->
						<div class="small-12 medium-12 large-auto cell">
							<div id="text-5" class="footer-section widget widget_text">
								<h4>Sponsors</h4>
								<ul class="sponsor-ul">
									<li>
										<a href="https://dormieworkshop.com/" target="_blank">
											<img src="assets/images/dormie.png" class="sponsor-img" id="sponsor5" />
										</a>
									</li>
									<li>
										<a href="https://truinfusioncbd.com/" target="_blank">
											<img src="assets/images/cbd.png" class="sponsor-img" id="sponsor4" />
										</a>
									</li>
									<li>
										<a href="https://www.casamigos.com/" target="_blank">
											<img src="assets/images/sponsor1.png" class="sponsor-img" id="sponsor1" />
										</a>
									</li>
									<li>
										<a href="https://www.taylormadegolf.com/" target="_blank">
											<img src="assets/images/taylormade.png" class="sponsor-img" id="sponsor3" />
										</a>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>

			<!-- Copyright Section -->
			<div class="copy">
				<div class="grid-container grid-container-padded">
					<div class="grid-x grid-margin-x">
						<div class="small-12 medium-auto cell">
							<p class="copyright">
								&copy; 2020 | Shivas Irons
							</p>
						</div>

					</div>
				</div>
			</div>
		</footer><!-- .site-footer -->
	</div>

	<script type="text/javascript">

		$('.form-disable').on('submit',function(){
		var self = $(this),
		button = self.find('#submit-form');
		button.attr('disabled','disabled').val('Please wait...');

		return false;
	});

function toggleGHIN() {
	console.log( $("input[name=partner_usga]:checked").val() );

  if ($('#check_id').is(":checked")) {
    // it is checked
  }
}

	</script>
	<!-- JavaScripts -->


	<script src="assets/javascripts/main.min.js"></script>
	<script src="assets/javascripts/york.js"></script>

</body>
</html>

<script>
 document.oncontextmenu = function(e){
     var target = (typeof e !="undefined")? e.target: event.srcElement
     if (target.tagName == "IMG" || (target.tagName == 'A' && target.firstChild.tagName == 'IMG'))
         return false
 }
 </script>
