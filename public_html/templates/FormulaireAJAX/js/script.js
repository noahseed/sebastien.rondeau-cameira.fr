$(function () {
	$('#contact-form').submit(function(e){
		e.preventDefault();
		$('.comments').empty();
		var postdata = $('#contact-form').serialize();

		$.ajax({
			type: 'POST',
			url: 'contact_verif.php',
			data: postdata,
			dataType: 'json',
			success: function(result){

				if(result.isSuccess){

					$('#contact-form').append("<p class='thank-you'>Votre message a bien été envoyé, merci de m'avoir contacté :)</p>");
					$('#contact-form')[0].reset();

				} else {

					$('#firstname + .comments').html(result.firstnameError);
					$('#lastname + .comments').html(result.lastnameError);
					$('#email + .comments').html(result.emailError);
					$('#telephone + .comments').html(result.telephoneError);
					$('#message + .comments').html(result.messageError);

				}
			}
		});
	});
})