<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AgendamentoModel extends Model
{
	public static function getAgendamentos(){
		return DB::table('agenda')->get();
	}

	public static function getAgendamentoByID($id){
		return DB::table('agenda')
		->where('id', '=', $id)
		->first();
	}

	public static function getPending(){
		return DB::table('agenda')
				->where('fl_mail', '=', 0)
				->first();

	}

	public static function updateMailFlag($id){
		return DB::table('agenda')
			->where('id', '=', $id)
			->update(['fl_mail' => 1]);
	}

	public static function checkToken($token){
		return DB::table('agenda')
			->where('token', '=', $token)
			->where('fl_confirmacao', '=', 0)
			->count();
	}

	public static function updateConfirmacao($token){
		return DB::table('agenda')
			->where('token', '=', $token)
			->update(['fl_confirmacao' => 1]);
	}
}
