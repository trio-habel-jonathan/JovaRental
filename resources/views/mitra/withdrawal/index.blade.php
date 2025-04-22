<x-mitra-layout title="Withdrawal">
    <div class="container mx-auto p-6">
        <h2 class="text-3xl font-bold mb-6 text-center">Withdrawal Request</h2>
        <div class="bg-white rounded-lg shadow-lg p-8">
            <form action="{{ route('mitra.withdraw.store') }}" method="POST">
                @csrf
                <div class="space-y-6">
                    <!-- Pilih Metode Withdrawal -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Withdrawal Method</label>
                        <div class="space-y-4">
                            @foreach (Auth::user()->mitra->rekenings as $method)
                                <label class="flex items-center p-4 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer">
                                    <input type="radio" name="id_rekening_mitra" value="{{ $method->id_rekening_mitra }}" class="h-4 w-4 text-blue-500 focus:ring-blue-500" required>
                                    <div class="ml-4">
                                        <span class="text-lg font-semibold">{{ $method->metodePembayaranMitra->nama_metode }}</span>
                                        <p class="text-sm text-gray-500">{{ $method->metodePembayaranMitra->deskripsi }}</p>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                        @error('withdrawal_method')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Input Jumlah Withdrawal -->
                    <div>
                        <label for="jumlah" class="block text-sm font-medium text-gray-700 mb-2">Amount</label>
                        <input type="number" name="jumlah" id="jumlah" step="0.01" min="0" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter amount" required>
                        @error('jumlah')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Input Keterangan -->
                    <div>
                        <label for="keterangan" class="block text-sm font-medium text-gray-700 mb-2">Description (Optional)</label>
                        <textarea name="keterangan" id="keterangan" rows="4" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Add any additional information..."></textarea>
                        @error('keterangan')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-8">
                    <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-lg font-semibold hover:bg-blue-600">
                        Submit Withdrawal Request
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-mitra-layout>