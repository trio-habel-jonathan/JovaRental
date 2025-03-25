<x-mitra-layout title="Pemasukan">
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Daftar Pemasukan</h1>
        
        <div class="flex space-x-4 mb-6">
            <select id="monthFilter" class="px-3 py-2 border rounded-md w-1/2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Semua Bulan</option>
                <option value="01">Januari</option>
                <option value="02">Februari</option>
                <option value="03">Maret</option>
            </select>
            
            <select id="sourceFilter" class="px-3 py-2 border rounded-md w-1/2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Semua Sumber</option>
                <option value="gaji">Gaji</option>
                <option value="freelance">Freelance</option>
                <option value="investasi">Investasi</option>
                <option value="lainnya">Lainnya</option>
            </select>
        </div>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="w-full">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sumber</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Deskripsi</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody id="incomeTableBody" class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">01/03/2024</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Gaji</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Gaji Bulanan</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-green-600">Rp 7,500,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 mr-3">Edit</button>
                            <button class="text-red-600 hover:text-red-900">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="bg-white shadow-md rounded-lg p-6 mt-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Ringkasan Pemasukan</h2>
            <p class="text-lg">Total Pemasukan Bulan Ini: <strong class="text-green-600">Rp 10,250,000</strong></p>
        </div>

        <button class="mt-6 w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700 transition duration-300 flex items-center justify-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Tambah Pemasukan Baru
        </button>
    </div>
</x-mitra-layout>