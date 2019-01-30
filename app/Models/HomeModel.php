<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeModel extends Model
{
    protected $table    =   "servicos";

     /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'nome', 'descricao', 'valor', 'img',
    ];
    
    public static function getServicos(){
		return DB::table('servicos')->get();
		
    }

    public static function addAgendamento( $data ){
        $sql    =   DB::table('agenda')
                ->insert([
                    'nome'              => $data['nome'],
                    'telefone'          => $data['telefone'],
                    'email'             => $data['email'],
                    'data_agendamento'  => $data['data_agendamento'],
                    'token'             => uniqid('', true),
                ]);
        return $sql;
    }
    
    // public static function checkEmail($email){
	// 	return DB::table('agenda')
	// 		->where('email', $email)
	// 		->count();
	// }
}
