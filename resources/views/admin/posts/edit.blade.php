@extends('template')

@section('body')
    <h1 align="center">Edit Post</h1>
    
    @if($errors->any())
        <ul class='alert'>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {!! form::model($post, ['route' => ['admin.posts.update', $post->id], 'method' => 'PUT', 'class' => 'blogger']) !!}
    
        @include('admin.posts._form')
        <div class="form-group">
            {!! form::label('tags', 'Tags:', ['class' => 'control-label']) !!}
            {!! form::text('tags', $post->tagList, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </div>    
    {!! form::close() !!}
@endsection