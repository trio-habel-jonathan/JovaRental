@props([
    'counter' => 1,
    'formId' => 'rentalForm'
])

<input type="checkbox" class="hidden peer" id="modal-konfirmasi-toggle-{{ $counter }}">
<div class="fixed left-0 top-0 z-50 bg-black bg-opacity-60 w-screen h-screen hidden peer-checked:flex items-center justify-center">
    <div class="bg-white w-[28rem] gap-7 px-5 py-4 rounded-xl flex flex-col items-center relative" id="konfirmasi-modal-{{ $counter }}">
        <!-- Loading Animation -->
        <div id="loading-spinner-{{ $counter }}" class="hidden absolute inset-0 bg-white bg-opacity-80 flex items-center justify-center z-10">
            <svg class="animate-spin h-8 w-8 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        </div>
        
        <div class="bg-purple-600 rounded-full w-[70px] h-[70px] mt-[-3rem] flex items-center justify-center">
            <svg width="30" height="30" class="text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>

        <div>
            <h1 class="montserrat-font text-center font-bold text-2xl">Apakah Kamu Yakin?</h1>
            <p class="plus-jakarta-sans-font text-center">Data yang kamu masukkan akan disimpan. Pastikan semua informasi sudah benar.</p>
        </div>

        <div class="flex items-center gap-3">
            <label for="modal-konfirmasi-toggle-{{ $counter }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-lg transition duration-200 cursor-pointer">
                Tidak, Batalkan
            </label>
            <button type="button" id="konfirmasi-submit-{{ $counter }}" class="bg-purple-600 hover:bg-purple-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                Ya, Lanjutkan
            </button>
        </div>
    </div>
</div>

<script>
    document.getElementById('konfirmasi-submit-{{ $counter }}').addEventListener('click', function() {
        // Tampilkan animasi loading
        document.getElementById('loading-spinner-{{ $counter }}').classList.remove('hidden');
        // Nonaktifkan tombol untuk mencegah klik ganda
        this.disabled = true;
        
        // Simulasi proses pengiriman formulir
        setTimeout(() => {
            // Kirim formulir
            document.getElementById('{{ $formId }}').submit();
        }, 500); // Delay kecil untuk menunjukkan animasi
    });
</script>