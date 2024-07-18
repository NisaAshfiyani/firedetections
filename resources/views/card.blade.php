<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Sistem Monitoring Kebakaran')</title>
    <!-- Tambahkan link ke CSS di sini jika perlu -->
</head>
<body>
    @include('header')

    <div class="container">
        @yield('contents')
    </div>

    @include('footer')
</body>
</html>
