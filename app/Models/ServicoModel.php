<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ServicoModel extends Model
{
    public static function getAllServicos(){
        return DB::table('servicos')->get();
    }

    public static function getServico($id){
        return DB::table('servicos')
                ->where('id', '=', $id)
                ->first();
    }

    public static function updateServico($data, $id){
        return DB::table('servicos')
                ->where('id', '=', $id)
                ->update([
                    'nome'      => $data['nome'],
                    'valor'     => $data['valor'],
                    'descricao' => $data['descricao'],
                    'img'       => $data['input_img']
                ]);
    }

    public static function newServico($data){
        return DB::table('servicos')
                ->insert([
                    'nome'      => $data['nome'],
                    'valor'     => $data['valor'],
                    'descricao' => $data['descricao'],
                    'img'       => $data['input_img'] //'public/servico.jpg'
                ]);
    }

    public static function deleteServico($id){
        return DB::table('servicos')
            ->where('id', '=', $id)
            ->delete();
    }
}
