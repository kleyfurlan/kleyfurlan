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
}
