@extends('layouts.app')

@section('libreria')
    <div class="container">
        <div class="row">
            <a href="{{'aggiungiImmagine'}}" class="text-dark my-2">Aggiungi Immagine</a>
        </div>
        <table class="border">
            @foreach (DB::table('immagini')->get('*'); as $row)
            <td><img src="{{$row->pathImmagini}}" alt=""></td>
            @endforeach
        </table>
    </div>
@endsection