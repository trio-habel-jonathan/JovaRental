<x-user-layout>
    @section('content')
    
    
    <div class="container mx-auto p-4 flex flex-col lg:flex-row gap-6">
        <!-- Sisi Kiri -->
        <div class="lg:w-1/3 p-6 bg-[#705fb1] text-white flex flex-col items-center rounded-2xl shadow-lg h-fit">
            <img src="https://placehold.co/600x400" alt="Profile Photo"
                class="w-32 h-32 rounded-full mb-4 object-cover">
            <h2 class="text-2xl font-bold mb-2 text-center">Habib Abdillah</h2>
            <p class="mb-4 text-center">habibabdillah@gmail.com</p>
            <hr class="w-full mb-4">
            <div class="flex flex-col gap-4 items-start w-full"> <!-- w-full agar menyesuaikan lebar parent -->
                <h2 class="text-white text-lg font-semibold">Info Dasar</h2>
                <h2 class="text-white text-lg font-semibold">Info Login</h2>
                <h2 class="text-white text-lg font-semibold">Alamat</h2>
            </div>
        </div>


        <!-- Sisi Kanan -->
        <div class="lg:w-2/3 flex flex-col gap-6">
            <!-- Pengaturan akun -->
            <div class="p-6 bg-white rounded-2xl shadow-lg">
                <h3 class="text-xl font-bold mb-2 text-gray-800">Pengaturan Akun</h3>
                <p class="text-md font-normal text-gray-800">Lihat dan edit profil anda disini</p>
            </div>
            <div class="p-6 bg-white rounded-2xl shadow-lg">
                <!-- Judul -->
                <h3 class="text-xl font-bold mb-4 border-b pb-2">Info Dasar</h3>

                <!-- Kontainer Kolom -->
                <div class="flex flex-col lg:flex-row gap-6">
                    <!-- Kolom Kiri -->
                    <div class="lg:w-1/2">
                        <div class="flex items-center gap-2 mb-2">
                            <h3 class="w-32 text-gray-800">Nama Depan</h3>
                            <input type="text"
                                class="border border-gray-300 rounded-lg w-full focus:outline-none focus:border-gray-300 p-1 pl-3 pr-3">
                        </div>
                        <div class="flex items-center gap-2 mb-2">
                            <h3 class="w-32 text-gray-800">Nama Belakang</h3>
                            <input type="text"
                                class="border border-gray-300 rounded-lg w-full focus:outline-none focus:border-gray-300 p-1 pl-3 pr-3">
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="flex items-center gap-2 mb-2">
                            <h3 class="w-32 text-gray-800">Username</h3>
                            <input type="text"
                                class="border border-gray-300 rounded-lg w-full focus:outline-none focus:border-gray-300 p-1 pl-3 pr-3">
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="lg:w-1/2 flex flex-col items-center justify-center">
                        <h3 class="text-md font-semibold mb-2">Profile</h3>
                        <div class="relative w-32 h-32 mb-2">
                            <!-- Gambar Profil -->
                            <img src="https://placehold.co/600x400" alt="Profile Photo"
                                class="w-32 h-32 rounded-full object-cover">

                            <!-- Input File dengan Icon Kamera  -->
                            <label
                                class="absolute bottom-0 right-0 bg-white border border-gray-300 rounded-full p-2 cursor-pointer hover:bg-gray-100">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="text-gray-600">
                                    <path
                                        d="M2 8.37722C2 8.0269 2 7.85174 2.01462 7.70421C2.1556 6.28127 3.28127 5.1556 4.70421 5.01462C4.85174 5 5.03636 5 5.40558 5C5.54785 5 5.61899 5 5.67939 4.99634C6.45061 4.94963 7.12595 4.46288 7.41414 3.746C7.43671 3.68986 7.45781 3.62657 7.5 3.5C7.54219 3.37343 7.56329 3.31014 7.58586 3.254C7.87405 2.53712 8.54939 2.05037 9.32061 2.00366C9.38101 2 9.44772 2 9.58114 2H14.4189C14.5523 2 14.619 2 14.6794 2.00366C15.4506 2.05037 16.126 2.53712 16.4141 3.254C16.4367 3.31014 16.4578 3.37343 16.5 3.5C16.5422 3.62657 16.5633 3.68986 16.5859 3.746C16.874 4.46288 17.5494 4.94963 18.3206 4.99634C18.381 5 18.4521 5 18.5944 5C18.9636 5 19.1483 5 19.2958 5.01462C20.7187 5.1556 21.8444 6.28127 21.9854 7.70421C22 7.85174 22 8.0269 22 8.37722V16.2C22 17.8802 22 18.7202 21.673 19.362C21.3854 19.9265 20.9265 20.3854 20.362 20.673C19.7202 21 18.8802 21 17.2 21H6.8C5.11984 21 4.27976 21 3.63803 20.673C3.07354 20.3854 2.6146 19.9265 2.32698 19.362C2 18.7202 2 17.8802 2 16.2V8.37722Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M12 16.5C14.2091 16.5 16 14.7091 16 12.5C16 10.2909 14.2091 8.5 12 8.5C9.79086 8.5 8 10.2909 8 12.5C8 14.7091 9.79086 16.5 12 16.5Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <input type="file" class="hidden">
                            </label>
                        </div>
                        <a href="#" class="font-xs text-blue-600 hover:bg-800">Hapus Gambar</a>
                    </div>

                </div>
            </div>

            <div class="p-6 bg-white rounded-2xl shadow-lg">
                <!-- Judul -->
                <h3 class="text-xl font-bold mb-4 border-b pb-2 text-gray-800">Info Login</h3>

                <!-- Kontainer Kolom -->
                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <h3 class="w-32 text-gray-800">Alamat Email</h3>
                        <input type="email"
                            class="border border-gray-300 p-1 pl-3 pr-3 rounded-lg w-full md:w-[250px] lg:w-[400px] focus:outline-none focus:border-gray-300">
                    </div>
                    <hr class="mt-4 mb-4">
                    <div class="flex flex-col sm:flex-row items-center sm:justify-between mb-2 gap-2">
                        <div class="flex items-center gap-2 w-full sm:w-auto">
                            <h3 class="w-32 text-gray-800">Password</h3>
                            <input type="password"
                                class="border border-gray-300 p-1 pl-3 pr-3 rounded-lg w-full md:w-[250px] lg:w-[400px] focus:outline-none focus:border-gray-300 mb-2">
                        </div>
                        <button type="submit"
                            class="p-2 border border-blue-500 text-blue-500 rounded-full transition duration-200 hover:bg-blue-500 hover:text-white w-full sm:w-auto">Simpan</button>
                    </div>
                </div>
            </div>

            <div class="p-6 bg-white rounded-2xl shadow-lg">
                <!-- Judul -->
                <h3 class="text-xl font-bold mb-4 border-b pb-2 text-gray-800">Alamat</h3>

                <!-- Kontainer Kolom -->
                <div class="">
                    <div class="flex items-center gap-2 mb-2">
                        <h3 class="w-32 text-gray-800">Nama</h3>
                        <input type="text"
                            class="border border-gray-300 p-1 pl-3 pr-3 rounded-lg w-full lg:w-1/2 focus:outline-none focus:border-gray-300">
                    </div>
                    <div class="flex items-center gap-2 mb-2">
                        <h3 class="w-32 text-gray-800">No. Handphone</h3>
                        <input type="text"
                            class="border border-gray-300 p-1 pl-3 pr-3 rounded-lg w-full lg:w-1/2 focus:outline-none focus:border-gray-300">
                    </div>
                    <div class="flex items-center gap-2 mb-2">
                        <h3 class="w-32 text-gray-800">Alamat</h3>
                        <textarea name="alamat" id="alamat"
                            class="border border-gray-300 p-1 pl-3 pr-3 rounded-lg w-full lg:w-1/2 focus:outline-none focus:border-gray-300"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-user-layout>