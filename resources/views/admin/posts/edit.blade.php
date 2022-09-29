@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.posts.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">titolo</label>
            <input type="text" class="form-control" name="title" value="{{$post->title}}">


            <div class="form-group">
                <label for="content">contenuto</label>
                <input type="text" class="form-control" name="content" value="{{$post->content}}">

          {{--   <div class="form-group">
                <label for="content">contenuto</label>
                <textarea name="content " id="content" required>{{ old('content') }}</textarea>
            </div> --}}
{{-- TODO mettere anteprima immagine --}}
            <div class="form-group">
                <label for="image">immagine</label>
                <input type="url" class="form-control" name="image" id="image" value="{{$post->image}}">
            </div>
            <a href="{{ route('admin.posts.index') }}"><button type="button" class="btn btn-primary">torna alla
                    lista</button></a>

            <button type="submit" class="btn btn-primary">modifica post</button>

    </form>
@endsection
