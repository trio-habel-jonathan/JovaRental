<x-admin-layout title="Edit Jenis Kendaraan">
    <div class="p-4">
        <div class="bg-white rounded-md shadow-md p-4">
            <form action="" class="space-y-4">
                <div class="flex flex-col">
                    <label for="nama_jenis" class="text-sm font-semibold text-gray-500">Nama Jenis Kendaraan</label>
                    <input type="text" id="nama_jenis" name="nama_jenis"
                        class="border rounded-md border-gray-300 p-2 focus:outline-none"
                        placeholder="Ketik nama jenis kendaraan...">
                </div>
                <div class="flex flex-col">
                    <label for="deskirpsi" class="text-sm font-semibold text-gray-500">Deskripsi Jenis Kendaraan</label>
                    <input type="text" id="deskirpsi" name="deskirpsi"
                        class="border rounded-md border-gray-300 p-2 focus:outline-none"
                        placeholder="Ketik deskripsi jenis kendaraan...">
                </div>
                <div>
                    <button type="submit"
                        class="bg-primary px-6 py-2 rounded-md text-white font-semibold transition-all duration-200 ease-in-out hover:scale-105">
                        Save & Tambah
                    </button>
                    <a href="{{ route('admin.clasifications.clasificationsView') }}"
                        class="bg-gray-300 px-6 py-2 rounded-md text-primary font-semibold transition-all duration-200 ease-in-out hover:scale-105">Back</a>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>