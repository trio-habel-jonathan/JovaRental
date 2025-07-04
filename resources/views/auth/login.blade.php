<x-auth-layout title="Login">
    <div class="w-full h-full flex">
        <img draggable="false" src="https://i.pinimg.com/736x/81/bb/9b/81bb9b0c6be3bc436339d58c5d658df1.jpg"
            class="h-full hidden lg:block w-1/2 object-cover rounded-md" alt="">
        <div class='h-full w-full flex flex-col justify-center gap-4 items-center'>
            <h1 class="font-bold text-5xl uppercase">Login</h1>
            <form action="{{ route('login-action') }}" class="w-3/4 xl:w-1/2 space-y-8" method="POST">
                @csrf
                @method('POST')
                <div>
                    <label class="font-medium montserrat-font text-gray-700" for="">Email</label>
                    <div
                        class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16 7.99999V13C16 13.7956 16.3161 14.5587 16.8787 15.1213C17.4413 15.6839 18.2043 16 19 16C19.7956 16 20.5587 15.6839 21.1213 15.1213C21.6839 14.5587 22 13.7956 22 13V12C21.9999 9.74302 21.2362 7.55247 19.8333 5.78452C18.4303 4.01658 16.4705 2.77521 14.2726 2.26229C12.0747 1.74936 9.76793 1.99503 7.72734 2.95936C5.68676 3.92368 4.03239 5.54995 3.03325 7.57371C2.03411 9.59748 1.74896 11.8997 2.22416 14.1061C2.69936 16.3125 3.90697 18.2932 5.65062 19.7263C7.39428 21.1593 9.57143 21.9603 11.8281 21.9991C14.0847 22.0379 16.2881 21.3122 18.08 19.94M16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79085 9.79086 7.99999 12 7.99999C14.2091 7.99999 16 9.79085 16 12Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <input type="text" name="email"
                            class="bg-transparent w-full text-black focus:outline-none placeholder:font-semibold"
                            placeholder="Email...">
                    </div>
                </div>
                <div>
                    <label class="font-medium montserrat-font text-gray-700" for="">Password</label>
                    <div
                        class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17 10V8C17 5.23858 14.7614 3 12 3C9.23858 3 7 5.23858 7 8V10M12 14.5V16.5M8.8 21H15.2C16.8802 21 17.7202 21 18.362 20.673C18.9265 20.3854 19.3854 19.9265 19.673 19.362C20 18.7202 20 17.8802 20 16.2V14.8C20 13.1198 20 12.2798 19.673 11.638C19.3854 11.0735 18.9265 10.6146 18.362 10.327C17.7202 10 16.8802 10 15.2 10H8.8C7.11984 10 6.27976 10 5.63803 10.327C5.07354 10.6146 4.6146 11.0735 4.32698 11.638C4 12.2798 4 13.1198 4 14.8V16.2C4 17.8802 4 18.7202 4.32698 19.362C4.6146 19.9265 5.07354 20.3854 5.63803 20.673C6.27976 21 7.11984 21 8.8 21Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <input id="passwordInput" type="password" name="password"
                            class="bg-transparent w-full text-black focus:outline-none placeholder:font-semibold"
                            placeholder="Password..." />

                        <!-- Eye Icon -->
                        <button type="button" id="togglePassword" class="relative w-5 h-5 focus:outline-none">
                            <!-- Eye Open -->
                            <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg"
                                class="absolute top-0 left-0 h-5 w-5 text-gray-600 transition-all duration-300 ease-in-out scale-100 opacity-100"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>

                            <!-- Eye Closed -->
                            <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg"
                                class="absolute top-0 left-0 h-5 w-5 text-gray-600 transition-all duration-300 ease-in-out scale-0 opacity-0"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.269-2.943-9.543-7a10.05 10.05 0 012.3-3.637m1.413-1.412A9.974 9.974 0 0112 5c4.478 0 8.269 2.943 9.543 7a9.978 9.978 0 01-4.138 5.132M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />
                            </svg>
                        </button>

                    </div>

                    <div class="text-end">
                        <a href="">forgot password?</a>
                    </div>
                </div>
                <div class="flex flex-col gap-4 items-center justify-end">
                    <button type="submit"
                        class="w-full py-3 rounded-full shadow-2xl text-white uppercase font-bold bg-gradient-to-r from-primary to-indigo-800 transition-all duration-300 ease-in-out hover:scale-105">
                        Login
                    </button>
                    <p>Doesn't Have Account? <a href="{{ route('register') }}" class="text-blue-600">Register</a></p>
                </div>
            </form>
            <div class="w-3/4 h-[2px] relative my-4" data-aos="fade-up" data-aos-delay="600">
                <div class="w-full h-full bg-white"></div>
                <div class="absolute inset-0 flex justify-center items-center">
                    <p class=" bg-white rounded-full w-fit px-2 font-bold text-gray-700">Or</p>
                </div>
            </div>
            <form action="{{ route('login.google') }}" class="flex w-full justify-center">
                <button
                    class="flex bg-white justify-center p-2 items-center gap-4 border border-gray-300 shadow-2xl rounded-2xl w-3/4 xl:w-1/2 transition-all duration-300 ease-in-out hover:scale-105">
                    <img class="w-10 h-10 aspect-square object-cover rounded-full"
                        src="https://imagepng.org/wp-content/uploads/2019/08/google-icon.png" alt="">
                    <span>Sign In with Google Account</span>
                </button>
            </form>
        </div>
    </div>
</x-auth-layout>
<script>
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("passwordInput");
    const eyeOpen = document.getElementById("eyeOpen");
    const eyeClosed = document.getElementById("eyeClosed");

    togglePassword.addEventListener("click", () => {
        const isPassword = passwordInput.type === "password";
        passwordInput.type = isPassword ? "text" : "password";

        // Toggle animasi fade + scale
        if (isPassword) {
            eyeOpen.classList.replace("scale-100", "scale-0");
            eyeOpen.classList.replace("opacity-100", "opacity-0");
            eyeClosed.classList.replace("scale-0", "scale-100");
            eyeClosed.classList.replace("opacity-0", "opacity-100");
        } else {
            eyeOpen.classList.replace("scale-0", "scale-100");
            eyeOpen.classList.replace("opacity-0", "opacity-100");
            eyeClosed.classList.replace("scale-100", "scale-0");
            eyeClosed.classList.replace("opacity-100", "opacity-0");
        }
    });
</script>

