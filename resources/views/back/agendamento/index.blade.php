@extends('back.layout.master')
@section('title', 'Agendamentos')
@section('content')
    	<!-- BEGIN: Wrapper -->
	<div class="m-grid__item m-grid__item--fluid m-wrapper">
		<!-- BEGIN: Subheader -->
		<div class="m-subheader ">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="m-subheader__title ">Agendamento</h3>
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
							<h3 class="m-portlet__head-text">Listar todos os Agendamentos</h3>
						</div>
					</div>
					
				</div>
				<div class="m-portlet__body">

                        <table class="m-datatable" id="html_table" width="100%">
                            <thead>
                                <tr>
                                    <th title="Field #1">Nome</th>
                                    <th title="Field #2">Telefone</th>
                                    <th title="Field #3">Email</th>
                                    <th title="Field #4">Data Agendamento</th>
                                    <th title="Field #5"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($agendamentos as $agendamento)
                                <tr>
                                    <td>{{$agendamento->nome}}</td>
                                    <td>{{$agendamento->telefone}}</td>
                                    <td>{{$agendamento->email}}</td>
                                    <td>{{$agendamento->data_agendamento}}</td>
                                    <td><a href="{{route('agendamento.show', ['id' => $agendamento->id])}}" class="btn btn-primary">Ver Detalhes</a></td>
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
    {{-- <script src="{{ asset('admin/custom-js/client-index.js') }}" type="text/javascript"></script> --}}

    <script>
        var agendamentos= {
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
            agendamentos.init()
        }

        );
    </script>
@endsection