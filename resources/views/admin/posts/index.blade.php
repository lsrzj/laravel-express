@extends('template')

@section('body')
    <h1 align="center">Posts Management</h1>
    <br/>
    <br/>
    {!! link_to_route ('admin.posts.create', 'Create New Post', null, ['class' => 'btn btn-success']) !!}
    <br/>
    <br/>
    <table class="table">
        <tr>
            <th style="font-weight: bold">ID</th>
            <th style="font-weight: bold">Title</th>
            <th style="font-weight: bold">Action</th>
        </tr>
        
        @foreach ($posts as $post)
            <tr>
                <td align="center">{{ $post->id }}</td>
                <td align="center">{{ $post->title }}</td>
                <td>{!! link_to_route('admin.posts.edit', 'Edit', ['id' => $post->id], ['class' => 'btn btn-default']) !!} {!! link_to_route('admin.posts.destroy', 'Delete', ['id' => $post->id], ['class' => 'btn btn-danger']) !!}</td>
            </tr>
        @endforeach
    </table>
    {!! $posts->render() !!}
@endsection