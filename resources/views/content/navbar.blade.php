<nav class="sticky top-0 inset-x-0 flex justify-center items-center w-full z-20 max-w-[1600px] mx-auto ">
    <div class=" w-full bg-white flex justify-between items-center shadow-lg py-4 px-4 md:px-8 lg:px-12">

        <!-- ========== Logo ========== -->
        <div class="text-xl md:text-2xl text-gray-700 font-bold relative overflow-hidden">
            <a href="{{ route('home') }}"><span
                    class="inline-block transition-transform duration-300 montserrat-font">JovaRental</span></a>
        </div>

        @php
            function urlActive($url)
            {
                return request()->is($url) ? 'text-primary' : 'text-gray-700';
            }
        @endphp
        <!-- Mobile Menu Button -->
        <button class="md:hidden text-gray-700 focus:outline-none" id="mobile-menu-button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- ========== Nav Links (Desktop) ========== -->
        <ul class="hidden md:flex items-center space-x-8">
            @auth
                <li>
                    <a href="{{ route('registerMitraView') }}"
                        class="text-gray-700 uppercase text-sm hover:text-primary font-bold relative overflow-hidden group py-2 block">
                        <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Join With
                            Us</span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
            @endauth
            <li>
                <a href="{{ route('about') }}"
                    class="{{ urlActive('about') }} text-gray-700 uppercase text-sm hover:text-primary font-bold relative overflow-hidden group py-2 block">
                    <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">About Us</span>
                    <span
                        class="absolute bottom-0 left-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full {{ request()->is('about') ? 'w-full' : 'w-0' }}"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('contactus') }}"
                    class="{{ urlActive('contact-us') }} text-gray-700 uppercase text-sm hover:text-primary font-bold relative overflow-hidden group py-2 block">
                    <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Contact Us</span>
                    <span
                        class="absolute bottom-0 left-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full {{ request()->is('contact-us') ? 'w-full' : 'w-0' }}"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('daftarMitra') }}"
                    class="{{ urlActive('daftar-mitra') }} text-gray-700 uppercase text-sm hover:text-primary font-bold relative overflow-hidden group py-2 block">
                    <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Daftar Mitra</span>
                    <span
                        class="absolute bottom-0 left-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full {{ request()->is('daftar-mitra') ? 'w-full' : 'w-0' }}"></span>
                </a>
            </li>
            <li class="relative">
                <!-- Tombol trigger dropdown -->
                <button id="language-dropdown-button"
                    class="text-gray-700 uppercase text-sm hover:text-primary font-bold relative overflow-hidden group py-2 flex items-center">
                    <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Bahasa</span>
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                    <svg class="w-4 h-4 ml-1 transition-transform duration-200" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="language-dropdown-menu"
                    class="absolute right-0 mt-2 p-2 w-40 bg-white rounded-lg shadow-lg py-1 z-50 origin-top-right transform scale-95 opacity-0 invisible transition-all duration-200 ease-out">
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150">English</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150">Indonesia</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150">日本語</a>
                </div>
            </li>
        </ul>

        <ul class="hidden md:flex items-center justify-center gap-1">
            @auth
                @php
                    function urlActiveProfile($url)
                    {
                        return request()->is($url) ? 'text-white bg-primary' : 'text-gray-700 bg-transparent';
                    }
                @endphp
                <li>
                    <a href="{{ route('profile') }}"
                        class="{{ urlActiveProfile('profile') }} text-gray-700 uppercase text-sm px-6 rounded-lg hover:text-primary font-bold relative overflow-hidden group py-2 block">
                        <span class="relative z-10 transition-colors duration-300 group-hover:text-white">Profile</span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-full bg-primary transition-all duration-300 group-hover:w-full {{ request()->is('profile') ? 'w-full' : 'w-0' }}"></span>
                    </a>
                </li>
                <li>
             
                </li>
            @endauth
            @guest
                <li>
                    <a href="{{ route('register') }}"
                        class="text-gray-700 uppercase text-sm px-6 rounded-lg hover:text-primary font-bold relative overflow-hidden group py-2 block">
                        <span class="relative z-10 transition-colors duration-300 group-hover:text-white">Register</span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-full bg-primary transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('login') }}"
                        class="text-gray-700 uppercase text-sm px-6 rounded-lg hover:text-primary font-bold relative overflow-hidden group py-2 block">
                        <span class="relative z-10 transition-colors duration-300 group-hover:text-white">Login</span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-full bg-primary transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
            @endguest
        </ul>

        <!-- Mobile Menu (Hidden by default) -->
        <div class="md:hidden absolute top-full left-0 right-0 bg-white shadow-lg hidden" id="mobile-menu">
            <ul class="flex flex-col space-y-2 p-4">
                @auth
                    <li>
                        <a href="{{ route('registerMitraView') }}"
                            class="text-gray-700 uppercase text-sm hover:text-primary font-bold relative overflow-hidden group py-2 block">
                            <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Join With
                                Us</span>
                        </a>
                    </li>
                @endauth
                <li>
                    <a href="{{ route('about') }}"
                        class="text-gray-700 uppercase text-sm hover:text-primary font-bold relative overflow-hidden group py-2 block">
                        <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">About
                            Us</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('contactus') }}"
                        class="text-gray-700 uppercase text-sm hover:text-primary font-bold relative overflow-hidden group py-2 block">
                        <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Contact
                            Us</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('daftarMitra') }}"
                        class="text-gray-700 uppercase text-sm hover:text-primary font-bold relative overflow-hidden group py-2 block">
                        <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Daftar
                            Mitra</span>
                    </a>
                </li>
                <li>
                    <div>
                        <!-- Accordion Button -->
                        <button id="mobile-lang-toggle"
                            class="w-full text-left text-gray-700 uppercase text-sm font-bold py-2 flex justify-between items-center">
                            <span class="plus-jakarta-sans-font">Bahasa</span>
                            <svg id="mobile-lang-icon" class="w-4 h-4 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <!-- Accordion Content -->
                        <div id="mobile-lang-content" class="hidden pl-4 space-y-1">
                            <a href="#" class="block py-1 text-sm text-gray-700 hover:text-primary">English</a>
                            <a href="#"
                                class="block py-1 text-sm text-gray-700 hover:text-primary">Indonesia</a>
                            <a href="#" class="block py-1 text-sm text-gray-700 hover:text-primary">日本語</a>
                        </div>
                    </div>
                </li>
                @auth
                    <li>
                        <a href="{{ route('profile') }}"
                            class="text-gray-700 uppercase text-sm hover:text-primary font-bold relative overflow-hidden group py-2 block">
                            <span
                                class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Profile</span>
                        </a>
                    </li>
                @endauth
                @guest
                    <li>
                        <a href="{{ route('register') }}"
                            class="text-gray-700 uppercase text-sm hover:text-primary font-bold relative overflow-hidden group py-2 block">
                            <span
                                class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Register</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}"
                            class="text-gray-700 uppercase text-sm hover:text-primary font-bold relative overflow-hidden group py-2 block">
                            <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Login</span>
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<script>
    // JavaScript for mobile menu toggle
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        let isAnimating = false; // Flag untuk mencegah klik multiple

        // Tambahkan burger lines jika belum ada
        if (!document.querySelector('.burger-line')) {
            const buttonSvg = mobileMenuButton.querySelector('svg');
            if (buttonSvg) {
                buttonSvg.remove();

                // Buat burger icon
                const burgerIcon = document.createElement('div');
                burgerIcon.className = 'burger-icon';

                // Buat tiga garis
                for (let i = 0; i < 3; i++) {
                    const line = document.createElement('span');
                    line.className = 'burger-line';
                    burgerIcon.appendChild(line);
                }

                mobileMenuButton.appendChild(burgerIcon);
            }
        }

        mobileMenuButton.addEventListener('click', function() {
            // Mencegah klik berulang saat animasi sedang berjalan
            if (isAnimating) return;
            isAnimating = true;

            // Toggle active class untuk animasi burger ke X
            mobileMenuButton.classList.toggle('active');

            const isMenuOpen = !mobileMenu.classList.contains('hidden');

            if (!isMenuOpen) { // Membuka menu
                mobileMenu.classList.remove('hidden');
                mobileMenu.style.maxHeight = '0';
                mobileMenu.style.opacity = '0';
                mobileMenu.style.overflow = 'hidden';

                // Berikan sedikit waktu untuk browser menyesuaikan
                requestAnimationFrame(() => {
                    mobileMenu.style.transition = 'max-height 0.5s ease, opacity 0.4s ease';
                    mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
                    mobileMenu.style.opacity = '1';

                    // Reset flag setelah animasi selesai
                    setTimeout(() => {
                        isAnimating = false;
                    }, 500);
                });
            } else { // Menutup menu
                mobileMenu.style.transition = 'max-height 0.5s ease, opacity 0.4s ease';
                mobileMenu.style.maxHeight = '0';
                mobileMenu.style.opacity = '0';

                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.style.maxHeight = '';
                    mobileMenu.style.opacity = '';
                    mobileMenu.style.overflow = '';

                    // Reset flag setelah animasi selesai
                    isAnimating = false;
                }, 500);
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const dropdownButton = document.getElementById('language-dropdown-button');
        const dropdownMenu = document.getElementById('language-dropdown-menu');
        let isOpen = false;

        dropdownButton.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();

            isOpen = !isOpen;

            if (isOpen) {
                // Animasi saat dropdown dibuka
                dropdownMenu.classList.remove('invisible', 'opacity-0', 'scale-95');
                dropdownMenu.classList.add('opacity-100', 'scale-100');

                // Rotate arrow icon
                this.querySelector('svg').classList.add('rotate-180');
            } else {
                // Animasi saat dropdown ditutup
                dropdownMenu.classList.remove('opacity-100', 'scale-100');
                dropdownMenu.classList.add('opacity-0', 'scale-95');

                // Set timeout untuk menambahkan invisible setelah animasi selesai
                setTimeout(() => {
                    dropdownMenu.classList.add('invisible');
                }, 200);

                // Rotate arrow icon kembali
                this.querySelector('svg').classList.remove('rotate-180');
            }
        });

        // Tutup dropdown ketika klik di luar
        document.addEventListener('click', function(e) {
            if (!dropdownButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.remove('opacity-100', 'scale-100');
                dropdownMenu.classList.add('opacity-0', 'scale-95');
                dropdownButton.querySelector('svg').classList.remove('rotate-180');

                setTimeout(() => {
                    dropdownMenu.classList.add('invisible');
                }, 200);

                isOpen = false;
            }
        });
    });


    // ========== ACCORDION ==========
    // Mobile Accordion Functionality
    const langToggle = document.getElementById('mobile-lang-toggle');
    if (langToggle) {
        langToggle.addEventListener('click', () => {
            const content = document.getElementById('mobile-lang-content');
            const icon = document.getElementById('mobile-lang-icon');

            // Toggle content
            content.classList.toggle('hidden');

            // Toggle icon rotation
            icon.classList.toggle('rotate-180');

            // Smooth height animation
            if (content.classList.contains('hidden')) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
            }
        });
    }
</script>
<style>
    /* Burger Icon Styles */
    .burger-icon {
        width: 24px;
        height: 18px;
        position: relative;
        cursor: pointer;
        display: inline-block;
    }

    .burger-line {
        display: block;
        position: absolute;
        height: 2px;
        width: 100%;
        background: currentColor;
        border-radius: 2px;
        opacity: 1;
        left: 0;
        transform: rotate(0deg);
        transition: .25s ease-in-out;
    }

    /* Position the lines */
    .burger-line:nth-child(1) {
        top: 0px;
    }

    .burger-line:nth-child(2) {
        top: 8px;
    }

    .burger-line:nth-child(3) {
        top: 16px;
    }

    /* Animation for the X transformation */
    #mobile-menu-button.active .burger-line:nth-child(1) {
        top: 8px;
        transform: rotate(45deg);
    }

    #mobile-menu-button.active .burger-line:nth-child(2) {
        opacity: 0;
        transform: translateX(20px);
    }

    #mobile-menu-button.active .burger-line:nth-child(3) {
        top: 8px;
        transform: rotate(-45deg);
    }

    /* Base styles for the mobile menu */
    #mobile-menu {
        transition: max-height 0.5s ease, opacity 0.4s ease;
        overflow: hidden;
    }

    #mobile-menu.hidden {
        display: none;
    }


    #mobile-lang-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }

    #mobile-lang-content.active {
        max-height: 100px;
        /* Sesuaikan nilai ini */
    }
</style>
