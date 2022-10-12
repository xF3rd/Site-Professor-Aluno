@extends('layouts.main')

@section('title','Inicio')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um professor</h1>
    <form action="">
        <input type="text" id="search" name="form-control" placeholder="Buscar...">
    </form>
</div>
<div id="prof-container" class="col-md-12">
    <h2>Professores</h2>
    <p>Professores cadastrados</p>
    <div id="cards-conteiner" class="row">
        @foreach($profs as $prof)
        <div class="card col-md-3">
            <img src="/img/guarana.png" alt="{{ $prof->name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $prof->name }}</h5>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection