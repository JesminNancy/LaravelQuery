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
   
   function onInsert(Request $request){
         
     $name= $request->input('name');
     $class= $request->input('class');
     $roll= $request->input('roll');
     
     $result=DB::insert('INSERT INTO `students`(`name`, `class`, `roll`) VALUES (?,?,?)', [$name,$class,$roll]);
     
     if($result==true){
     
      return "Success";
      
     }else{
      return "Failed";
     }
   }
   
}
