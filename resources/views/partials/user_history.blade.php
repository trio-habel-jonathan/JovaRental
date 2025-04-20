@foreach($pemesanan as $item)
    <div class="space-y-4">
        <div class="p-3 lg:p-4 bg-white shadow-xl rounded-lg border-l-4 border-primary">
            <div class="flex justify-between items-start mb-3">
                <h2 class="text-base lg:text-lg font-semibold text-gray-700">
                    Transaksi #{{ $item->id_pemesanan ?? 'N/A' }}
                </h2>
                <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">
                    {{ $item->status_pemesanan ?? 'Belum diketahui' }}
                </span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 mb-3">
                <div>
                    <p class="text-xs text-gray-500">Tanggal Pemesanan</p>
                    <p class="text-sm font-medium text-gray-700">
                        {{ \Carbon\Carbon::parse($item->tanggal_pemesanan)->format('d F Y, H:i') }}
                    </p>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center space-y-3 sm:space-y-0">
                @foreach ($pemesanan as $item)
                <a href="{{ route('review', ['id_pemesanan' => $item->id_pemesanan]) }}"
                class="w-full sm:w-auto px-4 py-2 bg-primary hover:bg-darkprimary text-white rounded-lg text-sm transition-colors duration-300 flex items-center justify-center">
                    Detail Pemesanan
                </a>
                @endforeach
            </div>
        </div>
    </div>
@endforeach
