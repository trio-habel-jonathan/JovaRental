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

            <div class="bg-white rounded-xl p-3 flex justify-between items-center ">
                <h1 class=" montserrat-font font-semibold text-xl">Chart Transaksi</h1>

                <div class="relative inline-block ">
                    <!-- Custom select button -->
                    <button id="custom-select-btn" type="button"
                        class="flex items-center justify-between w-full px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary">
                        <span id="selected-year">2025</span>
                        <svg class="w-5 h-5 ml-2 -mr-1 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Dropdown menu, hidden by default -->
                    <div id="custom-select-dropdown"
                        class="absolute z-10 w-full mt-1 bg-white shadow-lg max-h-60 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm hidden">
                        <!-- Year options will be populated here via JavaScript -->
                    </div>

                    <!-- Hidden actual select for form submission -->
                    <select name="year" id="year-select" class="hidden">
                        @for ($year = date('Y'); $year >= 2000; $year--)
                        <option value="{{ $year }}">{{ $year }}</option>
                        @endfor
                    </select>
                </div>


            </div>
            <div class="mt-2 bg-white p-3 rounded-xl">
                <div class="chart-container mx-auto " style="position: relative; height: 300px; width: 100%;">
                    <canvas id="lineChart"></canvas>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
                        <p class="text-sm text-green-600 font-semibold">+Rp. 16.000.000</p>
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
                <h1 class="montserrat-font text-4xl text-white font-extrabold tracking-wide" id="current-date">
                </h1>
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


</x-admin-layout>

<script src="{{asset('/static/js/open-close-balance-admin.js')}}"></script>
<script src="{{asset('/static/js/tanggal-chart-admin.js')}}"></script>