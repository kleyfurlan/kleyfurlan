<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index(){
        $data   =   UserModel::getUsers();

        return view('back.users.index', ['users' => $data] );
    }

    public function create(Request $request){
        //
    }

    public function show($id){
        $getUser    =   UserModel::getUserByID($id);
        return view('back.users.show', ['user' => $getUser]);
    }


    public function edit(Request $request, $id){
		$validatedData  =   $this->validate($request, [
			'nova_senha'        =>  'required|min:5|max:30',
		]);

		try {
			$update         =   UserModel::updatePassword($request->input('nova_senha'), $id);
			return response()->json(['status' => true ,'message' => 'Senha Atualizada!']);
		} catch (Exception $e) {
			// report($e);
			return $e;
		}        
	}

    public function delete($id){
        
    }
}
