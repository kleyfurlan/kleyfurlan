@extends('back.layout.master')
@section('title', 'Todos Clientes')
@section('content')
    	<!-- BEGIN: Wrapper -->
	<div class="m-grid__item m-grid__item--fluid m-wrapper">
		<!-- BEGIN: Subheader -->
		<div class="m-subheader ">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
                    <h3 class="m-subheader__title ">{{$servico->nome}}</h3>
                    <a href="{{url('admin/servicos')}}" class="btn btn-primary m-btn m-btn--icon">
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
							<h3 class="m-portlet__head-text">{{$servico->nome}}</h3>
						</div>
                    </div>
                    
                    <div class="m-portlet__head-tools">
                        <a href="{{route('servicos.edit', ['id' => $servico->id])}}" class="btn btn-brand m-btn m-btn--icon">
                            <span>
                                <i class="flaticon-edit"></i>
                                <span>Editar</span>
                            </span>
                        </a>

                        <a href="{{route('servicos.delete', ['id' => $servico->id])}}" class="btn btn-danger m-btn m-btn--icon ml-4">
                            <span>
                                <i class="flaticon-edit"></i>
                                <span>Remover</span>
                            </span>
                        </a>
                    </div>
					
				</div>
				<div class="m-portlet__body">
                    <div class="form-group m-form__group">
                        <label>Foto</label>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{asset($servico->img)}}" style="max-width: 300px; max-height: 300px;" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-form__group">
                        <label for="nome">Nome Serviço</label>
                        <input type="text" class="form-control m-input" id="nome" value="{{$servico->nome}}" readonly>
                    </div>

                    <div class="form-group m-form__group">
                        <label for="nome">Valor</label>
                        <input type="text" class="form-control m-input" id="nome" value="{{number_format($servico->valor, 2, ',', '.')}}" readonly>
                    </div>

                    <div class="form-group m-form__group">
                        <label for="nome">Descrição</label>
                        <textarea class="form-control" name="" id="" cols="30" rows="10" readonly>{{$servico->descricao}}</textarea>
                    </div>

                    
                        
				</div>
				<!-- END PORTLET BODY -->

			</div>
		</div>
		<!-- end:: wrapper-content -->
	</div>
	<!-- end:: wrapper -->
@endsection