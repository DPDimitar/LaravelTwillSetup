@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{$post->image('post_image','default', ['h'=>400, 'fit'=>null])}}"
                         class="card-img-top" alt="{{$post->title}}">
                    <div class="card-body">
                        <h3 class="card-title">{{ $post->title }}</h3>
                        <h5 class="card-subtitle">{{ $post->subtitle }}</h5>
                        <p class="card-text">{!! $post->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
