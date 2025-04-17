<x-user-layout title="Review Pemesanan">
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">Review Pemesanan</h1>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <p><strong>Kendaraan:</strong> {{ $vehicle->nama_kendaraan }}</p>
            <p><strong>Tipe Rental:</strong> {{ $bookingData['tipe_rental'] == 'tanpa_sopir' ? 'Tanpa Sopir' : 'Dengan Sopir' }}</p>
            <p><strong>Tanggal Mulai:</strong> {{ $bookingData['tanggal_mulai'] }}</p>
            <p><strong>Tanggal Kembali:</strong> {{ $bookingData['tanggal_kembali'] }}</p>
            <p><strong>Lokasi Pengambilan:</strong> {{ $bookingData['lokasi_pengambilan'] }}</p>
            <p><strong>Lokasi Pengembalian:</strong> {{ $bookingData['lokasi_pengembalian'] }}</p>
            <p><strong>Nama Pemesan:</strong> {{ $bookingData['nama_lengkap'] }}</p>
            @if($bookingData['tipe_rental'] == 'tanpa_sopir')
                <p><strong>Nama Pengemudi:</strong> {{ $bookingData['driver_nama'] }}</p>
            @endif
            <form method="POST" action="{{ route('confirm_booking') }}">
                @csrf
                <button type="submit" class="mt-4 bg-purple-600 text-white px-4 py-2 rounded">Konfirmasi</button>
            </form>
        </div>
    </div>
</x-user-layout>