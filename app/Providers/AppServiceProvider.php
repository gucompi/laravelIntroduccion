<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

   /**
      * Bootstrap any application services.
      *
      * @return void
   */

   public function boot(){
      view()->share('name', 'Gustavo Compiano');
   }

   /**
      * Register any application services.
      *
      * @return void
   */

   public function register(){
      //
   }
}
