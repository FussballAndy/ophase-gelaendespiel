<x-layout>
    <div class="card">
        <h2 class="text-2xl">Tutor Login</h2>
        @error('token')
            <span class="bg-red-800">{{ $message }}</span>
        @enderror
        <form action="/login" method="post" class="flex flex-col text-left gap-1">
            @csrf
            <label for="token">Token:</label>
            <input type="text" id="token" name="token" class="outline-none border-2 p-1 rounded text-center">
            <input type="submit" value="Anmelden" class="bg-neutral-50 rounded text-black font-medium cursor-pointer">
        </form>
    </div>
</x-layout>