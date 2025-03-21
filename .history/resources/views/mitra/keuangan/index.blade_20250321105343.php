<x-mitra-layout title="keuangan">

    <div class="mt-4 container mx-auto px-4"> 
        <div class="bg-white p-4 rounded-lg mb-4 shadow">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-medium">Saldo Progresif (Rp)</h3>
                <select id="yearFilter" class="border rounded px-3 py-1 text-gray-700">
                    <option value="2025">2025</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                </select>
            </div>
            <div class="w-full">
                <canvas id="balanceChart" class="w-full max-h-[300px]"></canvas>
            </div>
        </div>
    </div>
    
    <div class="container mx-auto px-4">
        @foreach([
            ['type' => 'Terima Uang', 'date' => '01 Jul 2023 • 16:17', 'amount' => 35000, 'color' => 'orange', 'is_income' => true],
            ['type' => 'Kirim Uang', 'date' => '01 Jul 2023 • 14:23', 'amount' => -23000, 'color' => 'blue', 'is_income' => false],
            ['type' => 'Google', 'date' => '01 Jul 2023 • 13:17', 'amount' => -176490, 'color' => 'green', 'is_income' => false],
            ['type' => 'Terima Uang', 'date' => '01 Jul 2023 • 10:19', 'amount' => 500000, 'color' => 'orange', 'is_income' => true],
            ['type' => 'Kirim Uang', 'date' => '30 Jun 2023 • 13:48', 'amount' => -50000, 'color' => 'blue', 'is_income' => false],
        ] as $transaction)
            <div class="bg-white rounded-lg p-4 mb-3 shadow flex items-center justify-between">
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-{{ $transaction['color'] }}-100 flex items-center justify-center mr-3">
                        <svg class="w-6 h-6 text-{{ $transaction['color'] }}-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            @if($transaction['is_income'])
                                <path d="M12 16L12 8M12 8L8 12M12 8L16 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            @else
                                <path d="M12 8L12 16M12 16L16 12M12 16L8 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            @endif
                        </svg>
                    </div>
                    <div>
                        <div class="font-medium">{{ $transaction['type'] }}</div>
                        <div class="text-gray-500 text-sm">{{ $transaction['date'] }}</div>
                    </div>
                </div>
                <div class="{{ $transaction['is_income'] ? 'text-green-600' : 'text-red-600' }} font-medium">
                    Rp{{ number_format(abs($transaction['amount']), 0, ',', '.') }}
                </div>
            </div>
        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.getElementById("yearFilter").addEventListener("change", function() {
            let selectedYear = this.value;
            console.log("Filter by year:", selectedYear);
        });

        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('balanceChart').getContext('2d');

            const transactions = [
                { month: 'Jan', balance: 500000 },
                { month: 'Feb', balance: 750000 },
                { month: 'Mar', balance: 850000 },
                { month: 'Apr', balance: 1200000 },
                { month: 'May', balance: 1100000 },
                { month: 'Jun', balance: 1300000 },
                { month: 'Jul', balance: 1400000 },
                { month: 'Aug', balance: 1600000 },
                { month: 'Sep', balance: 1700000 },
                { month: 'Oct', balance: 1900000 },
                { month: 'Nov', balance: 2000000 },
                { month: 'Dec', balance: 2100000 }
            ];

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: transactions.map(t => t.month),
                    datasets: [{
                        label: 'Saldo (Rp)',
                        data: transactions.map(t => t.balance),
                        backgroundColor: 'rgba(2, 136, 209, 0.1)',
                        borderColor: 'rgba(2, 136, 209, 1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true,
                        pointBackgroundColor: 'rgba(2, 136, 209, 1)',
                        pointRadius: 5
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { display: false }
                    },
                    scales: {
                        y: {
                            beginAtZero: false,
                            ticks: {
                                callback: function(value) {
                                    return 'Rp' + value.toLocaleString('id-ID');
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>

</x-mitra-layout>
