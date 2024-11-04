<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function menu(){
        return view('controlador_menu.menu');
    }
    public function futbol(){
        return view('controlador_menu.futbol');
    }
    public function basket(){
        return view('controlador_menu.basket');
    }
     public function voley(){
        return view('controlador_menu.voley');
    }
    
}
