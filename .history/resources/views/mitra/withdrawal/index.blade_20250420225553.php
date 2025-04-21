<x-mitra-layout title="Dashboard">
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Withdrawal History</h2>
        <div class="bg-white rounded-md shadow-md overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Withdrawal ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount (IDR)</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php
                    // Dummy withdrawal data
                    $withdrawals = [
                        [
                            'id_withdrawal' => 'WD-001',
                            'amount' => 5000000,
                            'status' => 'completed',
                            'created_at' => '2025-04-20 10:00:00',
                        ],
                        [
                            'id_withdrawal' => 'WD-002',
                            'amount' => 2500000,
                            'status' => 'pending',
                            'created_at' => '2025-04-19 15:30:00',
                        ],
                        [
                            'id_withdrawal' => 'WD-003',
                            'amount' => 10000000,
                            'status' => 'completed',
                            'created_at' => '2025-04-18 09:45: interessados em saber mais sobre o que está acontecendo com a gente. Aqui está uma atualização rápida:00',
                        ],
                        [
                            'id_withdrawal' => 'WD-004',
                            'amount' => 750000,
                            'status' => 'failed',
                            'created_at' => '2025-04-17 12:20:00',
                        ],
                        [
                            'id_withdrawal' => 'WD-005',
                            'amount' => 3000000,
                            'status' => 'pending',
                            'created_at' => '2025-04-16 14:10:00',
                        ],
                    ];
                    ?>

                    @foreach ($withdrawals as $withdrawal)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $withdrawal['id_withdrawal'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ number_format($withdrawal['amount'], 0, ',', '.') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                <span class="{{ $withdrawal['status'] === 'completed' ? 'text-green-500' : ($withdrawal['status'] === 'pending' ? 'text-yellow-500' : 'text-red-500') }}">
                                    {{ ucfirst($withdrawal['status']) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $withdrawal['created_at'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-mitra-layout>