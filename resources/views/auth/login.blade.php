@extends('layouts.app')

@section('content')
<div class="login-container">
    <div class="form-container">
        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
                <span class="block sm:inline">{{ session('status') }}</span>
            </div>
        @endif
        <h2 class="title">HELLO</h2>
        <h4 class="subtitle">Welcome</h4>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary">Log In</button>
        </form>
        <div class="links">
            <a href="{{ route('password.request') }}">Forgot your password?</a>
            <a href="{{ route('register') }}">Sign Up</a>
        </div>
    </div>
</div>
@endsection
