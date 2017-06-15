$( function () {

	$(document).ready(function(){

		$('#formulario').validate({
			errorElement: 'span',
			rules: {
				email: {
					required: true,
					email: true
				},
				pass: {
					required: true
				}
			},
			messages: {
				email: {
					required: 'el campo es obligatorio'
				},
				pass: {
					required: 'la contraseña es obligatoria'
				}
			},
			errorPlacement: function(error, element){
				if (element.attr("name") == "email") {
					error.insertAfter('input#email');	
				}
				if (element.attr("name") == "pass") {
					error.insertAfter('input#pass');
				}
			}
		});

		$('#form-btn').on('click', function(e){
			e.preventDefault();
			var email = document.getElementById('email').value;
			console.log(email);
			$('#formulario').valid();
		});

		$('.video-media').on('click', function(e){
			e.preventDefault();

			var direc = $(this).attr('href');
			console.log(direc);
			$('.video-modal iframe').attr('src', direc);
	        $('.video-modal iframe').on('load', function () {
	            if ($(this).attr('src') != '') {
	                $('.video-modal').removeClass('hidden');
	            }
	        });
		});

		$('#video-modal-close').on('click', function(e){
			e.preventDefault();
			$('.video-modal').addClass('hidden');
			$('.video-modal iframe').attr('src', '');
		});

	});

});