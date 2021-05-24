@extends('layouts.app')

@section('listaArticoli')

<div class="container">
    <div class="row">
        
        @foreach (DB::table('articoli')->get('titolo'); as $row)
            <h1>{{$row->titolo}}</h1>
        @endforeach
    </div>
</div>
    
@endsection