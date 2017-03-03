@extends('layouts.admin')

@section('content')

    <h1>Edit Post</h1>

    <div class="row">
        <div class="col-sm-3">
            <img src="{{$post->photo->file}}" alt="Shit" class="img-responsive img-rounded">
        </div>
        <div class="col-sm-9">

            {!! Form::model($post, ['method' => 'PATCH', 'action' => ['AdminPostsController@update', $post->id], 'files' => true]) !!}

            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('body', 'Body:') !!}
                {!! Form::textArea('body', null, ['class' => 'form-control', 'rows' => 3, 'style' => 'resize:vertical;']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Name:') !!}
                {!! Form::select('category_id', $categories , $post->category_id, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', ['class' => 'form-control-file']) !!}
            </div>

            <div class="form-group col-sm-6" style="padding-left: 0px;">
                {!! Form::submit('Update Post', [ 'class' => 'btn btn-primary pull-left']) !!}
            </div>

            {!! Form::close() !!}

            {!! Form::open(['method' => 'DELETE', 'action' => ['AdminPostsController@destroy', $post->id]]) !!}

            <div class="form-group  col-sm-6" style="padding-right: 0px;">
                {!! Form::submit('Delete Post', [ 'class' => 'btn btn-danger pull-right']) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection