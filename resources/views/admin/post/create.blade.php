@extends('layouts.app')

@section('content')
    <h1 class="m-5">
        Nuovo progetto
    </h1>
    <form class="m-5" action="{{route('admin.posts.store')}}" method="POST">
        @csrf
        <div>
            <label for="titolo">Titolo</label>
            <input type="text" name="titolo" id="titolo" class="form-control @error('title') is-invalid @enderror">
            @error('titolo')
                {{$message}}
            @enderror
            <small class="text-muted">Titolo del progetto</small>
        </div>
        <div>
            <label for="descrizione">Descrizione</label>
            <textarea name="descrizione" id="descrizione" cols="30" rows="10" class="form-control @error('descrizione') is-invalid @enderror">{{old('content')}}</textarea>
            @error('descrizione')
                {{$message}}
            @enderror
            <small class="text-muted">Descrizione del progetto</small>
        </div>
        <button class="mt-3">
            Conferma
        </button>
    </form>
@endsection