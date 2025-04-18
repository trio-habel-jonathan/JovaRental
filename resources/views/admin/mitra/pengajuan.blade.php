<x-admin-layout title="Pengajuan Kemitraan">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="overflow-x-auto rounded-lg">
            <table class="w-full text-sm text-left border-collapse montserrat-font">
                <thead class="bg-white text-gray-500 shadow-md font-medium p-2">
                    <tr>
                        <td class="px-6 py-3 border-b">Nama Mitra</td>
                        <td class="px-6 py-3 border-b">Pemilik</td>
                        <td class="px-6 py-3 border-b">No. Identitas</td>
                        <td class="px-6 py-3 border-b">NPWP</td>
                        <td class="px-6 py-3 border-b">Status</td>
                        <td class="px-6 py-3 border-b">Aksi</td>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    @forelse ($mitraPenyewa as $Mitra)
                        <tr class="bg-white hover:bg-gray-50 transition">
                            <td class="px-6 py-4 font-semibold">{{ $Mitra->nama_mitra }}</td>
                            <td class="px-6 py-4">{{ $Mitra->nama_pemilik }}</td>
                            <td class="px-6 py-4">{{ $Mitra->no_identitas }}</td>
                            <td class="px-6 py-4">{{ $Mitra->npwp }}</td>
                            <td class="px-6 py-4">
                                <div
                                    class="{{ $Mitra->status_verifikasi === 'pending' ? 'bg-yellow-100 text-yellow-800' : ($Mitra->status_verifikasi === 'verified' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800') }} px-3 py-1 text-sm rounded-full text-center">
                                    {{ ucfirst($Mitra->status_verifikasi) }}
                                </div>
                            </td>
                            <td class="px-6 py-4 flex gap-2">
                                @if ($Mitra->status_verifikasi === 'pending')
                                    <form action="{{ route('admin.mitra.verifikasi', $Mitra->id_mitra) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button
                                            class="bg-emerald-500 hover:bg-emerald-600 text-white font-medium py-1 px-3 rounded-lg transition-colors duration-200">
                                            Verifikasi
                                        </button>
                                    </form>
                                    <form action="{{ route('admin.mitra.tolak', $Mitra->id_mitra) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button
                                            class="bg-red-500 hover:bg-red-600 text-white font-medium py-1 px-3 rounded-lg transition-colors duration-200">
                                            Tolak
                                        </button>
                                    </form>
                                @endif
                                <a href="{{ route('admin.mitra.detailmitraView') }}"
                                    class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-1 px-3 rounded-lg transition-colors duration-200">
                                    Detail
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center p-4 text-gray-500">
                                Tidak ada data mitra.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

    <!-- Modal for displaying images -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center z-50">
        <div class="bg-white p-4 rounded-lg max-w-2xl max-h-[90vh] overflow-auto">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-medium">Foto Mitra</h3>
                <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div>
                <img id="modalImage" src="" alt="Foto Mitra" class="max-w-full h-auto">
            </div>
        </div>
    </div>

    <script>
        function showImage(imagePath) {
            document.getElementById('modalImage').src = imagePath;
            document.getElementById('imageModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('imageModal').classList.add('hidden');
        }
    </script>
</x-admin-layout>