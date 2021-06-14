@extends('layouts.app')

@section('libreria')
    <div class="container">
        <div class="row">
            <a href="{{'aggiungiImmagine'}}" class="text-dark my-2">Aggiungi Immagine</a>
        </div>

            @foreach (DB::table('immagini')->get('*'); as $row)
            <img src="\storage\Nk02nkwbC9iPkW36weWWSmM0Uxo4DM60CyPg8Z3z.jpg" alt=":c" style="width: 50px">
            @endforeach

    </div>
@endsection