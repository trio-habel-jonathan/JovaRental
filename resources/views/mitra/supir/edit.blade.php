<x-mitra-layout title="Edit Informasi Supir">
    <!-- Card Form -->
    <div class="max-w-4xl mx-auto">
        <div class="bg-transparent rounded-xl overflow-hidden relative mb-8">
            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 bg-blue-500 rounded-full w-12 h-12 flex items-center justify-center shadow-md">
                <span class="text-xs font-bold text-white">NEW</span>
            </div>

            <!-- Content -->
            <div class="pt-10 pb-4 px-6 flex flex-col bg-white mt-6 rounded-xl">
                <form method="POST" action="{{ route('mitra.supir.update', $sopir->id_sopir) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Form Fields in 2 Columns -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <!-- Kolom Kiri -->
                        <div class="space-y-4">
                            <div>
                                <label for="nama_sopir" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap <span class="text-red-500">*</span></label>
                                <input type="text" id="nama_sopir" name="nama_sopir" value="{{ old('nama_sopir', $sopir->nama_sopir) }}" required
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                @error('nama_sopir')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="no_telepon" class="block text-sm font-medium text-gray-700 mb-1">Nomor HP <span class="text-red-500">*</span></label>
                                <input type="tel" id="no_telepon" name="no_telepon" value="{{ old('no_telepon', $sopir->no_telepon) }}" required
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                @error('no_telepon')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="no_identitas" class="block text-sm font-medium text-gray-700 mb-1">Nomor SIM <span class="text-red-500">*</span></label>
                                <input type="text" id="no_identitas" name="no_identitas" value="{{ old('no_identitas', $sopir->no_identitas) }}" required
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                @error('no_identitas')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- Kolom Kanan -->
                        <div class="space-y-4">
                            <div>
                                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                                <select id="status" name="status" 
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="tersedia" {{ old('status', $sopir->status) == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                                    <option value="bertugas" {{ old('status', $sopir->status) == 'bertugas' ? 'selected' : '' }}>Bertugas</option>
                                </select>
                                @error('status')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Alamat -->
                    <div class="mb-6">
                        <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat <span class="text-red-500">*</span></label>
                        <textarea id="alamat" name="alamat" required rows="3"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('alamat', $sopir->alamat) }}</textarea>
                        @error('alamat')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                        
                    <!-- Divider -->
                    <div class="w-full border-t border-gray-200 mb-6"></div>
                    
                    <!-- Buttons -->
                    <div class="flex justify-end space-x-4">
                        <a href="{{ url()->previous() }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-100">
                            Batal
                        </a>                        
                        <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>

            <!-- Bottom curved design -->
            <div class="h-12 bg-blue-500 mt-2 rounded-xl"></div>
        </div>
    </div>
</x-mitra-layout>