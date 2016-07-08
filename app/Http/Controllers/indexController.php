<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\dwords;
use App\Http\Requests;

class indexController extends Controller
{
   function amiright(){
       $textbox_array =  $_POST['textbox'];
       dwords::insertDwords($textbox_array);       
       return view('amiright', compact('textbox_array'));
   }
}
