<x-user-layout title="Home">
    <!-- Hero Section -->
    <section id="home"
        class=" w-full  bg-slate-100 z-10 bg-[url('/hero-background.png')] bg-full bg-cover  py-[4rem] px-10 ">
        <div class="max-w-[1600px] flex items-center justify-between flex-wrap-reverse lg:flex-nowrap mx-auto">
            <div class="max-w-xl ">
                <h1 class="text-5xl sm:text-7xl font-bold mb-4 uppercase  text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-300 drop-shadow-lg"">
                    Welcome to Jova Rental</h1>
                <p class=" text-xl mb-8 font-medium ">our trusted vehicle rental service, offering a Layanan Rental
                    Kendaraan Terpercaya – Sewa Mobil & Motor dengan Mudah dan Terjangkau untuk Perjalanan Apa Pun.
                    Bebas Berkendara Kapan Saja, di Mana Saja!</p>
                    <div class=" flex flex-wrap gap-4">
                    <a href="#menu"
                        class="bg-purple-500 hover:bg-purple-600 text-white px-6 py-3 rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105 font-semibold text-lg">
                        View More
                    </a>
                    <a href="#contact"
                        class="border-2 border-purple-500 hover:bg-purple-500 text-purple-500 hover:text-white px-6 py-3 rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105 font-semibold text-lg">
                        Contact Us
                    </a>
            </div>
        </div>

        <div class="w-full max-w-4xl p-4 ">

            <div class="border-2 rounded-xl h-64 mb-4 overflow-hidden shadow-lg">
                <img draggable="false" src="https://i.pinimg.com/736x/7d/aa/e3/7daae3529fecbacf405b7904b67e6b19.jpg"
                    class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                    alt="rental-mobil">
            </div>
            <div class="flex space-x-4 ">
                <div class="w-full flex-[200px] ">
                    <div class="border-2 h-32 rounded-xl overflow-hidden shadow-lg">
                        <img draggable="false"
                            src="https://i.pinimg.com/736x/60/0c/48/600c4837a751426222a95ee5f5395926.jpg"
                            alt="rental-mobil-ban"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>
                </div>
                <div class="w-full flex-[200px] ">
                    <div class="border-2 h-32 rounded-xl overflow-hidden shadow-lg">
                        <img draggable="false"
                            src="https://i.pinimg.com/736x/c6/79/f1/c679f17d8ea683b155a5826034f64894.jpg"
                            alt="rental-motor-1"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <section id="search" class="max-w-[1600px] mx-auto w-full flex items-center justify-center p-12">
        <form action="" class="bg-white rounded-md w-5/6 shadow-lg border-2 p-4 grid grid-cols-1 gap-8">
            <div class="flex gap-4">
                <label class="cursor-pointer">
                    <input type="radio" value="Mobil" name="tipe_kendaraan" class="hidden peer" />
                    <div
                        class="px-4 py-2 text-primary bg-primary/20 font-bold rounded-lg peer-checked:bg-primary peer-checked:text-white peer-checked:border-primary transition">
                        Mobil
                    </div>
                </label>
                <label class="cursor-pointer">
                    <input type="radio" value="Motor" name="tipe_kendaraan" class="hidden peer" />
                    <div
                        class="px-4 py-2 text-primary bg-primary/20 font-bold rounded-lg peer-checked:bg-primary peer-checked:text-white peer-checked:border-primary transition">
                        Motor
                    </div>
                </label>
            </div>
            <div class="col-span-2 grid grid-cols-4 gap-6">
                <div class="flex flex-col">
                    <label for="lokasi_rental" class="text-sm font-bold text-primary">Lokasi Rental</label>
                    <input type="text" class="p-2 border-b border-gray-400 focus:outline-none" id="lokasi_rental"
                        placeholder="Cari lokasi rental anda...">
                </div>
                <div class="flex flex-col">
                    <label for="tanggal_mulai_rental" class="text-sm font-bold text-primary">Tanggal Mulai
                        Rental</label>
                    <input type="date" class="p-2 border-b border-gray-400 focus:outline-none" id="tanggal_mulai_rental"
                        placeholder="Cari lokasi rental anda...">
                </div>
                <div class="flex flex-col">
                    <label for="tanggal_mulai_rental" class="text-sm font-bold text-primary">Tanggal Mulai
                        Rental</label>
                    <input type="date" class="p-2 border-b border-gray-400 focus:outline-none" id="tanggal_mulai_rental"
                        placeholder="Cari lokasi rental anda...">
                </div>
                <div class="flex items-end justify-start">
                    <button type="submit"
                        class="bg-primary text-white font-semibold border border-primary w-full py-2 rounded-md uppercase ">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </section>

    <section class="my-12">
        <div>
            <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">

                <div class="lg:text-center">
                    <h2
                        class="font-heading mb-4 bg-orange-100 text-orange-800 px-4 py-2 rounded-lg md:w-64 md:mx-auto text-xs font-semibold tracking-widest  uppercase title-font">
                        Kenapa Memilih Kami?
                    </h2>
                    <p
                        class="font-heading montserrat-font mt-2 text-3xl leading-8 font-semibold tracking-tight text-gray-900 sm:text-4xl">
                        Kami tahu perjalanan, kami tahu kenyamanan. Kami adalah ahli rental kendaraan.
                    </p>
                    <p class="mt-4 max-w-4xl plus-jakarta-sans-font text-lg text-gray-500 lg:mx-auto">
                        Kami tahu cara memberikan layanan rental terbaik di setiap perjalanan Anda. Kami peduli dengan
                        kenyamanan pelanggan dan memastikan pengalaman sewa yang mudah dan aman.
                    </p>
                </div>

                <div class="mt-10">
                    <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                        <div class="relative">
                            <dt>
                                <div
                                    class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                    <img src="https://www.svgrepo.com/show/366704/car-rental.svg" alt="Car Rental">
                                </div>
                                <p class="font-heading ml-16 montserrat-font text-lg leading-6 font-bold text-gray-700">
                                    Sewa Kendaraan
                                    Mudah & Cepat, Perjalanan Tanpa Ribet!</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-justify text-gray-500 plus-jakarta-sans-font">
                                Jova Rental menawarkan proses penyewaan yang praktis dan cepat, baik untuk perjalanan
                                bisnis, liburan, atau keperluan sehari-hari. Dengan pemesanan online yang simpel dan
                                dukungan pelanggan 24/7, kami memastikan pengalaman sewa yang tanpa hambatan.
                            </dd>
                        </div>
                        <div class="relative">
                            <dt>
                                <div
                                    class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                    <img src="https://www.svgrepo.com/show/142557/vehicle-garage.svg"
                                        alt="Vehicle Fleet">
                                </div>

                                <p
                                    class="font-heading  ml-16 montserrat-font text-lg leading-6 font-bold text-gray-700">
                                    Fleet Berkualitas, Nyaman & Terawat untuk Setiap Perjalanan
                                </p>
                            </dt>
                            <dd class="mt-2 ml-16  text-justify text-base text-gray-500 plus-jakarta-sans-font">
                                Kendaraan kami
                                selalu
                                dalam kondisi prima,
                                dengan perawatan rutin dan fitur keamanan lengkap. Dari mobil keluarga, motor praktis,
                                hingga kendaraan premium, kami menyediakan berbagai pilihan yang sesuai dengan kebutuhan
                                perjalanan Anda.
                            </dd>
                        </div>
                        <div class="relative">
                            <dt>
                                <div
                                    class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                    <img src="https://www.svgrepo.com/show/438787/price-tag.svg"
                                        alt="Transparent Pricing">
                                </div>

                                <p class="font-heading ml-16 montserrat-font text-lg leading-6 font-bold text-gray-700">
                                    Harga Transparan, Tanpa Biaya Tersembunyi!
                                </p>
                            </dt>
                            <dd class="mt-2 ml-16 text-justify text-base text-gray-500 plus-jakarta-sans-font">Tidak
                                perlu khawatir
                                dengan biaya tambahan
                                yang tidak jelas! Jova Rental menerapkan sistem harga transparan & kompetitif, sehingga
                                Anda bisa menikmati perjalanan tanpa beban. Hemat lebih banyak, berkendara lebih nyaman!
                            </dd>
                        </div>
                        <div class="relative">
                            <dt>
                                <div
                                    class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                    <img src="https://www.svgrepo.com/show/478193/security-material-4.svg"
                                        alt="24/7 Service">
                                </div>
                                <p class="font-heading ml-16 montserrat-font text-lg leading-6 font-bold text-gray-700">
                                    Layanan 24/7 &
                                    Asuransi, Keamanan Perjalanan Terjamin!
                                </p>
                            </dt>
                            <dd class="mt-2 ml-16 text-justify text-base text-gray-500 plus-jakarta-sans-font"> Kami
                                mengutamakan
                                keamanan dan kenyamanan
                                pelanggan dengan asuransi kendaraan & bantuan darurat 24/7. Dengan Jova Rental, Anda
                                bisa bepergian dengan tenang, kapan saja dan di mana saja.
                            </dd>
                        </div>
                    </dl>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-gray-100 my-10">
        <div class="p-8 max-w-[1600px] mx-auto">
            <div class="flex justify-between items-center">
                <h2 class="montserrat-font font-bold text-2xl mb-2">Kendaraan Rental Baru</h2>
                <a href="#" class="sans-jakarta-plus-font text-lg text-purple-600 font-semibold">Lihat Semua</a>
            </div>

            <div class="max-h-[720px] h-screen overflow-auto custom-scrollbar">
                <div class="grid grid-cols-1 gap-8">
                    @foreach ($limitedKendaraan as $kendaraan)
                    @include('content.kartu-kendaraan')
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <div class="max-w-screen-[1600px] mx-auto  flex flex-col justify-between px-8 my-12">
        <div class="text-center">

            <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
                <span class="text-indigo-600">Pertanyaan</span> Yang Sering Ditanyakan
            </h3>

        </div>

        <div class="mt-10 max-w-[1600px] mx-auto">
            <ul class="">
                @php
                $chat = [
                [
                'question' => 'Apakah aman menyewakan kendaraan saya di platform ini?',
                'answer' => 'Tentu! Kami memiliki sistem verifikasi ketat untuk penyewa, serta opsi asuransi untuk
                perlindungan kendaraan Anda.',
                ],
                [
                'question' => 'Bagaimana jika penyewa melanggar aturan atau merusak kendaraan saya?',
                'answer' => 'Kami memiliki kebijakan ketat terkait tanggung jawab penyewa dan menyediakan mekanisme
                klaim jika terjadi kerusakan atau pelanggaran selama masa sewa.',
                ],
                [
                'question' => 'Apakah saya bisa menentukan harga sewa sendiri?',
                'answer' => 'Ya, Anda bebas menentukan harga sewa kendaraan, atau menggunakan rekomendasi harga dari
                kami agar lebih kompetitif.',
                ],
                ];

                @endphp

                @foreach ($chat as $item)
                @include('partials.faq_chat')
                @endforeach

            </ul>
        </div>
    </div>



    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            flatpickr("#datepicker", {
                enableTime: false, // Disable time selection (date only)
                dateFormat: "D, d M Y" // Format: YYYY-MM-DD
            });
        });
    </script>

</x-user-layout>