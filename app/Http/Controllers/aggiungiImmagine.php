<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class aggiungiImmagine extends Controller
{
    public function insertImmagine(Request $req){
        //insert method
        if(Auth::check())
        {
            $imageName = time().'.'.$req->file('immagine')->Extension();
            $req->file('immagine')->store('images');
            DB::table('immagini')->insert(['pathImmagini' => storage_path($imageName),'Utenteid'=>Auth::id()]);
        }

        return view('libreria');    
        
        //return DB::table('articoli')->get('titolo');
    }
}
