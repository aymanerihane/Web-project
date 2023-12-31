@extends('layouts.app')

@section('content')
<div class="signbox">
    <form  method="POST" action="{{ route('login') }}">
        @csrf
        <div class="email">
            <label for="email">Email Adress</label><br>
            <input id="email" type="email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
        </div>
        <div class="password">
            <label for="psw">Password</label><br>
            <input id="password" type="password" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
        </div>
        <div class="check">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label for="remember">
                                {{ __('Remember Me') }}
                            </label>
        </div>
        <div class="sb">
            <button type="submit" >
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a  href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif

        </div>

    </form>
    <div class="img"><img src="{{ asset('storage/images/sign2.png') }}" alt="sign"></div>
</div>
@endsection
