@extends('layouts.app')

@section('content')
    <h1>Вход</h1>
    <div id="wrapper">
        <form id="signin" method="POST" action="{{ route('login') }}" autocomplete="off">
            @csrf
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Login">
            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <button type="submit">&#xf0da;</button>
            @if (Route::has('password.request'))
                <p>Забыли пароль?<a href="{{ route('password.request') }}">
                        {{ __('Нажми сюда.') }}
                    </a></p>
            @endif

        </form>
    </div>
@endsection
