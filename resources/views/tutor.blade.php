<x-layout>
    <x-slot:header>
        @vite('resources/css/tutor.css')
    </x-slot:header>
    <div class="card">
        <h2 class="text-2xl">Station {{ $stationName }}</h2>
        <div class="flex flex-col">
            @foreach ($rounds as $round)
                <div class="flex flex-col">
                    <span class="text-left">Spiel {{ $round->time_slot + 1 }}: Gruppe {{ $round->group }}</span>
                    <div class="flex flex-row round-selector">
                        <div class="flex flex-1">
                            <input type="radio" name="round{{ $round->time_slot }}" id="round{{ $round->time_slot }}Tut" value="tutor" @checked($round->winner->is_tutor())>
                            <label for="round{{ $round->time_slot }}Tut" class="cursor-pointer">Tutoren</label>
                        </div>
                        <div class="flex flex-1">
                            <input type="radio" name="round{{ $round->time_slot }}" id="round{{ $round->time_slot }}Stu" value="student" @checked($round->winner->is_student())>
                            <label for="round{{ $round->time_slot }}Stu" class="cursor-pointer">Studenten</label>
                        </div>
                        <div class="flex flex-1">
                            <input type="radio" name="round{{ $round->time_slot }}" id="round{{ $round->time_slot }}Un" value="unset" @checked($round->winner->is_unset())>
                            <label for="round{{ $round->time_slot }}Un" class="cursor-pointer">N/A</label>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="flex flex-col">
                <span class="text-left">Intra Wettbewerb</span>
                <div class="flex flex-col round-selector">
                    @foreach ($rounds as $round)
                        <div class="flex flex-1">
                            <input type="radio" name="roundIntra" id="intra{{ $round->group }}" value="{{ $round->group }}">
                            <label for="intra{{ $round->group }}" class="cursor-pointer">Gruppe {{ $round->group }}</label>
                        </div>
                    @endforeach
                    <div class="flex flex-1">
                        <input type="radio" name="roundIntra" id="intraUnset" value="unset" checked>
                        <label for="intraUnset" class="cursor-pointer">N/A</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>