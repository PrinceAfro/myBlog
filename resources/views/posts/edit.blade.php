@extends('layouts.app')
        

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctypt'=> 'multipart/form-data' ]) !!}
        <div class="form-group">
            {{form::label('title', 'Title')}}
            {{form::text('title' ,$post->title, ['class' => 'form-control','placeholder' => 'Title'])}}
        
        </div>
        <div class="form-group">
            {{form::label('body', 'Body')}}
            {{form::textarea('body' ,$post->body, ['class' => 'form-control','placeholder' => 'Body Text'])}}
        
        </div>
        <div class="form-group">

            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection   