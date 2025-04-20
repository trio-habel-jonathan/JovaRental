<x-mitra-layout title="Settings Mitra">
    <div class="flex items-start p-4 gap-4">

        <div class="flex-[600px]">
            <div class="bg-white rounded-xl border border-gray-300 p-4 mb-5">
                <p class="montserrat-font font-semibold text-xl">Quick Links</p>
                <div class="flex items-cente gap-3 mt-2">
                    <div class="items-center flex flex-col">
                        <button class="bg-gray-300/40 p-2 rounded-xl">
                            <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 9.00002V17M9.5 9.00002V17M14.5 9.00002V17M19 9.00002V17M3 18.6L3 19.4C3 19.9601 3 20.2401 3.10899 20.454C3.20487 20.6422 3.35785 20.7952 3.54601 20.891C3.75992 21 4.03995 21 4.6 21H19.4C19.9601 21 20.2401 21 20.454 20.891C20.6422 20.7952 20.7951 20.6422 20.891 20.454C21 20.2401 21 19.9601 21 19.4V18.6C21 18.04 21 17.7599 20.891 17.546C20.7951 17.3579 20.6422 17.2049 20.454 17.109C20.2401 17 19.9601 17 19.4 17H4.6C4.03995 17 3.75992 17 3.54601 17.109C3.35785 17.2049 3.20487 17.3579 3.10899 17.546C3 17.7599 3 18.04 3 18.6ZM11.6529 3.07715L4.25291 4.7216C3.80585 4.82094 3.58232 4.87062 3.41546 4.99082C3.26829 5.09685 3.15273 5.24092 3.08115 5.40759C3 5.59654 3 5.82553 3 6.28349L3 7.40002C3 7.96007 3 8.2401 3.10899 8.45401C3.20487 8.64217 3.35785 8.79515 3.54601 8.89103C3.75992 9.00002 4.03995 9.00002 4.6 9.00002H19.4C19.9601 9.00002 20.2401 9.00002 20.454 8.89103C20.6422 8.79515 20.7951 8.64217 20.891 8.45401C21 8.2401 21 7.96007 21 7.40002V6.2835C21 5.82553 21 5.59655 20.9188 5.40759C20.8473 5.24092 20.7317 5.09685 20.5845 4.99082C20.4177 4.87062 20.1942 4.82094 19.7471 4.7216L12.3471 3.07715C12.2176 3.04837 12.1528 3.03398 12.0874 3.02824C12.0292 3.02314 11.9708 3.02314 11.9126 3.02824C11.8472 3.03398 11.7824 3.04837 11.6529 3.07715Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                        <p class="plus-jakarta-sans-font text-xs font-semibold mt-1">withdraw</p>
                    </div>

                    <div class="border border-black/15 mx-1"></div>

                    <div class="items-center flex flex-col">
                        <button class="bg-gray-300/40 p-2 rounded-xl">
                            <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 20H21M3.00003 20H4.67457C5.16376 20 5.40835 20 5.63852 19.9447C5.84259 19.8957 6.03768 19.8149 6.21663 19.7053C6.41846 19.5816 6.59141 19.4086 6.93732 19.0627L19.5001 6.49998C20.3285 5.67156 20.3285 4.32841 19.5001 3.49998C18.6716 2.67156 17.3285 2.67156 16.5001 3.49998L3.93729 16.0627C3.59139 16.4086 3.41843 16.5816 3.29475 16.7834C3.18509 16.9624 3.10428 17.1574 3.05529 17.3615C3.00003 17.5917 3.00003 17.8363 3.00003 18.3255V20Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                        <p class="plus-jakarta-sans-font text-xs font-semibold mt-1">ubah</p>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between mb-5">
                <p class=" montserrat-font font-semibold text-xl">Aksi</p>

                <div class="flex items-center gap-2">

                    <button
                        class="bg-primary text-white font-bold montserrat-font px-4 rounded-md py-1 montserrat-font  transition-all duration-300 ease-in-out hover:scale-110"
                        id="toggle-hidden">Hide</button>
                </div>
            </div>
            <div class="relative">
                <div class="bg-white-30 backdrop-blur-sm z-10 w-full h-full absolute top-0 left-0 rounded-xl hidden opacity-0 transition-opacity duration-300"
                    id="blur-hidden"></div>
                <div class="bg-white flex rounded-xl border border-gray-300 p-6 mb-5">
                    <div class="w-64">
                        <h1 class="montserrat-font text-xl font-semibold">Profile Account</h1>
                        <div class="flex items-center justify-center flex-col p-5">
                            <div class="w-40 h-40 mt-4 relative mb-4">
                                <div
                                    class="w-full h-full rounded-full bg-gradient-to-br from-primary to-darkprimary p-0.5">
                                    <div class="w-full h-full rounded-full bg-white p-0.5">
                                        <img class="w-full h-full object-cover rounded-full " draggable="false"
                                            src="https://i.pinimg.com/736x/27/e0/74/27e074008b1d54fb474224de9102651b.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <button
                                    class="bg-gradient-to-br from-primary to-darkprimary absolute bottom-2 right-0 w-10 h-10 rounded-full p-2 text-white">
                                    <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 20H21M3.00003 20H4.67457C5.16376 20 5.40835 20 5.63852 19.9447C5.84259 19.8957 6.03768 19.8149 6.21663 19.7053C6.41846 19.5816 6.59141 19.4086 6.93732 19.0627L19.5001 6.49998C20.3285 5.67156 20.3285 4.32841 19.5001 3.49998C18.6716 2.67156 17.3285 2.67156 16.5001 3.49998L3.93729 16.0627C3.59139 16.4086 3.41843 16.5816 3.29475 16.7834C3.18509 16.9624 3.10428 17.1574 3.05529 17.3615C3.00003 17.5917 3.00003 17.8363 3.00003 18.3255V20Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                            <div class="flex flex-wrap gap-2 justify-center">
                                @if (Auth::user()->mitra->status_verifikasi)
                                    <span
                                        class="plus-jakarta-sans-font px-2 py-1 rounded-xl text-xs 
                                {{ Auth::user()->mitra->status_verifikasi == 'verified' ? 'bg-green-200 text-green-800' : '' }}
                                {{ Auth::user()->mitra->status_verifikasi == 'pending' ? 'bg-yellow-200 text-yellow-800' : '' }}
                                {{ Auth::user()->mitra->status_verifikasi == 'rejected' ? 'bg-red-200 text-red-800' : '' }}">
                                        {{ ucfirst(Auth::user()->mitra->status_verifikasi) }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="flex-1 rounded-xl overflow-hidden">
                        <h1 class="montserrat-font text-xl font-semibold">Account Infromations</h1>
                        <div class="p-5 grid grid-cols-2 gap-6 plus-jakarta-sans-font ">
                            <div>
                                <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Nama
                                    Pemilik</label>
                                <input type="text" id="default-search"
                                    class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                                    readonly disabled value="{{ Auth::user()->email }}">
                            </div>
                            <div>
                                <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Nama
                                    Mitra</label>
                                <input type="text" id="default-search"
                                    class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                                    readonly disabled value="{{ Auth::user()->no_telepon }}">
                            </div>
                            <div>
                                <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Password</label>
                                <input type="text" id="default-search"
                                    class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                                    readonly disabled>
                            </div>
                            <div>
                                <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Confirm
                                    Password</label>
                                <input type="text" id="default-search"
                                    class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                                    readonly disabled>
                            </div>

                            <div>
                                <p class="font-semibold text-lg">Join As Mitra At</p>
                                <p class="text-sm font-medium text-primary">
                                    {{ date('D, d M Y - H:i', strtotime(auth()->user()->created_at)) }}</p>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">Mitra Updated At</p>
                                <p class="text-sm font-medium text-primary">
                                    {{ date('D, d M Y - H:i', strtotime(auth()->user()->updated_at)) }}</p>
                            </div>
                            <div class="col-span-2 flex items-center justify-end">
                                <button
                                    class="bg-primary text-white font-bold montserrat-font px-4 rounded-md py-1 montserrat-font  transition-all duration-300 ease-in-out hover:scale-110">Save
                                    & Upadate</button>
                            </div>
                            <div class="col-span-2 border boder-gray-300 shadow-md rounded-md p-4">
                                <p class="font-bold text-lg uppercase">Note</p>
                                <p>Apabila Anda perlu memperbarui informasi profil mitra, silakan udah data account di
                                    atas, lalu tekan <span class="font-bold">Save &
                                        Update</span>. Apabila terjadi suatu masalah selama perubahan silahkan contact
                                    kami melalui email.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white flex rounded-xl border border-gray-300 p-6">
                    <div class="w-64">
                        <h1 class="montserrat-font text-xl font-semibold">Profile Mitra</h1>
                        <div class="flex items-center justify-center flex-col p-5">
                            <div class="w-40 h-40 mt-4 relative mb-4">
                                <div
                                    class="w-full h-full rounded-full bg-gradient-to-br from-primary to-darkprimary p-0.5">
                                    <div class="w-full h-full rounded-full bg-white p-0.5">
                                        <img class="w-full h-full object-cover rounded-full " draggable="false"
                                            src="https://i.pinimg.com/736x/27/e0/74/27e074008b1d54fb474224de9102651b.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <button
                                    class="bg-gradient-to-br from-primary to-darkprimary absolute bottom-2 right-0 w-10 h-10 rounded-full p-2 text-white">
                                    <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 20H21M3.00003 20H4.67457C5.16376 20 5.40835 20 5.63852 19.9447C5.84259 19.8957 6.03768 19.8149 6.21663 19.7053C6.41846 19.5816 6.59141 19.4086 6.93732 19.0627L19.5001 6.49998C20.3285 5.67156 20.3285 4.32841 19.5001 3.49998C18.6716 2.67156 17.3285 2.67156 16.5001 3.49998L3.93729 16.0627C3.59139 16.4086 3.41843 16.5816 3.29475 16.7834C3.18509 16.9624 3.10428 17.1574 3.05529 17.3615C3.00003 17.5917 3.00003 17.8363 3.00003 18.3255V20Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                            <div class="flex flex-wrap gap-2 justify-center">
                                @if (Auth::user()->mitra->status_verifikasi)
                                    <span
                                        class="plus-jakarta-sans-font px-2 py-1 rounded-xl text-xs 
                            {{ Auth::user()->mitra->status_verifikasi == 'verified' ? 'bg-green-200 text-green-800' : '' }}
                            {{ Auth::user()->mitra->status_verifikasi == 'pending' ? 'bg-yellow-200 text-yellow-800' : '' }}
                            {{ Auth::user()->mitra->status_verifikasi == 'rejected' ? 'bg-red-200 text-red-800' : '' }}">
                                        {{ ucfirst(Auth::user()->mitra->status_verifikasi) }}
                                    </span>
                                @endif

                                <span
                                    class="plus-jakarta-sans-font px-2 py-1 rounded-xl text-xs 
                        {{ Auth::user()->mitra->tipe_mitra == 'individu' ? 'bg-blue-200 text-blue-800' : 'bg-orange-200 text-orange-800' }}">
                                    {{ Auth::user()->mitra->tipe_mitra == 'individu' ? 'Individu' : 'Perusahaan' }}
                                </span>

                            </div>
                        </div>
                    </div>

                    <div class="flex-1 rounded-xl">
                        <div class="w-full flex items-center justify-between">
                            <h1 class="montserrat-font text-xl font-semibold">Mitra Infromations</h1>
                            <button
                                class="bg-transparent border border-primary text-primary transition-all duration-300 ease-in-out hover:scale-110 hover:bg-primary hover:text-white font-bold montserrat-font px-4 rounded-md py-1"
                                onclick="window.location.href='{{ route('mitra.indexEdit') }}'">Edit Profile</button>
                        </div>
                        <div class="p-5 grid grid-cols-2 gap-6 plus-jakarta-sans-font ">
                            <div>
                                <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Nama
                                    Pemilik</label>
                                <input type="text" id="default-search"
                                    class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                                    readonly disabled value="{{ Auth::user()->mitra->nama_pemilik }}">
                            </div>
                            <div>
                                <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Nama
                                    Mitra</label>
                                <input type="text" id="default-search"
                                    class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                                    readonly disabled value="{{ Auth::user()->mitra->nama_mitra }}">
                            </div>
                            <div>
                                <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Nomor
                                    Identitas</label>
                                <input type="text" id="default-search"
                                    class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                                    readonly disabled value="{{ Auth::user()->mitra->no_identitas }}">
                            </div>
                            <div>
                                <label class="flex items-center mb-2 text-gray-600 text-sm font-medium">Npwp</label>
                                <input type="text" id="default-search"
                                    class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                                    readonly disabled value="{{ Auth::user()->mitra->npwp }}">
                            </div>
                            <div>
                                <p class="font-semibold text-lg">Join As Mitra At</p>
                                <p class="text-sm font-medium text-primary">
                                    {{ date('D, d M Y - H:i', strtotime(auth()->user()->mitra->created_at)) }}</p>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">Mitra Updated At</p>
                                <p class="text-sm font-medium text-primary">
                                    {{ date('D, d M Y - H:i', strtotime(auth()->user()->mitra->updated_at)) }}</p>
                            </div>
                            <div class="col-span-2 border boder-gray-300 shadow-md rounded-md p-4">
                                <p class="font-bold text-lg uppercase">Note</p>
                                <p>Apabila Anda perlu memperbarui informasi profil mitra, silakan klik tombol <span
                                        class="font-bold">Edit Profil</span> di atas,
                                    lakukan penyesuaian data yang diperlukan, lalu ajukan perubahan untuk diproses lebih
                                    lanjut oleh tim kami. Terima kasih atas perhatian dan kerja sama Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <script>
                const hiddenBtn = document.getElementById("toggle-hidden");
                const layerHidden = document.getElementById("blur-hidden");

                if (localStorage.getItem("isHidden") === "true") {
                    layerHidden.classList.remove("opacity-0");
                    layerHidden.classList.remove("hidden");
                    hiddenBtn.textContent = "Show";
                }

                hiddenBtn.addEventListener("click", () => {
                    if (layerHidden.classList.contains("hidden")) {
                        layerHidden.classList.remove("hidden");
                        setTimeout(() => {
                            layerHidden.classList.remove("opacity-0");
                        }, 10); // Small delay to ensure transition works
                        hiddenBtn.textContent = "Show";
                        localStorage.setItem("isHidden", "true");
                    } else {
                        layerHidden.classList.add("opacity-0");
                        layerHidden.addEventListener("transitionend", () => {
                            layerHidden.classList.add("hidden");
                        }, {
                            once: true
                        });
                        hiddenBtn.textContent = "Hide";
                        localStorage.setItem("isHidden", "false");
                    }
                });
            </script>
        </div>
</x-mitra-layout>
