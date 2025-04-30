<x-admin-layout title="Payment Management">
    <div class="p-4">
        <!-- Search Bar and Record Count -->
        <div class="flex items-end justify-between mb-6">
            <form action="" class="flex gap-4 items-center">
                <div class="flex rounded-full items-center gap-2 text-gray-400 bg-white w-fit pl-2 shadow-sm">
                    <label for="search">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 21L16.65 16.65M11 6C13.7614 6 16 8.23858 16 11M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </label>
                    <input type="text" id="search" placeholder="Search by order ID or customer..."
                        class="w-80 bg-transparent text-black placeholder:text-gray-400 focus:outline-none">
                    <button type="submit" class="bg-primary text-white font-semibold rounded-full p-2 px-4">
                        Search
                    </button>
                </div>
            </form>
            <div>
                <p class="text-sm text-gray-400">Showing {{ $pemesanans->count() }} of {{ $pemesanans->total() }} records</p>
            </div>
        </div>

        <!-- Card Layout for Orders -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($pemesanans as $pemesanan)
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <!-- Order Header -->
                    <div class="flex justify-between items-center border-b pb-2 mb-4">
                        <h2 class="text-lg font-semibold text-gray-700">Order #{{ $pemesanan->id_pemesanan }}</h2>
                        @php
                            $statusClasses = [
                                'pending' => 'bg-yellow-100 text-yellow-600',
                                'confirmed' => 'bg-green-100 text-green-600',
                                'canceled' => 'bg-red-100 text-red-600',
                                'completed' => 'bg-blue-100 text-blue-600',
                            ];
                            $statusClass = $statusClasses[$pemesanan->status_pemesanan] ?? 'bg-gray-100 text-gray-600';
                        @endphp
                        <span class="px-3 py-1 rounded-full text-sm font-medium {{ $statusClass }}">
                            {{ ucfirst($pemesanan->status_pemesanan) }}
                        </span>
                    </div>

                    <!-- Order Details -->
                    <div class="space-y-2">
                        <p><span class="font-medium">Customer:</span> {{ $pemesanan->perwakilan_penyewa ?? 'N/A' }}</p>
                        <p><span class="font-medium">Contact:</span> {{ $pemesanan->kontak_perwakilan ?? 'N/A' }}</p>
                        <p><span class="font-medium">Order Date:</span> {{ $pemesanan->tanggal_pemesanan ? \Carbon\Carbon::parse($pemesanan->tanggal_pemesanan)->format('D, d F Y H:i') : 'N/A' }}</p>
                        <p><span class="font-medium">Total:</span> Rp {{ number_format($pemesanan->total_harga, 2, ',', '.') }}</p>
                    </div>

                    <!-- Payment Status -->
                    <div class="mt-4">
                        <p class="font-medium">Payment Status:</p>
                        @if ($pemesanan->pembayaran)
                            @php
                                $paymentStatusClasses = [
                                    'pending' => 'bg-yellow-100 text-yellow-600',
                                    'paid' => 'bg-green-100 text-green-600',
                                    'failed' => 'bg-red-100 text-red-600',
                                    'refunded' => 'bg-gray-100 text-gray-600',
                                ];
                                $paymentStatusClass = $paymentStatusClasses[$pemesanan->pembayaran->status_pembayaran] ?? 'bg-gray-100 text-gray-600';
                            @endphp
                            <span class="px-3 py-1 rounded-full text-sm font-medium {{ $paymentStatusClass }}">
                                {{ ucfirst($pemesanan->pembayaran->status_pembayaran) }}
                            </span>
                        @else
                            <span class="px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-600">
                                No Payment
                            </span>
                        @endif
                    </div>

                    <!-- Order Details (Multiple if any) -->
                    <div class="mt-4">
                        <p class="font-medium mb-2">Rental Details:</p>
                        @foreach ($pemesanan->detailPemesanan as $detail)
                            <div class="bg-gray-50 p-4 rounded-md mb-2">
                                <p><span class="font-medium">Unit:</span> {{ $detail->unitKendaraan->nama_unit ?? 'N/A' }}</p>
                                <p><span class="font-medium">Driver:</span> {{ $detail->sopir->nama_sopir ?? 'No Driver' }}</p>
                                <p><span class="font-medium">Start Date:</span> {{ $detail->tanggal_mulai ? \Carbon\Carbon::parse($detail->tanggal_mulai)->format('d F Y H:i') : 'N/A' }}</p>
                                <p><span class="font-medium">End Date:</span> {{ $detail->tanggal_kembali ? \Carbon\Carbon::parse($detail->tanggal_kembali)->format('d F Y H:i') : 'N/A' }}</p>
                                <p><span class="font-medium">Subtotal:</span> Rp {{ number_format($detail->subtotal_harga, 2, ',', '.') }}</p>
                                <p><span class="font-medium">Delivery:</span> {{ ucfirst($detail->metode_pengantaran) }}</p>
                            </div>
                        @endforeach
                    </div>

                    <!-- Payment Actions -->
                    <div class="mt-4">
                        @if ($pemesanan->pembayaran)
                            <button
                                onclick="document.getElementById('payment-modal-{{ $pemesanan->id_pemesanan }}').classList.toggle('hidden')"
                                class="bg-primary text-white px-4 py-2 rounded-md hover:bg-primary-dark transition">
                                Manage Payment
                            </button>
                        @else
                            <span class="text-gray-500">No Payment Available</span>
                        @endif
                    </div>

                    <!-- Payment Modal -->
                                    <!-- Payment Modal -->
                    @if ($pemesanan->pembayaran)
                    <div id="payment-modal-{{ $pemesanan->id_pemesanan }}" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                        <div class="bg-white rounded-lg p-6 w-full max-w-md">
                            <h3 class="text-lg font-semibold mb-4">Update Payment Status</h3>
                            <form action="{{ route('admin.pembayaran.update', $pemesanan->pembayaran->id_pembayaran) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <label for="status_pembayaran" class="block text-sm font-medium text-gray-700">Payment Status</label>
                                    <select name="status_pembayaran" id="status_pembayaran" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary">
                                        <option value="pending" {{ $pemesanan->pembayaran->status_pembayaran == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="paid" {{ $pemesanan->pembayaran->status_pembayaran == 'paid' ? 'selected' : '' }}>Paid</option>
                                        <option value="failed" {{ $pemesanan->pembayaran->status_pembayaran == 'failed' ? 'selected' : '' }}>Failed</option>
                                        <option value="refunded" {{ $pemesanan->pembayaran->status_pembayaran == 'refunded' ? 'selected' : '' }}>Refunded</option>
                                    </select>
                                </div>
                                <div class="flex justify-end gap-2">
                                    <button type="button"
                                        onclick="document.getElementById('payment-modal-{{ $pemesanan->id_pemesanan }}').classList.toggle('hidden')"
                                        class="px-4 py-2 bg-gray-200 rounded-md hover:bg-gray-300">
                                        Cancel
                                    </button>
                                    <button type="submit" class="px-4 py-2 bg-primary text-white rounded-md hover:bg-primary-dark">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endif
                </div>
            @empty
                <div class="col-span-3 text-center p-6 bg-white rounded-lg shadow-md">
                    <p class="text-gray-500">No orders found.</p>
                </div>
            @endforelse
        </div>
    </div>
</x-admin-layout>