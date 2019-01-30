@extends('back.layout.master')
@section('title', 'Todos Clientes')
@section('content')
    	<!-- BEGIN: Wrapper -->
	<div class="m-grid__item m-grid__item--fluid m-wrapper">
		<!-- BEGIN: Subheader -->
		<div class="m-subheader ">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="m-subheader__title ">Servicos</h3>
				</div>
			</div>
		</div>
		<!-- END: Subheader -->

		<!-- BEGIN: wrapper-content -->
		<div class="m-content">
			<div class="m-portlet m-portlet--mobile">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<h3 class="m-portlet__head-text">Listar todos os Servicos</h3>
						</div>
					</div>
					
				</div>
				<div class="m-portlet__body">

                        <table class="m-datatable" id="html_table" width="100%">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Valor</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($servicos as $servico)
                                <tr>
                                    <td>{{$servico->nome}}</td>
                                    <td>{{number_format($servico->valor, 2, ',', '.')}}</td>
                                    <td><a href="{{route('servicos.show', ['id' => $servico->id])}}" class="btn btn-primary">Ver Detalhes</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
				</div>
				<!-- END PORTLET BODY -->

			</div>
		</div>
		<!-- end:: wrapper-content -->
	</div>
	<!-- end:: wrapper -->
@endsection

@section('scripts')

    <script>
        var servicos= {
            init:function() {
                var e;
                e=$(".m-datatable").mDatatable( {

                    data: {
                        saveState: {
                            cookie: !1
                        }
                    }
                    , search: {
                        input: $("#generalSearch")
                    }
                    , 
                }
                ),
                $("#m_form_status, #m_form_type").selectpicker()
            }
        }

        ;
        jQuery(document).ready(function() {
            servicos.init()
        }

        );
    </script>
@endsection