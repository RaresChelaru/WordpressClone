@extends('layouts.app')

@section('listaArticoli')

<div class="container">
    <div class="row">
        <a href="{{'nuovoArticolo'}}" class="text-dark my-3">Nuovo articolo</a>
        <table class="border border-primary my-3">
            <tr class="border border-primary">
                <th>Titolo</th>
                <th>Categoria</th>
            </tr>

            @foreach (DB::table('articoli')->join('categorie', 'articoli.categoria', '=' , 'categorie.id')->get('*'); as $row)
            <tr><td>{{$row->titolo}}</td><td>{{$row->nomeCategoria}}</td></tr>
            @endforeach

        </table>
        
    </div>
</div>
    
@endsection