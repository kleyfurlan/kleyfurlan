@extends('back.layout.master')
@section('title', 'Todos Clientes')
@section('content')
    	<!-- BEGIN: Wrapper -->
	<div class="m-grid__item m-grid__item--fluid m-wrapper">
		<!-- BEGIN: Subheader -->
		<div class="m-subheader ">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
                    <h3 class="m-subheader__title ">Editar {{$servico->nome}}</h3>
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
                    <form enctype="multipart/form-data" action="{{route('servicos.update', ['id' => $servico->id] )}}" method="POST">
                        @method('PATCH')
                        @csrf

                        <div class="form-group m-form__group">
                            <label>Foto</label>
                            {{-- <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset($servico->img)}}" style="max-width: 300px; max-height: 300px;" alt="">
                                </div>
                            </div> --}}
                            <input type="file" class="form-control m-input" name="input_img" id="imagem">
                        </div>

                        <div class="form-group m-form__group">
                            <label for="nome">Nome Serviço</label>
                            <input type="text" class="form-control m-input" name="nome" id="nome" value="{{$servico->nome}}">
                        </div>

                        <div class="form-group m-form__group">
                            <label for="nome">Valor</label>
                            <input type="text" class="form-control m-input" name="valor" id="valor" value="{{number_format($servico->valor, 2, '.', '.')}}">
                        </div>

                        <div class="form-group m-form__group">
                            <label for="nome">Descrição</label>
                            <textarea class="form-control" name="descricao" id="" cols="30" rows="10">{{$servico->descricao}}</textarea>
                        </div>

                        <div class="m-form__actions">
                            <button type="submit" class="btn btn-primary">Atualizar</button>
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