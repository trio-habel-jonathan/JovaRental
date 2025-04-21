<x-mitra-layout title="Dashboard">
    <div class="p-4 space-y-4">
        <div class="flex gap-4">
            @for ($i = 0; $i < 4; $i++)
            <div class="card w-fit bg-white rounded-md p-4 shadow-md">
                <div class="flex items-center gap-2">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16 3.46776C17.4817 4.20411 18.5 5.73314 18.5 7.5C18.5 9.26686 17.4817 10.7959 16 11.5322M18 16.7664C19.5115 17.4503 20.8725 18.565 22 20M2 20C3.94649 17.5226 6.58918 16 9.5 16C12.4108 16 15.0535 17.5226 17 20M14 7.5C14 9.98528 11.9853 12 9.5 12C7.01472 12 5 9.98528 5 7.5C5 5.01472 7.01472 3 9.5 3C11.9853 3 14 5.01472 14 7.5Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-sm">Total Customers</p>
                </div>
                <div class="flex gap-4 items-end">
                    <h6 class="font-bold text-3xl">
                        {{ $mitra ? number_format($mitra->pemesanans->count()) }}
                    </h6>
                    <div class="flex items-center gap-2 w-fit rounded-full text-green-500 p-0.5 px-2">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22 7L14.1314 14.8686C13.7354 15.2646 13.5373 15.4627 13.309 15.5368C13.1082 15.6021 12.8918 15.6021 12.691 15.5368C12.4627 15.4627 12.2646 15.2646 11.8686 14.8686L9.13137 12.1314C8.73535 11.7354 8.53735 11.5373 8.30902 11.4632C8.10817 11.3979 7.89183 11.3979 7.69098 11.4632C7.46265 11.5373 7.26465 11.7354 6.86863 12.1314L2 17M22 7H15M22 7V14"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p>6,2%</p>
                    </div>
                </div>
            </div>
        @endfor
    </div>
    <div class="w-full grid grid-cols-2 gap-4">
        @for ($i = 0; $i < 2; $i++) <div class="card bg-white rounded-md shadow-md p-4 space-y-6 w-full">
            <div class="flex items-center gap-2">
                <p>Available Balance: {{ $mitra ? number_format($mitra->saldo, 2) : '0.00' }}</p>
                <button id="toggleBalance"
                    class="bg-blue-500/20 text-blue-500 w-8 h-8 flex justify-center items-center rounded-full">
                    <!-- Eye Icon -->
                    <svg id="hideIcon" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 5C7.58172 5 4.00358 7.94456 2.59023 12C4.00358 16.0554 7.58172 19 12 19C16.4183 19 19.9964 16.0554 21.4098 12C19.9964 7.94456 16.4183 5 12 5Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <!-- Crossed Eye Icon (Hidden initially) -->
                    <svg id="showIcon" class="hidden" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.7429 5.09232C11.1494 5.03223 11.5686 5 12.0004 5C17.1054 5 20.4553 9.50484 21.5807 11.2868C21.7169 11.5025 21.785 11.6103 21.8231 11.7767C21.8518 11.9016 21.8517 12.0987 21.8231 12.2236C21.7849 12.3899 21.7164 12.4985 21.5792 12.7156C21.2793 13.1901 20.8222 13.8571 20.2165 14.5805M6.72432 6.71504C4.56225 8.1817 3.09445 10.2194 2.42111 11.2853C2.28428 11.5019 2.21587 11.6102 2.17774 11.7765C2.1491 11.9014 2.14909 12.0984 2.17771 12.2234C2.21583 12.3897 2.28393 12.4975 2.42013 12.7132C3.54554 14.4952 6.89541 19 12.0004 19C14.0588 19 15.8319 18.2676 17.2888 17.2766M3.00042 3L21.0004 21M9.8791 9.87868C9.3362 10.4216 9.00042 11.1716 9.00042 12C9.00042 13.6569 10.3436 15 12.0004 15C12.8288 15 13.5788 14.6642 14.1217 14.1213"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

            <!-- Balance container with fixed height to prevent layout shift -->
            <div class="plus-jakarta-sans-font relative h-10 overflow-hidden">
                <!-- Visible balance -->
                <div id="visibleBalance"
                class="absolute w-full transition-transform duration-300 ease-in-out transform translate-y-0">
                <h6 class="space-x-2">
                    <span class="text-gray-500 font-bold">IDR</span>
                    <span class="font-bold text-3xl">
                        {{ $mitra ? number_format($mitra->saldo, 0, ',', '.') : '0' }}
                    </span>
                </h6>
            </div>

                <!-- Hidden balance (stars) -->
                <div id="hiddenBalance"
                    class="absolute w-full transition-transform duration-300 ease-in-out transform translate-y-full">
                    <h6 class="space-x-2">
                        <span class="text-gray-500 font-bold">IDR</span>
                        <span class="font-bold text-3xl">********</span>
                    </h6>
                </div>
            </div>

            <div class="flex gap-4">
                <a href="#"
                    class="bg-blue-500 flex w-fit items-center gap-2 px-6 py-2 text-lg rounded-full text-white montserrat-font">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 18L18 6M18 6H10M18 6V14" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Withdraw
                </a>
                <a href="#"
                    class="border border-blue-500 flex w-fit items-center gap-2 px-6 py-2 text-lg rounded-full text-blue-500 font-medium montserrat-font">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14 2.26953V6.40007C14 6.96012 14 7.24015 14.109 7.45406C14.2049 7.64222 14.3578 7.7952 14.546 7.89108C14.7599 8.00007 15.0399 8.00007 15.6 8.00007H19.7305M16 13H8M16 17H8M10 9H8M14 2H8.8C7.11984 2 6.27976 2 5.63803 2.32698C5.07354 2.6146 4.6146 3.07354 4.32698 3.63803C4 4.27976 4 5.11984 4 6.8V17.2C4 18.8802 4 19.7202 4.32698 20.362C4.6146 20.9265 5.07354 21.3854 5.63803 21.673C6.27976 22 7.11984 22 8.8 22H15.2C16.8802 22 17.7202 22 18.362 21.673C18.9265 21.3854 19.3854 20.9265 19.673 20.362C20 19.7202 20 18.8802 20 17.2V8L14 2Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    History
                </a>
            </div>
    </div>
    @endfor
    </div>
    <div class="w-full flex">
        <div class="w-3/4 h-96 bg-white p-4 rounded-l-md shadow-md">
            <canvas id="myLineChart"></canvas>
        </div>
        <div class="w-1/4 h-96 bg-white rounded-r-md p-4">
            <h6 class="uppercase font-bold">Keterangan</h6>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Select the canvas element
        const ctx = document.getElementById('myLineChart').getContext('2d');

        // Create the chart
        const myLineChart = new Chart(ctx, {
            type: 'line', // Define chart type
            data: {
                labels: ['January', 'February', 'March', 'April', 'May'], // X-axis labels
                datasets: [{
                    label: 'Sales in USD',
                    data: [120, 190, 300, 500, 250], // Y-axis values
                    borderColor: '#705fb1', // Line color
                    backgroundColor: 'rgba(112, 95, 177, 0.2)', // Light fill color
                    borderWidth: 2, // Line thickness
                    tension: 0.4, // Smooth curves
                    pointBackgroundColor: '#705fb1', // Dot color
                    pointRadius: 5, // Dot size
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <script></script>
</x-mitra-layout>