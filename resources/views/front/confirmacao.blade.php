@extends('front/inc/master')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
@endsection
@section('content')
    
      
    <div class="container">

        
        <div class="row">
            
            @if($status)
                <div class="alert alert-success" role="alert">
                    Agendamento confirmado com sucesso!
                </div>
            @else
                
            @endif

        </div>

    </div>

@endsection