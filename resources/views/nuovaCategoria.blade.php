@extends('layouts.app')


@section('formCategorie')    

<div class="container">
    <div class="row">
        <form method="POST" action="/insertCategoria" class="offset-4 py-5">
            @csrf
            <label>Nome Categoria</label><br>
            <input type="text" name="nomeCategoria" id=""><br><br>
            <input type="submit" value="submit">
            
        </form>
    </div>
</div>

@endsection