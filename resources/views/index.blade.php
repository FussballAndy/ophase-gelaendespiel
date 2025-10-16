<x-layout>
<div class="card">
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
<div class="card">
    <h2 class="text-2xl">Gruppenergebnisse</h2>
    <p>Die Ergebnisse der einzelnen Gruppen können <a href="/results.php" class="text-blue-400 underline">hier</a> eingesehen werden.</p>
</div>
<div class="card">
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
        <a href="/tutor" class="text-blue-400 underline">Tutor Login</a>
    </div>
</div>
</x-layout>