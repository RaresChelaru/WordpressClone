@extends('layouts.app')


@section('formArticoli')    

<div class="container">
    <div class="row">
        <form method="POST" action="/insertArticolo">
            @csrf
            <label>Titolo</label>
            <input type="text" name="titolo" id="">
            <label>Testo</label>
            <input type="text" name="testo" id="">
            <input type="file" name="immagine">
            <input type="submit" value="submit">
            
        </form>
    </div>
</div>

@endsection