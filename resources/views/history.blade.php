<x-user-layout title="history">
    <!-- Main container with responsive flex direction -->
    <div class="flex flex-col lg:flex-row items-start justify-between mx-auto max-w-[1600px] gap-6 p-4">
        <!-- Left sidebar - full width on mobile, fixed width on desktop -->
        <div
            class="w-full sticky top-[5rem] lg:w-[350px] flex flex-col bg-white rounded-2xl shadow-xl px-4 py-6 mb-4 lg:mb-0  mt-4">
            <h1 class="text-2xl font-bold text-gray-800 text-center mb-6">Cari History</h1>

            <!-- Search Bar with button -->
            <div class="mb-5 relative">
                <label class="block text-sm font-medium text-gray-700 mb-2">Cari</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <input type="text" placeholder="Search..."
                        class="w-full border border-gray-300 rounded-lg py-3 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
                </div>
            </div>

            <!-- Status filter with improved checkbox design -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-3">Status</label>
                <div class="grid grid-cols-3 gap-3">
                    <div
                        class="flex items-center bg-gray-50 p-2 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                        <input id="status-active" type="checkbox"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="status-active" class="ml-2 block text-sm text-gray-700">Lunas</label>
                    </div>
                    <div
                        class="flex items-center bg-gray-50 p-2 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                        <input id="status-inactive" type="checkbox"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="status-inactive" class="ml-2 block text-sm text-gray-700">Pending</label>
                    </div>
                    <div
                        class="flex items-center bg-gray-50 p-2 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                        <input id="status-pending" type="checkbox"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="status-pending" class="ml-2 block text-sm text-gray-700">Gagal</label>
                    </div>
                    <div
                        class="flex items-center bg-gray-50 p-2 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                        <input id="status-refund" type="checkbox"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="status-refund" class="ml-2 block text-sm text-gray-700">Refund</label>
                    </div>
                </div>
            </div>
            <div class="space-y-3">
                <button type="submit"
                    class="w-full px-4 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium transition-colors duration-300 flex items-center justify-center shadow-md hover:shadow-lg">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35M11 18a7 7 0 1 0 0-14 7 7 0 0 0 0 14z"></path>
                    </svg>
                    Cari History
                </button>
                <button type="submit"
                    class="w-full px-4 py-3 bg-red-600 hover:bg-red-700 text-white rounded-lg font-medium transition-colors duration-300 flex items-center justify-center shadow-md hover:shadow-lg">
                    Clear
                </button>
            </div>
        </div>

        <!-- Right content area - full width on all screens -->
        <div class="flex-1 w-full flex flex-col">
            <!-- Top navigation bar -->
            <div class="bg-white py-5 px-6 flex justify-between items-center rounded-t-xl">
                <p id="page-title" class="font-bold text-gray-800 text-xl">Riwayat Pembayaran</p>
            </div>

            <!-- Dynamic Content Area - Keep original include -->
            <div id="content-area" class="bg-gray-50 rounded-xl p-6 min-h-screen shadow-md">
                @include('partials.user_history')

                <!-- Pagination -->
                <div class="mt-8 flex justify-center">
                    <nav aria-label="Pagination">
                        <ul class="inline-flex items-center -space-x-px">
                            <li>
                                <a href="#"
                                    class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">3</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</x-user-layout>