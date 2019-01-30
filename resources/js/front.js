$(document).ready(function(){

    $( ".agendamento" ).validate({
		errorElement: 	"span",
		errorClass: 	"text-danger",
		// focusInvalid: 	!1,
		// ignore: 		".note-editable.panel-body",
		// define validation rules
		rules: {
			nome: { required: true, maxlength: 50 },
			telefone: {required: true, maxlength: 12},
			email: { required: true,email:true, },
			data: {required: true,},
			
		},
		messages: {
			nome: {required: "Nome obrigatório", maxlength: "Máx {0} caracteres"},
			telefone: {required: "Telefone obrigatório", maxlength: "Máx {0} caracteres" },
			email: {required: "Email obrigatório", email: "Email invalido"},
			data: {required: "Escolha uma data"},
		},
		highlight: function(e) {
			$(e).addClass("is-invalid")
		},
		unhighlight: function(e) {
			$(e).removeClass("is-invalid")
		},
		success: function(e) {
			e.removeClass("is-invalid")
		},
		//display error alert on form submit  
		invalidHandler: function(event, validator) {     
			
		},

		submitHandler: function (form, e) {

            e.preventDefault();
			
			axios({
                method: form.method,
                url:    form.action,
                data:   $(form).serialize(),
                config: {header: {'Content-Type': 'multipart/form-data'}}

            }).then(function(response){
                // console.log('resposta', response);
                if( response.data.status ){

                    Swal.fire({
                        type: 'success',
                        title: 'Agendado!',
                        text: response.data.message,
                    }).then((result) => {
                        $(form).find('input[type=text], input[type=email]').val("");
                        $('#agendar').modal('toggle');
                    });

                }               

            }).catch(function(error){
				const errors                =   error.response.data.errors;
				
                const firstItem             =   Object.keys(errors)[0];
                const firstItemDOM          =   document.getElementById(firstItem);
                const firstErrorMessage     =   errors[firstItem][0];
                
                // scroll to the error messsage
                firstItemDOM.scrollIntoView({ behavior: 'smooth' });

                // remove all error messages
                const errorMessages         =   document.querySelectorAll('.is-invalid');
                errorMessages.forEach((element) => element.textContent = '');

                // show error message
                firstItemDOM.insertAdjacentHTML('afterend', `<span class="is-invalid">${firstErrorMessage}</span>`);

                // remove all from controls with highlited errors text bos
                const formControls          =   document.querySelectorAll('.form-control');
                formControls.forEach((element) => element.classList.remove('border', 'border-danger'));

                // highlight the form control with the error
                firstItemDOM.classList.add('border', 'border-danger');
                // console.log(error);
			});
			
			return false;
		}
    });
    

});