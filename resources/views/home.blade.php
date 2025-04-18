<x-user-layout title="Home">
    <!-- Hero Section -->
    <section>
        <div class="w-full h-screen max-h-[680px] max-w-[1600px] mx-auto bg-white">
            <div class="w-full h-full grid grid-cols-2 relative">
                <div class="absolute inset-0 w-full h-full flex flex-col items-start justify-start flex-wrap z-0">
                    @for ($i = 0; $i < 434; $i++)
                        <svg width="48" height="48" viewBox="0 0 48 48">
                            <g fill="none" opacity="0.1">
                                <path d="M48 23.5L0 23.5" stroke="currentColor"></path>
                                <path d="M48 47.5001L0 47.5001" stroke="currentColor"></path>
                                <path d="M23.5 0V48" stroke="currentColor"></path>
                                <path d="M47.5 0V48" stroke="currentColor"></path>
                            </g>
                        </svg>
                    @endfor
                </div>
                <div class="absolute animate-leftright top-12 left-12 w-96 aspect-square bg-accent/50 rounded-full blur-xl z-10"></div>
                <div class="absolute animate-downup top-12 left-64 w-48 aspect-square bg-darkprimary/50 rounded-full blur-xl z-10"></div>
                <div class="pl-8 space-y-6 flex flex-col items-center justify-center z-20">
                    <h1 class="uppercase font-bold integral-font text-8xl">WELCOME To JovaRental</h1>
                    <p class="text-md montserrat-font">Layanan Rental Kendaraan Terpercaya – Sewa Mobil & Motor dengan Mudah dan Terjangkau untuk Perjalanan Apa Pun. Bebas Berkendara Kapan Saja, di Mana Saja!</p>
                    <div class="w-full flex gap-4">
                        <button class="group relative flex items-center rounded-md bg-primary px-6 py-2 font-bold text-md text-white transition-all duration-300 ease-in-out hover:opacity-85 active:opacity-100">
                            <span class="montserrat-font">PESAN SEKARANG</span>
                            <span class="ml-0 w-0 overflow-hidden transition-all duration-300 ease-in-out group-hover:ml-4 group-hover:w-6">
                                <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 18L18 6M18 6H10M18 6V14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </button>
                        <button class="group relative flex items-center rounded-md border border-primary px-6 py-2 font-bold text-md text-primary transition-all duration-300 ease-in-out hover:opacity-85 active:opacity-100">
                            <span class="montserrat-font uppercase">Contact Us</span>
                            <span class="ml-0 w-0 overflow-hidden transition-all duration-300 ease-in-out group-hover:ml-4 group-hocurrentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="w-full flex items-center justify-center z-20">
                    <img class="w-3/4" src="{{ asset('static/undraw_vintage.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Search Form Component -->
    <section id="search" class="max-w-[1600px] mx-auto w-full flex items-center justify-center p-4 md:p-8 lg:p-12">
        <x-search-form action="{{ route('search') }}" />
    </section>

    <!-- Why Choose Us Section -->
    <section class="my-5">
        <div class="max-w-[1600px] bg-white py-4 mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 data-aos="fade-up" class="font-heading mb-4 bg-orange-100 text-orange-800 px-4 py-2 rounded-lg md:w-64 md:mx-auto text-xs font-semibold tracking-widest uppercase title-font">
                    Kenapa Memilih Kami?
                </h2>
                <p data-aos="fade-up" data-aos-delay="150" class="font-heading montserrat-font mt-2 text-xl md:text-2xl lg:text-3xl leading-8 font-semibold tracking-tight text-gray-900 sm:text-4xl">
                    Kami tahu perjalanan, kami tahu kenyamanan. Kami adalah ahli rental kendaraan.
                </p>
                <p data-aos="fade-up" data-aos-delay="300" class="mt-4 max-w-4xl plus-jakarta-sans-font text-sm md:text-md lg:text-lg text-gray-500 lg:mx-auto">
                    Kami tahu cara memberikan layanan rental terbaik di setiap perjalanan Anda. Kami peduli dengan kenyamanan pelanggan dan memastikan pengalaman sewa yang mudah dan aman.
                </p>
            </div>
            <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="relative" data-aos="fade-up">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                <img src="https://www.svgrepo.com/show/366704/car-rental.svg" alt="Car Rental">
                            </div>
                            <p class="font-heading ml-16 montserrat-font text-sm md:text-md lg:text-lg leading-6 font-bold text-gray-700">
                                Sewa Kendaraan Mudah & Cepat, Perjalanan Tanpa Ribet!
                            </p>
                        </dt>
                        <dd class="mt-2 ml-16 text-xs md:text-sm lg:text-base text-justify text-gray-500 plus-jakarta-sans-font">
                            Jova Rental menawarkan proses penyewaan yang praktis dan cepat, baik untuk perjalanan bisnis, liburan, atau keperluan sehari-hari. Dengan pemesanan online yang simpel dan dukungan pelanggan 24/7, kami memastikan pengalaman sewa yang tanpa hambatan.
                        </dd>
                    </div>
                    <div class="relative" data-aos="fade-up" data-aos-delay="150">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                <img src="https://www.svgrepo.com/show/142557/vehicle-garage.svg" alt="Vehicle Fleet">
                            </div>
                            <p class="font-heading ml-16 montserrat-font text-sm md:text-md lg:text-lg leading-6 font-bold text-gray-700">
                                Fleet Berkualitas, Nyaman & Terawat untuk Setiap Perjalanan
                            </p>
                        </dt>
                        <dd class="mt-2 ml-16 text-justify text-xs md:text-sm lg:text-base text-gray-500 plus-jakarta-sans-font">
                            Kendaraan kami selalu dalam kondisi prima, dengan perawatan rutin dan fitur keamanan lengkap. Dari mobil keluarga, motor praktis, hingga kendaraan premium, kami menyediakan berbagai pilihan yang sesuai dengan kebutuhan perjalanan Anda.
                        </dd>
                    </div>
                    <div class="relative" data-aos="fade-up" data-aos-delay="300">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                <img src="https://www.svgrepo.com/show/438787/price-tag.svg" alt="Transparent Pricing">
                            </div>
                            <p class="font-heading ml-16 montserrat-font text-sm md:text-md lg:text-lg leading-6 font-bold text-gray-700">
                                Harga Transparan, Tanpa Biaya Tersembunyi!
                            </p>
                        </dt>
                        <dd class="mt-2 ml-16 text-justify text-xs md:text-sm lg:text-base text-gray-500 plus-jakarta-sans-font">
                            Tidak perlu khawatir dengan biaya tambahan yang tidak jelas! Jova Rental menerapkan sistem harga transparan & kompetitif, sehingga Anda bisa menikmati perjalanan tanpa beban. Hemat lebih banyak, berkendara lebih nyaman!
                        </dd>
                    </div>
                    <div class="relative" data-aos="fade-up" data-aos-delay="450">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                <img src="https://www.svgrepo.com/show/478193/security-material-4.svg" alt="24/7 Service">
                            </div>
                            <p class="font-heading ml-16 montserrat-font text-sm md:text-md lg:text-lg leading-6 font-bold text-gray-700">
                                Layanan 24/7 & Asuransi, Keamanan Perjalanan Terjamin!
                            </p>
                        </dt>
                        <dd class="mt-2 ml-16 text-justify text-xs md:text-sm lg:text-base text-gray-500 plus-jakarta-sans-font">
                            Kami mengutamakan keamanan dan kenyamanan pelanggan dengan asuransi kendaraan & bantuan darurat 24/7. Dengan Jova Rental, Anda bisa bepergian dengan tenang, kapan saja dan di mana saja.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <!-- New Rental Vehicles Section -->
    <section class="bg-gray-100 my-5">
        <div class="p-2 md:p-4 lg:p-6 xl:p-8 max-w-[1600px] mx-auto">
            <div class="flex flex-col sm:flex-row justify-between items-center">
                <h2 class="montserrat-font font-bold text-xl">Kendaraan Rental Baru</h2>
                <a href="#" class="sans-jakarta-plus-font text-lg text-primary font-semibold">Lihat Semua</a>
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

    <!-- FAQ Section -->
    <div class="max-w-[1600px] mx-auto flex flex-col justify-between px-8 my-12">
        <div class="text-center" data-aos="fade-up">
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
                            'answer' => 'Tentu! Kami memiliki sistem verifikasi ketat untuk penyewa, serta opsi asuransi untuk perlindungan kendaraan Anda.',
                        ],
                        [
                            'question' => 'Bagaimana jika penyewa melanggar aturan atau merusak kendaraan saya?',
                            'answer' => 'Kami memiliki kebijakan ketat terkait tanggung jawab penyewa dan menyediakan mekanisme klaim jika terjadi kerusakan atau pelanggaran selama masa sewa.',
                        ],
                        [
                            'question' => 'Apakah saya bisa menentukan harga sewa sendiri?',
                            'answer' => 'Ya, Anda bebas menentukan harga sewa kendaraan, atau menggunakan rekomendasi harga dari kami agar lebih kompetitif.',
                        ],
                    ];
                @endphp
                @foreach ($chat as $item)
                    @include('partials.faq_chat')
                @endforeach
            </ul>
        </div>
    </div>
</x-user-layout>