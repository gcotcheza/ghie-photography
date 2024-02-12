<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('sections.head')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @inertiaHead
</head>

<body class="body">
    @inertia
    <div id="app" class="app">
        <div class="page-content-wrapper">
            {{-- @include('sections.navbar') --}}
            <div class="container-fluid main-container fade-in">
                @yield('content')
            </div>
        </div>

    </div>



</body>
{{-- @include('sections.footer') --}}

</html>
