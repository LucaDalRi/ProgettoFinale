<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'Deliveboo') }}
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="header-guest container">
        <!-- Header logo-->
        <div class="px-md-4 justify-content-between d-flex align-items-center h-100">
            <img class="profile-img" src="{{ asset('/icons/deliveboo.svg') }}" />
            <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="footer py-4">
        @include('layouts.partials.footer')
    </footer>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>

</html>
