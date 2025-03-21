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
        <div class="bg-white rounded-lg p-3 md:p-4 mb-3 shadow flex flex-wrap items-center justify-between">
            <div class="flex items-center w-full sm:w-auto mb-2 sm:mb-0">
                <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-orange-100 flex items-center justify-center mr-2 md:mr-3">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-orange-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 16L12 8M12 8L8 12M12 8L16 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div>
                    <div class="font-medium text-sm md:text-base">Terima Uang</div>
                    <div class="text-gray-500 text-xs md:text-sm">01 Jul 2023 • 16:17</div>
                </div>
            </div>
            <div class="text-green-600 font-medium text-sm md:text-base">Rp35.000</div>
        </div>
        
        <div class="bg-white rounded-lg p-3 md:p-4 mb-3 shadow flex flex-wrap items-center justify-between">
            <div class="flex items-center w-full sm:w-auto mb-2 sm:mb-0">
                <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-blue-100 flex items-center justify-center mr-2 md:mr-3">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 8L12 16M12 16L16 12M12 16L8 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div>
                    <div class="font-medium text-sm md:text-base">Kirim Uang</div>
                    <div class="text-gray-500 text-xs md:text-sm">01 Jul 2023 • 14:23</div>
                </div>
            </div>
            <div class="text-red-600 font-medium text-sm md:text-base">-Rp23.000</div>
        </div>
        
        <div class="bg-white rounded-lg p-3 md:p-4 mb-3 shadow flex flex-wrap items-center justify-between">
            <div class="flex items-center w-full sm:w-auto mb-2 sm:mb-0">
                <div class="w-8 h-8 md:w-10 md:h-10 rounded-full flex items-center justify-center mr-2 md:mr-3">
                    <svg class="w-6 h-6 md:w-8 md:h-8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 12V12C12 12 8.53333 12 6.26667 12C4 12 2 10 2 8C2 6 4 4 6.26667 4H12V8L17.3333 4V12L12 8V12Z" fill="#4285F4"/>
                        <path d="M12 12V12C12 12 15.4667 12 17.7333 12C20 12 22 14 22 16C22 18 20 20 17.7333 20H12V16L6.66667 20V12L12 16V12Z" fill="#34A853"/>
                    </svg>
                </div>
                <div>
                    <div class="font-medium text-sm md:text-base">Google</div>
                    <div class="text-gray-500 text-xs md:text-sm">01 Jul 2023 • 13:17</div>
                </div>
            </div>
            <div class="text-red-600 font-medium text-sm md:text-base">-Rp176.490</div>
        </div>
        
        <div class="bg-white rounded-lg p-3 md:p-4 mb-3 shadow flex flex-wrap items-center justify-between">
            <div class="flex items-center w-full sm:w-auto mb-2 sm:mb-0">
                <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-orange-100 flex items-center justify-center mr-2 md:mr-3">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-orange-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 16L12 8M12 8L8 12M12 8L16 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div>
                    <div class="font-medium text-sm md:text-base">Terima Uang</div>
                    <div class="text-gray-500 text-xs md:text-sm">01 Jul 2023 • 10:19</div>
                </div>
            </div>
            <div class="text-green-600 font-medium text-sm md:text-base">Rp500.000</div>
        </div>
        
        <div class="bg-white rounded-lg p-3 md:p-4 mb-3 shadow flex flex-wrap items-center justify-between">
            <div class="flex items-center w-full sm:w-auto mb-2 sm:mb-0">
                <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-blue-100 flex items-center justify-center mr-2 md:mr-3">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 8L12 16M12 16L16 12M12 16L8 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div>
                    <div class="font-medium text-sm md:text-base">Kirim Uang</div>
                    <div class="text-gray-500 text-xs md:text-sm">30 Jun 2023 • 13:48</div>
                </div>
            </div>
            <div class="text-red-600 font-medium text-sm md:text-base">-Rp50.000</div>
        </div>
    </div>
    
    
</x-mitra-layout>