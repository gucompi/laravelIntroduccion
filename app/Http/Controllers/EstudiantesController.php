<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EstudiantesController extends Controller {
   public function insertform(){
      return view('crearEstudiante');
   }

   public function insert(Request $request){
      $name = $request->input('stud_name');
      DB::insert('insert into estudiantes (nombre) values(?)',[$name]);
      echo "Estudiante ingresado correctamente.<br/>";
      echo '<a href = "/insert">Click Aqui</a> para volver.';
   }
}
