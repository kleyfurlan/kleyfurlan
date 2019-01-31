<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AgendamentoModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\AgendamentoConfirmacao;

class AgendamentoController extends Controller
{
    public function index(){
        $data   =   AgendamentoModel::getAgendamentos();
        
        return view('back.agendamento.index', ['agendamentos' => $data]);
    }

    public function show($id){
        $agendamento    =   AgendamentoModel::getAgendamentoByID($id);

        $data           =   new Carbon($agendamento->data_agendamento);
        $data->format('D/M/Y h:i:s');

        $agendamento->data_agendamento  =   $data->format('d/m/y h:i:s');

        return view('back.agendamento.show', ['agendamento' => $agendamento]);
    }

    public function send_confirmation(){
        $getPending     =   AgendamentoModel::getPending();

        try {
            Mail::to( $getPending->email )->send(new AgendamentoConfirmacao( $getPending->token ));
        } catch(Exception $e){
            return $e;
        }

        return redirect('/');

    }

    public function confirm_token($token){
        $check      =   AgendamentoModel::checkToken( $token );

        if( $check ){
            AgendamentoModel::updateConfirmacao($token);
            return view('front.confirmacao', ['status' => 1]);
            exit;
        }

        return redirect('/');        

    }
}
