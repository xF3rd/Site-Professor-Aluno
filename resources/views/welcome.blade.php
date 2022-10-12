@extends('layouts.main')

@section('title','Inicio')

@section('content')

@foreach($profs as $prof)
    <p>{{ $prof->name }}</p>
@endforeach

@endsection