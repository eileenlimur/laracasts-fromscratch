<!DOCTYPE html>

<title>My Blog</title>
<link rel="stylesheet" href="{{ asset('app.css') }}">
<script src="{{ asset('app.js') }}"></script>

<body>
    <div>
        @yield('banner')
    </div>
    {{ $slot }}
</body>
