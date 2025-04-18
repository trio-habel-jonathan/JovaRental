<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JovaRental | Register As Mitra</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Atugatran/FontAwesome6Pro@latest/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('static/style/app.css') }}">
</head>

<body class="bg-gray-100 mx-auto">
    <div class="w-full h-screen max-w-[1920px] max-h-[1080px] mx-auto">

        <img src="{{ asset('static/car-insurance.svg') }}" class="block fixed -z-20 bottom-0 right-0 w-80"
            alt="">
        <div class="w-full h-full grid grid-cols-1 lg:grid-cols-3">
            <div class="hidden w-full lg:flex items-center justify-between flex-col relative">
                <div class="text-start w-full p-4">
                    <h1 class="text-4xl font-black text-white">JovaRental</h1>
                </div>
                <div class="space-y-4 p-4 text-white">
                    <h1 class="uppercase font-black montserrat-font text-5xl">Detail Data Anda</h1>
                    <p class="montserrat-font">Silakan lengkapi formulir dengan data pribadi dan informasi sewa secara
                        akurat untuk kelancaran proses pemesanan kendaraan.</p>
                </div>
                <img src="https://i.pinimg.com/736x/81/bb/9b/81bb9b0c6be3bc436339d58c5d658df1.jpg"
                    class="absolute top-0 left-0 w-full h-full -z-10 object-cover" alt="">
                <div
                    class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-primary via-primary/75 to-primary -z-10">
                </div>
                <div class="p-4 text-white space-y-4 bg-darkprimary m-5 rounded-md montserrat-font text-justify">
                    <p class="text-sm">Jika Anda mengalami kendala atau membutuhkan bantuan selama proses registrasi
                        maupun
                        penggunaan
                        layanan, jangan ragu untuk menghubungi kami. Silakan tekan tombol di bawah ini, dan tim support
                        kami
                        akan siap membantu Anda secepat mungkin.</p>
                    <a href="{{ route('contactus') }}"
                        class="group w-fit relative flex items-center rounded-full bg-white px-4 py-1 font-bold text-sm text-primary transition-all duration-300 ease-in-out hover:opacity-85 active:opacity-100">
                        <span class="montserrat-font">Contact Us</span>
                        <!-- SVG icon that appears on hover -->
                        <span
                            class="ml-0 w-0 overflow-hidden transition-all duration-300 ease-in-out group-hover:ml-4 group-hover:w-6">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.38028 8.85335C9.07627 10.303 10.0251 11.6616 11.2266 12.8632C12.4282 14.0648 13.7869 15.0136 15.2365 15.7096C15.3612 15.7694 15.4235 15.7994 15.5024 15.8224C15.7828 15.9041 16.127 15.8454 16.3644 15.6754C16.4313 15.6275 16.4884 15.5704 16.6027 15.4561C16.9523 15.1064 17.1271 14.9316 17.3029 14.8174C17.9658 14.3864 18.8204 14.3864 19.4833 14.8174C19.6591 14.9316 19.8339 15.1064 20.1835 15.4561L20.3783 15.6509C20.9098 16.1824 21.1755 16.4481 21.3198 16.7335C21.6069 17.301 21.6069 17.9713 21.3198 18.5389C21.1755 18.8242 20.9098 19.09 20.3783 19.6214L20.2207 19.779C19.6911 20.3087 19.4263 20.5735 19.0662 20.7757C18.6667 21.0001 18.0462 21.1615 17.588 21.1601C17.1751 21.1589 16.8928 21.0788 16.3284 20.9186C13.295 20.0576 10.4326 18.4332 8.04466 16.0452C5.65668 13.6572 4.03221 10.7948 3.17124 7.76144C3.01103 7.19699 2.93092 6.91477 2.9297 6.50182C2.92833 6.0436 3.08969 5.42311 3.31411 5.0236C3.51636 4.66357 3.78117 4.39876 4.3108 3.86913L4.46843 3.7115C4.99987 3.18006 5.2656 2.91433 5.55098 2.76999C6.11854 2.48292 6.7888 2.48292 7.35636 2.76999C7.64174 2.91433 7.90747 3.18006 8.43891 3.7115L8.63378 3.90637C8.98338 4.25597 9.15819 4.43078 9.27247 4.60655C9.70347 5.26945 9.70347 6.12403 9.27247 6.78692C9.15819 6.96269 8.98338 7.1375 8.63378 7.4871C8.51947 7.60142 8.46231 7.65857 8.41447 7.72538C8.24446 7.96281 8.18576 8.30707 8.26748 8.58743C8.29048 8.66632 8.32041 8.72866 8.38028 8.85335Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-span-2 h-full w-full flex flex-col justify-center gap-4 items-center relative">
                <div class="hidden absolute top-0 left-0 md:flex flex-col flex-wrap h-full z-0 overflow-hidden">
                    @for ($i = 0; $i < 52; $i++)
                        <svg width="49px" height="49px" viewBox="0 0 48 48">
                            <g fill="none" opacity="0.1">
                                <path d="M48 23.5L0 23.5" stroke="currentColor"></path>
                                <path d="M48 47.5001L0 47.5001" stroke="currentColor"></path>
                                <path d="M23.5 0V48" stroke="currentColor"></path>
                                <path d="M47.5 0V48" stroke="currentColor"></path>
                            </g>
                        </svg>
                    @endfor
                </div>
                <div class="hidden lg:block bg-primary/50 blur-xl absolute top-12 right-12 w-48 aspect-square z-0">
                </div>
                <div class="hidden lg:block bg-primary/50 blur-xl absolute top-36 right-48 w-24 aspect-square z-0">
                </div>
                <div class="absolute top-0 right-0 flex flex-col flex-wrap-reverse h-1/4 z-0 overflow-hidden">
                    @for ($i = 0; $i < 8; $i++)
                        <svg class="rotate-90" width="49px" height="49px" viewBox="0 0 48 48">
                            <g fill="none" opacity="0.1">
                                <path d="M48 23.5L0 23.5" stroke="currentColor"></path>
                                <path d="M48 47.5001L0 47.5001" stroke="currentColor"></path>
                                <path d="M23.5 0V48" stroke="currentColor"></path>
                                <path d="M47.5 0V48" stroke="currentColor"></path>
                            </g>
                        </svg>
                    @endfor
                </div>
                <h1 class="font-bold integral-font text-4xl uppercase">Form Pengisian</h1>
                <form action="{{ route('entitas-action') }}" class="w-3/4 md:w-1/2 space-y-8" method="POST">
                    @csrf
                    @method('POST')
                    <div>
                        @if (request('role') == 'perusahaan')
                            <label for="">Nama Perusahaan</label>
                        @else
                            <label for="">Nama Individu</label>
                        @endif
                        <div
                            class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 7.99999V13C16 13.7956 16.3161 14.5587 16.8787 15.1213C17.4413 15.6839 18.2043 16 19 16C19.7956 16 20.5587 15.6839 21.1213 15.1213C21.6839 14.5587 22 13.7956 22 13V12C21.9999 9.74302 21.2362 7.55247 19.8333 5.78452C18.4303 4.01658 16.4705 2.77521 14.2726 2.26229C12.0747 1.74936 9.76793 1.99503 7.72734 2.95936C5.68676 3.92368 4.03239 5.54995 3.03325 7.57371C2.03411 9.59748 1.74896 11.8997 2.22416 14.1061C2.69936 16.3125 3.90697 18.2932 5.65062 19.7263C7.39428 21.1593 9.57143 21.9603 11.8281 21.9991C14.0847 22.0379 16.2881 21.3122 18.08 19.94M16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79085 9.79086 7.99999 12 7.99999C14.2091 7.99999 16 9.79085 16 12Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <input type="text" name="nama_entitas" value="{{ old('nama_entitas') }}"
                                class="bg-transparent w-full text-black focus:outline-none placeholder:font-semibold"
                                placeholder="Nama...">
                            @error('nama_entitas')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        @if (request('role') == 'perusahaan')
                            <label for="">Nomor Induk Berusaha</label>
                        @else
                            <label for="">Nomor Identitas</label>
                        @endif
                        <div
                            class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.38028 8.85335C9.07627 10.303 10.0251 11.6616 11.2266 12.8632C12.4282 14.0648 13.7869 15.0136 15.2365 15.7096C15.3612 15.7694 15.4235 15.7994 15.5024 15.8224C15.7828 15.9041 16.127 15.8454 16.3644 15.6754C16.4313 15.6275 16.4884 15.5704 16.6027 15.4561C16.9523 15.1064 17.1271 14.9316 17.3029 14.8174C17.9658 14.3864 18.8204 14.3864 19.4833 14.8174C19.6591 14.9316 19.8339 15.1064 20.1835 15.4561L20.3783 15.6509C20.9098 16.1824 21.1755 16.4481 21.3198 16.7335C21.6069 17.301 21.6069 17.9713 21.3198 18.5389C21.1755 18.8242 20.9098 19.09 20.3783 19.6214L20.2207 19.779C19.6911 20.3087 19.4263 20.5735 19.0662 20.7757C18.6667 21.0001 18.0462 21.1615 17.588 21.1601C17.1751 21.1589 16.8928 21.0788 16.3284 20.9186C13.295 20.0576 10.4326 18.4332 8.04466 16.0452C5.65668 13.6572 4.03221 10.7948 3.17124 7.76144C3.01103 7.19699 2.93092 6.91477 2.9297 6.50182C2.92833 6.0436 3.08969 5.42311 3.31411 5.0236C3.51636 4.66357 3.78117 4.39876 4.3108 3.86913L4.46843 3.7115C4.99987 3.18006 5.2656 2.91433 5.55098 2.76999C6.11854 2.48292 6.7888 2.48292 7.35636 2.76999C7.64174 2.91433 7.90747 3.18006 8.43891 3.7115L8.63378 3.90637C8.98338 4.25597 9.15819 4.43078 9.27247 4.60655C9.70347 5.26945 9.70347 6.12403 9.27247 6.78692C9.15819 6.96269 8.98338 7.1375 8.63378 7.4871C8.51947 7.60142 8.46231 7.65857 8.41447 7.72538C8.24446 7.96281 8.18576 8.30707 8.26748 8.58743C8.29048 8.66632 8.32041 8.72866 8.38028 8.85335Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <input type="text" name="no_identitas" value="{{ old('no_identitas') }}"
                                class="bg-transparent w-full text-black focus:outline-none placeholder:font-semibold"
                                placeholder="Nomor Identitas...">
                            @error('no_identitas')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    @if (request('role') == 'perusahaan')
                        <div>
                            <label for="">NPWP</label>
                            <div
                                class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.38028 8.85335C9.07627 10.303 10.0251 11.6616 11.2266 12.8632C12.4282 14.0648 13.7869 15.0136 15.2365 15.7096C15.3612 15.7694 15.4235 15.7994 15.5024 15.8224C15.7828 15.9041 16.127 15.8454 16.3644 15.6754C16.4313 15.6275 16.4884 15.5704 16.6027 15.4561C16.9523 15.1064 17.1271 14.9316 17.3029 14.8174C17.9658 14.3864 18.8204 14.3864 19.4833 14.8174C19.6591 14.9316 19.8339 15.1064 20.1835 15.4561L20.3783 15.6509C20.9098 16.1824 21.1755 16.4481 21.3198 16.7335C21.6069 17.301 21.6069 17.9713 21.3198 18.5389C21.1755 18.8242 20.9098 19.09 20.3783 19.6214L20.2207 19.779C19.6911 20.3087 19.4263 20.5735 19.0662 20.7757C18.6667 21.0001 18.0462 21.1615 17.588 21.1601C17.1751 21.1589 16.8928 21.0788 16.3284 20.9186C13.295 20.0576 10.4326 18.4332 8.04466 16.0452C5.65668 13.6572 4.03221 10.7948 3.17124 7.76144C3.01103 7.19699 2.93092 6.91477 2.9297 6.50182C2.92833 6.0436 3.08969 5.42311 3.31411 5.0236C3.51636 4.66357 3.78117 4.39876 4.3108 3.86913L4.46843 3.7115C4.99987 3.18006 5.2656 2.91433 5.55098 2.76999C6.11854 2.48292 6.7888 2.48292 7.35636 2.76999C7.64174 2.91433 7.90747 3.18006 8.43891 3.7115L8.63378 3.90637C8.98338 4.25597 9.15819 4.43078 9.27247 4.60655C9.70347 5.26945 9.70347 6.12403 9.27247 6.78692C9.15819 6.96269 8.98338 7.1375 8.63378 7.4871C8.51947 7.60142 8.46231 7.65857 8.41447 7.72538C8.24446 7.96281 8.18576 8.30707 8.26748 8.58743C8.29048 8.66632 8.32041 8.72866 8.38028 8.85335Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <input type="text" name="npwp" value="{{ old('npwp') }}"
                                    class="bg-transparent w-full text-black focus:outline-none placeholder:font-semibold"
                                    placeholder="NPWP...">
                                @error('npwp')
                                @enderror
                            </div>
                        </div>
                    @endif
                    <div>
                        @if (request('role') == 'perusahaan')
                            <label for="">Alamat Perusahaan</label>
                        @else
                            <label for="">Alamat Individu</label>
                        @endif
                        <div
                            class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 14.2864C3.14864 15.1031 2 16.2412 2 17.5C2 19.9853 6.47715 22 12 22C17.5228 22 22 19.9853 22 17.5C22 16.2412 20.8514 15.1031 19 14.2864M18 8C18 12.0637 13.5 14 12 17C10.5 14 6 12.0637 6 8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8ZM13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <input type="text" name="alamat" value="{{ old('alamat') }}"
                                class="bg-transparent w-full text-black focus:outline-none placeholder:font-semibold"
                                placeholder="No Identitas...">
                            @error('alamat')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="flex flex-col gap-4 items-start justify-center w-full">
                        <input type="hidden" name="tipe_entitas" value="{{ request('role') }}">
                        <button type="submit"
                            class="w-fit px-6 py-3 integral-font tracking-widest rounded-full shadow-2xl text-white uppercase font-bold bg-gradient-to-r from-primary to-indigo-800 transition-all duration-300 ease-in-out hover:scale-105">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('static/js/tailwind.js') }}"></script>

</html>
