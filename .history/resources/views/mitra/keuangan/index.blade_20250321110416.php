<x-mitra-layout title="keuangan">

    

    
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
    
    // Data for different years
    const transactionData = {
        '2023': [
            { month: 'Jan', balance: 300000 },
            { month: 'Feb', balance: 450000 },
            { month: 'Mar', balance: 550000 },
            { month: 'Apr', balance: 700000 },
            { month: 'May', balance: 650000 },
            { month: 'Jun', balance: 850000 },
            { month: 'Jul', balance: 950000 },
            { month: 'Aug', balance: 1100000 },
            { month: 'Sep', balance: 1250000 },
            { month: 'Oct', balance: 1350000 },
            { month: 'Nov', balance: 1500000 },
            { month: 'Dec', balance: 1600000 }
        ],
        '2024': [
            { month: 'Jan', balance: 1650000 },
            { month: 'Feb', balance: 1750000 },
            { month: 'Mar', balance: 1850000 },
            { month: 'Apr', balance: 1950000 },
            { month: 'May', balance: 1900000 },
            { month: 'Jun', balance: 2000000 },
            { month: 'Jul', balance: 2100000 },
            { month: 'Aug', balance: 2200000 },
            { month: 'Sep', balance: 2300000 },
            { month: 'Oct', balance: 2450000 },
            { month: 'Nov', balance: 2500000 },
            { month: 'Dec', balance: 2700000 }
        ],
        '2025': [
            { month: 'Jan', balance: 2800000 },
            { month: 'Feb', balance: 2950000 },
            { month: 'Mar', balance: 3050000 },
            { month: 'Apr', balance: 3200000 },
            { month: 'May', balance: 3100000 },
            { month: 'Jun', balance: 3300000 },
            { month: 'Jul', balance: 3400000 },
            { month: 'Aug', balance: 3600000 },
            { month: 'Sep', balance: 3700000 },
            { month: 'Oct', balance: 3900000 },
            { month: 'Nov', balance: 4000000 },
            { month: 'Dec', balance: 4100000 }
        ]
    };
    
    // Initialize with current year selection
    let selectedYear = document.getElementById('yearFilter').value;
    let transactions = transactionData[selectedYear];
    
    // Create chart with initial data
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
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            let value = context.raw;
                            return 'Rp' + value.toLocaleString('id-ID');
                        }
                    }
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
    
    // Add event listener for year filter change
    document.getElementById("yearFilter").addEventListener("change", function() {
        selectedYear = this.value;
        transactions = transactionData[selectedYear];
        
        // Update chart with new data
        chart.data.labels = transactions.map(t => t.month);
        chart.data.datasets[0].data = transactions.map(t => t.balance);
        chart.update();
    });
});
</script>

</x-mitra-layout>