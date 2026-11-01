@extends('layouts.guest')
@section('title', 'Welcome back')
@section('subtitle', 'Sign in to your account to continue.')
@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="mb-3"><label class="form-label">Email address</label>
        <input type="email" name="email" value="{{ old('email') }}" class="form-control" required autofocus></div>
    <div class="mb-3"><label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required></div>
    <button class="btn btn-primary w-100 py-2">Login</button>
    <p class="text-center mt-3 mb-0">No account? <a href="{{ route('register') }}">Register</a></p>
</form>
@endsection
