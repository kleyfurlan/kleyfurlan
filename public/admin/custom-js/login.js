window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

//== Class Initialization
jQuery(document).ready(function() {

	$( '.m-login__form' ).validate({
		errorElement: 	"span",
		errorClass: 	"form-control-feedback",
		rules: {
			email: {
				required: true,
				email: true
			},
			token_ga: {
				required: "#ga_auth:checked"
			},
			senha: {
				required: true
			}
		},
		messages: {
			email: {required: "Email Obrigatório", email: "Email inválido"},
			senha: {required: "Senha Obrigatória"},
			token_ga: {required: "Token do google autenticator obrigatório"}
		},
		highlight: function(e) {
			$(e).closest(".form-group").addClass("has-danger")
		},
		unhighlight: function(e) {
			$(e).closest(".form-group").removeClass("has-danger")
		},
		success: function(e) {
			e.closest(".form-group").removeClass("has-danger")
		},
		//display error alert on form submit  
		invalidHandler: function(event, validator) {     
			
		},

		submitHandler: function (form) {
			event.preventDefault();

            axios({
                method: form.method,
                url:    form.action,
                data:   $(form).serialize(),
                config: {header: {'Content-Type': 'multipart/form-data'}}

            }).then(function(response){
                if( response.data.status ){
                    window.location = response.data.redirect;
                }               

            }).catch(function(error){
				const errors                =   error.response.data.errors;
				
                const firstItem             =   Object.keys(errors)[0];
                const firstItemDOM          =   document.getElementById(firstItem);
                const firstErrorMessage     =   errors[firstItem][0];
                
                // scroll to the error messsage
                firstItemDOM.scrollIntoView({ behavior: 'smooth' });

                // remove all error messages
                const errorMessages         =   document.querySelectorAll('.text-danger');
                errorMessages.forEach((element) => element.textContent = '');

                // show error message
                firstItemDOM.insertAdjacentHTML('afterend', `<div class="text-danger">${firstErrorMessage}</div>`);

                // remove all from controls with highlited errors text bos
                const formControls          =   document.querySelectorAll('.form-control');
                formControls.forEach((element) => element.classList.remove('border', 'border-danger'));

                // highlight the form control with the error
                firstItemDOM.classList.add('border', 'border-danger');
                // console.log(error);
			});
			
            return false; // required to block normal submit since you used ajax

		}
	});

	$('#auth_code').inputmask("999999");

});