<x-mitra-layout title="Create Rekening Mitra">
    <div class="p-4 w-full h-full flex items-center justify-center">
        <form action="{{ route('mitra.rekeningMitra.RekeningStore') }}" method="POST"
            class="w-full max-w-3xl p-4 montserrat-font bg-white rounded-md shadow-md grid grid-cols-2 gap-4">
            @csrf
            @method('POST')
            <div class="col-span-2 flex flex-col gap-2">
                <label for="id_metode_pembayaran_mitra">Nomor Rekening</label>
                <select name="id_metode_pembayaran_mitra"
                    class="focus:outline-none border w-full border-primary rounded-md p-2" id="">
                    @foreach ($metodePembayaranMitra as $item)
                        <option value="{{ $item->id_metode_pembayaran_mitra }}">{{ $item->nama_metode }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col gap-2">
                <label for="nomor_rekening">Nomor Rekening</label>
                <input type="text" id="nomor_rekening" name="nomor_rekening"
                    class="focus:outline-none border border-primary rounded-md p-2">
            </div>
            <div class="flex flex-col gap-2">
                <label for="nama_pemilik">Nama Pemilik</label>
                <input type="text" id="nama_pemilik" name="nama_pemilik"
                    class="focus:outline-none border border-primary rounded-md p-2">
            </div>
            <div class="col-span-2">
                <button type="submit"
                    class="bg-primary px-6 py-2 rounded-md transition-all duration-300 ease-in-out text-white font-bold hover:scale-105">Submit</button>
                <a href="{{ route('mitra.rekeningMitra.RekeningView') }}"
                    class="bg-gray-200 px-6 py-2 rounded-md transition-all duration-300 ease-in-out text-primary font-bold hover:scale-105">Cancel</a>
            </div>
        </form>
    </div>
</x-mitra-layout>
