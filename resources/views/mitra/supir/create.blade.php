<x-mitra-layout title="Dashboard">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Tambah Informasi Supir</h1>

        <!-- Card Form -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-transparent rounded-xl overflow-hidden relative mb-8">
                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 bg-blue-500 rounded-full w-12 h-12 flex items-center justify-center shadow-md">
                    <span class="text-xs font-bold text-white">NEW</span>
                </div>

                <!-- Content -->
                <div class="pt-10 pb-4 px-6 flex flex-col bg-white mt-6 rounded-xl">
                    <form>
                        <!-- Profile Photo Upload -->
                        <div class="flex flex-col items-center mb-6">
                            <div class="w-24 h-24 rounded-full border-4 border-teal-100 overflow-hidden bg-teal-50 mb-3 relative">
                                <img id="preview-photo" src="https://via.placeholder.com/150" alt="Foto Supir" class="w-full h-full object-cover">
                                <label for="photo" class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </label>
                                <input type="file" id="photo" name="photo" class="hidden" accept="image/*">
                            </div>
                            <p class="text-sm text-gray-500">Klik untuk mengunggah foto</p>
                        </div>

                        <!-- Form Fields in 2 Columns -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Kolom Kiri -->
                            <div class="space-y-4">
                                <div>
                                    <label for="driver_id" class="block text-sm font-medium text-gray-700 mb-1">ID Supir</label>
                                    <input type="text" id="driver_id" name="driver_id" value="DRV-001" readonly
                                        class="w-full px-4 py-2 border rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                                
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap <span class="text-red-500">*</span></label>
                                    <input type="text" id="name" name="name" required
                                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                                
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Nomor HP <span class="text-red-500">*</span></label>
                                    <input type="tel" id="phone" name="phone" required
                                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                                
                                <div>
                                    <label for="license_number" class="block text-sm font-medium text-gray-700 mb-1">Nomor SIM <span class="text-red-500">*</span></label>
                                    <input type="text" id="license_number" name="license_number" required
                                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                            </div>
                            
                            <!-- Kolom Kanan -->
                            <div class="space-y-4">
                                <div>
                                    <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                                    <select id="status" name="status" 
                                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <option value="available">Available</option>
                                        <option value="non-available">Non Available</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <label for="license_expiry" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Kadaluarsa SIM</label>
                                    <input type="date" id="license_expiry" name="license_expiry"
                                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                                
                                <div>
                                    <label for="join_date" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Bergabung</label>
                                    <input type="date" id="join_date" name="join_date" 
                                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Alamat -->
                        <div class="mb-6">
                            <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Alamat <span class="text-red-500">*</span></label>
                            <textarea id="address" name="address" required rows="3"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>
                        
                        <!-- Divider -->
                        <div class="w-full border-t border-gray-200 mb-6"></div>
                        
                        <!-- Buttons -->
                        <div class="flex justify-end space-x-4">
                            <a href="#" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-100">
                                Batal
                            </a>
                            <button type="button" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
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