@extends('template')

@section('body')
<!-- resources/views/auth/login.blade.php -->


{!! form::open(['route' => 'auth.login', 'method' => 'POST', 'class' => 'blogger']) !!}
    @if($errors->any())
        <ul class='alert'>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
{!! form::close() !!}

@endsection