<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HomeModel;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function show(){

        $servicos   =   HomeModel::getServicos();
        return view('front/home', ['servicos' => $servicos]);
    }

    public function agendar(Request $request){
        $validatedData	=	$this->validate($request, [
			'nome'			=>	'required|max:60',
			'telefone'		=>	'required|max:12',
			'email'		    =>	'required|email',
			'data'			=>	'required',
        ]);


        $timestamp          =   new Carbon( $request->input('data') );        
        $data               =   array(
            'nome'                  =>  $request->input('nome'),
            'telefone'              =>  $request->input('telefone'),
            'email'                 =>  $request->input('email'),
            'data_agendamento'      =>  $timestamp->toDateTimeString(),
        );

        $addAgendamento     =   HomeModel::addAgendamento( $data );

        return response()->json(['status' => $addAgendamento, 'message' => 'Agendamento cadastrado com sucesso!Em breve recebera um email de confirmação']);
    }

    // public function verificar_email($email){
    //     $check  =   HomeModel::checkEmail( $request->input('email') );

    //     if( $check ){
    //         return response()->json(['sucesso' => false ]);
    //         exit;
    //     }
    //     return response()->json(['sucesso' => true ]);
    //     exit;
    // }
}
