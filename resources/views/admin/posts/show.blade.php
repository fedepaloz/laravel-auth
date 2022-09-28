@extends('layouts.app')
{{-- titolo, content, immagine --}}
@section('content')
<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$post->title}}</h4>
            <p class="card-text">{{$post->content}}</p>
            <div class="col mb-5"><img src="{{$post->image}}" alt=""></div>
            <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Torna alla lista</a>
            <a href="#" class="btn btn-primary">modifica</a>
            <a href="#" class="btn btn-primary">cancella</a>
            {{-- immagine da mettere in ordine poiche orribile --}}
            
    
        </div>
      </div>
    </div>
    
  </div>
@endsection 