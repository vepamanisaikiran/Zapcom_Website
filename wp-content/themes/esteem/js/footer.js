(function ($) {
	"use strict";

	/*==========  Validate Email  ==========*/
	function validateEmail($validate_email) {
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		if( !emailReg.test( $validate_email ) ) {
			return false;
		} else {
			return true;
		}
		return false;
	}
	
	/*==========  Contact Form  ==========*/
	$('#contact-form').on('submit', function() {
		$('#contact-error').fadeOut();
		$('#contact-success').fadeOut();
		$('#contact-loading').fadeOut();
		$('#contact-loading').fadeIn();
		if (validateEmail($('#contact-email').val()) && $('#contact-email').val().length !== 0 && $('#contact-name').val().length !== 0 && $('#contact-message').val().length !== 0) {
			var action = $(this).attr('action');
			$.ajax({
				type: "POST",
				url : action,
				data: {
					contact_name: $('#contact-name').val(),
					contact_email: $('#contact-email').val(),
					contact_phone: $('#contact-phone').val(),
					contact_subject: $('#contact-subject').val(),
					contact_message: $('#contact-message').val()
				},
				success: function() {
					$('#contact-error').fadeOut();
					$('#contact-success').fadeOut();
					$('#contact-loading').fadeOut();
					$('#contact-success .message').html('Success! Thanks for contacting us!');
					$('#contact-success').fadeIn();
				},
				error: function() {
					$('#contact-error').fadeOut();
					$('#contact-success').fadeOut();
					$('#contact-loading').fadeOut();
					$('#contact-error .message').html('Sorry, an error occurred.');
					$('#contact-error').fadeIn();
				}
			});
		} else if (!validateEmail($('#contact-email').val()) && $('#contact-email').val().length !== 0 && $('#contact-name').val().length !== 0 && $('#contact-message').val().length !== 0) {
			$('#contact-error').fadeOut();
			$('#contact-success').fadeOut();
			$('#contact-loading').fadeOut();
			$('#contact-error .message').html('Please enter a valid email.');
			$('#contact-error').fadeIn();
		} else {
			$('#contact-error').fadeOut();
			$('#contact-success').fadeOut();
			$('#contact-loading').fadeOut();
			$('#contact-error .message').html('Please fill out all the fields.');
			$('#contact-error').fadeIn();
		}
		return false;
	});
	$('#footer-contact-form').on('submit', function() {
		var contactForm = $(this);
		contactForm.find('.contact-error').fadeOut();
		contactForm.find('.contact-success').fadeOut();
		contactForm.find('.contact-loading').fadeOut();
		contactForm.find('.contact-loading').fadeIn();
		if (validateEmail(contactForm.find('.contact-email').val()) && contactForm.find('.contact-email').val().length !== 0 && contactForm.find('.contact-name').val().length !== 0 && contactForm.find('.contact-message').val().length !== 0) {
			var action = $(this).attr('action');
			$.ajax({
				type: "POST",
				url : action,
				data: {
					contact_name: contactForm.find('.contact-name').val(),
					contact_email: contactForm.find('.contact-email').val(),
					contact_phone: '',
					contact_subject: '',
					contact_message: contactForm.find('.contact-message').val()
				},
				success: function() {
					contactForm.find('.contact-error').fadeOut();
					contactForm.find('.contact-success').fadeOut();
					contactForm.find('.contact-loading').fadeOut();
					contactForm.find('.contact-success .message').html('Success! Thanks for contacting us!');
					contactForm.find('.contact-success').fadeIn();
				},
				error: function() {
					contactForm.find('.contact-error').fadeOut();
					contactForm.find('.contact-success').fadeOut();
					contactForm.find('.contact-loading').fadeOut();
					contactForm.find('.contact-error .message').html('Sorry, an error occurred.');
					contactForm.find('.contact-error').fadeIn();
				}
			});
		} else if (!validateEmail(contactForm.find('.contact-email').val()) && contactForm.find('.contact-email').val().length !== 0 && contactForm.find('.contact-name').val().length !== 0 && contactForm.find('.contact-message').val().length !== 0) {
			contactForm.find('.contact-error').fadeOut();
			contactForm.find('.contact-success').fadeOut();
			contactForm.find('.contact-loading').fadeOut();
			contactForm.find('.contact-error .message').html('Please enter a valid email.');
			contactForm.find('.contact-error').fadeIn();
		} else {
			contactForm.find('.contact-error').fadeOut();
			contactForm.find('.contact-success').fadeOut();
			contactForm.find('.contact-loading').fadeOut();
			contactForm.find('.contact-error .message').html('Please fill out all the fields.');
			contactForm.find('.contact-error').fadeIn();
		}
		return false;
	});


})(jQuery);