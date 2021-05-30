@extends('layouts.app')

@section('aggiungiImmagine')
    <div class="container">
        <div class="row">
            <form action="/insertImmagine" method="POST" enctype="multipart/form-data" class="offset-4 py-5" >
                @csrf
                <label for="">Aggiungi immagine</label><br><br>
                <input type="file" name="immagine" id="immagine" accept="image/*" enctype="multipart/form-data"><br><br>
                <input type="submit" value="submit">
            </form>
        </div>
    </div>    
@endsection