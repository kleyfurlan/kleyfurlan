@extends('back.layout.master')
@section('title', 'Todos Clientes')
@section('content')
    	<!-- BEGIN: Wrapper -->
	<div class="m-grid__item m-grid__item--fluid m-wrapper">
		<!-- BEGIN: Subheader -->
		<div class="m-subheader ">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="m-subheader__title ">Usuarios</h3>
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
							<h3 class="m-portlet__head-text">Listar todos os Usuarios</h3>
						</div>
					</div>
					
				</div>
				<div class="m-portlet__body">

                        <table class="m-datatable" id="html_table" width="100%">
                            <thead>
                                <tr>
                                    <th title="Field #1">Nome</th>
                                    <th title="Field #2">email</th>
                                    <th title="Field #3">Data Criação</th>
                                    <th title="Field #5"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td><a href="{{route('users.show', ['id' => $user->id])}}" class="btn btn-primary">Ver Detalhes</a></td>
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