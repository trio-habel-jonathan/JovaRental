<x-admin-layout title="Edit Payment Method">
    <div class="p-4">
        <form action="{{ route('admin.metodePembayaran.update',  $metode->id_metode_pembayaran_platform) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-2 flex justify-end">
                    <button type="submit" class="bg-primary px-6 py-2 rounded-md text-white font-semibold">
                        Save & Update
                    </button>
                </div>
                <div class="bg-white flex flex-col w-full shadow-lg rounded-lg gap-4 p-4">
                    <div class="text-center">
                        <h1 class="uppercase font-bold">Payment Method Details</h1>
                    </div>
                    
                    <div class="flex flex-col">
                        <label for="jenis_metode" class="text-sm font-semibold text-gray-500">Payment Type</label>
                        <select name="jenis_metode" id="jenis_metode" class="border rounded-md border-gray-300 p-2 focus:outline-none">
                            <option value="E-Wallet" {{ $metode->jenis_metode == 'E-Wallet' ? 'selected' : '' }}>E-Wallet</option>
                            <option value="Transfer Bank" {{ $metode->jenis_metode == 'Transfer Bank' ? 'selected' : '' }}>Transfer Bank</option>
                            <option value="Virtual Account" {{ $metode->jenis_metode == 'Virtual Account' ? 'selected' : '' }}>Virtual Account</option>
                        </select>
                    </div>
                    
                    <div class="flex flex-col">
                        <label for="nama_metode" class="text-sm font-semibold text-gray-500">Method Name</label>
                        <input type="text" id="nama_metode" name="nama_metode" class="border rounded-md border-gray-300 p-2 focus:outline-none"
                            placeholder="Enter method name..." value="{{ $metode->nama_metode }}">
                    </div>
                    
                    <div class="flex flex-col">
                        <label for="nomor_rekening_platform" class="text-sm font-semibold text-gray-500">Account Number</label>
                        <input type="text" id="nomor_rekening_platform" name="nomor_rekening_platform" class="border rounded-md border-gray-300 p-2 focus:outline-none"
                            placeholder="Enter account number..." value="{{ $metode->nomor_rekening_platform }}">
                    </div>
                    
                    <div class="flex flex-col">
                        <label for="nama_pemilik_platform" class="text-sm font-semibold text-gray-500">Account Holder Name</label>
                        <input type="text" id="nama_pemilik_platform" name="nama_pemilik_platform" class="border rounded-md border-gray-300 p-2 focus:outline-none"
                            placeholder="Enter account holder name..." value="{{ $metode->nama_pemilik_platform }}">
                    </div>
                    
                    <div class="flex flex-col">
                        <label for="deskripsi" class="text-sm font-semibold text-gray-500">Description</label>
                        <textarea id="deskripsi" name="deskripsi" class="border rounded-md border-gray-300 p-2 focus:outline-none"
                            placeholder="Enter description...">{{ $metode->deskripsi }}</textarea>
                    </div>
                    
                    <div class="flex flex-col">
                        <label class="text-sm font-semibold text-gray-500">Active Status</label>
                        <div class="flex gap-4 p-2">
                            <label class="flex items-center space-x-3 cursor-pointer">
                                <input type="radio" name="is_active" value="1" class="hidden peer" {{ $metode->is_active ? 'checked' : '' }}>
                                <div class="w-4 h-4 border-2 border-gray-400 rounded-full flex items-center justify-center peer-checked:border-blue-500 peer-checked:bg-blue-500">
                                    <div class="w-2.5 h-2.5 bg-white rounded-full"></div>
                                </div>
                                <span class="text-gray-700">Active</span>
                            </label>

                            <label class="flex items-center space-x-3 cursor-pointer">
                                <input type="radio" name="is_active" value="0" class="hidden peer" {{ !$metode->is_active ? 'checked' : '' }}>
                                <div class="w-4 h-4 border-2 border-gray-400 rounded-full flex items-center justify-center peer-checked:border-blue-500 peer-checked:bg-blue-500">
                                    <div class="w-2.5 h-2.5 bg-white rounded-full"></div>
                                </div>
                                <span class="text-gray-700">Inactive</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <a href="{{ route('admin.metodePembayaran.index') }}"
            class="fixed bottom-0 right-0 m-5 p-2 rounded-full bg-primary text-white transition-all duration-300 ease-in-out hover:scale-125">
            <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 8L8 12M8 12L12 16M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </div>
</x-admin-layout>
