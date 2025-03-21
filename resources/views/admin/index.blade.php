<x-admin-layout title="Dashboard">
    <div class="p-4">
        <div class="flex justify-between gap-4 flex-wrap items-start ">
            <div class="flex-[300px] space-y-3">
                <div class="flex items-start gap-3 ">
                    {{-- Data :
                    2. Costumers
                    3. Mitra
                    4. Kendaraan --}}
                    @for ($i = 0; $i < 3; $i++) <div class="bg-white rounded-md p-2 flex-1">
                        <div class="border-l-2 pl-2 border-primary flex justify-between">
                            <div>
                                <p class="text-gray-400">Custommers</p>
                                <p class="text-2xl uppercase font-bold">1.045</p>
                            </div>
                            <div class="p-2 rounded-md bg-primary/30 h-fit text-primary">
                                <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 3.46776C17.4817 4.20411 18.5 5.73314 18.5 7.5C18.5 9.26686 17.4817 10.7959 16 11.5322M18 16.7664C19.5115 17.4503 20.8725 18.565 22 20M2 20C3.94649 17.5226 6.58918 16 9.5 16C12.4108 16 15.0535 17.5226 17 20M14 7.5C14 9.98528 11.9853 12 9.5 12C7.01472 12 5 9.98528 5 7.5C5 5.01472 7.01472 3 9.5 3C11.9853 3 14 5.01472 14 7.5Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                </div>
                @endfor
            </div>

            <div class="bg-white rounded-xl p-3 ">
                <h1 class=" montserrat-font font-semibold text-xl">Chart Transaksi</h1>
            </div>
            <div class="mt-2 bg-white p-3 rounded-xl">
                <div class="chart-container mx-auto " style="position: relative; height: 300px; width: 100%;">
                    <canvas id="lineChart"></canvas>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const ctx = document.getElementById('lineChart').getContext('2d');
                    
                    // Buat chart dengan opsi responsif yang tepat
                    const lineChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                            datasets: [{
                                label: 'Transactions',
                                data: [120, 190, 300, 500, 200, 300],
                                borderColor: 'rgba(75, 192, 192, 1)',
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                borderWidth: 2,
                                tension: 0.4
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    display: true,
                                    position: 'top'
                                }
                            },
                            scales: {
                                x: {
                                    beginAtZero: true
                                },
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                    
                    // Fungsi untuk mengatasi resize
                    function handleResize() {
                        // Dapatkan ukuran chart-container
                        const chartContainer = document.querySelector('.chart-container');
                        // Dapatkan ukuran container parent
                        const parentWidth = chartContainer.parentElement.clientWidth;
                        
                        // Terapkan lebar maksimum yang konsisten
                        // Jika parent lebih kecil dari batas tertentu, gunakan ukuran parent
                        // Jika tidak, gunakan ukuran maksimum yang tetap
                        const maxWidth = 800; // Atur nilai ini sesuai kebutuhan desain Anda
                        
                        if (parentWidth < maxWidth) {
                            chartContainer.style.width = '100%';
                        } else {
                            chartContainer.style.width = maxWidth + 'px';
                        }
                        
                        // Update chart untuk merespons perubahan ukuran
                        lineChart.resize();
                    }
                    
                    // Panggil fungsi saat load dan resize
                    handleResize();
                    window.addEventListener('resize', handleResize);
                    
                    // Tambahkan handler untuk zoom browser juga
                    window.addEventListener('zoom', handleResize);
                    // Chrome dan browser berbasis Webkit tidak memiliki event zoom
                    // Jadi kita gunakan polling untuk memeriksa perubahan ukuran
                    let previousWidth = window.innerWidth;
                    setInterval(function() {
                        if (previousWidth !== window.innerWidth) {
                            previousWidth = window.innerWidth;
                            handleResize();
                        }
                    }, 300);
                });
            </script>
        </div>

        <div class="lg:w-[320px]">
            <div class="bg-white   rounded-xl p-4 shadow-xl">
                <h1 class="montserrat-font font-bold text-3xl ">Summary</h1>
                <style>
                    .eye-icon {
                        width: 24px;
                        height: 24px;
                        cursor: pointer;
                        transition: opacity 0.3s ease, transform 0.3s ease;
                    }

                    .hidden-icon {
                        opacity: 0;
                        position: absolute;
                        pointer-events: none;
                    }

                    .icon-container {
                        position: relative;
                        width: 24px;
                        height: 24px;
                    }

                    #balance {
                        transition: all 0.5s ease;
                    }

                    .fade-out {
                        opacity: 0;
                        transform: translateY(-5px);
                    }

                    .fade-in {
                        opacity: 1;
                        transform: translateY(0);
                    }
                </style>

                <div class="bg-gray-100 w-full p-3 rounded-lg mt-2 montserrat-font text-lg">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <p>Your Balance</p>

                        <div class="icon-container">
                            <img draggable="false" id="eye-open" src="https://www.svgrepo.com/show/532492/eye-alt.svg"
                                alt="show-wallet" class="eye-icon">
                            <img draggable="false" id="eye-closed"
                                src="https://www.svgrepo.com/show/532463/eye-slash-alt.svg" alt="close-wallet"
                                class="eye-icon hidden-icon">
                        </div>
                    </div>

                    <p class="montserrat-font font-semibold text-2xl" id="balance"><span class="text-lg">Rp</span>
                        100.000.000</p>
                </div>




                <div class="w-full p-3 rounded-lg mt-2 montserrat-font text-lg">
                    <div class="pb-2 border-b-2 border-gray-400 flex items-center justify-between">
                        <p class="montserrat-font font-semibold">Aktifitas</p>
                        <a href="#" class="text-purple-500 montserrat-font font-semibold text-sm">Lihat</a>
                    </div>

                    <div class="flex items-center mt-2 mr-2 justify-start gap-3">
                        <div class="p-2 bg-purple-600 rounded-lg">
                            <img src="https://www.svgrepo.com/show/522713/wallet-receive.svg" width="22"
                                alt="transaksi-masuk">
                        </div>
                        <div>
                            <p class="block leading-[15px]"><span class="font-bold text-sm">Transaksi</span><br><span
                                    class="text-xs">10 Jan 2025</span></p>
                        </div>
                        <p class="text-sm text-green-600 font-semibold">+Rp. 1.000.000</p>
                    </div>

                    <div class="flex items-center mt-2 mr-2 justify-start gap-4">
                        <div class="p-2 bg-purple-600 rounded-lg"><img
                                src="https://www.svgrepo.com/show/522715/wallet-send.svg" width="22"
                                alt="transaksi-keluar">
                        </div>

                        <div>
                            <p class="block leading-[15px]"><span class="font-bold text-sm">Withdraw</span><br><span
                                    class="text-xs">10 Jan 2025</span></p>
                        </div>
                        <p class="text-sm text-red-600 font-semibold">-Rp. 1.000.000</p>
                    </div>

                    <div class="flex items-center mt-2 mr-2 justify-start gap-4">
                        <div class="p-2 bg-purple-600 rounded-lg"><img
                                src="https://www.svgrepo.com/show/522715/wallet-send.svg" width="22"
                                alt="transaksi-keluar">
                        </div>

                        <div>
                            <p class="block leading-[15px]"><span class="font-bold text-sm">Withdraw</span><br><span
                                    class="text-xs">10 Jan 2025</span></p>
                        </div>
                        <p class="text-sm text-red-600 font-semibold">-Rp. 1.000.000</p>
                    </div>
                </div>


            </div>

            <div class="mt-2 bg-gradient-to-r from-purple-600 to-purple-400 rounded-lg p-6 shadow-xl ">
                <h1 class="montserrat-font text-4xl text-white font-extrabold tracking-wide" id="current-date"></h1>
                <h2 class="montserrat-font text-2xl text-white font-medium mt-2" id="current-time"></h2>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    function updateDateTime() {
                        const now = new Date();
                        const optionsDate = { year: 'numeric', month: 'long', day: '2-digit' };
                        const optionsTime = { hour: '2-digit', minute: '2-digit', hour12: true };

                        document.getElementById('current-date').textContent = now.toLocaleDateString('en-US', optionsDate);
                        document.getElementById('current-time').textContent = now.toLocaleTimeString('en-US', optionsTime);
                    }

                    updateDateTime();
                    setInterval(updateDateTime, 1000);
                });
            </script>
        </div>

    </div>


    </div>

    <script src="{{asset('/static/js/open-close-balance-admin.js')}}"></script>

</x-admin-layout>