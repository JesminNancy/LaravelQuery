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
      
   function onDelete(Request $request){
         
    $id= $request->input('id'); 
    $result=DB::delete('DELETE FROM `students` WHERE id=?', [$id]);
    
    if($result==true){
    
     return "Delete Success";
     
    }else{
     return "Delete Failed";
    }
  }
  
  function onUpdate(Request $request){
  
    $id= $request->input('id');    
    $name= $request->input('name');
    $class= $request->input('class');
    $roll= $request->input('roll');
    
    $result=DB::update('UPDATE `students` SET `name`=?,`class`=?,`roll`=? WHERE `id`=?', [$name,$class,$roll,$id]);
    
    if($result==true){
    
     return "Update Success";
     
    }else{
     return "Update Failed";
    }
  }
     
   
}
