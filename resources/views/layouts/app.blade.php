<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Student Management System')</title>
    @include('layouts._styles')
</head>
<body>
<header class="topbar">
    <div class="wrap">
        <a href="{{ route('students.index') }}" class="brand"><i class="bi bi-mortarboard-fill"></i> EduManage</a>
        <nav class="nav-l">
            <a href="{{ route('students.index') }}" class="{{ request()->routeIs('students.index','students.show','students.edit') ? 'active' : '' }}"><i class="bi bi-people"></i> Students</a>
            <a href="{{ route('students.create') }}" class="{{ request()->routeIs('students.create') ? 'active' : '' }}"><i class="bi bi-person-plus"></i> New Student</a>
            <a href="{{ route('departments.index') }}" class="{{ request()->routeIs('departments.*') ? 'active' : '' }}"><i class="bi bi-building"></i> Departments</a>
        </nav>
        <div class="who">
            <span><i class="bi bi-person-circle"></i> <b>{{ auth()->user()->name }}</b></span>
            <form method="POST" action="{{ route('logout') }}">@csrf
                <button class="btn btn-sm btn-outline-secondary" style="--bs-btn-color:#d1d5db;--bs-btn-border-color:#4b5563;--bs-btn-hover-bg:#374151;background:transparent"><i class="bi bi-box-arrow-right"></i> Logout</button>
            </form>
        </div>
    </div>
</header>

<main class="main">
    @if(session('success')) <div class="alert alert-success"><i class="bi bi-check-circle-fill me-1"></i> {{ session('success') }}</div> @endif
    @if($errors->any())
        <div class="alert alert-danger"><ul class="mb-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
    @endif
    @yield('content')
</main>
</body>
</html>
