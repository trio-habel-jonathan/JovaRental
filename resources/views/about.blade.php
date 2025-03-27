<x-user-layout title="About">

    <center>
        <header class=" rounded-xl border m-7 h-[25rem] overflow-hidden max-w-[1600px] ">
            <img src="https://i.pinimg.com/736x/2d/c6/1e/2dc61e730ab895f9761f9295e8287fda.jpg" draggable="false"
                alt="kantor-jovarental" class="w-full h-full object-cover">
        </header>
    </center>

    <div class="container mx-auto px-4 py-12">
        <div class="text-center mb-12">
            <h2 class="text-purple-600 font-semibold text-start text-xl">
                Siapa Kami
            </h2>
            <div class="grid lg:grid-cols-2 gap-10">
                <h1 class="text-3xl md:text-4xl font-bold text-start mt-2 montserrat-font ">
                    Menghubungkan Perjalanan, Mewujudkan Kemudahan
                </h1>

                <p class="text-justify plus-jakarta-sans-font ">Di Jova Rental, kami percaya bahwa setiap perjalanan
                    harus
                    mudah, nyaman, dan
                    bebas stres. Dengan layanan rental kendaraan yang fleksibel, aman, dan terjangkau, kami hadir untuk
                    membantu Anda berpindah tempat dengan lebih leluasa. Baik untuk perjalanan bisnis, liburan, atau
                    aktivitas harian, kami siap menjadi solusi transportasi terbaik Anda.

                </p>
            </div>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 mb-12">
            <div
                class="h-[25rem] p-4 flex flex-col justify-end bg-cover bg-center bg-[url('https://i.pinimg.com/736x/8f/34/8c/8f348c2fac122e19bf45c73399070e78.jpg')] rounded-lg shadow-lg w-full">
                <div class="bg-white p-4 rounded-lg shadow-lg mt-4">
                    <h3 class="text-xl font-semibold montserrat-font">
                        Misi Kami
                    </h3>
                    <p class="mt-2 text-gray-600 plus-jakarta-sans-font text-justify
">
                        Menyediakan armada berkualitas, layanan cepat, transparan, dan berbasis teknologi, serta
                        dukungan profesional 24/7 untuk memastikan setiap perjalanan lebih mudah, aman, dan
                        menyenangkan.


                    </p>
                </div>
            </div>
            <div
                class="h-[25rem] p-4 flex flex-col justify-end bg-cover bg-[url('https://i.pinimg.com/736x/58/fb/81/58fb81d7b15dc275c8bd06a5144df3fc.jpg')] rounded-lg shadow-lg w-full">
                <div class="bg-white p-4 rounded-lg shadow-lg mt-4">
                    <h3 class="text-xl font-semibold montserrat-font">
                        Visi Kami
                    </h3>
                    <p class="mt-2 text-gray-600 plus-jakarta-sans-font text-justify
">
                        Menjadi rental kendaraan terpercaya di Indonesia dengan layanan aman, nyaman, dan inovatif,
                        serta menghadirkan pengalaman sewa yang praktis dan bebas hambatan.



                    </p>
                </div>
            </div>
        </div>


        <div class="flex flex-col flex-1 gap-10 lg:gap-0 lg:flex-row lg:justify-between">
            <div class="w-full lg:w-1/4 border-b pb-10 lg:border-b-0 lg:pb-0 lg:border-r border-gray-100">
                <div class="font-manrope font-bold text-5xl text-gray-900 mb-5 text-center counter" data-target="540"
                    data-format="+">
                    0
                </div>
                <span class="text-xl text-gray-500 text-center block">Kendaraan Terdaftar</span>
            </div>
            <div class="w-full lg:w-1/4 border-b pb-10 lg:border-b-0 lg:pb-0 lg:border-r border-gray-100">
                <div class="font-manrope font-bold text-5xl text-gray-900 mb-5 text-center counter" data-target="1230"
                    data-format="+">
                    0
                </div>
                <span class="text-xl text-gray-500 text-center block">Pengguna Terverifikasi</span>
            </div>
            <div class="w-full lg:w-1/4 border-b pb-10 lg:border-b-0 lg:pb-0 lg:border-r border-gray-100">
                <div class="font-manrope font-bold text-5xl text-gray-900 mb-5 text-center counter" data-target="15230"
                    data-format="+">
                    0
                </div>
                <span class="text-xl text-gray-500 text-center block">Transaksi Berhasil</span>
            </div>
            <div class="w-full lg:w-1/4">
                <div class="font-manrope font-bold text-5xl text-gray-900 mb-5 text-center counter" data-target="97"
                    data-format="%">
                    0
                </div>
                <span class="text-xl text-gray-500 text-center block">Ulasan Positif</span>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const counters = document.querySelectorAll('.counter');
                const speed = 200; // Kecepatan animasi (ms)
                let animationStarted = false;

                // Fungsi untuk memformat angka dengan koma dan simbol
                function formatNumber(number, format) {
                    // Tambahkan koma sebagai pemisah ribuan
                    let formatted = number.toLocaleString('en-US');

                    // Tambahkan simbol jika ada
                    if (format === '+') {
                        formatted += '+';
                    } else if (format === '%') {
                        formatted += '%';
                    }

                    return formatted;
                }

                function startCounters() {
                    if (animationStarted) return;
                    animationStarted = true;

                    counters.forEach(counter => {
                        const target = +counter.getAttribute('data-target');
                        const format = counter.getAttribute('data-format') || '';
                        const count = +counter.innerText.replace(/[+,%]/g, '');
                        const increment = target / speed;

                        const updateCount = () => {
                            const currentCount = +counter.innerText.replace(/[+,%]/g, '');
                            if (currentCount < target) {
                                const newCount = Math.ceil(currentCount + increment);
                                counter.innerText = formatNumber(newCount, format);
                                setTimeout(updateCount, 1);
                            } else {
                                counter.innerText = formatNumber(target, format);
                            }
                        };

                        // Set initial value dengan format
                        counter.innerText = formatNumber(0, format);
                        updateCount();
                    });
                }

                // Gunakan Intersection Observer
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            startCounters();
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.5 });

                // Observasi container utama
                const counterContainer = document.querySelector('.flex.flex-col.flex-1');
                if (counterContainer) {
                    observer.observe(counterContainer);
                }

                // Untuk memastikan animasi berjalan saat refresh di posisi tertentu
                window.addEventListener('load', function () {
                    if (counterContainer) {
                        const rect = counterContainer.getBoundingClientRect();
                        if (rect.top < window.innerHeight && rect.bottom >= 0) {
                            startCounters();
                        }
                    }
                });
            });
        </script>
        <style>
            .counter {
                transition: all 0.3s ease-out;
            }
        </style>



    </div>

    <!-- Blade template untuk team slider -->
    <div class="text-center max-w-[1600px] mx-auto px-5 my-12">
        <h1 class="text-3xl font-semibold mb-8">
            Meet our
            <span class="text-blue-600">
                special
            </span>
            team
        </h1>
        <div id="team-slider" class="relative overflow-hidden">
            <div id="slider-container" class="flex transition-transform duration-300 ease-in-out">
                <div class="team-item flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-4">
                    <div class="flex flex-col items-center">
                        <img alt="Portrait of Leader of this project PUNDIMAS aka Ms, Founder"
                            class="rounded-lg mb-4 w-full max-w-[300px] h-[300px] object-cover"
                            src="https://w0.peakpx.com/wallpaper/628/908/HD-wallpaper-ayanokoji-kiyotaka-ayanokouji-classroom-of-elite.jpg" />
                        <h2 class="text-lg font-semibold">
                            Ayanokoji
                        </h2>
                        <p class="text-gray-500">
                            Project Manager
                        </p>
                    </div>
                </div>

                <!-- Item 1 -->
                <div class="team-item flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-4">
                    <div class="flex flex-col items-center">
                        <img alt="Portrait of Michael Cannon, Founder"
                            class="rounded-lg mb-4 w-full max-w-[300px] h-[300px] object-cover"
                            src="https://placehold.co/300x300" />
                        <h2 class="text-lg font-semibold">
                            Amirul Wira Mushthofa
                        </h2>
                        <p class="text-gray-500">
                            Front-End Developer
                        </p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="team-item flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-4">
                    <div class="flex flex-col items-center">
                        <img alt="Portrait of Dianne Russell, Sales Lead"
                            class="rounded-lg mb-4 w-full max-w-[300px] h-[300px] object-cover"
                            src="https://placehold.co/300x300" />
                        <h2 class="text-lg font-semibold">
                            Dafa Alifiandy
                        </h2>
                        <p class="text-gray-500">
                            Developer
                        </p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="team-item flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-4">
                    <div class="flex flex-col items-center">
                        <img alt="Portrait of Devona Lane, UI Designer"
                            class="rounded-lg mb-4 w-full max-w-[300px] h-[300px] object-cover"
                            src="https://placehold.co/300x300" />
                        <h2 class="text-lg font-semibold">
                            Fahrizal Hariwira Winata
                        </h2>
                        <p class="text-gray-500">
                            UI/UX Designer
                        </p>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="team-item flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-4">
                    <div class="flex flex-col items-center">
                        <img alt="Portrait of Ronald Richards, Product Designer"
                            class="rounded-lg mb-4 w-full max-w-[300px] h-[300px] object-cover"
                            src="https://placehold.co/300x300" />
                        <h2 class="text-lg font-semibold">
                            Franklin Sebastian Felix
                        </h2>
                        <p class="text-gray-500">
                            Front-End Developer
                        </p>
                    </div>
                </div>

                <div class="team-item flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-4">
                    <div class="flex flex-col items-center">
                        <img alt="Portrait of Ronald Richards, Product Designer"
                            class="rounded-lg mb-4 w-full max-w-[300px] h-[300px] object-cover"
                            src="https://placehold.co/300x300" />
                        <h2 class="text-lg font-semibold">
                            Muhammad Habib Abdillah
                        </h2>
                        <p class="text-gray-500">
                            Backend Developer
                        </p>
                    </div>
                </div>

                <div class="team-item flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-4">
                    <div class="flex flex-col items-center">
                        <img alt="Portrait of Ronald Richards, Product Designer"
                            class="rounded-lg mb-4 w-full max-w-[300px] h-[300px] object-cover"
                            src="https://placehold.co/300x300" />
                        <h2 class="text-lg font-semibold">
                            Trio Habel Jonathan
                        </h2>
                        <p class="text-gray-500">
                            Backend Developer
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center space-x-4 mt-8">
            <button id="prev-button"
                class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 text-gray-500 hover:bg-gray-100">
                <i class="fas fa-arrow-left"></i>
            </button>
            <button id="next-button"
                class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 text-white hover:bg-blue-700">
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>

    <!-- Custom Style -->
    <style>
        .lightbox {
            display: none;
            position: fixed;
            z-index: 999;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .lightbox-image {
            display: block;
            margin: auto;
            max-width: 100%;
            max-height: 100%;
        }

        .close {
            color: #fff;
            font-size: 3em;
            position: absolute;
            top: 20px;
            right: 30px;
            cursor: pointer;
        }

        .gallery {

            margin: 0 auto;
            grid-template-rows: 1fr;
            grid-column-gap: 30px;
            grid-row-gap: 30px;

        }

        .gallery img {
            max-width: 100%;
            cursor: pointer;
        }

        .gallery img:hover {
            max-width: 100%;
            cursor: pointer;
        }
    </style>
    <section class="py-12 px-8 ">
        <div class="mx-auto max-w-[1600px]  ">
            <div class="grid gap-1  pb-5">
                <h2 class="w-full text-center text-gray-900 text-4xl font-bold font-manrope leading-normal">Galeri Kami
                </h2>
                <div class="w-full text-center text-gray-600 text-lg font-normal leading-8">Bersama, kami wujudkan visi
                    menjadi nyata.</div>
            </div>
            <div class="gallery">
                <div class="flex flex-col mb-10">
                    <div class="grid md:grid-cols-12 gap-8 lg:mb-11 mb-7">
                        <div class="md:col-span-4 md:h-[404px] h-[277px] w-full rounded-3xl">
                            <img src="https://pagedone.io/asset/uploads/1713942989.png" alt="Gallery image"
                                class="gallery-image object-cover rounded-3xl hover:grayscale transition-all duration-700 ease-in-out mx-auto lg:col-span-4 md:col-span-6 w-full h-full">
                        </div>
                        <div class="md:col-span-8 md:h-[404px] h-[277px] w-full rounded-3xl">
                            <img src="https://pagedone.io/asset/uploads/1713943004.png" alt="Gallery image"
                                class="gallery-image object-cover rounded-3xl hover:grayscale transition-all duration-700 ease-in-out mx-auto lg:col-span-8 md:col-span-6 w-full h-full">
                        </div>
                    </div>
                    <div class="grid md:grid-cols-3 grid-cols-1 gap-8">
                        <div class="h-[277px] w-full rounded-3xl">
                            <img src="https://pagedone.io/asset/uploads/1713943024.png" alt="Gallery image"
                                class="gallery-image object-cover rounded-3xl hover:grayscale transition-all duration-700 ease-in-out mx-auto w-full h-full">
                        </div>
                        <div class="h-[277px] w-full rounded-3xl">
                            <img src="https://pagedone.io/asset/uploads/1713943039.png" alt="Gallery image"
                                class="gallery-image object-cover rounded-3xl hover:grayscale transition-all duration-700 ease-in-out mx-auto w-full h-full">
                        </div>
                        <div class="h-[277px] w-full rounded-3xl">
                            <img src="https://pagedone.io/asset/uploads/1713943054.png" alt="Gallery image"
                                class="gallery-image object-cover rounded-3xl hover:grayscale transition-all duration-700 ease-in-out mx-auto w-full h-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lightbox" id="lightbox">
            <span class="close" id="close">&times;</span>
            <img src="" alt="" class="lightbox-image" id="lightbox-image">
        </div>
        </div>
    </section>
    <!-- Initialize Swiper -->
    <script>
        // Get references to elements
        const gallery = document.querySelector('.gallery');
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightbox-image');
        const closeButton = document.getElementById('close');

        // Add event listener to each image
        gallery.addEventListener('click', e => {
            if (e.target.classList.contains('gallery-image')) {
                const imageSrc = e.target.src;
                lightboxImage.src = imageSrc;
                lightbox.style.display = 'flex';
            }
        });

        // Close lightbox when close button is clicked
        closeButton.addEventListener('click', () => {
            lightbox.style.display = 'none';
        });

        // Close lightbox when clicking outside the image
        lightbox.addEventListener('click', e => {
            if (e.target === lightbox) {
                lightbox.style.display = 'none';
            }
        });
    </script>


    <script src="{{asset('static/js/team-slider.js')}}"></script>
</x-user-layout>