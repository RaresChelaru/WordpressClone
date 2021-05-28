@extends('layouts.app')

@section('listaCategorie')

<div class="container">
    <div class="row">

        <a href="{{'nuovaCategoria'}}" class="text-dark my-3">Nuova categoria</a>
        <table class="border">
            <tr>
                <th>Nome categoria</th>
                <th>Id</th>
            </tr>
            
            @foreach (DB::table('categorie')->get('*'); as $row)
            <tr>
                <td>{{$row->nomeCategoria}}</td>
                <td>{{$row->id}}</td>
            @endforeach

        </table>
        
    </div>
</div>

@endsection