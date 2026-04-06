<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    @foreach ($lapangan as $item)
                        <p>{{ $item->nama_lapangan }}</p>
                        <p>{{ $item->deskripsi }}</p>
                        <p>Harga: Rp {{ number_format($item->harga_per_jam) }}</p>
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_lapangan }}" style="width: 400px; border-radius: 15px; margin-top: 20px;">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
