@extends('layouts.main')

@section('title','Criar um professor')

@section('content')

    <div id="prof-create-container" class="col-md-6 offset-md-3">
        <h1>Adicione o seu professor</h1>
        <form action="/prof" method="POST">
            <div class="form-grup">
                <label for="title">Professor:</label>
                <imput type="text" class="form-control" id="name" name="name" placeholder="Nome do professor"></imput>
            </div>
            <input type="submit" class="btn btn-primary" value="Adicionar professor">
        </form>
    </div>
    
@endsection