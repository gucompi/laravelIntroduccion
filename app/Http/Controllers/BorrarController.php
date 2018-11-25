<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BorrarController extends Controller {
   public function index(){
      $users = DB::select('select * from estudiantes');
      return view('borrarEstudiantesLista',['users'=>$users]);
   }
   public function destroy($id) {
      DB::delete('delete from estudiantes where id = ?',[$id]);
      echo "Estudiante Borrado exitosamente.<br/>";
      echo '<a href = "/borrarEstudiantes">Click Aqui</a> para volver.';
   }
}
