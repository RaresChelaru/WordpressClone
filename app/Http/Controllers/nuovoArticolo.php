<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class nuovoArticolo extends Controller
{
    public function  f1(){
        return view('nuovoArticolo');
    }

    public function insertArticolo(Request $req){
        //insert method
        if(Auth::check())
        {
            DB::table('articoli')->insert(['titolo' => $req->input('titolo'), 'testo' => $req->input('testo'), 'categoria' => $req->input('categoria'),'Utenteid'=>Auth::id()]);
            return view('listaArticoli');
        }
        
        //return DB::table('articoli')->get('titolo');
    }
}
