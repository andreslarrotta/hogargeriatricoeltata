$(document).ready(function() {
	var form = $('.contact-form');

	form.formValidation({
			framework: 'bootstrap',
			locale: 'es_ES',
			excluded: ':disabled'
		})
		.on('success.form.fv', function(e) {

			e.preventDefault();

			var $form = $(e.target);

			$.ajax({
				url: '/email/email.php',
				type: 'POST',
				data: $form.serialize(),
				dataType: 'json',
				success: function(response) {

					$form.formValidation('resetForm', true);

					response.result === 'error' ? $('#alertContainer')
						.removeClass('alert-success')
						.addClass('alert-warning')
						.html('Lo sentimos, no se logro enviar tu mensaje.')
						.show() : $('#alertContainer')
						.removeClass('alert-warning')
						.addClass('alert-success')
						.html('Tu mensaje ha sido enviado con éxito, pronto nos contactaremos con tigo.')
						.show();
				}
			});
		});
});
