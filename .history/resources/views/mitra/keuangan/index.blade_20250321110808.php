<x-mitra-layout title="keuangan">
    
    <div class="mt-4 mx-2 md:mx-4">
        <div class="bg-white p-3 md:p-4 rounded-lg mb-4 shadow">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4">
                <h3 class="text-lg font-medium mb-2 sm:mb-0">Saldo Progresif (Rp)</h3>
                <select id="yearFilter" class="border rounded px-2 py-1 text-gray-700 text-sm md:text-base">
                    <option value="2025">2025</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                </select>
            </div>
            <div class="w-full h-64 md:h-72 lg:h-80">
                <canvas id="balanceChart" class="w-full h-full"></canvas>
            </div>
        </div>
    </div>
    
    <div class="mx-2 md:mx-4">
      
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
       document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('balanceChart').getContext('2d');
    
    // Dummy data for balance progression
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

    // Responsive configuration
    const isMobile = window.innerWidth < 768;
    
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
                pointRadius: isMobile ? 3 : 5
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    enabled: true
                }
            },
            scales: {
                x: {
                    ticks: {
                        maxRotation: isMobile ? 45 : 0,
                        font: {
                            size: isMobile ? 9 : 11
                        }
                    },
                    grid: {
                        display: false
                    }
                },
                y: {
                    beginAtZero: false,
                    ticks: {
                        callback: function(value) {
                            if (isMobile && value >= 1000000) {
                                return 'Rp' + (value / 1000000).toFixed(1) + 'M';
                            }
                            return 'Rp' + value.toLocaleString('id-ID');
                        },
                        font: {
                            size: isMobile ? 9 : 11
                        },
                        maxTicksLimit: 6
                    }
                }
            }
        }
    });
    
    // Add event listener for year filter change
    document.getElementById("yearFilter").addEventListener("change", function() {
        let selectedYear = this.value;
        console.log("Filter by year:", selectedYear);
        // Logic to update chart data based on selected year would go here
    });
    
    // Resize handling
    window.addEventListener('resize', function() {
        const isMobileNow = window.innerWidth < 768;
        
        // Update chart options for new screen size
        chart.options.scales.x.ticks.maxRotation = isMobileNow ? 45 : 0;
        chart.options.scales.x.ticks.font.size = isMobileNow ? 9 : 11;
        chart.options.scales.y.ticks.font.size = isMobileNow ? 9 : 11;
        chart.data.datasets[0].pointRadius = isMobileNow ? 3 : 5;
        
        // Update y-axis label format
        chart.options.scales.y.ticks.callback = function(value) {
            if (isMobileNow && value >= 1000000) {
                return 'Rp' + (value / 1000000).toFixed(1) + 'M';
            }
            return 'Rp' + value.toLocaleString('id-ID');
        };
        
        chart.update();
    });
});
    </script>
</x-mitra-layout>