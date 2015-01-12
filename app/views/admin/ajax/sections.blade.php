(function($){
	$("#btn-show-recovery").on('click', function(e){
		e.preventDefault();
		$("#logins").fadeToggle(1000);
		$("#recovery").delay(1000).fadeToggle(1000);
	});

	$("#btn-show-login").on('click', function(e){
		e.preventDefault();
		$("#recovery").fadeToggle(1000);
		$("#logins").delay(1000).fadeToggle(1000);
	});

	$("#login-form").on('submit', function(e){
		e.preventDefault();
		var $form = $(this);
		
		$("#btn-connexion").prop('disabled', true);
		$("#login-alert").empty();
		
		$.post($form.attr('action'), $form.serializeArray())
		.done(function(data, textStatus, jqXHR) {
			$("#login-alert").append("<p>Votre nouveau mots de passe est envoyer sur votre email</p>");
			$("#login-alert").fadeIn(500).delay();
		})
		.fail(function(jqXHR, textStatus, errorThrown) {
			if (jQuery.isEmptyObject(jqXHR.responseText)) {
				$("#login-alert").append("<p>Une ereur est survenu veuiller reseyer plus tard</p>");
				$("#login-alert").fadeIn(500);
				$("#btn-connexion").prop('disabled', false);
			}
			else {
				$("#login-alert").append(jqXHR.responseText);
				$("#login-alert").fadeIn(500);
				$("#btn-connexion").prop('disabled', false);
			}
		});
	});

	$("#recovery-form").on('submit', function(e){
		e.preventDefault();
		var $form = $(this);
		
		$("#recovery-alert").empty();
		
		$.post($form.attr('action'), $form.serializeArray())
		.done(function(data, textStatus, jqXHR) {
			$("#recovery-alert").append("<p>Votre nouveau mots de passe est envoyer sur votre email</p>");
			$("#recovery-alert").fadeIn(500).delay();
			//~ $("#btn-recovery").prop('disabled', true);
		})
		.fail(function(jqXHR, textStatus, errorThrown) {
			if (jQuery.isEmptyObject(jqXHR.responseText)) {
				$("#recovery-alert").append("<p>Une ereur est survenu veuiller reseyer plus tard</p>");
				$("#recovery-alert").fadeIn(500);
				//~ $("#btn-recovery").prop('disabled', false);
			}
			else {
				$("#recovery-alert").append(jqXHR.responseText);
				$("#recovery-alert").fadeIn(500);
				//~ $("#btn-recovery").prop('disabled', false);
			}
		});
	});
})(jQuery);
