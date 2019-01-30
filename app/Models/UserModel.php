<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserModel extends Model
{
    public static function getUsers(){
        return DB::table('users')->get();
    }

    public static function getUserByID($id){
        return DB::table('users')
            ->where('id', '=', $id)
            ->first();
    }

    public static function updatePassword($password, $ID){
        return DB::table('users')
                ->where('id', '=', $ID)
                ->update(['password' => Hash::make( $password )]);
    }
}
