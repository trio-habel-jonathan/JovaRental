<x-admin-layout title="Withdrawal Mitra">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Permintaan Withdrawal</h2>
                    
                    <div class="mb-6 flex flex-col md:flex-row gap-4 justify-between">
                        <div class="flex items-center space-x-4">
                            <select class="rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="all">Semua Status</option>
                                <option value="pending">Pending</option>
                                <option value="success">Success</option>
                                <option value="failed">Failed</option>
                            </select>
                            <div class="relative">
                                <input type="text" class="rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 pl-10" placeholder="Cari...">
                                <div class="absolute left-3 top-3 text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($withdrawal as $item)
                            <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
                                <div class="p-4 border-b border-gray-200 {{ $item->status_withdrawal == 'pending' ? 'bg-yellow-50' : ($item->status_withdrawal == 'success' ? 'bg-green-50' : 'bg-red-50') }}">
                                    <div class="flex justify-between items-center">
                                        <h3 class="text-lg font-semibold text-gray-800">WD-{{$loop->iteration}}</h3>
                                        <span class="px-3 py-1 text-xs rounded-full {{ $item->status_withdrawal == 'pending' ? 'bg-yellow-100 text-yellow-800' : ($item->status_withdrawal == 'success' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800') }}">
                                            {{ ucfirst($item->status_withdrawal) }}
                                        </span>
                                    </div>
                                </div>
                                <div class="p-4 space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Nama Mitra:</span>
                                        <span class="font-medium">{{ $item->mitra->nama_mitra }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Jumlah:</span>
                                        <span class="font-bold text-emerald-600">Rp {{ number_format($item->jumlah, 0, ',', '.') }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Bank:</span>
                                        <span class="font-medium">{{ $item->rekeningMitra->metodePembayaranMitra->nama_metode }} - {{ $item->rekeningMitra->nomor_rekening }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Atas Nama:</span>
                                        <span class="font-medium">{{ $item->rekeningMitra->nama_pemilik }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Tanggal Request:</span>
                                        <span class="font-medium">{{ $item->created_at->format('d M Y, H:i') }}</span>
                                    </div>
                                </div>
                                @if ($item->status_withdrawal == 'pending')
                                    <div class="p-4 border-t border-gray-200 flex justify-between">
                                        <button class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                        <button class="px-4 py-2 bg-emerald-500 text-white rounded-md hover:bg-emerald-600 focus:outline-none focus:ring focus:ring-emerald-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </button>
                                    </div>
                                @elseif ($item->status_withdrawal == 'success')
                                    <div class="p-4 border-t border-gray-200">
                                        <span class="text-green-600 font-medium flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Disetujui pada {{ $item->updated_at->format('d M Y, H:i') }}
                                        </span>
                                    </div>
                                @else
                                    <div class="p-4 border-t border-gray-200">
                                        <span class="text-red-600 font-medium flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            Ditolak: {{ $item->alasan_penolakan }}
                                        </span>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                    
                    <div class="mt-8 flex justify-center">
                        {{ $withdrawal->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
