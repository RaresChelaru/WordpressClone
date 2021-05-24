<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class nuovoArticolo extends Controller
{
    public function  f1(Request $req){
        return view('nuovoArticolo', [
            'path' => $req->path()
        ]);
    }

    public function insertArticolo(Request $req){
        //insert method
        DB::table('articoli')->insert(['titolo' => $req->input('titolo'), 'testo' => $req->input('testo')]);
        return view('listaArticoli');
        //return DB::table('articoli')->get('titolo');
    }
}
