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
            
            DB::table('immagini')->insert(['pathImmagini' => substr(storage_path($req->file('immagine')->store('public')),45),'Utenteid'=>Auth::id()]);
        }

        return view('libreria');    
        
        //return DB::table('articoli')->get('titolo');
    }
}
