
    <form action="{{ route('mitra.pengembalian.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf
        <input type="hidden" name="id_unit" value="{{ $kendaraan['id_unit'] }}">
        <input type="hidden" name="id_pemesanan" value="{{ $kendaraan['id_pemesanan'] }}">
        
        <div class="mb-4">
            <label for="kondisi_kendaraan" class="block text-sm font-medium text-gray-700">Kondisi Kendaraan</label>
            <input type="text" name="kondisi_kendaraan" id="kondisi_kendaraan" class="mt-1 block w-full border border-gray-300 rounded-md" required>
        </div>
    
        <div class="mb-4">
            <label for="kilometer" class="block text-sm font-medium text-gray-700">Kilometer</label>
            <input type="number" name="kilometer" id="kilometer" class="mt-1 block w-full border border-gray-300 rounded-md" required>
        </div>
    
        <div class="mb-4">
            <label for="foto_sebelum" class="block text-sm font-medium text-gray-700">Foto Sebelum</label>
            <input type="file" name="foto_sebelum" id="foto_sebelum" class="mt-1 block w-full border border-gray-300 rounded-md">
        </div>
    
        <div class="mb-4">
            <label for="foto_sesudah" class="block text-sm font-medium text-gray-700">Foto Sesudah</label>
            <input type="file" name="foto_sesudah" id="foto_sesudah" class="mt-1 block w-full border border-gray-300 rounded-md">
        </div>
    
        <div class="mb-4">
            <label for="catatan" class="block text-sm font-medium text-gray-700">Catatan</label>
            <textarea name="catatan" id="catatan" class="mt-1 block w-full border border-gray-300 rounded-md"></textarea>
        </div>
    
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
            Simpan Pengembalian
        </button>
    </form>
