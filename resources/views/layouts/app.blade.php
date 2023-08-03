<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>@yield('title')</title>

    @yield('styles')
</head>

<body>
    <div class="flex h-screen">
    @include('partials.nav')

        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>


    @include('partials.footer')

    @stack('scripts')
    @yield('scripts')
</body>

</html>
