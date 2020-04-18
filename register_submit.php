<?php

// Validation within york.js form function
// Get form fields from website
$full_name 					    = strip_tags(htmlspecialchars($_POST['full_name']));
$email 							= strip_tags(htmlspecialchars($_POST['email']));
$phone 							= strip_tags(htmlspecialchars($_POST['phone']));
$usga 							= strip_tags(htmlspecialchars($_POST['usga']));
$ghin 							= strip_tags(htmlspecialchars($_POST['ghin']));
$number_years 				    = strip_tags(htmlspecialchars($_POST['number_years']));
$golf_game 						= strip_tags(htmlspecialchars($_POST['golf_game']));
$best_attribute 				= strip_tags(htmlspecialchars($_POST['best_attribute']));
$worst_attribute 				= strip_tags(htmlspecialchars($_POST['worst_attribute']));




$partner_full_name  		= strip_tags(htmlspecialchars($_POST['partner_full_name']));
$partner_email 				= strip_tags(htmlspecialchars($_POST['partner_email']));
$partner_phone 				= strip_tags(htmlspecialchars($_POST['partner_phone']));
$partner_usga 				= strip_tags(htmlspecialchars($_POST['partner_usga']));
$partner_ghin 				= strip_tags(htmlspecialchars($_POST['partner_ghin']));
$partner_number_years 		= strip_tags(htmlspecialchars($_POST['partner_number_years']));
$partner_golf_game 			= strip_tags(htmlspecialchars($_POST['partner_golf_game']));
$partner_best_attribute 	= strip_tags(htmlspecialchars($_POST['partner_best_attribute']));
$partner_worst_attribute 	= strip_tags(htmlspecialchars($_POST['partner_worst_attribute']));

// Build the email
$to 						= 'york.myers@gmail.com';
$email_subject 	= "Shivas Registration";

$email_body 	= "New Shivas Registration:\n\n\n"
					. "Name: $full_name\n\n"
					. "Email: $email\n\n"
					. "Phone: $phone\n\n"
					. "USGA Handicap: $usga\n\n"
					. "GHIN Number: $ghin\n\n"
					. "Number of years: $number_years\n\n"
					. "GOLF game: $golf_game\n\n"
					. "BEST attribute: $best_attribute\n\n"
					. "WORST attribute: $worst_attribute\n\n"
					. "\n\n\n"
					. "Partner Name: $partner_full_name\n\n"
					. "Partner Email: $partner_email\n\n"
					. "Partner Phone: $partner_phone\n\n"
					. "Partner USGA Handicap: $partner_usga\n\n"
					. "Partner GHIN Number: $partner_ghin\n\n"
					. "Partner Number of years: $partner_number_years\n\n"
					. "Partner GOLF game: $partner_golf_game\n\n"
					. "Partner BEST attribute: $partner_best_attribute\n\n"
					. "Partner WORST attribute: $partner_worst_attribute\n\n";

// Send the email
$email_address = 'york.myers@gmail.com';
$headers = "From: york.myers@gmail.com\n"; // Where the email came "from".
$headers .= "Reply-To: $email_address";

mail($to,$email_subject,$email_body,$headers);

print "testing";
?>
