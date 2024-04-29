@extends('layouts.app')

@section('content')
    <h1>
        Pagina Admin
    </h1>
    <h2>
        {{$user->name}} ora sei loggato
    </h2>

    <a href="{{route('admin.posts.create')}}">
        Inserisci nuovo post
    </a>
@endsection