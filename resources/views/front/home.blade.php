@extends('front/inc/master')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
@endsection
@section('content')
    
      
    <div class="container">

        
        <div class="row">
            @foreach($servicos as $servico)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset($servico->img) }} " class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $servico->nome }}</h5>
                        <p class="card-text">{{ $servico->descricao }}</p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">R$ {{ number_format($servico->valor, 2, ',', '.') }}</li>
                    </ul>
                    <div class="card-body text-center">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#agendar" data-whatever="@mdo">AGENDAR</button>
                    </div>
                </div>
                          
            </div>
            @endforeach
            {{-- <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div> --}}
        </div>

    </div>

    <div class="modal fade" id="agendar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agendamento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" class="agendamento needs-validation" action="{{action('Front\HomeController@agendar')}}" novalidate >
                    <div class="modal-body">
                    
                        @csrf
                        <div class="form-group">
                            <label for="nome" class="col-form-label">Nome do Dono:</label>
                            <input type="text" class="form-control" name="nome" id="nome" required maxlength="30">
                        </div>
                        <div class="form-group">
                            <label for="telefone" class="col-form-label">Telefone:</label>
                            <input type="text" class="form-control" name="telefone" id="telefone" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>

                        <div class="form-group">
                            <label for="datetimepicker5" class="col-form-label">Data:</label>
                            <input type="text" required name="data" class="form-control datetimepicker-input" id="datetimepicker5" data-toggle="datetimepicker" data-target="#datetimepicker5"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Agendar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    


@endsection
@section('js')
    {{-- <script src="./node_modules/bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js"></script> --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment-with-locales.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="./node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="{{asset('site/js/front.js')}}"></script>
    <script>
    
    let now     =   moment().add(1, 'days').format();
    $('#datetimepicker5').datetimepicker({
        locale: 'pt-br',
        format: 'DD/MM/YYYY hh:mm:ss',
        minDate: now
    });

    </script>
@endsection