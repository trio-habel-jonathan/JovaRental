<x-user-layout title="profile">
    <!-- Main container with responsive flex direction -->
    <div class="flex flex-col gap-2 lg:flex-row items-start justify-between mx-auto max-w-[1600px] h-fit lg:h-[89vh]">
        <!-- Left sidebar - full width on mobile, fixed width on desktop -->
        <div class="w-72 h-full hidden lg:flex flex-col bg-white shadow-md p-4 mb-4 lg:mb-0 overflow-y-auto relative">
            <form action="" class="p-2 border rounded-md mb-8">
                <div class="w-full flex items-center text-primary gap-2">
                    <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21 21L16.65 16.65M11 6C13.7614 6 16 8.23858 16 11M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <input type="text" placeholder="Search..."
                        class="text-black bg-transparent focus:outline-none w-full p-1">
                </div>
            </form>
            <ul class="w-full space-y-2">
                <li>
                    <a href="{{ route('profile') }}"
                        class="w-full flex gap-4 items-center p-2 rounded-md text-gray-500 hover:text-primary font-medium montserrat-font transition-all duration-300 ease-in-out hover:bg-primary/20">
                        <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 20C5.33579 17.5226 8.50702 16 12 16C15.493 16 18.6642 17.5226 21 20M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Profile</a>
                </li>

                <li>
                    <a href="{{ route('history') }}"
                        class="text-sm w-full flex gap-4 items-center p-2 rounded-md text-gray-500 hover:text-primary font-medium montserrat-font transition-all duration-300 ease-in-out hover:bg-primary/20">
                        <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22 10H2M11 14H6M2 8.2L2 15.8C2 16.9201 2 17.4802 2.21799 17.908C2.40973 18.2843 2.71569 18.5903 3.09202 18.782C3.51984 19 4.07989 19 5.2 19L18.8 19C19.9201 19 20.4802 19 20.908 18.782C21.2843 18.5903 21.5903 18.2843 21.782 17.908C22 17.4802 22 16.9201 22 15.8V8.2C22 7.0799 22 6.51984 21.782 6.09202C21.5903 5.7157 21.2843 5.40974 20.908 5.21799C20.4802 5 19.9201 5 18.8 5L5.2 5C4.0799 5 3.51984 5 3.09202 5.21799C2.7157 5.40973 2.40973 5.71569 2.21799 6.09202C2 6.51984 2 7.07989 2 8.2Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        History Payment</a>
                </li>
                <li
                    class="w-full flex gap-4 items-center p-2 rounded-md text-gray-500 hover:text-primary font-medium montserrat-font transition-all duration-300 ease-in-out hover:bg-primary/20">
                    <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.09436 11.2288C6.03221 10.8282 5.99996 10.4179 5.99996 10C5.99996 5.58172 9.60525 2 14.0526 2C18.4999 2 22.1052 5.58172 22.1052 10C22.1052 10.9981 21.9213 11.9535 21.5852 12.8345C21.5154 13.0175 21.4804 13.109 21.4646 13.1804C21.4489 13.2512 21.4428 13.301 21.4411 13.3735C21.4394 13.4466 21.4493 13.5272 21.4692 13.6883L21.8717 16.9585C21.9153 17.3125 21.9371 17.4895 21.8782 17.6182C21.8266 17.731 21.735 17.8205 21.6211 17.8695C21.4911 17.9254 21.3146 17.8995 20.9617 17.8478L17.7765 17.3809C17.6101 17.3565 17.527 17.3443 17.4512 17.3448C17.3763 17.3452 17.3245 17.3507 17.2511 17.3661C17.177 17.3817 17.0823 17.4172 16.893 17.4881C16.0097 17.819 15.0524 18 14.0526 18C13.6344 18 13.2237 17.9683 12.8227 17.9073M7.63158 22C10.5965 22 13 19.5376 13 16.5C13 13.4624 10.5965 11 7.63158 11C4.66668 11 2.26316 13.4624 2.26316 16.5C2.26316 17.1106 2.36028 17.6979 2.53955 18.2467C2.61533 18.4787 2.65322 18.5947 2.66566 18.6739C2.67864 18.7567 2.68091 18.8031 2.67608 18.8867C2.67145 18.9668 2.65141 19.0573 2.61134 19.2383L2 22L4.9948 21.591C5.15827 21.5687 5.24 21.5575 5.31137 21.558C5.38652 21.5585 5.42641 21.5626 5.50011 21.5773C5.5701 21.5912 5.67416 21.6279 5.88227 21.7014C6.43059 21.8949 7.01911 22 7.63158 22Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <a href="" class="text-sm">History Comment</a>
                </li>
            </ul>
            <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('Apakah anda yakin?')"
                class="absolute bottom-0 left-0 w-full p-4">
                @csrf
                <button
                    class="w-full flex gap-4 items-center p-2 rounded-md text-gray-500 hover:text-red-500 font-medium montserrat-font transition-all duration-300 ease-in-out hover:bg-red-500/10">
                    <!-- icon -->
                    <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16 16.9999L21 11.9999M21 11.9999L16 6.99994M21 11.9999H9M12 16.9999C12 17.2955 12 17.4433 11.989 17.5713C11.8748 18.9019 10.8949 19.9968 9.58503 20.2572C9.45903 20.2823 9.31202 20.2986 9.01835 20.3312L7.99694 20.4447C6.46248 20.6152 5.69521 20.7005 5.08566 20.5054C4.27293 20.2453 3.60942 19.6515 3.26118 18.8724C3 18.2881 3 17.5162 3 15.9722V8.02764C3 6.4837 3 5.71174 3.26118 5.12746C3.60942 4.34842 4.27293 3.75454 5.08566 3.49447C5.69521 3.29941 6.46246 3.38466 7.99694 3.55516L9.01835 3.66865C9.31212 3.70129 9.45901 3.71761 9.58503 3.74267C10.8949 4.0031 11.8748 5.09798 11.989 6.42855C12 6.55657 12 6.70436 12 6.99994"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="text-sm">Logout</span>
                </button>
            </form>

        </div>

        <div class="block lg:hidden fixed bottom-0 left-0 w-full z-30">
            <div class="absolute bottom-0 inset-x-0 flex shadow-sm items-center justify-center bg-white p-2 ">
                <ul class="flex items-center justify-center gap-6">
                    <li>
                        <a href="{{ route('profile') }}"
                            class="w-full flex gap-4 items-center p-2 rounded-md text-gray-500 hover:text-primary font-medium montserrat-font transition-all duration-300 ease-in-out hover:bg-primary/20 hover:scale-105">
                            <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3 20C5.33579 17.5226 8.50702 16 12 16C15.493 16 18.6642 17.5226 21 20M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('history') }}"
                            class="text-sm w-full flex gap-4 items-center p-2 rounded-md text-gray-500 hover:text-primary font-medium montserrat-font transition-all duration-300 ease-in-out hover:bg-primary/20">
                            <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22 10H2M11 14H6M2 8.2L2 15.8C2 16.9201 2 17.4802 2.21799 17.908C2.40973 18.2843 2.71569 18.5903 3.09202 18.782C3.51984 19 4.07989 19 5.2 19L18.8 19C19.9201 19 20.4802 19 20.908 18.782C21.2843 18.5903 21.5903 18.2843 21.782 17.908C22 17.4802 22 16.9201 22 15.8V8.2C22 7.0799 22 6.51984 21.782 6.09202C21.5903 5.7157 21.2843 5.40974 20.908 5.21799C20.4802 5 19.9201 5 18.8 5L5.2 5C4.0799 5 3.51984 5 3.09202 5.21799C2.7157 5.40973 2.40973 5.71569 2.21799 6.09202C2 6.51984 2 7.07989 2 8.2Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                    <li
                        class="w-full flex gap-4 items-center p-2 rounded-md text-gray-500 hover:text-primary font-medium montserrat-font transition-all duration-300 ease-in-out hover:bg-primary/20">
                        <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.09436 11.2288C6.03221 10.8282 5.99996 10.4179 5.99996 10C5.99996 5.58172 9.60525 2 14.0526 2C18.4999 2 22.1052 5.58172 22.1052 10C22.1052 10.9981 21.9213 11.9535 21.5852 12.8345C21.5154 13.0175 21.4804 13.109 21.4646 13.1804C21.4489 13.2512 21.4428 13.301 21.4411 13.3735C21.4394 13.4466 21.4493 13.5272 21.4692 13.6883L21.8717 16.9585C21.9153 17.3125 21.9371 17.4895 21.8782 17.6182C21.8266 17.731 21.735 17.8205 21.6211 17.8695C21.4911 17.9254 21.3146 17.8995 20.9617 17.8478L17.7765 17.3809C17.6101 17.3565 17.527 17.3443 17.4512 17.3448C17.3763 17.3452 17.3245 17.3507 17.2511 17.3661C17.177 17.3817 17.0823 17.4172 16.893 17.4881C16.0097 17.819 15.0524 18 14.0526 18C13.6344 18 13.2237 17.9683 12.8227 17.9073M7.63158 22C10.5965 22 13 19.5376 13 16.5C13 13.4624 10.5965 11 7.63158 11C4.66668 11 2.26316 13.4624 2.26316 16.5C2.26316 17.1106 2.36028 17.6979 2.53955 18.2467C2.61533 18.4787 2.65322 18.5947 2.66566 18.6739C2.67864 18.7567 2.68091 18.8031 2.67608 18.8867C2.67145 18.9668 2.65141 19.0573 2.61134 19.2383L2 22L4.9948 21.591C5.15827 21.5687 5.24 21.5575 5.31137 21.558C5.38652 21.5585 5.42641 21.5626 5.50011 21.5773C5.5701 21.5912 5.67416 21.6279 5.88227 21.7014C6.43059 21.8949 7.01911 22 7.63158 22Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST"
                            onsubmit="return confirm('Apakah anda yakin?')"
                            class="absolute bottom-0 left-0 w-full p-4">
                            @csrf
                            <button
                                class="w-full flex gap-4 items-center p-2 rounded-md text-gray-500 hover:text-red-500 font-medium montserrat-font transition-all duration-300 ease-in-out hover:bg-red-500/10">
                                <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 16.9999L21 11.9999M21 11.9999L16 6.99994M21 11.9999H9M12 16.9999C12 17.2955 12 17.4433 11.989 17.5713C11.8748 18.9019 10.8949 19.9968 9.58503 20.2572C9.45903 20.2823 9.31202 20.2986 9.01835 20.3312L7.99694 20.4447C6.46248 20.6152 5.69521 20.7005 5.08566 20.5054C4.27293 20.2453 3.60942 19.6515 3.26118 18.8724C3 18.2881 3 17.5162 3 15.9722V8.02764C3 6.4837 3 5.71174 3.26118 5.12746C3.60942 4.34842 4.27293 3.75454 5.08566 3.49447C5.69521 3.29941 6.46246 3.38466 7.99694 3.55516L9.01835 3.66865C9.31212 3.70129 9.45901 3.71761 9.58503 3.74267C10.8949 4.0031 11.8748 5.09798 11.989 6.42855C12 6.55657 12 6.70436 12 6.99994"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <span class="text-sm">Logout</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Right content area - full width on all screens -->
        <div class="flex-1 w-full flex flex-col h-full overflow-y-auto">
            <!-- Dynamic Content Area -->
            <div id="content-area" class="bg-white rounded-lg p-3 lg:p-5">
                @if (request()->is('profile'))
                    @include('partials.user_profile')
                @elseif (request()->is('profile/settings'))
                    @include('partials.user_setting')
                @elseif (request()->is('profile/history'))
                    @include('partials.user_history')
                @else
                @endif
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Dapatkan semua tombol accordion
            const buttons = document.querySelectorAll('[data-collapse-toggle]');

            // Tambahkan event listener untuk setiap tombol
            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    // Dapatkan ID target dari atribut data-collapse-toggle
                    const targetId = button.getAttribute('data-collapse-toggle');
                    const content = document.getElementById(targetId);
                    const icon = button.querySelector('[data-accordion-icon]');

                    const isHidden = content.classList.contains('hidden');

                    if (isHidden) {
                        content.classList.remove('hidden');

                        const contentHeight = content.scrollHeight;

                        content.animate([{
                                height: '0px'
                            },
                            {
                                height: contentHeight + 'px'
                            }
                        ], {
                            duration: 300,
                            easing: 'ease-out'
                        });

                        icon.classList.add('rotate-180');
                    } else {
                        const contentHeight = content.scrollHeight;

                        const animation = content.animate([{
                                height: contentHeight + 'px'
                            },
                            {
                                height: '0px'
                            }
                        ], {
                            duration: 300,
                            easing: 'ease-in'
                        });

                        animation.onfinish = () => {
                            content.classList.add('hidden');
                        };

                        icon.classList.remove('rotate-180');
                    }
                });
            });
        });
    </script>

    {{-- <script src="{{asset('/static/js/profile_setting.js')}}"></script> --}}
</x-user-layout>
