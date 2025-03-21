<x-mitra-layout title="keuangan">
    <div class="w-full bg-white shadow">
        <div class="flex items-center p-4 text-gray-800">
            <div class="mr-4 text-2xl cursor-pointer">
                &larr;
            </div>
            <div class="text-xl font-medium">
                Laporan Keuangan
            </div>
        </div>
        
        <div class="flex justify-around text-gray-800 pb-2">
            <div class="flex-1 text-center py-2 cursor-pointer">
                Berlangsung
            </div>
            <div class="flex-1 text-center py-2 cursor-pointer relative after:content-[''] after:absolute after:bottom-[-10px] after:left-0 after:w-full after:h-1 after:bg-blue-500 after:rounded-t-sm">
                Selesai
            </div>
        </div>
    </div>
    
    

    
    <div class="mt-4 mx-4">
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
    
    <script>
        document.getElementById("yearFilter").addEventListener("change", function() {
            let selectedYear = this.value;
            console.log("Filter by year:", selectedYear);
            // Tambahkan logika untuk memperbarui data chart berdasarkan tahun yang dipilih
        });
    </script>
    
    
    
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