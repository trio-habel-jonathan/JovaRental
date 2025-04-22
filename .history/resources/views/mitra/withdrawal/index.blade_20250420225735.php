<x-mitra-layout title="Dashboard">
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Choose Withdrawal Method</h2>
        <div class="bg-white rounded-md shadow-md p-6">
            <form action="/mitra/withdraw" method="POST">
                <?php
                // Static withdrawal methods
                $withdrawal_methods = [
                    [
                        'id' => 'bank_transfer',
                        'name' => 'Bank Transfer',
                        'description' => 'Withdraw to your bank account (BCA, BNI, Mandiri, etc.)',
                        'icon' => 'bank',
                    ],
                    [
                        'id' => 'gopay',
                        'name' => 'GoPay',
                        'description' => 'Withdraw to your GoPay e-wallet',
                        'icon' => 'gopay',
                    ],
                    [
                        'id' => 'ovo',
                        'name' => 'OVO',
                        'description' => 'Withdraw to your OVO e-wallet',
                        'icon' => 'ovo',
                    ],
                ];
                ?>

                @csrf
                <div class="space-y-4">
                    @foreach ($withdrawal_methods as $method)
                        <label class="flex items-center p-4 border border-gray-200 rounded-md hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="withdrawal_method" value="{{ $method['id'] }}" class="h-4 w-4 text-blue-500 focus:ring-blue-500" required>
                            <div class="ml-4 flex-1">
                                <div class="flex items-center gap-2">
                                    <span class="text-lg font-medium">{{ $method['name'] }}</span>
                                    @if ($method['icon'] === 'bank')
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9 22V12H15V22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    @elseif ($method['icon'] === 'gopay')
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M2 10H22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    @elseif ($method['icon'] === 'ovo')
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 6V18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    @endif
                                </div>
                                <p class="text-sm text-gray-500">{{ $method['description'] }}</p>
                            </div>
                        </label>
                    @endforeach
                </div>
                <div class="mt-6">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                        Proceed with Withdrawal
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-mitra-layout>