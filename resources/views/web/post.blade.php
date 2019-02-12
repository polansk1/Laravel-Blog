@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2 mx-auto">
            <h1>{{ $post->name }}</h1>
            
                <div class="card">
                    <div class="card-header">
                        <strong>Categoría </strong> 
                        <a href="{{ route('category',$post->category->slug) }}">{{ $post->category->name }}</a>
                    </div>
                    @if($post->file)
                        <img src="{{$post->file}}" class="img-responsive card-img-top" alt="{{ $post->name }}">
                    @endif
                    <div class="card-body">
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <hr>
                        {!! $post->body !!}
                        <hr>
                        Etiquetas
                        @foreach($post->tags as $tag)
                        <a href="{{ route('tag',$tag->slug) }}">{{ $tag->name }}</a>
                        @endforeach
                        
                    </div>
                </div> 
        </div>
    </div>
@endsection﻿