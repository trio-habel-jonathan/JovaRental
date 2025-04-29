<x-mitra-layout title="Withdrawal History">
    <div class="bg-gray-50 min-h-screen py-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">

            <!-- Main Content -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <!-- Header with summary -->
                <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white p-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-white bg-opacity-20 rounded-lg p-4">
                            <p class="text-blue-100 text-sm">Total Withdraw</p>
                            <h3 class="text-2xl font-bold">Rp {{ number_format($withdrawals->sum('jumlah') ?? 0, 0, ',',
                                '.') }}
                            </h3>
                        </div>
                        <div class="bg-white bg-opacity-20 rounded-lg p-4">
                            <p class="text-blue-100 text-sm">Pending Withdrawal</p>
                            <h3 class="text-2xl font-bold">Rp {{number_format(
                                $withdrawals->where('status_withdrawal',
                                'pending')->sum('jumlah') ?? 0 , 0, ',', '.') }}</h3>
                        </div>
                        <div class="bg-white bg-opacity-20 rounded-lg p-4">
                            <p class="text-blue-100 text-sm">Available Balance</p>
                            <h3 class="text-2xl font-bold">Rp {{ number_format(Auth::user()->mitra->saldo ?? 0, 0, ',',
                                '.') }}</h3>
                        </div>
                    </div>
                </div>

                <!-- Filters and search -->
                <div class="p-4 border-b border-gray-200 bg-gray-50">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-center space-y-3 md:space-y-0">
                        <div class="flex items-center space-x-2">
                            <span class="text-sm font-medium text-gray-500">Filter by status:</span>
                            <select id="status-filter"
                                class="rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm">
                                <option value="all">All</option>
                                <option value="pending">Pending</option>
                                <option value="success">Success</option>
                                <option value="failed">Failed</option>
                            </select>
                        </div>
                        <a href="{{ route('mitra.withdraw.create') }}"
                            class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            New Withdrawal
                        </a>
                    </div>
                </div>

                <!-- Table -->
                @if(count($withdrawals) > 0)
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Amount
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Payment Method
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>

                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($withdrawals as $withdrawal)
                            <tr class="withdrawal-row" data-status="{{ $withdrawal->status_withdrawal }}">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    <div class="font-medium">{{
                                        \Carbon\Carbon::parse($withdrawal->tanggal_withdrawal)->format('d M Y') }}</div>
                                    <div class="text-xs text-gray-500">{{
                                        \Carbon\Carbon::parse($withdrawal->tanggal_withdrawal)->format('H:i') }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Rp {{
                                        number_format($withdrawal->jumlah, 0, ',', '.') }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{
                                        $withdrawal->rekeningMitra->metodePembayaranMitra->nama_metode }}</div>
                                    <div class="text-xs text-gray-500">{{ $withdrawal->rekeningMitra->nomor_rekening }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($withdrawal->status_withdrawal == 'pending')
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Pending
                                    </span>
                                    @elseif($withdrawal->status_withdrawal == 'success')
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Success
                                    </span>
                                    @elseif($withdrawal->status_withdrawal == 'failed')
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        Failed
                                    </span>
                                    @endif
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                    {{ $withdrawals->links() }}
                </div>

                @else
                <div class="p-8 flex flex-col items-center justify-center text-center">
                    <div class="bg-blue-100 text-blue-700 rounded-full p-3 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold text-gray-800 mb-2">No Withdrawal History</h2>
                    <p class="text-gray-500 mb-6">
                        You haven't made any withdrawal requests yet.
                    </p>
                    <a href="{{ route('mitra.withdraw.create') }}"
                        class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        Make Your First Withdrawal
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const statusFilter = document.getElementById('status-filter');
            const rows = document.querySelectorAll('.withdrawal-row');
            
            if (statusFilter) {
                statusFilter.addEventListener('change', function() {
                    const selectedStatus = this.value;
                    
                    rows.forEach(row => {
                        const status = row.getAttribute('data-status');
                        
                        if (selectedStatus === 'all' || status === selectedStatus) {
                            row.classList.remove('hidden');
                        } else {
                            row.classList.add('hidden');
                        }
                    });
                });
            }
        });
    </script>
</x-mitra-layout>