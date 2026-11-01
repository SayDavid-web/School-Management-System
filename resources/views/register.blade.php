@extends('layouts.guest')
@section('title', 'Create account')
@section('subtitle', 'Register to start managing students.')
@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="mb-3"><label class="form-label">Name</label>
        <input type="text" name="name" value="{{ old('name') }}" placeholder="please input your name" class="form-control" required></div>
    <div class="mb-3"><label class="form-label">Email address</label>
        <input type="email" name="email" value="{{ old('email') }}" class="form-control" required></div>
    <div class="mb-3"><label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required></div>
    <button class="btn btn-primary w-100 py-2">Register</button>
    <p class="text-center mt-3 mb-0">Already registered? <a href="{{ route('login') }}">Login</a></p>
</form>
@endsection
