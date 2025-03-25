<nav class="sticky top-0 inset-x-0 flex justify-center items-center w-full z-20 max-w-[1600px] mx-auto ">
    <div class=" w-full bg-white flex justify-between items-center shadow-lg p-4 px-12">

        <!-- ========== Logo ========== -->
        <div class="text-xl md:text-2xl text-gray-700 font-bold relative overflow-hidden">
            <a href="{{ route('home') }}"><span
                    class="inline-block transition-transform duration-300 montserrat-font">JovaRental</span></a>
        </div>


        <!-- Mobile Menu Button -->
        <button class="md:hidden text-gray-700 focus:outline-none" id="mobile-menu-button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- ========== Nav Links (Desktop) ========== -->
        <ul class="hidden md:flex items-center space-x-8">
            <li>
                <a href="{{ route('registerMitraView') }}"
                    class="text-gray-700 uppercase text-sm hover:text-primary font-bold relative overflow-hidden group py-2 block">
                    <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Join With
                        Us</span>
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}"
                    class="text-gray-700 uppercase text-sm hover:text-primary font-bold relative overflow-hidden group py-2 block">
                    <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">About Us</span>
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('contactus') }}"
                    class="text-gray-700 uppercase text-sm hover:text-primary font-bold relative overflow-hidden group py-2 block">
                    <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Contact Us</span>
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="text-gray-700 uppercase text-sm hover:text-primary font-bold relative overflow-hidden group py-2 block">
                    <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Bahasa</span>
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                </a>
            </li>
        </ul>

        <ul class="hidden md:flex items-center justify-center gap-1">
            @auth
                <li>
                    <a href="{{ route('profile') }}"
                        class="text-gray-700 uppercase text-sm px-6 rounded-lg hover:text-primary font-bold relative overflow-hidden group py-2 block">
                        <span class="relative z-10 transition-colors duration-300 group-hover:text-white">Profile</span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-full bg-primary transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        @method('POST')
                        <button type="submit"
                            class="text-gray-700 uppercase text-sm px-6 rounded-lg hover:text-primary font-bold relative overflow-hidden group py-2 block">
                            <span class="relative z-10 transition-colors duration-300 group-hover:text-white">Logout</span>
                            <span
                                class="absolute bottom-0 left-0 w-0 h-full bg-primary transition-all duration-300 group-hover:w-full"></span>
                        </button>
                    </form>
                </li>
            @endauth
            @guest
                <li>
                    <a href="{{ route('registerView') }}"
                        class="text-gray-700 uppercase text-sm px-6 rounded-lg hover:text-primary font-bold relative overflow-hidden group py-2 block">
                        <span class="relative z-10 transition-colors duration-300 group-hover:text-white">Register</span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-full bg-primary transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('loginView') }}"
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
                <li>
                    <a href="{{ route('registerMitraView') }}"
                        class="text-gray-700 uppercase text-sm hover:text-primary font-bold relative overflow-hidden group py-2 block">
                        <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Join With
                            Us</span>
                    </a>
                </li>
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
                    <a href=""
                        class="text-gray-700 uppercase text-sm hover:text-primary font-bold relative overflow-hidden group py-2 block">
                        <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Bahasa</span>
                    </a>
                </li>
                @auth
                    <li>
                        <a href="{{ route('profile') }}"
                            class="text-gray-700 uppercase text-sm hover:text-primary font-bold relative overflow-hidden group py-2 block">
                            <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Profile</span>
                        </a>
                    </li>
                @endauth
                @guest
                    <li>
                        <a href="{{ route('registerView') }}"
                            class="text-gray-700 uppercase text-sm hover:text-primary font-bold relative overflow-hidden group py-2 block">
                            <span
                                class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Register</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('loginView') }}"
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
</style>
