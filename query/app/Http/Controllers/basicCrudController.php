<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class basicCrudController extends Controller
{
   function onSelect(){
   
   $jsonData= DB::select('select * from students where name=?', ['jesmin']);
   $jsonString= json_encode($jsonData);
   $selectData= json_decode($jsonString);
   return view('select', ['selectKey'=>$selectData]);
   
   }
}
