<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CookieController extends Controller {
   public function setCookie(Request $request){
      $minutes = 1;

      $response = new Response('Hola, '.$request->nombre);
      $response->withCookie(cookie('name', $request->nombre, $minutes));
      return $response;
   }
   public function getCookie(Request $request){
      $value = $request->cookie('name');
      echo $value;
   }
}
