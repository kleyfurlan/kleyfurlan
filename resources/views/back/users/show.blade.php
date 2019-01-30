@extends('back.layout.master')
@section('title', 'Todos Clientes')
@section('content')
    	<!-- BEGIN: Wrapper -->
	<div class="m-grid__item m-grid__item--fluid m-wrapper">
		<!-- BEGIN: Subheader -->
		<div class="m-subheader ">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
                    <h3 class="m-subheader__title">Usuario - <b>{{$user->name}}</b></h3>
                    <a href="{{url('admin/users')}}" class="btn btn-primary m-btn m-btn--icon">
                        <span>
                            <i class="flaticon-reply"></i>
                            <span>Voltar</span>
                        </span>
                    </a>
				</div>
			</div>
		</div>
		<!-- END: Subheader -->

        <!-- BEGIN: wrapper-content -->
		<div class="m-content col-md-6">
			<div class="m-portlet m-portlet--mobile">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">{{$user->name}}</h3>
                            
                        </div>
                        
                    </div>
                    
                    <div class="m-portlet__head-tools">
                        <a href="#" data-toggle="modal" data-target="#alterar_senha" class="btn btn-brand m-btn m-btn--icon">
                            <span>
                                <i class="flaticon-edit"></i>
                                <span>Alterar Senha</span>
                            </span>
                        </a>
                    </div>
					
				</div>
				<div class="m-portlet__body">
                    <div class="form-group m-form__group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control m-input" value="{{$user->name}}" id="nome">
                    </div>

                    <div class="form-group m-form__group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control m-input" value="{{$user->email}}" id="email">
                    </div>

                    <div class="form-group m-form__group">
                        <label for="data">Data de Criação</label>
                        <input type="text" class="form-control m-input" value="{{$user->created_at}}" id="data" readonly>
                    </div>
                    
				</div>
				<!-- END PORTLET BODY -->

			</div>
		</div>
		<!-- end:: wrapper-content -->
	</div>
    <!-- end:: wrapper -->
    
    <div class="modal fade" id="alterar_senha" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Alterar Senha</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="alterar_senha needs-validation" action="{{route('users.edit', ['id' => $user->id])}}" novalidate >
                    <div class="modal-body">
                    
                        @csrf
                        <div class="form-group">
                            <label for="nova_senha" class="col-form-label">Nova Senha:</label>
                            <input type="password" class="form-control" name="nova_senha" id="nova_senha" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Alterar Senha</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    $( ".alterar_senha" ).validate({
		errorElement: 	"span",
		errorClass: 	"form-control-feedback",
		// focusInvalid: 	!1,
		// ignore: 		".note-editable.panel-body",
		// define validation rules
		rules: {
			senha: { required: true, minlength: 5 },
			
		},
		messages: {
			senha: {required: "Senha obrigatória", minlength: "Minimo {0} caracteres"},
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

		submitHandler: function (form, e) {

			e.preventDefault();
			
			axios({
                method: 'PATCH',
                url:    form.action,
                data:   $(form).serialize(),
                config: {header: {'Content-Type': 'multipart/form-data'}}

            }).then(function(response){
                console.log('resposta', response);
                if( response.data.status ){
                    Swal.fire({
                        type: "success",
                        title: "Senha Alterada Com Sucesso!",

                    }).then((result) => {
						$('.modal').modal('hide');
						$('.change_password').find('input[type="password"]').val('');
                    });
                }               

            }).catch(function(error){
				console.log('errors', error);
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
			
			return false;
		}
    });
</script>
@endsection