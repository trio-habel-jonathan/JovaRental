<nav class="sticky relative top-0 w-full z-50 w-full flex justify-between items-center shadow-lg px-4 md:px-12 p-4">
    <!-- ========== Logo ========== -->
    <div class="absolute left-0 h-full w-[150px] md:w-[200px] lg:w-[250px] bg-orange-600 triangle-edge  block"></div>

    <div class="text-xl md:text-2xl text-white font-bold text-gray-800 relative overflow-hidden group">
        <span class="inline-block transition-transform duration-300 montserrat-font">JovaRental</span>
    </div>

    <!-- Mobile Menu Button -->
    <button class="md:hidden text-gray-700 focus:outline-none" id="mobile-menu-button">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <!-- ========== Nav Links (Desktop) ========== -->
    <ul class="hidden md:flex items-center space-x-8">
        <li>
            <a href="#"
                class="text-gray-700 uppercase text-xs hover:text-orange-600 font-medium relative overflow-hidden group py-2 block">
                <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Join With Us</span>
                <span
                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-orange-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
        </li>
        <li>
            <a href="#"
                class="text-gray-700 uppercase text-xs hover:text-orange-600 font-medium relative overflow-hidden group py-2 block">
                <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">About Us</span>
                <span
                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-orange-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
        </li>
        <li>
            <a href="#"
                class="text-gray-700 uppercase text-xs hover:text-orange-600 font-medium relative overflow-hidden group py-2 block">
                <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Bahasa</span>
                <span
                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-orange-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
        </li>
    </ul>

    <ul class="hidden md:flex items-center justify-center gap-1">
        <li>
            <a href="#"
                class="text-gray-700 uppercase text-xs px-6 rounded-lg hover:text-orange-600 font-medium relative overflow-hidden group py-2 block">
                <span class="relative z-10 transition-colors duration-300 group-hover:text-white">Register</span>
                <span
                    class="absolute bottom-0 left-0 w-0 h-full bg-orange-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
        </li>
        <li>
            <a href="#"
                class="text-gray-700 uppercase text-xs px-6 rounded-lg hover:text-orange-600 font-medium relative overflow-hidden group py-2 block">
                <span class="relative z-10 transition-colors duration-300 group-hover:text-white">Login</span>
                <span
                    class="absolute bottom-0 left-0 w-0 h-full bg-orange-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
        </li>
    </ul>

    <!-- Mobile Menu (Hidden by default) -->
    <div class="md:hidden absolute top-full left-0 right-0 bg-white shadow-lg hidden" id="mobile-menu">
        <ul class="flex flex-col space-y-2 p-4">
            <li>
                <a href="#"
                    class="text-gray-700 uppercase text-xs hover:text-orange-600 font-medium relative overflow-hidden group py-2 block">
                    <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Join With
                        Us</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="text-gray-700 uppercase text-xs hover:text-orange-600 font-medium relative overflow-hidden group py-2 block">
                    <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">About Us</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="text-gray-700 uppercase text-xs hover:text-orange-600 font-medium relative overflow-hidden group py-2 block">
                    <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Bahasa</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="text-gray-700 uppercase text-xs hover:text-orange-600 font-medium relative overflow-hidden group py-2 block">
                    <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Register</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="text-gray-700 uppercase text-xs hover:text-orange-600 font-medium relative overflow-hidden group py-2 block">
                    <span class="relative z-10 transition-colors duration-300 plus-jakarta-sans-font">Login</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<script>
    // JavaScript for mobile menu toggle
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>