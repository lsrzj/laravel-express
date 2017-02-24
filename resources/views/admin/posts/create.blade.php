@extends('template')

@section('body')
    <h1 align="center">Management</h1>
    <p><h2 align="center">Create New Post</h2></p>
    
    @if($errors->any())
        <ul class='alert'>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! form::open(['route' => 'admin.posts.store', 'method' => 'POST']) !!}
        @include('admin.posts._form')

        <div class="form-group">
            {!! form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
        </div>    
    {!! form::close() !!}
@endsection