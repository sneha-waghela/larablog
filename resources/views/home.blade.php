@extends('layouts.app')

@section('content')
<div class="container">
    @include('messages')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Posts</div>

                <div class="card-body">
                    @if(count($posts) > 0)
                        @foreach($posts as $post)
                            <div clas="jumbotron">
                                <h1>
                                    <a href="/posts/{{$post->id}}">{{ $post->title }}</a>
                                </h1>
                                <p>{{ $post->body }}</p>
                                <small>Written on {{ $post->created_at }} by <b>{{ $post->user->name }}</b></small>
                            </div>
                            <hr>
                        @endforeach
                            {{ $posts->links() }}
                    @else
                        No Post Found
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
