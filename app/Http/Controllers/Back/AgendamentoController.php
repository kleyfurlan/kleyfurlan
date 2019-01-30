<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AgendamentoModel;
use Carbon\Carbon;

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
}
