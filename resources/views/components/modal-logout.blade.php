<input type="checkbox" class="hidden peer" id="modal-logout-toggle">

<div class="fixed left-0 top-0 z-50 bg-black bg-opacity-60 w-screen h-screen hidden peer-checked:flex items-center justify-center">
    <form action="{{ route('logout') }}" method="POST"
        class="bg-white w-[28rem] gap-7 px-5 py-4 rounded-xl flex flex-col items-center" id="logout-form">
        @csrf

        <div class="bg-yellow-500 rounded-full w-[70px] h-[70px] mt-[-3rem] flex items-center justify-center">
            <svg width="30" height="30" class="text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 17L21 12L16 7M21 12H9M4 4H12V20H4V4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>

        <div>
            <h1 class="montserrat-font text-center font-bold text-2xl">Yakin Ingin Keluar?</h1>
            <p class="plus-jakarta-sans-font text-center">Kamu akan keluar dari akunmu sekarang.</p>
        </div>

        <div class="flex items-center gap-3">
            <label for="modal-logout-toggle"
                class="close-modal bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-lg transition duration-200 cursor-pointer">
                Tidak, Batalkan
            </label>
            <button type="submit"
                class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                Ya, Keluar
            </button>
        </div>
    </form>
</div>
