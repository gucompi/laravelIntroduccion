<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ActualizaEstudianteController extends Controller {
   public function index(){
      $users = DB::select('select * from estudiantes');
      return view('editarEstudiante',['users'=>$users]);
   }
   public function show($id) {
      $users = DB::select('select * from estudiantes where id = ?',[$id]);
      return view('estudianteActualizar',['users'=>$users]);
   }
   public function edit(Request $request,$id) {
      $name = $request->input('nombreEstudiante');
      DB::update('update estudiantes set nombre = ? where id = ?',[$name,$id]);
      echo "Estudiante Actualizado Correctamente.<br/>";
      echo '<a href = "/edit-records">Click Aca</a> para volver.';
   }
}
