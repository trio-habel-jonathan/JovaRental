<x-auth-layout title="Login">
    <div class="w-full h-full flex">
        <img draggable="false" src="https://i.pinimg.com/736x/81/bb/9b/81bb9b0c6be3bc436339d58c5d658df1.jpg"
            class="h-full hidden lg:block w-1/2 object-cover rounded-md" alt="">
        <div class='h-full w-full flex flex-col justify-center gap-4 items-center'>
            <h1 class="font-bold text-4xl uppercase">Register</h1>
            <form action="{{ route('register-action') }}" class="w-3/4 xl:w-1/2 space-y-4" method="POST">
                @csrf
                @method('POST')
                <div>
                    <div
                        class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16 7.99999V13C16 13.7956 16.3161 14.5587 16.8787 15.1213C17.4413 15.6839 18.2043 16 19 16C19.7956 16 20.5587 15.6839 21.1213 15.1213C21.6839 14.5587 22 13.7956 22 13V12C21.9999 9.74302 21.2362 7.55247 19.8333 5.78452C18.4303 4.01658 16.4705 2.77521 14.2726 2.26229C12.0747 1.74936 9.76793 1.99503 7.72734 2.95936C5.68676 3.92368 4.03239 5.54995 3.03325 7.57371C2.03411 9.59748 1.74896 11.8997 2.22416 14.1061C2.69936 16.3125 3.90697 18.2932 5.65062 19.7263C7.39428 21.1593 9.57143 21.9603 11.8281 21.9991C14.0847 22.0379 16.2881 21.3122 18.08 19.94M16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79085 9.79086 7.99999 12 7.99999C14.2091 7.99999 16 9.79085 16 12Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <input type="text" name="email" value="{{ old('email') }}"
                            class="bg-transparent w-full text-black focus:outline-none placeholder:font-semibold"
                            placeholder="Email...">
                    </div>
                    @error('email')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div
                        class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.38028 8.85335C9.07627 10.303 10.0251 11.6616 11.2266 12.8632C12.4282 14.0648 13.7869 15.0136 15.2365 15.7096C15.3612 15.7694 15.4235 15.7994 15.5024 15.8224C15.7828 15.9041 16.127 15.8454 16.3644 15.6754C16.4313 15.6275 16.4884 15.5704 16.6027 15.4561C16.9523 15.1064 17.1271 14.9316 17.3029 14.8174C17.9658 14.3864 18.8204 14.3864 19.4833 14.8174C19.6591 14.9316 19.8339 15.1064 20.1835 15.4561L20.3783 15.6509C20.9098 16.1824 21.1755 16.4481 21.3198 16.7335C21.6069 17.301 21.6069 17.9713 21.3198 18.5389C21.1755 18.8242 20.9098 19.09 20.3783 19.6214L20.2207 19.779C19.6911 20.3087 19.4263 20.5735 19.0662 20.7757C18.6667 21.0001 18.0462 21.1615 17.588 21.1601C17.1751 21.1589 16.8928 21.0788 16.3284 20.9186C13.295 20.0576 10.4326 18.4332 8.04466 16.0452C5.65668 13.6572 4.03221 10.7948 3.17124 7.76144C3.01103 7.19699 2.93092 6.91477 2.9297 6.50182C2.92833 6.0436 3.08969 5.42311 3.31411 5.0236C3.51636 4.66357 3.78117 4.39876 4.3108 3.86913L4.46843 3.7115C4.99987 3.18006 5.2656 2.91433 5.55098 2.76999C6.11854 2.48292 6.7888 2.48292 7.35636 2.76999C7.64174 2.91433 7.90747 3.18006 8.43891 3.7115L8.63378 3.90637C8.98338 4.25597 9.15819 4.43078 9.27247 4.60655C9.70347 5.26945 9.70347 6.12403 9.27247 6.78692C9.15819 6.96269 8.98338 7.1375 8.63378 7.4871C8.51947 7.60142 8.46231 7.65857 8.41447 7.72538C8.24446 7.96281 8.18576 8.30707 8.26748 8.58743C8.29048 8.66632 8.32041 8.72866 8.38028 8.85335Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <input type="text" name="no_telepon" value="{{ old('no_telepon') }}"
                            class="bg-transparent w-full text-black focus:outline-none placeholder:font-semibold"
                            placeholder="Nomor Handphone...">
                    </div>
                    @error('no_telepon')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
    <!-- PASSWORD -->
    <div class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17 10V8C17 5.23858 14.7614 3 12 3C9.23858 3 7 5.23858 7 8V10M12 14.5V16.5M8.8 21H15.2C16.8802 21 17.7202 21 18.362 20.673C18.9265 20.3854 19.3854 19.9265 19.673 19.362C20 18.7202 20 17.8802 20 16.2V14.8C20 13.1198 20 12.2798 19.673 11.638C19.3854 11.0735 18.9265 10.6146 18.362 10.327C17.7202 10 16.8802 10 15.2 10H8.8C7.11984 10 6.27976 10 5.63803 10.327C5.07354 10.6146 4.6146 11.0735 4.32698 11.638C4 12.2798 4 13.1198 4 14.8V16.2C4 17.8802 4 18.7202 4.32698 19.362C4.6146 19.9265 5.07354 20.3854 5.63803 20.673C6.27976 21 7.11984 21 8.8 21Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

        <input id="passwordInput" type="password" name="password"
            class="bg-transparent w-full text-black focus:outline-none placeholder:font-semibold"
            placeholder="Password...">

        <!-- Eye Toggle -->
        <button type="button" id="togglePassword" class="relative w-5 h-5 focus:outline-none">
            <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" class="absolute top-0 left-0 h-5 w-5 text-gray-600 transition-all duration-300 ease-in-out scale-100 opacity-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
            <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg" class="absolute top-0 left-0 h-5 w-5 text-gray-600 transition-all duration-300 ease-in-out scale-0 opacity-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.269-2.943-9.543-7a10.05 10.05 0 012.3-3.637m1.413-1.412A9.974 9.974 0 0112 5c4.478 0 8.269 2.943 9.543 7a9.978 9.978 0 01-4.138 5.132M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />
            </svg>
        </button>
    </div>
    @error('password')
    <span class="text-red-600">{{ $message }}</span>
    @enderror
</div>

<div class="mt-4">
    <!-- KONFIRMASI PASSWORD -->
    <div class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17 10V8C17 5.23858 14.7614 3 12 3C9.23858 3 7 5.23858 7 8V10M12 14.5V16.5M8.8 21H15.2C16.8802 21 17.7202 21 18.362 20.673C18.9265 20.3854 19.3854 19.9265 19.673 19.362C20 18.7202 20 17.8802 20 16.2V14.8C20 13.1198 20 12.2798 19.673 11.638C19.3854 11.0735 18.9265 10.6146 18.362 10.327C17.7202 10 16.8802 10 15.2 10H8.8C7.11984 10 6.27976 10 5.63803 10.327C5.07354 10.6146 4.6146 11.0735 4.32698 11.638C4 12.2798 4 13.1198 4 14.8V16.2C4 17.8802 4 18.7202 4.32698 19.362C4.6146 19.9265 5.07354 20.3854 5.63803 20.673C6.27976 21 7.11984 21 8.8 21Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

        <input id="confirmPasswordInput" type="password" name="password_confirmation"
            class="bg-transparent w-full text-black focus:outline-none placeholder:font-semibold"
            placeholder="Konfirmasi Password...">

        <!-- Eye Toggle -->
        <button type="button" id="toggleConfirmPassword" class="relative w-5 h-5 focus:outline-none">
            <svg id="eyeOpenConfirm" xmlns="http://www.w3.org/2000/svg" class="absolute top-0 left-0 h-5 w-5 text-gray-600 transition-all duration-300 ease-in-out scale-100 opacity-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
            <svg id="eyeClosedConfirm" xmlns="http://www.w3.org/2000/svg" class="absolute top-0 left-0 h-5 w-5 text-gray-600 transition-all duration-300 ease-in-out scale-0 opacity-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.269-2.943-9.543-7a10.05 10.05 0 012.3-3.637m1.413-1.412A9.974 9.974 0 0112 5c4.478 0 8.269 2.943 9.543 7a9.978 9.978 0 01-4.138 5.132M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />
            </svg>
        </button>
    </div>
    @error('password_confirmation')
    <span class="text-red-600">{{ $message }}</span>
    @enderror
</div>


                <div class="flex flex-col gap-4 items-center justify-end col-span-2">
                    {{-- Setelah Klik Lanjut ke passwordView untuk melanjutkan kinformasi password account --}}
                    <button type="submit"
                        class="w-full py-3 rounded-full shadow-2xl text-white uppercase font-bold bg-gradient-to-r from-primary to-indigo-800 transition-all duration-300 ease-in-out hover:scale-105">
                        Register
                    </button>
                    <p>Already Have Account? <a href="{{ route('login') }}" class="text-blue-600">Login</a></p>
                </div>
            </form>
            <div class="w-3/4 h-[2px] relative my-4" data-aos="fade-up" data-aos-delay="600">
                <div class="w-full h-full bg-white"></div>
                <div class="absolute inset-0 flex justify-center items-center">
                    <p class=" bg-white rounded-full w-fit px-2 font-bold text-gray-700">Or</p>
                </div>
            </div>

            <form action="{{ route('login.google') }}" method="GET" class="flex w-full justify-center">
                <button type="submit"
                    class="flex bg-white justify-center items-center gap-4 p-3 border border-gray-300 shadow-xl rounded-2xl w-3/4 xl:w-1/2 transition-all duration-300 ease-in-out hover:scale-105">
                    <img class="w-10 h-10 aspect-square object-cover rounded-full"
                        src="https://imagepng.org/wp-content/uploads/2019/08/google-icon.png" alt="Google Icon">
                    <span class="text-gray-700 font-medium">Sign Up with Google Account</span>
                </button>
            </form>
        </div>
    </div>
</x-auth-layout>
<script>
    function setupPasswordToggle(inputId, toggleId, eyeOpenId, eyeClosedId) {
        const input = document.getElementById(inputId);
        const toggle = document.getElementById(toggleId);
        const eyeOpen = document.getElementById(eyeOpenId);
        const eyeClosed = document.getElementById(eyeClosedId);

        toggle.addEventListener('click', () => {
            const isPassword = input.type === 'password';
            input.type = isPassword ? 'text' : 'password';

            eyeOpen.classList.toggle('scale-100', !isPassword);
            eyeOpen.classList.toggle('opacity-100', !isPassword);
            eyeOpen.classList.toggle('scale-0', isPassword);
            eyeOpen.classList.toggle('opacity-0', isPassword);

            eyeClosed.classList.toggle('scale-100', isPassword);
            eyeClosed.classList.toggle('opacity-100', isPassword);
            eyeClosed.classList.toggle('scale-0', !isPassword);
            eyeClosed.classList.toggle('opacity-0', !isPassword);
        });
    }

    setupPasswordToggle('passwordInput', 'togglePassword', 'eyeOpen', 'eyeClosed');
    setupPasswordToggle('confirmPasswordInput', 'toggleConfirmPassword', 'eyeOpenConfirm', 'eyeClosedConfirm');
</script>

