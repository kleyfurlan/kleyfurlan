@extends('back.layout.master')
@section('title', 'Agendamento')
@section('content')
    	<!-- BEGIN: Wrapper -->
	<div class="m-grid__item m-grid__item--fluid m-wrapper">
		<!-- BEGIN: Subheader -->
		<div class="m-subheader ">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
                    <h3 class="m-subheader__title ">Agendamento - <b>{{$agendamento->nome}}</b></h3>
                    <a href="{{url('admin/agendamentos')}}" class="btn btn-primary m-btn m-btn--icon">
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
                            <h3 class="m-portlet__head-text">{{$agendamento->nome}}</h3>
						</div>
                    </div>
					
				</div>
				<div class="m-portlet__body">
                    <div class="form-group m-form__group">
                        <b>Status:</b>
                        <p>
                        @if( $agendamento->fl_confirmacao == 1 )
                            <button type="button" class="btn btn-success">Confirmado</button>
                        @else
                            <button type="button" class="btn btn-warning">Pendente</button>
                        @endif
                        </p>
                    </div>
                    <div class="form-group m-form__group">
                        <b>Nome do Dono:</b>
                        <p>{{$agendamento->nome}}</p>
                    </div>
                    <div class="form-group m-form__group">
                        <b>Telefone:</b>
                        <p>{{$agendamento->telefone}}</p>
                    </div>
                    <div class="form-group m-form__group">
                        <b>Email:</b>
                        <p>{{$agendamento->email}}</p>
                    </div>
                    <div class="form-group m-form__group">
                        <b>Data Agendamento:</b>
                        <p>{{$agendamento->data_agendamento}}</p>
                    </div>

                    
				</div>
				<!-- END PORTLET BODY -->

			</div>
		</div>
		<!-- end:: wrapper-content -->
	</div>
	<!-- end:: wrapper -->
@endsection
