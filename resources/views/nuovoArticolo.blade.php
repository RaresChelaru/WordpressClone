@extends('layouts.app')

@section('formArticoli')    

<div class="container">
    <div class="border">
        <form method="POST" action="/insertArticolo" class="offset-4 py-5">
            @csrf
            <label>Titolo</label><br>
            <input type="text" name="titolo" id=""><br><br>
            <label>Testo</label><br>
            <input type="text" name="testo" id=""><br><br>
            <label for="">Immagine</label><br>
            <input type="file" accept="image/*"><br><br>
            <label for="">Categoria</label>

           
                <select id="categoria" name="categoria">
                    @foreach(DB::table('categorie')->get('*') as $row)
                    <option value="{{$row->id}}">{{$row->nomeCategoria}}</option>
                    @endforeach
                </select><br><br>
            
            <input type="submit" value="submit">  
        </form>
    </div>
</div>

@endsection