<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\indexController;
use DB;

class dwords extends Model
{
    public static function insertDwords($textbox_array)
    {
       // $dwords = new dwords;
        // $dwords->dword = 'john';
        // $dwords->save();
        //echo "in model";die;
        foreach ($textbox_array as $textValue) {
           // echo $textValue;
         //DB::insert('insert into dwords (dword) values (?)', [$textValue]);
         //echo "inserted into db";
            $dwords = new dwords;
            $dwords->dword = $textValue;
            $dwords->save();
       }
    }
}
