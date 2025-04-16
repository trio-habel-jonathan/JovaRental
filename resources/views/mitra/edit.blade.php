<x-mitra-layout title="Edit Mitra Profile">
    <div class="bg-white relative rounded-xl m-4 overflow-hidden border border-gray-300">
        <div class="bg-white-30 backdrop-blur-sm z-10 w-full h-full absolute top-0 left-0 rounded-xl hidden opacity-0 transition-opacity duration-300"
            id="blur-hidden"></div>
        <form class="p-5" action="{{route('mitra.settingUpdate', Auth::user()->mitra->id_mitra)}}" method="post">
            @csrf
            @method("PUT")
            <div class="flex gap-x-6 mb-6">
                <div class="w-full relative">
                    <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Tipe Mitra</label>
                    <select name="tipe_mitra"
                        class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none">
                        <option value="individu" {{ Auth::user()->mitra->tipe_mitra == 'individu' ? 'selected' : ''
                            }}>Individu</option>
                        <option value="perusahaan" {{ Auth::user()->mitra->tipe_mitra == 'perusahaan' ? 'selected' : ''
                            }}>Perusahaan</option>
                    </select>
                    @error('tipe_mitra')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full relative">
                    <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Nama Mitra</label>
                    <input type="text" name="nama_mitra"
                        class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                        value="{{ Auth::user()->mitra->nama_mitra }}">
                    @error('nama_mitra')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex gap-x-6 mb-6">
                <div class="w-full relative">
                    <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Nama Pemilik</label>
                    <input type="text" name="nama_pemilik"
                        class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                        value="{{ Auth::user()->mitra->nama_pemilik }}">
                    @error('nama_pemilik')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full relative">
                    <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Nomor Identitas</label>
                    <input type="text" name="no_identitas"
                        class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                        value="{{ Auth::user()->mitra->no_identitas }}">
                    @error('no_identitas')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex gap-x-6 mb-6">
                <div class="w-full relative">
                    <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">NPWP</label>
                    <input type="text" name="npwp"
                        class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                        value="{{ Auth::user()->mitra->npwp }}">
                    @error('npwp')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full relative">
                    <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Status Verifikasi</label>
                    <select name="status_verifikasi"
                        class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none">
                        <option value="pending" {{ Auth::user()->mitra->status_verifikasi == 'pending' ? 'selected' : ''
                            }}>Pending</option>
                        <option value="verified" {{ Auth::user()->mitra->status_verifikasi == 'verified' ? 'selected' :
                            '' }}>Verified</option>
                        <option value="rejected" {{ Auth::user()->mitra->status_verifikasi == 'rejected' ? 'selected' :
                            '' }}>Rejected</option>
                    </select>
                    @error('status_verifikasi')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex justify-end gap-3">
                <button
                    class="w-52 h-12 shadow-sm rounded-full bg-indigo-600 hover:bg-indigo-800 transition-all duration-700 text-white text-base font-semibold leading-7">Ajukan Perubahan</button>
                <a href="{{ route('mitra.settings') }}"
                    class="w-52 h-12 shadow-sm rounded-full border border-indigo-600 hover:bg-indigo-800 hover:text-white transition-all duration-700 text-base font-semibold leading-7 flex items-center justify-center">Cancel</a>
            </div>
        </form>
    </div>
</x-mitra-layout>