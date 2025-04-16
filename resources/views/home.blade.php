<x-user-layout title="Home">
    <!-- Hero Section -->
    <section id="home"
        class="w-full bg-slate-100 z-10 bg-[url('/hero-background.png')] bg-full bg-cover p-8 space-y-4">
        <div class="max-w-[1600px] h-full flex items-center justify-between flex-wrap-reverse lg:flex-nowrap mx-auto">
            <div class="max-w-xl mt-4">
                <h1 data-aos="fade-right"
                    class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold mb-4 uppercase text-transparent bg-clip-text bg-gradient-to-r from-darkprimary to-blue-300 drop-shadow-lg">
                    Welcome to Jova Rental</h1>
                <p data-aos="fade-right" data-aos-delay="150" class="text-sm lg:text-md mb-8 font-medium">
                    Layanan Rental Kendaraan Terpercaya – Sewa Mobil & Motor dengan Mudah dan Terjangkau untuk
                    Perjalanan Apa Pun.
                    Bebas Berkendara Kapan Saja, di Mana Saja!
                </p>
                <div data-aos="fade-right" data-aos-delay="300" class="flex flex-wrap gap-4">
                    <a href="#menu"
                        class="bg-primary hover:bg-darkprimary text-white px-4 lg:px-6 py-1.5 lg:py-3 rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105 font-semibold text-sm md:text-md lg:text-lg">
                        View More
                    </a>
                    <a href="#contact"
                        class="border-2 border-primary hover:bg-primary text-primary hover:text-white px-4 lg:px-6 py-1.5 lg:py-3 rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105 font-semibold text-sm md:text-md lg:text-lg">
                        Contact Us
                    </a>
                </div>
            </div>

            <div class="w-full max-w-4xl">
                <div data-aos="zoom-in" class="border-2 rounded-xl h-64 mb-4 overflow-hidden shadow-lg">
                    <img draggable="false" src="https://i.pinimg.com/736x/7d/aa/e3/7daae3529fecbacf405b7904b67e6b19.jpg"
                        class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                        alt="rental-mobil">
                </div>
                <div class="flex space-x-4">
                    <div data-aos="zoom-in" data-aos-delay="150" class="w-full flex-[200px]">
                        <div class="border-2 h-32 rounded-xl overflow-hidden shadow-lg">
                            <img draggable="false"
                                src="https://i.pinimg.com/736x/60/0c/48/600c4837a751426222a95ee5f5395926.jpg"
                                alt="rental-mobil-ban"
                                class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-delay="300" class="w-full flex-[200px]">
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
    <section id="search" class="max-w-[1600px] mx-auto w-full flex items-center justify-center p-4 md:p-8 lg:p-12">
        <form data-aos="zoom-in" data-aos-delay="150" action="{{ route('search') }}" method="GET"
            class="bg-white rounded-md w-full shadow-lg border-2 p-6 flex flex-col lg:flex-row items-center justify-center gap-8">
            <!-- Driver Option Selection -->
            <div class="flex flex-row lg:flex-col items-start justify-center gap-4">
                <div class="driver-option">
                    <input type="radio" id="tanpa_sopir" name="tipe_rental" value="tanpa_sopir" checked
                        class="hidden peer" onchange="toggleDriverOptions()">
                    <label for="tanpa_sopir"
                        class="cursor-pointer w-48 text-nowrap flex items-center justify-center px-6 py-3 text-center border-2 border-gray-300 rounded-md peer-checked:border-primary peer-checked:bg-purple-50 peer-checked:text-darkprimary hover:bg-gray-50 font-medium">
                        Tanpa Sopir
                    </label>
                </div>
                <div class="driver-option">
                    <input type="radio" id="dengan_sopir" name="tipe_rental" value="dengan_sopir" class="hidden peer"
                        onchange="toggleDriverOptions()">
                    <label for="dengan_sopir"
                        class="cursor-pointer w-48 text-nowrap flex items-center justify-center px-6 py-3 text-center border-2 border-gray-300 rounded-md peer-checked:border-primary peer-checked:bg-purple-50 peer-checked:text-darkprimary hover:bg-gray-50 font-medium">
                        Dengan Sopir
                    </label>
                </div>
            </div>

            <!-- Tanpa Sopir Form Fields -->
            <div id="tanpa_sopir_fields" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 w-full gap-6">
                <div class="flex flex-col custom-select-container">
                    <label for="lokasi_rental" class="text-sm font-bold text-primary">Lokasi Rental</label>
                    <select class="p-2 border-b border-gray-400 focus:outline-none" id="lokasi_rental" name="lokasi">
                        <option></option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label for="tanggal_mulai_rental" class="text-sm font-bold text-primary">Tanggal Mulai</label>
                    <input type="text" class="p-2 w-full border-b border-gray-400 focus:outline-none"
                        id="tanggal_mulai_rental" name="tanggal_mulai">
                </div>
                <div class="flex flex-col">
                    <label for="tanggal_selesai_rental" class="text-sm font-bold text-primary">Tanggal Selesai</label>
                    <input type="text" class="p-2 w-full border-b border-gray-400 focus:outline-none"
                        id="tanggal_selesai_rental" name="tanggal_selesai">
                </div>
                <div class="flex flex-col">
                    <label for="waktu_mulai" class="text-sm font-bold text-primary">Waktu Mulai</label>
                    <input type="time" class="p-2 w-full border-b border-gray-400 focus:outline-none"
                        id="waktu_mulai" name="waktu_mulai">
                </div>
                <div class="flex flex-col">
                    <label for="waktu_selesai" class="text-sm font-bold text-primary">Waktu Selesai</label>
                    <input type="time" class="p-2 w-full border-b border-gray-400 focus:outline-none"
                        id="waktu_selesai" name="waktu_selesai">
                </div>
            </div>

            <!-- Dengan Sopir Form Fields -->
            <div id="dengan_sopir_fields" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 w-full gap-6 hidden">
                <div class="flex flex-col">
                    <label for="lokasi_rental_sopir" class="text-sm font-bold text-primary">Lokasi Rental</label>
                    <select class="p-2 border-b border-gray-400 focus:outline-none" id="lokasi_rental_sopir"
                        name="lokasi_sopir">
                        <option></option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label for="tanggal_mulai_sopir" class="text-sm font-bold text-primary">Tanggal Mulai</label>
                    <input type="date" class="p-2 w-full border-b border-gray-400 focus:outline-none"
                        id="tanggal_mulai_sopir" name="tanggal_mulai_sopir">
                </div>
                <div class="flex flex-col">
                    <label for="durasi" class="text-sm font-bold text-primary">Durasi</label>
                    <div class="flex items-center border-b border-gray-400">
                        <input type="number" min="1" class="p-2 w-full focus:outline-none" id="durasi"
                            name="durasi" placeholder="1">
                        <span class="p-2 text-gray-700">Hari</span>
                    </div>
                </div>
                <div class="flex flex-col">
                    <label for="waktu_jemput" class="text-sm font-bold text-primary">Waktu Jemput</label>
                    <input type="time" class="p-2 w-full border-b border-gray-400 focus:outline-none"
                        id="waktu_jemput" name="waktu_mulai_sopir">
                </div>
            </div>

            <!-- Search Button -->
            <div class="flex ">
                <button type="submit"
                    class="bg-primary text-nowrap hover:bg-darkprimary text-white px-8 py-3 rounded-md uppercase font-semibold transition-all duration-300 transform hover:scale-105">
                    Cari Kendaraan
                </button>
            </div>
        </form>
    </section>

    <!-- Why Choose Us Section -->
    <section class="my-5">
        <div class="max-w-[1600px] bg-white py-4 mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 data-aos="fade-up"
                    class="font-heading mb-4 bg-orange-100 text-orange-800 px-4 py-2 rounded-lg md:w-64 md:mx-auto text-xs font-semibold tracking-widest uppercase title-font">
                    Kenapa Memilih Kami?
                </h2>
                <p data-aos="fade-up" data-aos-delay="150"
                    class="font-heading montserrat-font         mt-2 text-xl md:text-2xl lg:text-3xl leading-8 font-semibold tracking-tight text-gray-900 sm:text-4xl">
                    Kami tahu perjalanan, kami tahu kenyamanan. Kami adalah ahli rental kendaraan.
                </p>
                <p data-aos="fade-up" data-aos-delay="300"
                    class="mt-4 max-w-4xl plus-jakarta-sans-font text-sm md:text-md lg:text-lg text-gray-500 lg:mx-auto">
                    Kami tahu cara memberikan layanan rental terbaik di setiap perjalanan Anda. Kami peduli dengan
                    kenyamanan pelanggan dan memastikan pengalaman sewa yang mudah dan aman.
                </p>
            </div>

            <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="relative" data-aos="fade-up">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                <img src="https://www.svgrepo.com/show/366704/car-rental.svg" alt="Car Rental">
                            </div>
                            <p
                                class="font-heading ml-16 montserrat-font text-sm md:text-md lg:text-lg leading-6 font-bold text-gray-700">
                                Sewa Kendaraan Mudah & Cepat, Perjalanan Tanpa Ribet!</p>
                        </dt>
                        <dd
                            class="mt-2 ml-16 text-xs md:text-sm lg:text-base text-justify text-gray-500 plus-jakarta-sans-font">
                            Jova Rental menawarkan proses penyewaan yang praktis dan cepat, baik untuk perjalanan
                            bisnis, liburan, atau keperluan sehari-hari. Dengan pemesanan online yang simpel dan
                            dukungan pelanggan 24/7, kami memastikan pengalaman sewa yang tanpa hambatan.
                        </dd>
                    </div>
                    <div class="relative" data-aos="fade-up" data-aos-delay="150">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                <img src="https://www.svgrepo.com/show/142557/vehicle-garage.svg" alt="Vehicle Fleet">
                            </div>
                            <p
                                class="font-heading ml-16 montserrat-font text-sm md:text-md lg:text-lg leading-6 font-bold text-gray-700">
                                Fleet Berkualitas, Nyaman & Terawat untuk Setiap Perjalanan
                            </p>
                        </dt>
                        <dd
                            class="mt-2 ml-16 text-justify text-xs md:text-sm lg:text-base text-gray-500 plus-jakarta-sans-font">
                            Kendaraan kami selalu dalam kondisi prima, dengan perawatan rutin dan fitur keamanan
                            lengkap.
                            Dari mobil keluarga, motor praktis, hingga kendaraan premium, kami menyediakan berbagai
                            pilihan
                            yang sesuai dengan kebutuhan perjalanan Anda.
                        </dd>
                    </div>
                    <div class="relative" data-aos="fade-up" data-aos-delay="300">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                <img src="https://www.svgrepo.com/show/438787/price-tag.svg"
                                    alt="Transparent Pricing">
                            </div>
                            <p
                                class="font-heading ml-16 montserrat-font text-sm md:text-md lg:text-lg leading-6 font-bold text-gray-700">
                                Harga Transparan, Tanpa Biaya Tersembunyi!
                            </p>
                        </dt>
                        <dd
                            class="mt-2 ml-16 text-justify text-xs md:text-sm lg:text-base text-gray-500 plus-jakarta-sans-font">
                            Tidak perlu khawatir dengan biaya tambahan yang tidak jelas! Jova Rental menerapkan sistem
                            harga
                            transparan & kompetitif, sehingga Anda bisa menikmati perjalanan tanpa beban. Hemat lebih
                            banyak,
                            berkendara lebih nyaman!
                        </dd>
                    </div>
                    <div class="relative" data-aos="fade-up" data-aos-delay="450">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                <img src="https://www.svgrepo.com/show/478193/security-material-4.svg"
                                    alt="24/7 Service">
                            </div>
                            <p
                                class="font-heading ml-16 montserrat-font text-sm md:text-md lg:text-lg leading-6 font-bold text-gray-700">
                                Layanan 24/7 & Asuransi, Keamanan Perjalanan Terjamin!
                            </p>
                        </dt>
                        <dd
                            class="mt-2 ml-16 text-justify text-xs md:text-sm lg:text-base text-gray-500 plus-jakarta-sans-font">
                            Kami mengutamakan keamanan dan kenyamanan pelanggan dengan asuransi kendaraan & bantuan
                            darurat
                            24/7. Dengan Jova Rental, Anda bisa bepergian dengan tenang, kapan saja dan di mana saja.
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
                            'answer' =>
                                'Tentu! Kami memiliki sistem verifikasi ketat untuk penyewa, serta opsi asuransi untuk perlindungan kendaraan Anda.',
                        ],
                        [
                            'question' => 'Bagaimana jika penyewa melanggar aturan atau merusak kendaraan saya?',
                            'answer' =>
                                'Kami memiliki kebijakan ketat terkait tanggung jawab penyewa dan menyediakan mekanisme klaim jika terjadi kerusakan atau pelanggaran selama masa sewa.',
                        ],
                        [
                            'question' => 'Apakah saya bisa menentukan harga sewa sendiri?',
                            'answer' =>
                                'Ya, Anda bebas menentukan harga sewa kendaraan, atau menggunakan rekomendasi harga dari kami agar lebih kompetitif.',
                        ],
                    ];
                @endphp

                @foreach ($chat as $item)
                    @include('partials.faq_chat')
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        function toggleDriverOptions() {
            const tanpaSopirFields = document.getElementById('tanpa_sopir_fields');
            const denganSopirFields = document.getElementById('dengan_sopir_fields');

            if (document.getElementById('tanpa_sopir').checked) {
                tanpaSopirFields.classList.remove('hidden');
                denganSopirFields.classList.add('hidden');

                // Set the form to use the correct fields
                document.querySelector('form').addEventListener('submit', function(e) {
                    const lokasi = document.getElementById('lokasi_rental').value;
                    document.querySelector('input[name="lokasi"]').value = lokasi;

                    // Clear driver-specific fields
                    document.querySelector('input[name="lokasi_sopir"]').value = '';
                    document.querySelector('input[name="tanggal_mulai_sopir"]').value = '';
                    document.querySelector('input[name="durasi"]').value = '';
                    document.querySelector('input[name="waktu_mulai_sopir"]').value = '';
                });
            } else {
                tanpaSopirFields.classList.add('hidden');
                denganSopirFields.classList.remove('hidden');

                // Set the form to use the correct fields for driver option
                document.querySelector('form').addEventListener('submit', function(e) {
                    const lokasi = document.getElementById('lokasi_rental_sopir').value;
                    document.querySelector('input[name="lokasi"]').value = lokasi;

                    // Use driver-specific fields and clear non-driver fields
                    document.querySelector('input[name="tanggal_mulai"]').value = document.querySelector(
                        'input[name="tanggal_mulai_sopir"]').value;
                    document.querySelector('input[name="waktu_mulai"]').value = document.querySelector(
                        'input[name="waktu_mulai_sopir"]').value;

                    // Clear non-driver specific fields
                    document.querySelector('input[name="tanggal_selesai"]').value = '';
                    document.querySelector('input[name="waktu_selesai"]').value = '';
                });
            }
        }

        $(document).ready(function() {
            // Initialize Select2 for location fields
            $('#lokasi_rental, #lokasi_rental_sopir').select2({
                ajax: {
                    url: '{{ route('search.alamat') }}',
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term || ''
                        };
                    },
                    processResults: function(data, params) {
                        const term = params.term || '';
                        const results = data.map(item => ({
                            id: item.alamat,
                            text: `${item.kota}, ${item.kecamatan}, ${item.provinsi}`
                        }));
                        // Add the raw input as an option
                        if (term) {
                            results.unshift({
                                id: term,
                                text: term
                            });
                        }
                        return {
                            results
                        };
                    },
                    cache: true
                },
                placeholder: 'Cari kota, kecamatan, atau alamat...',
                minimumInputLength: 0,
                allowClear: true,
                language: {
                    noResults: function() {
                        return 'Tidak ada hasil ditemukan';
                    },
                    errorLoading: function() {
                        return 'Gagal memuat data';
                    }
                }
            });

            // Set default times
            document.getElementById('waktu_mulai').value = '09:00';
            document.getElementById('waktu_selesai').value = '17:00';
            document.getElementById('waktu_jemput').value = '09:00';

            // Set default duration
            document.getElementById('durasi').value = '1';
        });
    </script>

    <style>
        /* Custom Select2 Styling */

        /* The Select2 container */
        .select2-container {
            width: 100% !important;
        }

        /* Main Select2 element */
        .select2-selection {
            border: none !important;
            border-bottom: 1px solid #9ca3af !important;
            border-radius: 0 !important;
            height: 42px !important;
            display: flex !important;
            align-items: center !important;
            padding: 0 !important;
            background-color: transparent !important;
        }

        /* Selection text area */
        .select2-selection__rendered {
            color: #333 !important;
            padding-left: 0 !important;
            line-height: 42px !important;
        }

        /* Placeholder text */
        .select2-selection__placeholder {
            color: #9ca3af !important;
        }

        /* Arrow container */
        .select2-selection__arrow {
            height: 40px !important;
        }

        /* Clear button (x) */
        .select2-selection__clear {
            margin-right: 10px !important;
            color: #9ca3af !important;
        }

        /* Dropdown panel */
        .select2-dropdown {
            border-color: #e5e7eb !important;
            border-radius: 0.375rem !important;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1) !important;
            margin-top: 2px !important;
        }

        /* Search field */
        .select2-search__field {
            border: 1px solid #d1d5db !important;
            border-radius: 0.25rem !important;
            padding: 8px !important;
        }

        /* Result items */
        .select2-results__option {
            padding: 10px 12px !important;
        }

        /* Hover state */
        .select2-results__option--highlighted {
            background-color: #f3f4f6 !important;
            color: #333 !important;
        }

        /* Selected option */
        .select2-results__option--selected {
            background-color: #e5e7eb !important;
        }

        /* Empty state */
        .select2-results__message {
            padding: 10px !important;
            text-align: center !important;
            color: #6b7280 !important;
        }

        /* Add focus style */
        .select2-container--focus .select2-selection {
            border-bottom: 2px solid #3b82f6 !important;
            /* This is a primary blue color */
        }
    </style>
</x-user-layout>
