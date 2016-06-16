@extends('template')

@section('body')
    @foreach($posts as $post)
       {!! $post !!}
    @endforeach
@endsection