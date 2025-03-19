<x-admin-layout title="Mitra Data">
    <div class="p-4">
        <div class="flex gap-4">
            <img class="w-56 h-56 object-cover rounded-md"
                src="https://i.pinimg.com/736x/39/ea/d6/39ead63b3820b30f3b183175f70e1d75.jpg" alt="">
            <div class="flex-1">
                <h1 class="text-center font-bold montserrat-font text-2xl uppercase">About Company</h1>
                <ul class="grid grid-cols-2 gap-4">
                    <li class="col-span-2">
                        <p class="text-sm font-semibold text-gray-500">Nama Company</p>
                        <p class="font-bold montserrat-font uppercase text-xl">Pengusaha Sukses</p>
                    </li>
                    <li class="col-span-2">
                        <p class="text-sm font-semibold text-gray-500">Contact Company</p>
                        <div class="flex items-center gap-4">
                            <p class="font-semibold montserrat-font text-md">08123456789</p>
                            <p class="font-semibold montserrat-font text-md">pengusahasukses@gmail.com</p>
                        </div>
                    </li>
                    <li>
                        <p class="text-sm font-semibold text-gray-500">Location Company</p>
                        <p class="font-semibold montserrat-font text-md">Indonesia, Kepulauan Riau, Batam Kota</p>
                    </li>
                    <li>
                        <p class="text-sm font-semibold text-gray-500">Status Company</p>
                        <div class="bg-green-600/20 text-green-600 px-6 py-1 rounded-full w-fit">
                            <p class="font-semibold montserrat-font text-md">Active</p>
                        </div>
                    </li>
                    <li class="col-span-2">
                        <p class="text-sm font-semibold text-gray-500">Desc Company</p>
                        <p class="montserrat-font text-md">
                            Pengusaha Sukses Rental adalah penyedia layanan rental mobil dan motor terpercaya yang
                            menawarkan kendaraan berkualitas, harga terjangkau, dan pelayanan profesional. Kami
                            hadir untuk memenuhi kebutuhan transportasi Anda, baik untuk perjalanan bisnis, wisata,
                            maupun keperluan sehari-hari, dengan armada yang selalu terawat dan siap digunakan.
                            Dengan komitmen terhadap kenyamanan dan kepuasan pelanggan, Pengusaha Sukses Rental
                            memastikan setiap perjalanan Anda lebih aman, praktis, dan menyenangkan.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <a href="{{ route('admin.mitra.mitraView') }}" class="fixed bottom-0 right-0 m-5 p-2 rounded-full bg-primary text-white transition-all duration-300 ease-in-out hover:scale-125">
            <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 8L8 12M8 12L12 16M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </div>
</x-admin-layout>
