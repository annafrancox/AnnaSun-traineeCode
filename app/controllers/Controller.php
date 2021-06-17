<?php
namespace App\Controllers;
use App\Core\App;

class Controller
{

   public function contact()
   {
       return view('site/contato');
   }

   public function enviarEmail()
   {
       return view('site/enviar') ;
   }



}