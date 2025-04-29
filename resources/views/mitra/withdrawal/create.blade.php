<x-mitra-layout title="Withdrawal">
    <div class="bg-gray-50 min-h-screen py-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">
            <div class="text-center mb-8">
                <div
                    class="inline-flex items-center justify-center h-16 w-16 rounded-full bg-blue-100 text-blue-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-gray-800">Withdrawal Request</h1>
                <p class="text-gray-500 mt-2">Transfer Penghasilan Kamu Ke Rekening Anda
                </p>
            </div>

            @if(count(Auth::user()->mitra->rekenings) > 0)
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <form action="{{ route('mitra.withdraw.store') }}" method="POST">
                    @csrf
                    <div class="flex flex-col md:flex-row">
                        <div class="w-full md:w-2/3 p-6 border-b md:border-b-0 md:border-r border-gray-200">
                            <div class="space-y-6">
                                <div>
                                    <div class="flex items-center mb-3">
                                        <span
                                            class="flex items-center justify-center h-6 w-6 rounded-full bg-blue-100 text-blue-600 text-sm font-medium">1</span>
                                        <span class="ml-2 font-medium text-gray-800">Select Payment Method</span>
                                    </div>
                                    <div class="space-y-3 max-h-60 overflow-y-auto pr-2">
                                        @foreach (Auth::user()->mitra->rekenings as $method)
                                        <label
                                            class="block border rounded-lg transition-all hover:shadow-md cursor-pointer overflow-hidden {{ $method->is_default ? 'border-blue-500 ring-2 ring-blue-200' : 'border-gray-200' }}">
                                            <div class="flex items-start p-4">
                                                <input type="radio" name="id_rekening_mitra"
                                                    value="{{ $method->id_rekening_mitra }}" {{ $method->is_default ?
                                                'checked' : '' }}
                                                class="mt-1 h-4 w-4 text-blue-600 focus:ring-blue-500" required>
                                                <div class="ml-3 flex-1">
                                                    <div class="flex justify-between">
                                                        <span class="font-medium text-gray-900">{{
                                                            $method->metodePembayaranMitra->nama_metode }}</span>
                                                        @if($method->is_default)
                                                        <span
                                                            class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800">Default</span>
                                                        @endif
                                                    </div>
                                                    <div class="mt-1 flex flex-wrap gap-2 text-sm text-gray-700">
                                                        <span class="font-medium">{{ $method->nomor_rekening }}</span>
                                                        <span class="hidden sm:inline">•</span>
                                                        <span>{{ $method->nama_pemilik }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                        @endforeach
                                    </div>
                                    @error('id_rekening_mitra')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Step 2 - Enter Amount -->
                                <div class="pt-4">
                                    <div class="flex items-center mb-3">
                                        <span
                                            class="flex items-center justify-center h-6 w-6 rounded-full bg-blue-100 text-blue-600 text-sm font-medium">2</span>
                                        <span class="ml-2 font-medium text-gray-800">Enter Amount</span>
                                    </div>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <span class="text-gray-500 sm:text-sm">Rp</span>
                                        </div>
                                        <input type="number" name="jumlah" id="jumlah" step="0.01" min="10000"
                                            class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                            placeholder="0.00" required>
                                    </div>
                                    <p class="mt-1 text-xs text-gray-500">Minimum withdrawal: Rp 10.000</p>
                                    @error('jumlah')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Step 3 - Notes -->
                                <div class="pt-4">
                                    <div class="flex items-center mb-3">
                                        <span
                                            class="flex items-center justify-center h-6 w-6 rounded-full bg-blue-100 text-blue-600 text-sm font-medium">3</span>
                                        <span class="ml-2 font-medium text-gray-800">Additional Information
                                            (Optional)</span>
                                    </div>
                                    <textarea name="keterangan" id="keterangan" rows="3"
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                        placeholder="Add any notes or references..."></textarea>
                                    @error('keterangan')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Right Column - Summary -->
                        <div class="w-full md:w-1/3 p-6 bg-gray-50">
                            <div class="sticky top-6">
                                <h3 class="text-lg font-medium text-gray-900 mb-4">Withdrawal Summary</h3>

                                <!-- Summary Card -->
                                <div class="bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                                    <div class="space-y-3">
                                        <!-- Selected Method -->
                                        <div>
                                            <p class="text-sm text-gray-500">Selected Method</p>
                                            <p class="font-medium text-gray-800" id="selected-method">
                                                @if(Auth::user()->mitra->rekenings->where('is_default', 1)->first())
                                                {{ Auth::user()->mitra->rekenings->where('is_default',
                                                1)->first()->metodePembayaranMitra->nama_metode }}
                                                @else
                                                Select a payment method
                                                @endif
                                            </p>
                                        </div>

                                        <div class="border-t border-gray-100 my-2"></div>

                                        <div class="flex justify-between">
                                            <span class="text-gray-500">Request Amount</span>
                                            <span class="font-medium text-gray-900">Rp <span
                                                    id="summary-amount">0</span></span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="text-gray-500">Processing Fee</span>
                                            <span class="font-medium text-gray-900">Rp 0</span>
                                        </div>
                                        <div class="border-t border-gray-100 my-2"></div>
                                        <div class="flex justify-between">
                                            <span class="font-medium text-gray-900">Total Amount</span>
                                            <span class="font-bold text-blue-600">Rp <span
                                                    id="summary-total">0</span></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Processing Time -->
                                <div class="mt-4 bg-blue-50 rounded-lg p-3 text-sm text-blue-700">
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <p>Your withdrawal request will be processed within 1-3 business days.</p>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit"
                                    class="mt-6 w-full py-3 px-4 rounded-md shadow-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                                    Submit Withdrawal Request
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- Transaction History Link -->
                <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                    {{-- {{ route('mitra.withdraw.history') }} --}}
                    <a href=""
                        class="flex items-center justify-center text-sm font-medium text-blue-600 hover:text-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        View Withdrawal History
                    </a>
                </div>
            </div>

            @else
            <!-- No Payment Methods Card -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="p-8 flex flex-col items-center justify-center text-center">
                    <div class="bg-yellow-100 text-yellow-700 rounded-full p-3 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold text-gray-800 mb-2">No Payment Methods Available</h2>
                    <p class="text-gray-500 mb-6">
                        You need to add at least one payment method before you can make a withdrawal request.
                    </p>
                    <a href="{{ route('mitra.rekening.create') }}"
                        class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Add Payment Method
                    </a>
                </div>
            </div>
            @endif

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const amountInput = document.getElementById('jumlah');
            const paymentMethods = document.querySelectorAll('input[name="id_rekening_mitra"]');
            const summaryAmount = document.getElementById('summary-amount');
            const summaryTotal = document.getElementById('summary-total');
            const selectedMethod = document.getElementById('selected-method');
            
            if (amountInput) {
                amountInput.addEventListener('input', function() {
                    const amount = this.value ? parseFloat(this.value) : 0;
                    const formattedAmount = new Intl.NumberFormat('id-ID').format(amount);
                    
                    summaryAmount.textContent = formattedAmount;
                    summaryTotal.textContent = formattedAmount;
                });
            }
            
            paymentMethods.forEach(radio => {
                radio.addEventListener('change', function() {
                    if (this.checked) {
                        const methodCard = this.closest('label');
                        const methodName = methodCard.querySelector('.text-gray-900').textContent;
                        const accountNumber = methodCard.querySelector('.font-medium').textContent;
                        
                        selectedMethod.textContent = methodName;
                    }
                });
            });
        });
    </script>
</x-mitra-layout>