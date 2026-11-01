<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @include('layouts._styles')
</head>
<body>
<div class="auth">
    <div class="auth-box">
        <div class="auth-brand"><i class="bi bi-mortarboard-fill"></i> EduManage</div>
        <h2 class="h4 mb-1">@yield('title')</h2>
        <p class="text-muted mb-4">@yield('subtitle')</p>
        @if($errors->any())
            <div class="alert alert-danger py-2"><ul class="mb-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
        @endif
        @yield('content')
    </div>
</div>
</body>
</html>
