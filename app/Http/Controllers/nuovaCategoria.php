<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class nuovaCategoria extends Controller
{
    public function  f2(){
        return view('nuovaCategoria');
    }

    public function insertCategoria(Request $req){
        //insert method
        if(Auth::check())
        {
            DB::table('categorie')->insert(['nomeCategoria' => $req->input('nomeCategoria'), 'Utenteid'=>Auth::id()]);
            return view('listaCategorie');
        }
        
    }
}
