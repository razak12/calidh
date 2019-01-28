<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //this is to controle all the pages

   public function about(){
        return view ('pages.about');
    }


}
