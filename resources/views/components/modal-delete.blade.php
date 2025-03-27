<input type="checkbox" class="hidden peer" id="modal-delete-toggle-{{$counter}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Atugatran/FontAwesome6Pro@latest/css/all.min.css">

<div
    class=" fixed left-0 top-0 z-50 bg-black bg-opacity-60 w-screen h-screen hidden peer-checked:flex items-center justify-center">
    <form action="{{$formAction}}" method="post"
        class="bg-white w-[28rem] gap-7 px-5 py-4 rounded-xl flex flex-col items-center" id="delete-form">
        @csrf
        @method("DELETE")
        <div class="bg-red-600 rounded-full w-[70px] h-[70px] mt-[-3rem] flex items-center justify-center">
            <i class="fa-solid fa-xmark-large text-white text-3xl"></i>
        </div>

        <input type="text" class="hidden" name="uuid" value="{{$uuid}}">
        <div>
            <h1 class="montserrat-font text-center font-bold text-2xl">Apakah Kamu Yakin?</h1>
            <p class="plus-jakarta-sans-font text-center">Hal yang kamu perbuat tidak dapat di ulang kembali</p>
        </div>

        <div class="flex items-center gap-3">
            <label for="modal-delete-toggle-{{$counter}}"
                class="close-modal bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-lg transition duration-200 cursor-pointer">
                Tidak, Batalkan
            </label>
            <button type="submit"
                class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                Ya, Hapus
            </button>
        </div>
    </form>
</div>