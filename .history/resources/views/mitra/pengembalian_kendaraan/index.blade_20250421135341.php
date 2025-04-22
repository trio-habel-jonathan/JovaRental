<x-mitra-layout title="Edit Mitra Profile">

    <div class="p-4">
    <h1 class="text-xl font-semibold mb-4">Pengembalian Kendaraan</h1>
    
    <div class="grid gap-4">
        @forelse ($kendaraanDetails as $kendaraan)
            <div class="p-4 bg-white shadow rounded border border-gray-200">
                <div>
                    <strong>ID Unit:</strong> <span class="font-mono text-blue-600">{{ $kendaraan['id_unit'] }}</span>
                </div>
                <div>
                    <strong>Nama Kendaraan:</strong> <span class="font-semibold">{{ $kendaraan['nama_kendaraan'] }}</span>
                </div>
                <div>
                    <strong>Pemesanan ID:</strong> <span class="text-gray-500">{{ $kendaraan['id_pemesanan'] }}</span>
                </div>

                <!-- Form to set pengembalian -->
                <a action="{{ route('mitra.pengembalian.create') }}" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    kembalikan
                </a>
            </div>
        @empty
            <div class="text-gray-500">Tidak ada kendaraan yang perlu dikembalikan.</div>
        @endforelse
    </div>
</div>

    </x-mitra-layout>