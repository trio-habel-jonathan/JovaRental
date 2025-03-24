<x-admin-layout title="Mitra Data">
    <div class="relative">
        <div class="w-full h-[24rem] relative">
            <img src="https://i.pinimg.com/736x/1f/55/f9/1f55f9a647e6bde2fe9a0e25c44495f2.jpg"
                class="w-full h-full object-cover" alt="">
            <div class="w-full h-full bg-gradient-to-r from-black to-transparent absolute top-0 left-0"></div>
            <div
                class="w-full h-full text-white absolute flex flex-col justify-center items-start pl-24 inset-y-0 left-0">
                <div class="uppercase font-bold montserrat-font">Muhammad Habib Abdillah</div>
                <h1 class="text-4xl uppercase font-bold montserrat-font">Pengusaha Sukses</h1>
            </div>
        </div>
        <div class="absolute -bottom-12 inset-x-0 grid grid-cols-4 gap-4 w-full px-6">
            @for ($i = 0; $i < 4; $i++)
                <div class="card bg-white shadow-md flex gap-4 items-center justify-between p-4 space-y-2 rounded-md">
                    <div class="bg-primary/40 text-primary rounded-full p-4 w-16 h-16 flex items-center justify-center">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 17.5H12.01M8.2 22H15.8C16.9201 22 17.4802 22 17.908 21.782C18.2843 21.5903 18.5903 21.2843 18.782 20.908C19 20.4802 19 19.9201 19 18.8V5.2C19 4.07989 19 3.51984 18.782 3.09202C18.5903 2.71569 18.2843 2.40973 17.908 2.21799C17.4802 2 16.9201 2 15.8 2H8.2C7.0799 2 6.51984 2 6.09202 2.21799C5.71569 2.40973 5.40973 2.71569 5.21799 3.09202C5 3.51984 5 4.0799 5 5.2V18.8C5 19.9201 5 20.4802 5.21799 20.908C5.40973 21.2843 5.71569 21.5903 6.09202 21.782C6.51984 22 7.07989 22 8.2 22ZM12.5 17.5C12.5 17.7761 12.2761 18 12 18C11.7239 18 11.5 17.7761 11.5 17.5C11.5 17.2239 11.7239 17 12 17C12.2761 17 12.5 17.2239 12.5 17.5Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div>
                        <p class="font-semibold text-xs text-gray-600 montserrat-font">Number Company</p>
                        <h5 class="text-xl font-bold montserrat-font">08123456789</h5>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <div class="mt-20 px-6">
        <div class="bg-whtie p-4 bg-white rounded-md shadow-md text-sm text-justify">
            <h1 class="text-center text-xl font-bold upprecase mb-4 uppercase">About Us</h1>
            <p class="plus-jakarta-sans-font">Pengusaha Sukses adalah perusahaan rental kendaraan yang didirikan oleh
                Muhammad Habib Abdillah, seorang pengusaha
                sukses di industri transportasi. Perusahaan ini menyediakan berbagai jenis kendaraan, mulai dari mobil
                keluarga hingga kendaraan mewah, dengan layanan harian, mingguan, dan bulanan yang fleksibel.
                Mengutamakan kenyamanan dan keamanan pelanggan, Sukses RentCar menawarkan armada yang selalu terawat,
                harga kompetitif, serta layanan pengemudi profesional. Dengan sistem reservasi online yang mudah
                digunakan, perusahaan ini terus berkembang dan berinovasi untuk memenuhi kebutuhan pelanggan individu
                maupun korporat di berbagai wilayah.</p>
        </div>
    </div>

    <div class="p-4">
        <a href="{{ route('admin.mitra.mitraView') }}"
            class="fixed bottom-0 right-0 m-5 p-2 rounded-full bg-primary text-white transition-all duration-300 ease-in-out hover:scale-125">
            <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 8L8 12M8 12L12 16M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </div>
</x-admin-layout>
