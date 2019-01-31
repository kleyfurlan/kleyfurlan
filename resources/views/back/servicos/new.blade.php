@extends('back.layout.master')
@section('title', 'Todos Clientes')
@section('content')
    	<!-- BEGIN: Wrapper -->
	<div class="m-grid__item m-grid__item--fluid m-wrapper">
		<!-- BEGIN: Subheader -->
		<div class="m-subheader ">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
                    <h3 class="m-subheader__title ">Novo Serviço</h3>
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
							<h3 class="m-portlet__head-text">Criar novo Serviço</h3>
						</div>
                    </div>
					
				</div>
				<div class="m-portlet__body">
                    @if (count($errors) > 0)
                        <div class="error">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form enctype="multipart/form-data" action="{{route('servicos.new')}}" method="POST">
                        @csrf
                        
                        <div class="form-group m-form__group">
                            <label for="imagem">Imagem</label>
                            <input type="file" class="form-control m-input" name="input_img" id="imagem">
                        </div>

                        <div class="form-group m-form__group">
                            <label for="nome">Nome Serviço</label>
                            <input type="text" class="form-control m-input" value="{{old('nome')}}" name="nome" id="nome">
                        </div>

                        <div class="form-group m-form__group">
                            <label for="nome">Valor</label>
                            <input type="text" class="form-control m-input" value="{{old('valor')}}" id="valor" name="valor">
                        </div>

                        <div class="form-group m-form__group">
                            <label for="descricao">Descrição</label>
                            <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="10">{{old('descricao')}}</textarea>
                        </div>

                        <div class="m-form__actions">
                            <button type="submit" class="btn btn-primary">Adicionar Serviço</button>
                        </div>
                    </form>
                    
                        
				</div>
				<!-- END PORTLET BODY -->

			</div>
		</div>
		<!-- end:: wrapper-content -->
	</div>
	<!-- end:: wrapper -->
@endsection