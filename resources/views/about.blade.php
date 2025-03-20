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
        <div class="grid md:grid-cols-4 gap-8 text-center">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 id="happyClients" class="text-3xl font-bold text-purple-600">0</h3>
                <p class="mt-2 text-gray-600">Happy Clients</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 id="experienceYears" class="text-3xl font-bold text-purple-600">0</h3>
                <p class="mt-2 text-gray-600">Year of Experience</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 id="completedProjects" class="text-3xl font-bold text-purple-600">0</h3>
                <p class="mt-2 text-gray-600">Completed Projects</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 id="awardsWon" class="text-3xl font-bold text-purple-600">0</h3>
                <p class="mt-2 text-gray-600">Awards Won</p>
            </div>
        </div>


    </div>

    <!-- Blade template untuk team slider -->
    <div class="text-center max-w-[1600px] mx-auto px-5">
        <h1 class="text-3xl font-semibold mb-8">
            Meet our
            <span class="text-blue-600">
                special
            </span>
            team
        </h1>
        <div id="team-slider" class="relative overflow-hidden">
            <div id="slider-container" class="flex transition-transform duration-300 ease-in-out">
                <!-- Item 1 -->
                <div class="team-item flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-4">
                    <div class="flex flex-col items-center">
                        <img alt="Portrait of Michael Cannon, Founder" class="rounded-lg mb-4 w-full max-w-[300px]"
                            src="https://placehold.co/300x300" />
                        <h2 class="text-lg font-semibold">
                            Michael Cannon
                        </h2>
                        <p class="text-gray-500">
                            Founder
                        </p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="team-item flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-4">
                    <div class="flex flex-col items-center">
                        <img alt="Portrait of Dianne Russell, Sales Lead" class="rounded-lg mb-4 w-full max-w-[300px]"
                            src="https://placehold.co/300x300" />
                        <h2 class="text-lg font-semibold">
                            Dianne Russell
                        </h2>
                        <p class="text-gray-500">
                            Sales Lead
                        </p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="team-item flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-4">
                    <div class="flex flex-col items-center">
                        <img alt="Portrait of Devona Lane, UI Designer" class="rounded-lg mb-4 w-full max-w-[300px]"
                            src="https://placehold.co/300x300" />
                        <h2 class="text-lg font-semibold">
                            Devona Lane
                        </h2>
                        <p class="text-gray-500">
                            UI Designer
                        </p>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="team-item flex-shrink-0 w-full sm:w-1/2 lg:w-1/4 px-4">
                    <div class="flex flex-col items-center">
                        <img alt="Portrait of Ronald Richards, Product Designer"
                            class="rounded-lg mb-4 w-full max-w-[300px]" src="https://placehold.co/300x300" />
                        <h2 class="text-lg font-semibold">
                            Ronald Richards
                        </h2>
                        <p class="text-gray-500">
                            Product Designer
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

    <!-- Script untuk slider -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sliderContainer = document.getElementById('slider-container');
            const prevButton = document.getElementById('prev-button');
            const nextButton = document.getElementById('next-button');
            const teamItems = document.querySelectorAll('.team-item');

            let currentPosition = 0;
            let itemsPerView = 1;

            // Fungsi untuk menghitung jumlah item yang terlihat
            function calculateItemsPerView() {
                if (window.innerWidth >= 1024) {
                    return 4; // lg: 4 items
                } else if (window.innerWidth >= 640) {
                    return 2; // sm: 2 items
                } else {
                    return 1; // mobile: 1 item
                }
            }

            // Fungsi untuk mengupdate posisi slider
            function updateSliderPosition() {
                // Menghitung lebar viewport slider
                const sliderWidth = document.getElementById('team-slider').offsetWidth;

                // Menghitung lebar per item berdasarkan jumlah item per view
                const itemWidth = sliderWidth / itemsPerView;

                // Memberikan lebar eksplisit pada setiap item
                teamItems.forEach(item => {
                    item.style.width = `${itemWidth}px`;
                });

                // Mengupdate posisi slider
                sliderContainer.style.transform = `translateX(${-currentPosition * itemWidth}px)`;
            }

            // Event listener untuk tombol next
            nextButton.addEventListener('click', function () {
                itemsPerView = calculateItemsPerView();

                // Batasi pergantian slide
                if (currentPosition < teamItems.length - itemsPerView) {
                    currentPosition++;
                    updateSliderPosition();
                }
            });

            // Event listener untuk tombol prev
            prevButton.addEventListener('click', function () {
                if (currentPosition > 0) {
                    currentPosition--;
                    updateSliderPosition();
                }
            });

            // Inisialisasi slider
            function initSlider() {
                itemsPerView = calculateItemsPerView();
                currentPosition = 0; // Reset posisi saat resize
                updateSliderPosition();
            }

            // Responsive handling
            window.addEventListener('resize', initSlider);

            // Inisialisasi slider saat halaman dimuat
            initSlider();
        });

        // ========== Count ==========
        document.addEventListener('DOMContentLoaded', function () {
        function animateCountUp(element, target, duration) {
            let start = 0;
            const increment = target / (duration / 20); // Angka akan bertambah setiap 20ms
            const timer = setInterval(() => {
                start += increment;
                if (start >= target) {
                    start = target;
                    clearInterval(timer);
                }
                element.innerText = Math.floor(start).toLocaleString();
            }, 20);
        }

        const targets = [
            { id: 'happyClients', value: 92 },
            { id: 'experienceYears', value: 24 },
            { id: 'completedProjects', value: 14200 },
            { id: 'awardsWon', value: 12 }
        ];

        // ========== IntersectionObserver ==========
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const targetData = targets.find(t => t.id === element.id);

                    if (targetData && !element.dataset.animated) {
                        animateCountUp(element, targetData.value, 2000);
                        element.dataset.animated = true; // Mencegah animasi terulang setiap kali muncul di viewport
                    }
                }
            });
        }, { threshold: 0.5 }); // 0.5 artinya animasi mulai ketika 50% elemen terlihat

        targets.forEach(target => {
            const element = document.getElementById(target.id);
            if (element) {
                observer.observe(element);
            }
        });
    });
    </script>
</x-user-layout>