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
					
				</div>
				<div class="m-portlet__body">
                    <div class="form-group m-form__group">
                        <label for="nome">Senha Atual</label>
                        <input type="text" class="form-control m-input" id="nome">
                    </div>

                    <div class="form-group m-form__group">
                        <label for="email">Nova Senha</label>
                        <input type="text" class="form-control m-input" id="email">
                    </div>
                    
				</div>
				<!-- END PORTLET BODY -->

			</div>
		</div>
		<!-- end:: wrapper-content -->
	</div>
	<!-- end:: wrapper -->
@endsection