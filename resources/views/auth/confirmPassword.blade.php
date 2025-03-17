<x-auth-layout title="Confrim Password">
    <div class="w-full h-full grid grid-cols-1 lg:grid-cols-2">
        <div class="w-full h-full bg-black hidden lg:block">
            <img src="https://i.pinimg.com/736x/81/bb/9b/81bb9b0c6be3bc436339d58c5d658df1.jpg"
                class="h-screen w-full object-cover" alt="">
        </div>
        <div class='h-full flex flex-col justify-center gap-4 items-center'>
            <h1 class="font-bold text-3xl uppercase">Confirm Password</h1>
            <form action="" class="w-3/4 xl:w-1/2 space-y-8">

                <div>
                    <label for="">Password</label>
                    <div
                        class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17 10V8C17 5.23858 14.7614 3 12 3C9.23858 3 7 5.23858 7 8V10M12 14.5V16.5M8.8 21H15.2C16.8802 21 17.7202 21 18.362 20.673C18.9265 20.3854 19.3854 19.9265 19.673 19.362C20 18.7202 20 17.8802 20 16.2V14.8C20 13.1198 20 12.2798 19.673 11.638C19.3854 11.0735 18.9265 10.6146 18.362 10.327C17.7202 10 16.8802 10 15.2 10H8.8C7.11984 10 6.27976 10 5.63803 10.327C5.07354 10.6146 4.6146 11.0735 4.32698 11.638C4 12.2798 4 13.1198 4 14.8V16.2C4 17.8802 4 18.7202 4.32698 19.362C4.6146 19.9265 5.07354 20.3854 5.63803 20.673C6.27976 21 7.11984 21 8.8 21Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <input type="text" name="password"
                            class="bg-transparent w-full text-black focus:outline-none placeholder:font-semibold"
                            placeholder="Password...">
                    </div>
                </div>

                <div>
                    <label for="">Confirm Password</label>
                    <div
                        class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17 10V8C17 5.23858 14.7614 3 12 3C9.23858 3 7 5.23858 7 8V10M12 14.5V16.5M8.8 21H15.2C16.8802 21 17.7202 21 18.362 20.673C18.9265 20.3854 19.3854 19.9265 19.673 19.362C20 18.7202 20 17.8802 20 16.2V14.8C20 13.1198 20 12.2798 19.673 11.638C19.3854 11.0735 18.9265 10.6146 18.362 10.327C17.7202 10 16.8802 10 15.2 10H8.8C7.11984 10 6.27976 10 5.63803 10.327C5.07354 10.6146 4.6146 11.0735 4.32698 11.638C4 12.2798 4 13.1198 4 14.8V16.2C4 17.8802 4 18.7202 4.32698 19.362C4.6146 19.9265 5.07354 20.3854 5.63803 20.673C6.27976 21 7.11984 21 8.8 21Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <input type="text" name="confirm_password"
                            class="bg-transparent w-full text-black focus:outline-none placeholder:font-semibold"
                            placeholder="Confirm Password...">
                    </div>
                </div>

                <div class="flex flex-col gap-4 items-center justify-end">
                    <button
                        class="w-full py-3 rounded-full shadow-2xl text-white uppercase font-bold bg-gradient-to-r from-sky-600 to-indigo-800 transition-all duration-300 ease-in-out hover:scale-105">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-auth-layout>
