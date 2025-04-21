<div class="grid grid-cols-2 gap-4">
    @foreach($pemesanan as $item)
        <div class="space-y-4">
            <div class="p-3 lg:p-4 bg-white shadow-xl rounded-lg border-l-4 border-primary">
                <div class="flex justify-between items-start mb-3">
                    <h2 class="text-base lg:text-lg font-semibold text-gray-700">
                        Transaksi #{{ $item->id_pemesanan ?? 'N/A' }}
                    </h2>
                    @php
                        $statusColors = [
                            'pending' => ['bg' => 'bg-yellow-100', 'text' => 'text-yellow-800'],
                            'confirmed' => ['bg' => 'bg-green-100', 'text' => 'text-green-800'],
                            'canceled' => ['bg' => 'bg-red-100', 'text' => 'text-red-800'],
                        ];
                        $status = strtolower($item->status_pemesanan ?? 'unknown');
                        $color = $statusColors[$status] ?? ['bg' => 'bg-gray-100', 'text' => 'text-gray-800'];
                     @endphp
                    <span class="px-2 py-1 {{ $color['bg'] }} {{ $color['text'] }} text-xs font-medium rounded-full capitalize">
                    {{ $item->status_pemesanan ?? 'Belum Diketahu' }}
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
                    <a href="{{ route('review', ['id_pemesanan' => $item->id_pemesanan]) }}"
                    class="w-full sm:w-auto px-4 py-2 bg-primary hover:bg-darkprimary text-white rounded-lg text-sm transition-colors duration-300 flex items-center justify-center">
                        Detail Pemesanan
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
