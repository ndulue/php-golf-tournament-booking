function toggleGHIN(){

	var x = $("input[name='usga']:checked").val();
	$('#ghin, #user_no_ghin').hide();

	if (x == 'Yes'){
		$('#ghin').show();
	} else {
		$('#user_no_ghin').show();
	}

}

function toggleGHINPartner(){

	var x = $("input[name='partner_usga']:checked").val();
	$('#partner_ghin, #partner_user_no_ghin').hide();

	if (x == 'Yes'){
		$('#partner_ghin').show();
	} else {
		$('#partner_user_no_ghin').show();
	}

}



function SubmitContactForm() {

	var okToProceed = true;
	$('#full_name, #email, #phone, #partner_full_name, #partner_email, #partner_phone, #usga_selected, #partner_usga_selected, #ghin, #partner_ghin').removeClass('error');

	if ( $("#full_name").val() == '') {
		$('#full_name').addClass('error');
		okToProceed = false;
	}

	if ( $("#email").val() == '') {
		$('#email').addClass('error');
		okToProceed = false;
	}

	if ( $("#phone").val() == '') {
		$('#phone').addClass('error');
		okToProceed = false;
	}

	if ( $("#partner_full_name").val() == '') {
		$('#partner_full_name').addClass('error');
		okToProceed = false;
	}

	if ( $("#partner_email").val() == '') {
		$('#partner_email').addClass('error');
		okToProceed = false;
	}

	if ( $("#partner_phone").val() == '') {
		$('#partner_phone').addClass('error');
		okToProceed = false;
	}


	var x = $("input[name='usga']:checked").val();

	if ( x != 'Yes' && x != 'No' ) {
		$('#usga_selected').addClass('error');
		okToProceed = false;
	} else {

		if (x == 'Yes'){
			if ( $("#ghin").val() == '') {
				$('#ghin').addClass('error');
				okToProceed = false;
			}
		}

	}




	var x = $("input[name='partner_usga']:checked").val();

	if ( x != 'Yes' && x != 'No' ) {
		$('#partner_usga_selected').addClass('error');
		okToProceed = false;
	} else {

		if (x == 'Yes'){
			if ( $("#partner_ghin").val() == '') {
				$('#partner_ghin').addClass('error');
				okToProceed = false;
			}
		}

	}


	if (okToProceed == false) {
		return false;
	} else {

		// https://medium.com/@dmccoy/how-to-submit-an-html-form-to-google-sheets-without-google-forms-b833952cc175

		var jqxhr = $.ajax({
			url: 'https://script.google.com/macros/s/AKfycbxURefe1_01xOFsRyeJoSTclomoFOzWIxNtwl2s5LjmUcXE8dXx/exec',
			method: "GET",
			dataType: "json",
			data: $('#frmRegister').serialize(),
			success: function() {
				console.log('sent to Google');
			}
		});


	    $.ajax({
	      url: "register_submit.php",
	      type: "POST",
	      data: $('#frmRegister').serialize(),
	      cache: false,
	      success: function(data) {
	      	$('#step1').hide();
	      	$('#step-last').show();

	        //console.log('success');
	      },
	      error: function() {
	        // error
	      },
	      complete: function() {
	        // complete
	      }
	    });

	    return false;
	}

}
