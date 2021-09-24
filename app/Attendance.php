<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Attendance extends Model
{
    public static function insertData($data){

        $value=DB::table('Attendance')->where('username', $data['username'])->get();
        if($value->count() == 0){
           DB::table('Attendance')->insert($data);
        }
     }
}
