<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('sections.head')
</head>

<body class="body">
    <div id="app" class="app">
        <div class="page-content-wrapper">
            @include('sections.navbar')
            <div class="container-fluid main-container fade-in">
                {{-- @yield('content') --}} hello Bas
            </div>
        </div>

    </div>
    <script>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </script>
</body>
{{-- @include('sections.footer') --}}

</html>
