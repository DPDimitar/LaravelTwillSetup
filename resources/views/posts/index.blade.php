@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Posts') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            @foreach($posts as $post)
                                <div class="col-md-4">
                                    <div class="card">
                                        <a href="{{route('posts.show',$post->slug)}}">
                                            <img src="{{$post->image('post_image','default', ['w'=>200, 'fit'=>null])}}"
                                                 class="card-img-top" alt="{{$post->title}}">
                                        </a>
                                        <div class="card-body">
                                            <a href="{{route('posts.show',$post->slug)}}" class="text-black text-decoration-none link">
                                                <h5 class="card-title">{{$post->title}}</h5>
                                            </a>
                                            <a href="{{route('posts.show',$post->slug)}}" class="btn btn-primary">{{ __('main.read_more') }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

