<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Geländespiel') }}</title>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    @if ($header ?? false)
        {{ $header }}
    @endif
</head>
<body class="bg-neutral-800 text-neutral-100 flex items-center justify-center min-h-svh text-center">
    <div class="flex flex-col md:max-w-80 gap-2 m-8">
        <h1 class="text-4xl sticky top-3">Geländespiel</h1>
        {{ $slot }}
    </div>
</body>
</html>
