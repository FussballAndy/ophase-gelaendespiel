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
</head>
<body class="bg-neutral-800 text-neutral-100 flex items-center justify-center min-h-svh text-center">
    <div class="flex flex-col md:max-w-80 gap-2 m-8">
        <h1 class="text-4xl sticky top-3">Geländespiel</h1>
        <div class="flex flex-col bg-neutral-700 rounded-lg p-2 gap-1">
            <h2 class="text-2xl">Punktestand</h2>
            <div class="flex flex-row gap-2">
                <div class="flex flex-col flex-1">
                    <span>Studenten</span>
                    <span class="text-lg">50</span>
                </div>
                <div class="flex flex-col flex-1">
                    <span>Tutoren</span>
                    <span class="text-lg">20</span>
                </div>
            </div>
            <span class="text-xs">Stand 18:37 &ndash; aktualisiert minütlich</span>
        </div>
        <div class="flex flex-col bg-neutral-700 rounded-lg p-2 gap-1">
            <h2 class="text-2xl">Gruppenergebnisse</h2>
            <p>Die Ergebnisse der einzelnen Gruppen können <a href="/results.php" class="text-blue-400 underline">hier</a> eingesehen werden.</p>
        </div>
        <div class="flex flex-col bg-neutral-700 rounded-lg py-2 gap-1">
            <h2 class="text-2xl">Pfade</h2>
            <select name="groupSelect" id="groupSelect" class="border-y outline-none">
                @for ($i = 0; $i < 25; $i++)
                    <option value="group{{ $i }}" class="text-black">Gruppe {{ $i }}</option>
                @endfor
            </select>
        </div>
        <div class="flex flex-col">
            <span>Quicklinks:</span>
            <div class="flex flex-col">
                <a href="/tutor.php" class="text-blue-400 underline">Tutor Login</a>
            </div>
        </div>
    </div>
</body>
</html>
