@extends('template')

@section('body')
    <h1 align="center">Área Administrativa</h1>
    <p></p>
    
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
                <td>Editar Apagar</td>
            </tr>
        @endforeach
    </table>
@endsection