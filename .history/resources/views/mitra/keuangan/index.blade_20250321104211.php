<x-mitra-layout title="keuangan">
    <div class="w-full bg-blue-500">
        <div class="flex items-center p-4 text-white">
            <div class="mr-4 text-2xl cursor-pointer">
                &larr;
            </div>
            <div class="text-xl font-medium">
                Riwayat Transaksi
            </div>
        </div>
        
        <div class="flex justify-around text-white pb-2">
            <div class="flex-1 text-center py-2 cursor-pointer">
                Berlangsung
            </div>
            <div class="flex-1 text-center py-2 cursor-pointer relative after:content-[''] after:absolute after:bottom-[-10px] after:left-0 after:w-full after:h-1 after:bg-white after:rounded-t-sm">
                Selesai
            </div>
        </div>
    </div>
    
    <div class="mt-4 mx-4">
        <div class="bg-white rounded-lg p-4 shadow flex items-center justify-between cursor-pointer">
            <div>
                <h3 class="text-blue-700 text-lg font-medium">DANA Statement</h3>
                <p class="text-gray-600 text-sm">Klik di sini untuk lihat laporan keuanganmu di DANA!</p>
            </div>
            <div class="bg-blue-100 p-2 rounded">
                <div class="w-8 h-10 flex flex-col justify-center items-center">
                    <div class="w-6 h-1 bg-blue-500 mb-1"></div>
                    <div class="w-6 h-1 bg-blue-500 mb-1"></div>
                    <div class="w-6 h-1 bg-blue-500"></div>
                    <div class="w-4 h-4 bg-yellow-400 absolute mt-6 ml-6"></div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mt-4 mx-4">
        <div class="bg-white p-4 rounded-lg mb-4 shadow">
            <h3 class="text-lg font-medium mb-4">Saldo Progresif (Rp)</h3>
            <div class="w-full">
                <canvas id="balanceChart" class="w-full max-h-[300px]"></canvas>
            </div>
        </div>
    </div>
    
    
    <div class="mx-4">
        <div class="bg-white rounded-lg p-4 mb-3 shadow flex items-center justify-between">
            <div class="flex items-center">
                <div class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center mr-3">
                    <svg class="w-6 h-6 text-orange-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 16L12 8M12 8L8 12M12 8L16 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div>
                    <div class="font-medium">Terima Uang</div>
                    <div class="text-gray-500 text-sm">01 Jul 2023 • 16:17</div>
                </div>
            </div>
            <div class="text-green-600 font-medium">Rp35.000</div>
        </div>
        
        <div class="bg-white rounded-lg p-4 mb-3 shadow flex items-center justify-between">
            <div class="flex items-center">
                <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                    <svg class="w-6 h-6 text-blue-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 8L12 16M12 16L16 12M12 16L8 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div>
                    <div class="font-medium">Kirim Uang</div>
                    <div class="text-gray-500 text-sm">01 Jul 2023 • 14:23</div>
                </div>
            </div>
            <div class="text-red-600 font-medium">-Rp23.000</div>
        </div>
        
        <div class="bg-white rounded-lg p-4 mb-3 shadow flex items-center justify-between">
            <div class="flex items-center">
                <div class="w-10 h-10 rounded-full flex items-center justify-center mr-3">
                    <svg class="w-8 h-8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 12V12C12 12 8.53333 12 6.26667 12C4 12 2 10 2 8C2 6 4 4 6.26667 4H12V8L17.3333 4V12L12 8V12Z" fill="#4285F4"/>
                        <path d="M12 12V12C12 12 15.4667 12 17.7333 12C20 12 22 14 22 16C22 18 20 20 17.7333 20H12V16L6.66667 20V12L12 16V12Z" fill="#34A853"/>
                    </svg>
                </div>
                <div>
                    <div class="font-medium">Google</div>
                    <div class="text-gray-500 text-sm">01 Jul 2023 • 13:17</div>
                </div>
            </div>
            <div class="text-red-600 font-medium">-Rp176.490</div>
        </div>
        
        <div class="bg-white rounded-lg p-4 mb-3 shadow flex items-center justify-between">
            <div class="flex items-center">
                <div class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center mr-3">
                    <svg class="w-6 h-6 text-orange-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 16L12 8M12 8L8 12M12 8L16 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div>
                    <div class="font-medium">Terima Uang</div>
                    <div class="text-gray-500 text-sm">01 Jul 2023 • 10:19</div>
                </div>
            </div>
            <div class="text-green-600 font-medium">Rp500.000</div>
        </div>
        
        <div class="bg-white rounded-lg p-4 mb-3 shadow flex items-center justify-between">
            <div class="flex items-center">
                <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                    <svg class="w-6 h-6 text-blue-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 8L12 16M12 16L16 12M12 16L8 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div>
                    <div class="font-medium">Kirim Uang</div>
                    <div class="text-gray-500 text-sm">30 Jun 2023 • 13:48</div>
                </div>
            </div>
            <div class="text-red-600 font-medium">-Rp50.000</div>
        </div>
    </div>
    
    <div class="fixed bottom-0 left-0 right-0 bg-white shadow-md flex justify-between p-4">
        <button class="flex items-center justify-center text-blue-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
            </svg>
            <span class="ml-2">Urutkan</span>
        </button>
        <button class="flex items-center justify-center text-blue-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
            </svg>
            <span class="ml-2">Filter</span>
        </button>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('balanceChart').getContext('2d');

        // Dummy data for balance progression (monthly data for one year)
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

        const chart = new Chart(ctx, {
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
                    legend: {
                        display: false
                    }
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