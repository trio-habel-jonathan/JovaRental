<div class="flex h-screen sticky top-0">
    <!-- Sidebar -->
    <div class="w-64 h-screen bg-white p-5 border-r border-gray-200 flex flex-col overflow-y-auto">
        <!-- Logo -->
        <div class="flex items-center px-2 mb-6">
            <div class="text-indigo-600 mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                </svg>
            </div>
            <div class="font-semibold text-gray-800">JovaRental</div>
        </div>

        <!-- Navigation -->
        <div class="flex flex-col space-y-1">
            <!-- Dashboard -->
            <div class="flex items-center px-4 py-3 rounded-lg text-gray-600 cursor-pointer hover:bg-gray-50">
                <div class="mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect width="20" height="14" x="2" y="3" rx="2" />
                        <line x1="8" x2="16" y1="21" y2="21" />
                        <line x1="12" x2="12" y1="17" y2="21" />
                    </svg>
                </div>
                <a href="#" class="text-gray-600 text-sm flex-1">Dashboard</a>
            </div>

            <!-- Pesanan -->
            <div class="group">
                <div id="pesanan-menu"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 cursor-pointer hover:bg-gray-50">
                    <div class="mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect width="8" height="4" x="8" y="2" rx="1" ry="1" />
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
                            <path d="M9 14h6" />
                        </svg>
                    </div>
                    <div class="text-sm flex-1">Pesanan</div>
                    <div id="pesanan-chevron" class="transform transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                </div>

                <div id="pesanan-submenu"
                    class="pl-12 max-h-0 overflow-hidden transition-all duration-300 ease-out bg-white rounded-b-lg mb-1">
                    <a href="{{ route('mitra.pesanan.pesananmitraView') }}" class="block py-2 text-sm text-gray-600 hover:text-indigo-600">Daftar Pesanan</a>
                    <a href="#" class="block py-2 text-sm text-gray-600 hover:text-indigo-600">Buat Pesanan</a>
                </div>
            </div>

            <!-- Kendaraan -->
            <div class="group">
                <div id="kendaraan-menu"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 cursor-pointer hover:bg-gray-50">
                    <div class="mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2" />
                            <circle cx="7" cy="17" r="2" />
                            <path d="M9 17h6" />
                            <circle cx="17" cy="17" r="2" />
                        </svg>
                    </div>
                    <div class="text-sm flex-1">Kendaraan</div>
                    <div id="kendaraan-chevron" class="transform transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                </div>

                <div id="kendaraan-submenu"
                    class="pl-12 max-h-0 overflow-hidden transition-all duration-300 ease-out bg-white rounded-b-lg mb-1">
                    <a href="{{ route('mitra.kendaraan.kendaraanmitraView') }}" class="block py-2 text-sm text-gray-600 hover:text-indigo-600">Daftar
                        Kendaraan</a>
                    <a href="{{ route('mitra.kendaraan.tambahkendaraanView') }}" class="block py-2 text-sm text-gray-600 hover:text-indigo-600">Tambah
                        Kendaraan</a>
                </div>
            </div>

            <!-- Keuangan -->
            <div class="group">
                <div id="keuangan-menu"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 cursor-pointer hover:bg-gray-50">
                    <div class="mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1" />
                            <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4" />
                        </svg>
                    </div>
                    <div class="text-sm flex-1">Keuangan</div>
                    <div id="keuangan-chevron" class="transform transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                </div>

                <div id="keuangan-submenu"
                    class="pl-12 max-h-0 overflow-hidden transition-all duration-300 ease-out bg-white rounded-b-lg mb-1">
                    <a href="{{route ('mitra.keuangan.index')}}" class="block py-2 text-sm text-gray-600 hover:text-indigo-600">Laporan
                        Keuangan</a>
                    <a href="#" class="block py-2 text-sm text-gray-600 hover:text-indigo-600">Pengeluaran</a>
                    <a href="#" class="block py-2 text-sm text-gray-600 hover:text-indigo-600">Pendapatan</a>
                </div>
            </div>

            <!-- Supir -->
            <div class="group">
                <div id="supir-menu"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-600 cursor-pointer hover:bg-gray-50">
                    <div class="mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <div class="text-sm flex-1">Supir</div>
                    <div id="supir-chevron" class="transform transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                </div>

                <div id="supir-submenu"
                    class="pl-12 max-h-0 overflow-hidden transition-all duration-300 ease-out bg-white rounded-b-lg mb-1">
                    <a href="#" class="block py-2 text-sm text-gray-600 hover:text-indigo-600">Daftar Supir</a>
                    <a href="#" class="block py-2 text-sm text-gray-600 hover:text-indigo-600">Tambah Supir</a>
                </div>
            </div>
        </div>

        <div class="mt-auto">
            <!-- Logout -->
            <div class="flex items-center px-4 py-3 rounded-lg text-red-500 cursor-pointer hover:bg-red-50 mt-6">
                <div class="mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>
                </div>
                <div class="text-sm">Logout</div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6 bg-gray-50 overflow-y-auto">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
            <p class="text-gray-600">Selamat datang kembali, berikut ringkasan bisnis Anda</p>
        </div>

        <!-- Summary Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect width="20" height="14" x="2" y="5" rx="2" />
                            <line x1="2" x2="22" y1="10" y2="10" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Pendapatan Bulan Ini</p>
                        <p class="text-xl font-bold text-gray-800">Rp 14,500,000</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M20 12V8H6a2 2 0 0 1-2-2c0-1.1.9-2 2-2h12v4" />
                            <path d="M4 6v12c0 1.1.9 2 2 2h14v-4" />
                            <path d="M18 12a2 2 0 0 0-2 2c0 1.1.9 2 2 2h4v-4h-4z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Transaksi Bulan Ini</p>
                        <p class="text-xl font-bold text-gray-800">28 Transaksi</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-purple-100 text-purple-600 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2" />
                            <circle cx="7" cy="17" r="2" />
                            <path d="M9 17h6" />
                            <circle cx="17" cy="17" r="2" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Kendaraan Aktif</p>
                        <p class="text-xl font-bold text-gray-800">12 Kendaraan</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Saldo Progressive Chart -->
        <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-semibold text-gray-800">Saldo Progresif</h2>
                <div class="flex items-center">
                    <label for="yearFilter" class="mr-2 text-sm font-medium text-gray-600">
                        Filter Tahun:
                    </label>
                    <select
                        id="yearFilter"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 p-2"
                    >
                        <option value="2023">2023</option>
                        <option value="2024" selected>2024</option>
                        <option value="2025">2025</option>
                    </select>
                </div>
            </div>
            
            <!-- Chart Canvas -->
            <div class="h-80 w-full">
                <canvas id="saldoChart"></canvas>
            </div>
            
            <div class="mt-4 grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-indigo-50 p-3 rounded-lg">
                    <p class="text-xs text-gray-600">Saldo Awal</p>
                    <p class="text-lg font-semibold text-indigo-700">Rp 5,000,000</p>
                </div>
                <div class="bg-indigo-50 p-3 rounded-lg">
                    <p class="text-xs text-gray-600">Saldo Akhir</p>
                    <p class="text-lg font-semibold text-indigo-700">Rp 20,000,000</p>
                </div>
                <div class="bg-indigo-50 p-3 rounded-lg">
                    <p class="text-xs text-gray-600">Pertumbuhan</p>
                    <p class="text-lg font-semibold text-green-600">300%</p>
                </div>
            </div>
        </div>

        <!-- Recent Transactions -->
        <div class="bg-white p-6 rounded-lg shadow-sm">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-semibold text-gray-800">Transaksi Terbaru</h2>
                <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800">Lihat Semua</a>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pelanggan</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kendaraan</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#TRX12345</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Budi Santoso</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Toyota Avanza</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">15 Mar 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp 850,000</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Selesai</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#TRX12344</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Diana Purnama</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Honda Brio</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">14 Mar 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp 600,000</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Berlangsung</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#TRX12343</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Ahmad Riyadi</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Mitsubishi Xpander</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12 Mar 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp 950,000</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Selesai</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
<script>
    // Initialize dropdown menus
    document.addEventListener('DOMContentLoaded', function() {
        // Dropdown toggle for Pesanan
        document.getElementById('pesanan-menu').addEventListener('click', function() {
            const submenu = document.getElementById('pesanan-submenu');
            const chevron = document.getElementById('pesanan-chevron');
            if (submenu.classList.contains('max-h-0')) {
                submenu.classList.remove('max-h-0');
                submenu.classList.add('max-h-40');
                chevron.classList.add('rotate-180');
            } else {
                submenu.classList.remove('max-h-40');
                submenu.classList.add('max-h-0');
                chevron.classList.remove('rotate-180');
            }
        });

        // Dropdown toggle for Kendaraan
        document.getElementById('kendaraan-menu').addEventListener('click', function() {
            const submenu = document.getElementById('kendaraan-submenu');
            const chevron = document.getElementById('kendaraan-chevron');
            if (submenu.classList.contains('max-h-0')) {
                submenu.classList.remove('max-h-0');
                submenu.classList.add('max-h-40');
                chevron.classList.add('rotate-180');
            } else {
                submenu.classList.remove('max-h-40');
                submenu.classList.add('max-h-0');
                chevron.classList.remove('rotate-180');
            }
        });

        // Dropdown toggle for Keuangan
        document.getElementById('keuangan-menu').addEventListener('click', function() {
            const submenu = document.getElementById('keuangan-submenu');
            const chevron = document.getElementById('keuangan-chevron');
            if (submenu.classList.contains('max-h-0')) {
                submenu.classList.remove('max-h-0');
                submenu.classList.add('max-h-40');
                chevron.classList.add('rotate-180');
            } else {
                submenu.classList.remove('max-h-40');
                submenu.classList.add('max-h-0');
                chevron.classList.remove('rotate-180');
            }
        });

        // Dropdown toggle for Supir
        document.getElementById('supir-menu').addEventListener('click', function() {
            const submenu = document.getElementById('supir-submenu');
            const chevron = document.getElementById('supir-chevron');
            if (submenu.classList.contains('max-h-0')) {
                submenu.classList.remove('max-h-0');
                submenu.classList.add('max-h-40');
                chevron.classList.add('rotate-180');
            } else {
                submenu.classList.remove('max-h-40');
                submenu.classList.add('max-h-0');
                chevron.classList.remove('rotate-180');
            }
        });

        // Initialize Saldo Chart
        const ctx = document.getElementById('saldoChart').getContext('2d');
        
        // Sample data for the chart
        const saldoData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Saldo (dalam Rupiah)',
                data: [5000000, 7500000, 6800000, 9200000, 8500000, 12000000, 11000000, 15000000, 13000000, 18000000, 16000000, 20000000],
                fill: false,
                borderColor: '#4f46e5',
                tension: 0.1,
                pointBackgroundColor: '#4f46e5',
                pointBorderColor: '#fff',
                pointRadius: 4,
                pointHoverRadius: 6
            }]
        };

        // Chart configuration
        const saldoChart = new Chart(ctx, {
            type: 'line',
            data: saldoData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return 'Rp ' + value.toLocaleString('id-ID');
                            }
                        },
                        title: {
                            display: true,
                            text: 'Saldo (IDR)'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Bulan'
                        }
                    }
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return 'Saldo: Rp ' + context.raw.toLocaleString('id-ID');
                            }
                        }
                    },
                    legend: {
                        display: false
                    }
                }
            }
        });

        // Year filter functionality
        document.getElementById('yearFilter').addEventListener('change', function() {
            // In a real application, this would fetch new data based on the selected year
            // For this example, we'll just generate random data
            const randomSaldoData = saldoData.datasets[0].data.map(() => 
                Math.floor(Math.random() * 15000000) + 5000000
            );
            
            saldoChart.data.datasets[0].data = randomSaldoData;
            saldoChart.update();
            
            // Update summary cards
            const firstValue = randomSaldoData[0];
            const lastValue = randomSaldoData[randomSaldoData.length