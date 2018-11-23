@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Post</div>

                    <div class="card-body">
                        <div class="well">
                        @include('messages')
                        {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

                        <!-- Title -->
                            <div class="form-group">
                                {!! Form::label('title', 'Title:', ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::text('title', $value = $post->title, ['class' => 'form-control']) !!}
                                </div>
                            </div>

                            <!-- Body -->
                            <div class="form-group">
                                {!! Form::label('body', 'Body', ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::textarea('body', $value = $post->body, ['class' => 'form-control', 'rows' => 3]) !!}
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
                                </div>
                            </div>


                            {!! Form::close()  !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
