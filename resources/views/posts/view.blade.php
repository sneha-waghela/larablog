@extends('layouts.app')

@section('content')
    <div class="container">
        @include('messages')
        <a href="{{ route('home') }}" class="btn btn-default">Go Back</a>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Post Detail</div>

                    <div class="card-body">
                        @if($post->count() > 0)
                            <div clas="jumbotron">
                                <h1>
                                    {{ $post->title }}
                                </h1>
                                <p>{{ $post->body }}</p>
                                <small>Written on {{ $post->created_at }} by <b>{{ $post->user->name }}</b></small>
                            </div>
                            <div class="row">

                                @if(!Auth::guest())
                                    @if($post->user_id == Auth::user()->id)
                                        <div class="col-sm-2">
                                            <a class="btn btn-primary" href="/posts/{{ $post->id }}/edit" role="button">Edit</a>
                                        </div>
                                    @endif
                                    @if(Auth::user()->user_type == 'admin' || $post->user_id == Auth::user()->id)
                                        <div class="col-sm-2">
                                            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'form-horizontal']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger'] ) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    @endif
                                @endif
                            </div>
                        @else
                            No Post Found
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection