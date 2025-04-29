<x-admin-layout title="Create Metode Pembayaran">
    <div class="p-4">
        <form action="{{ route('admin.metodePembayaran.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-2 flex justify-end">
                    <button type="submit" class="bg-primary px-6 py-2 rounded-md text-white font-semibold">
                        Save
                    </button>
                </div>
                <div class="bg-white flex flex-col w-full shadow-lg rounded-lg gap-4 p-4">
                    <div class="text-center">
                        <h1 class="uppercase font-bold">Metode Pembayaran</h1>
                    </div>
                    <div class="flex flex-col">
                        <label for="jenis_metode" class="text-sm font-semibold text-gray-500">Jenis Metode</label>
                        <select name="jenis_metode" id="jenis_metode" class="border rounded-md border-gray-300 p-2 focus:outline-none" required>
                            <option value="">Pilih Jenis Metode</option>
                            <option value="E-Wallet">E-Wallet</option>
                            <option value="Transfer Bank">Transfer Bank</option>
                            <option value="Virtual Account">Virtual Account</option>
                        </select>
                    </div>
                    <div class="flex flex-col">
                        <label for="nama_metode" class="text-sm font-semibold text-gray-500">Nama Metode</label>
                        <input type="text" id="nama_metode" name="nama_metode" class="border rounded-md border-gray-300 p-2 focus:outline-none"
                            placeholder="Masukkan nama metode..." required maxlength="50">
                    </div>
                    <div class="flex flex-col">
                        <label for="nomor_rekening_platform" class="text-sm font-semibold text-gray-500">Nomor Rekening</label>
                        <input type="text" id="nomor_rekening_platform" name="nomor_rekening_platform" class="border rounded-md border-gray-300 p-2 focus:outline-none"
                            placeholder="Masukkan nomor rekening..." required maxlength="50">
                    </div>
                    <div class="flex flex-col">
                        <label for="nama_pemilik_platform" class="text-sm font-semibold text-gray-500">Nama Pemilik</label>
                        <input type="text" id="nama_pemilik_platform" name="nama_pemilik_platform" class="border rounded-md border-gray-300 p-2 focus:outline-none"
                            placeholder="Masukkan nama pemilik..." required maxlength="100">
                    </div>
                    <div class="flex flex-col">
                        <label for="deskripsi" class="text-sm font-semibold text-gray-500">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" class="border rounded-md border-gray-300 p-2 focus:outline-none"
                            placeholder="Masukkan deskripsi..." rows="4"></textarea>
                    </div>
                    <div class="flex flex-col">
                        <label for="is_active" class="text-sm font-semibold text-gray-500">Status Aktif</label>
                        <select name="is_active" id="is_active" class="border rounded-md border-gray-300 p-2 focus:outline-none" required>
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select>
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
