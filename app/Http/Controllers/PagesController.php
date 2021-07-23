<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function personajes($nombre){

        // echo "Este es el echo $nombre";
        return view("personajes/$nombre");
    }

    public function casas($nombre){

        return view("casas/$nombre");
        
    }

    public function autor(){
        return view('autor');
    }

    public function bestiario(){
        return view('bestiario');
    }

    public function hechizos(){
        return view('hechizos');
    }

    public function comunidad(){
        return view('comunidad');
    }


}