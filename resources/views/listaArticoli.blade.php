@extends('layouts.app')

@section('listaArticoli')

<div class="container">
    <div class="row">
        <a href="{{'nuovoArticolo'}}" class="text-dark">Nuovo articolo</a>
        <table class="border">
            <tr>
                <th>Titolo</th>
                <th>Categoria</th>
            </tr>

            @foreach (DB::table('articoli')->join('categorie', 'articoli.categoria', )->get('*'); as $row)
            <td>{{$row->titolo}}</td>
            @endforeach

            @foreach (DB::table('articoli')->get('*'); as $row)
            <td>{{$row->categoria->}}</td>
            @endforeach
        </table>
        
    </div>
</div>
    
@endsection