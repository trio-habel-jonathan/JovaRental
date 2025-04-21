<x-mitra-layout title="pengembalian form">
    <form action="{{ route('pengembalian.store', ['id_unit' => $id_unit]) }}" method="POST" enctype="multipart/form-data" class="mt-6 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        
        <!-- Hidden Data -->
        <input type="hidden" name="id_unit" value="{{ $kendaraan['id_unit'] }}">
        <input type="hidden" name="id_pemesanan" value="{{ $kendaraan['id_pemesanan'] }}">
    
        <!-- Kondisi Kendaraan -->
        <div class="mb-4">
            <label for="kondisi_kendaraan" class="block text-sm font-bold text-gray-700 mb-2">Kondisi Kendaraan</label>
            <input type="text" name="kondisi_kendaraan" id="kondisi_kendaraan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
    
        <!-- Kilometer -->
        <div class="mb-4">
            <label for="kilometer" class="block text-sm font-bold text-gray-700 mb-2">Kilometer</label>
            <input type="number" name="kilometer" id="kilometer" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
    
        <!-- Foto Sebelum -->
        <div class="mb-4">
            <label for="foto_sebelum" class="block text-sm font-bold text-gray-700 mb-2">Foto Sebelum</label>
            <input type="file" name="foto_sebelum" id="foto_sebelum" accept="image/*" class="block w-full text-sm text-gray-700 border border-gray-300 rounded cursor-pointer bg-gray-50 focus:outline-none">
        </div>
    
        <!-- Foto Sesudah -->
        <div class="mb-4">
            <label for="foto_sesudah" class="block text-sm font-bold text-gray-700 mb-2">Foto Sesudah</label>
            <input type="file" name="foto_sesudah" id="foto_sesudah" accept="image/*" class="block w-full text-sm text-gray-700 border border-gray-300 rounded cursor-pointer bg-gray-50 focus:outline-none">
        </div>
    
        <!-- Catatan -->
        <div class="mb-4">
            <label for="catatan" class="block text-sm font-bold text-gray-700 mb-2">Catatan</label>
            <textarea name="catatan" id="catatan" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        </div>
    
        <!-- Tombol Simpan -->
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Simpan Pengembalian
            </button>
        </div>
    </form>
    
</x-mitra-layout>