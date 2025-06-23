<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon (optional) -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <!-- Livewire styles -->
    @livewireStyles

    <!-- App CSS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Extra styles -->
    @stack('styles')
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen">

    <!-- Flash messages, navbar, etc. (optional) -->
    {{-- @include('partials.navbar') --}}
    
    <!-- Page Content -->
    <main class="">
        {{$slot}}
    </main>

    <!-- Livewire scripts -->
    @livewireScripts

    <!-- Extra scripts (Alpine.js or others) -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @stack('scripts')
</body>
</html>
