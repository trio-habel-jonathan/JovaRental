<x-user-layout title="Keranjang Pemesanan">
    <div class="max-w-4xl mx-auto mt-8 px-5">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Keranjang Pemesanan</h1>
        @if(empty($vehicles))
            <p class="text-gray-600">Keranjang Anda kosong.</p>
            <a href="{{ route('search') }}" class="mt-4 inline-block bg-indigo-600 text-white font-medium py-2 px-4 rounded-lg hover:bg-indigo-700">
                Cari Kendaraan Lain
            </a>
        @else
            @foreach($vehicles as $vehicle)
                <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                    <h2 class="text-xl font-semibold">{{ $vehicle['unit']->nama_kendaraan }}</h2>
                    <p>Mitra: {{ $vehicle['unit']->nama_mitra }}</p>
                    <p>Tanggal Mulai: {{ \Carbon\Carbon::parse($vehicle['cart_item']['tanggal_mulai'])->format('d M Y, H:i') }}</p>
                    <p>Tanggal Kembali: {{ \Carbon\Carbon::parse($vehicle['cart_item']['tanggal_kembali'])->format('d M Y, H:i') }}</p>
                    <p>Lokasi Pengambilan: {{ $vehicle['lokasi_pengambilan']['alamat'] ?? $vehicle['lokasi_pengambilan']['id_alamat'] }}</p>
                    <p>Lokasi Pengembalian: {{ $vehicle['lokasi_pengembalian']['alamat'] ?? $vehicle['lokasi_pengembalian']['id_alamat'] }}</p>
                    @if($vehicle['cart_item']['tipe_rental'] == 'tanpa_sopir')
                        <p>Pengemudi: {{ $vehicle['cart_item']['driver']['nama'] }} - {{ $vehicle['cart_item']['driver']['telepon'] }}</p>
                    @endif
                    <p>Total Harga: Rp {{ number_format($vehicle['total_cost'], 0, ',', '.') }}</p>
                    <form action="{{ route('cart.remove', $vehicle['unit']->id_unit) }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-red-500 hover:text-red-700 mt-2">Hapus</button>
                    </form>
                </div>
            @endforeach
            <div class="flex justify-between items-center">
                <a href="{{ route('search') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3 px-6 rounded-lg shadow-md hover:shadow-lg transition-all">
                    Tambah Kendaraan Lain
                </a>
                <a href="{{ route('checkout') }}" class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 px-8 rounded-lg shadow-md hover:shadow-lg transition-all">
                    Lanjutkan ke Pembayaran
                </a>
            </div>
        @endif
    </div>
</x-user-layout>