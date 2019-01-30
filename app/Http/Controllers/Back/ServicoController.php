<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ServicoModel;
use Illuminate\Support\Facades\Redirect;

class ServicoController extends Controller
{

    public function index(){
        $servicos   =   ServicoModel::getAllServicos();  

        return view('back.servicos.index', ['servicos' => $servicos]);
    }

    public function show($id){
        $servico    =   ServicoModel::getServico($id);

        return view('back.servicos.show', ['servico' => $servico]);
    }

    public function create(){
        return view('back.servicos.new');
    }

    public function edit($id){
        $servico    =   ServicoModel::getServico($id);
        return view('back.servicos.edit', ['servico' => $servico]);
    }

    public function store(Request $request){
        $validatedData  =   $this->validate($request, [
            'nome'          =>  'required|max:60|min:5',
            'valor'         =>  'required',
            'descricao'     =>  'required|max:150',
            // 'input_img'     =>  'required|image|mimes:jpg,jpeg.png'
        ]);
        

        $data   =   array(
            'nome'          =>  $request->input('nome'),
            'valor'         =>  $request->input('valor'),
            'descricao'     =>  $request->input('descricao'),
        );
        try {
            ServicoModel::newServico($data);
            return redirect('admin/servicos');
		} catch (Exception $e) {
			// report($e);
			return $e;
		}
    }

    public function patch(Request $request, $id){

        $validatedData  =   $this->validate($request, [
            'nome'          =>  'required|max:60|min:5',
            'valor'         =>  'required',
            'descricao'     =>  'required|max:150',
            // 'input_img'     =>  'required|image|mimes:jpg,jpeg.png'
        ]);
        

        $data   =   array(
            'nome'          =>  $request->input('nome'),
            'valor'         =>  $request->input('valor'),
            'descricao'     =>  $request->input('descricao'),
        );
        try {
            ServicoModel::updateServico($data, $id);
            return Redirect::back();
		} catch (Exception $e) {
			// report($e);
			return $e;
		}
    }

    public function destroy($id){
        try {
            ServicoModel::deleteServico($id);
            return redirect('admin/servicos');
		} catch (Exception $e) {
			// report($e);
			return $e;
		}
    }
}
