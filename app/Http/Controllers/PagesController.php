<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function personaje($nombre){

        // $personaje = $nombre->input;
        // echo "Este es el echo $personaje";
        return view("personajes/$nombre");

        // return view("/personaje/",$nombre);

        // $personajes = array(
        //         0=> 'mago',
        //         1=> 'muggle', 
        //         2=>'mortifago'
        //         );

        // for($i=0; $i<count ($personajes); $i++)
        // {
        //     if ($personajes[$i] == $nombre)
        //     {
        //         $personaje = $personajes[i];
        //         return view('personajes.$personaje')->with('$nombre');
        //     }     
        //  else{
        //     echo $personajes[$i];
        //     echo $nombre;
        //     return view('autor');
        //     }

        //     }
    }


    public function autor(){
        return view('autor');
    }
}