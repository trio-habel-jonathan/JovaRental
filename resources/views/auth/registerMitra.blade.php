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

<body class="bg-gray-100 mx-auto h-screen">
    <div class="w-full h-full grid grid-cols-1 lg:grid-cols-3">
        <img src="{{ asset('static/car-insurance.svg') }}" class="hidden lg:block fixed -z-20 bottom-0 right-0 w-80" alt="">
        <div class="hidden w-full lg:flex items-center justify-between flex-col relative">
            <div class="text-start w-full p-4">
                <h1 class="text-4xl font-black text-white">JovaRental</h1>
            </div>
            <div class="space-y-4 p-4 text-white">
                <h1 class="uppercase font-black montserrat-font text-5xl">Daftar Sebagai Mitra</h1>
                <p class="montserrat-font">Registrasi Mitra Car Rental memungkinkan Anda menyewakan mobil secara online,
                    menjangkau lebih banyak
                    pelanggan, dan mengelola pemesanan dengan mudah melalui sistem kami.</p>
            </div>
            <img src="https://i.pinimg.com/736x/81/bb/9b/81bb9b0c6be3bc436339d58c5d658df1.jpg"
                class="absolute top-0 left-0 w-full h-full -z-10 object-cover" alt="">
            <div
                class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-primary via-primary/75 to-primary -z-10">
            </div>
            <div class="p-4 text-white space-y-4 bg-darkprimary m-5 rounded-md montserrat-font text-justify">
                <p class="text-sm">Jika Anda mengalami kendala atau membutuhkan bantuan selama proses registrasi maupun
                    penggunaan
                    layanan, jangan ragu untuk menghubungi kami. Silakan tekan tombol di bawah ini, dan tim support kami
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
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <div class="w-full h-full col-span-2 flex flex-col justify-center gap-4 items-center">
            <h1 class="uppercase font-bold text-xl montserrat-font">Form Daftar Mitra</h1>
            <form id="multi-step-form" action="{{ route('register.mitra') }}" method="POST"
                class="w-5/6 p-4 bg-white rounded-xl shadow-md grid grid-cols-1 gap-6">
                @csrf
                <div id="step1" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="font-semibold montserrat-font text-gray-700 text-sm" for="nama_mitra">Nama
                            Mitra</label>
                        <div
                            class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.5 11H4.6C4.03995 11 3.75992 11 3.54601 11.109C3.35785 11.2049 3.20487 11.3578 3.10899 11.546C3 11.7599 3 12.0399 3 12.6V21M16.5 11H19.4C19.9601 11 20.2401 11 20.454 11.109C20.6422 11.2049 20.7951 11.3578 20.891 11.546C21 11.7599 21 12.0399 21 12.6V21M16.5 21V6.2C16.5 5.0799 16.5 4.51984 16.282 4.09202C16.0903 3.71569 15.7843 3.40973 15.408 3.21799C14.9802 3 14.4201 3 13.3 3H10.7C9.57989 3 9.01984 3 8.59202 3.21799C8.21569 3.40973 7.90973 3.71569 7.71799 4.09202C7.5 4.51984 7.5 5.0799 7.5 6.2V21M22 21H2M11 7H13M11 11H13M11 15H13"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <input type="text" name="nama_mitra" id="nama_mitra"
                                class="bg-transparent w-full text-black focus:outline-none"
                                value="{{ old('nama_mitra') }}" placeholder="Nama Mitra...">
                        </div>
                        @error('nama_mitra')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="font-semibold montserrat-font text-gray-700 text-sm" for="nama_pemilik">Nama
                            Pemilik</label>
                        <div
                            class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3 20C5.33579 17.5226 8.50702 16 12 16C15.493 16 18.6642 17.5226 21 20M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <input type="text" name="nama_pemilik" id="nama_pemilik"
                                class="bg-transparent w-full text-black focus:outline-none"
                                value="{{ old('nama_pemilik') }}" placeholder="Nama Pemilik...">
                        </div>
                        @error('nama_pemilik')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="font-semibold montserrat-font text-gray-700 text-sm" for="no_identitas">Nomor
                            Induk
                            Berusaha</label>
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
                                id="no_identitas" class="bg-transparent w-full text-black focus:outline-none"
                                placeholder="Nomor Identitas...">
                        </div>
                        @error('no_identitas')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="font-semibold montserrat-font text-gray-700 text-sm" for="npwp">NPWP</label>
                        <div
                            class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.38028 8.85335C9.07627 10.303 10.0251 11.6616 11.2266 12.8632C12.4282 14.0648 13.7869 15.0136 15.2365 15.7096C15.3612 15.7694 15.4235 15.7994 15.5024 15.8224C15.7828 15.9041 16.127 15.8454 16.3644 15.6754C16.4313 15.6275 16.4884 15.5704 16.6027 15.4561C16.9523 15.1064 17.1271 14.9316 17.3029 14.8174C17.9658 14.3864 18.8204 14.3864 19.4833 14.8174C19.6591 14.9316 19.8339 15.1064 20.1835 15.4561L20.3783 15.6509C20.9098 16.1824 21.1755 16.4481 21.3198 16.7335C21.6069 17.301 21.6069 17.9713 21.3198 18.5389C21.1755 18.8242 20.9098 19.09 20.3783 19.6214L20.2207 19.779C19.6911 20.3087 19.4263 20.5735 19.0662 20.7757C18.6667 21.0001 18.0462 21.1615 17.588 21.1601C17.1751 21.1589 16.8928 21.0788 16.3284 20.9186C13.295 20.0576 10.4326 18.4332 8.04466 16.0452C5.65668 13.6572 4.03221 10.7948 3.17124 7.76144C3.01103 7.19699 2.93092 6.91477 2.9297 6.50182C2.92833 6.0436 3.08969 5.42311 3.31411 5.0236C3.51636 4.66357 3.78117 4.39876 4.3108 3.86913L4.46843 3.7115C4.99987 3.18006 5.2656 2.91433 5.55098 2.76999C6.11854 2.48292 6.7888 2.48292 7.35636 2.76999C7.64174 2.91433 7.90747 3.18006 8.43891 3.7115L8.63378 3.90637C8.98338 4.25597 9.15819 4.43078 9.27247 4.60655C9.70347 5.26945 9.70347 6.12403 9.27247 6.78692C9.15819 6.96269 8.98338 7.1375 8.63378 7.4871C8.51947 7.60142 8.46231 7.65857 8.41447 7.72538C8.24446 7.96281 8.18576 8.30707 8.26748 8.58743C8.29048 8.66632 8.32041 8.72866 8.38028 8.85335Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <input type="text" name="npwp" value="{{ old('npwp') }}" id="npwp"
                                class="bg-transparent w-full text-black focus:outline-none" placeholder="NPWP...">
                        </div>
                        @error('npwp')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="font-semibold montserrat-font text-gray-700 text-sm" for="tipe_mitra">Tipe
                            Mitra</label>
                        <div
                            class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3 20C5.33579 17.5226 8.50702 16 12 16C15.493 16 18.6642 17.5226 21 20M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <select name="tipe_mitra" class="bg-transparent text-black w-full focus:outline-none"
                                id="tipe_mitra">
                                <option value="individu" {{ old('tipe_mitra') == 'individu' ? 'selected' : '' }}>
                                    Individu
                                </option>
                                <option value="perusahaan" {{ old('tipe_mitra') == 'perusahaan' ? 'selected' : '' }}>
                                    Perusahaan</option>
                            </select>
                        </div>
                        @error('tipe_mitra')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="font-semibold montserrat-font text-gray-700 text-sm"
                            for="alamat">Alamat</label>
                        <div
                            class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 14.2864C3.14864 15.1031 2 16.2412 2 17.5C2 19.9853 6.47715 22 12 22C17.5228 22 22 19.9853 22 17.5C22 16.2412 20.8514 15.1031 19 14.2864M18 8C18 12.0637 13.5 14 12 17C10.5 14 6 12.0637 6 8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8ZM13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <input type="text" value="{{ old('alamat') }}" name="alamat"
                                placeholder="Alamat..." class="bg-transparent text-black w-full focus:outline-none">
                        </div>
                        @error('alamat')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex gap-4 items-center justify-start plus-jakarta-font col-span-1 md:col-span-2">
                        <button type="button" id="next-step-btn"
                            class="group relative flex items-center rounded-full bg-primary px-6 py-2 font-bold text-lg text-white transition-all duration-300 ease-in-out hover:opacity-85 active:opacity-100">
                            <span class="montserrat-font">Next</span>
                            <!-- SVG icon that appears on hover -->
                            <span
                                class="ml-0 w-0 overflow-hidden transition-all duration-300 ease-in-out group-hover:ml-4 group-hover:w-4">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 18L18 6M18 6H10M18 6V14" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </button>
                        <a href="{{ route('home') }}"
                            class="group relative flex items-center rounded-full border border-primary px-6 py-2 font-bold text-lg text-primary transition-all duration-300 ease-in-out hover:opacity-85 active:opacity-100">
                            <span class="montserrat-font">Back Home</span>
                            <!-- SVG icon that appears on hover -->
                            <span
                                class="ml-0 w-0 overflow-hidden transition-all duration-300 ease-in-out group-hover:ml-4 group-hover:w-6">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.9823 2.764C12.631 2.49075 12.4553 2.35412 12.2613 2.3016C12.0902 2.25526 11.9098 2.25526 11.7387 2.3016C11.5447 2.35412 11.369 2.49075 11.0177 2.764L4.23539 8.03912C3.78202 8.39175 3.55534 8.56806 3.39203 8.78886C3.24737 8.98444 3.1396 9.20478 3.07403 9.43905C3 9.70352 3 9.9907 3 10.5651V17.8C3 18.9201 3 19.4801 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.0799 21 6.2 21H8.2C8.48003 21 8.62004 21 8.727 20.9455C8.82108 20.8976 8.89757 20.8211 8.9455 20.727C9 20.62 9 20.48 9 20.2V13.6C9 13.0399 9 12.7599 9.10899 12.546C9.20487 12.3578 9.35785 12.2049 9.54601 12.109C9.75992 12 10.0399 12 10.6 12H13.4C13.9601 12 14.2401 12 14.454 12.109C14.6422 12.2049 14.7951 12.3578 14.891 12.546C15 12.7599 15 13.0399 15 13.6V20.2C15 20.48 15 20.62 15.0545 20.727C15.1024 20.8211 15.1789 20.8976 15.273 20.9455C15.38 21 15.52 21 15.8 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4801 21 18.9201 21 17.8V10.5651C21 9.9907 21 9.70352 20.926 9.43905C20.8604 9.20478 20.7526 8.98444 20.608 8.78886C20.4447 8.56806 20.218 8.39175 19.7646 8.03913L12.9823 2.764Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <div id="step2" style="display: none" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="font-semibold montserrat-font text-gray-700 text-sm" for="no_telepon">No
                            Telepon</label>
                        <div
                            class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 14.2864C3.14864 15.1031 2 16.2412 2 17.5C2 19.9853 6.47715 22 12 22C17.5228 22 22 19.9853 22 17.5C22 16.2412 20.8514 15.1031 19 14.2864M18 8C18 12.0637 13.5 14 12 17C10.5 14 6 12.0637 6 8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8ZM13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <input type="text" value="{{ old('no_telepon') }}" name="no_telepon"
                                placeholder="Nomor Telepon..."
                                class="bg-transparent text-black w-full focus:outline-none">
                        </div>
                        @error('no_telepon')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="font-semibold montserrat-font text-gray-700 text-sm" for="kota">Kota</label>
                        <div
                            class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 14.2864C3.14864 15.1031 2 16.2412 2 17.5C2 19.9853 6.47715 22 12 22C17.5228 22 22 19.9853 22 17.5C22 16.2412 20.8514 15.1031 19 14.2864M18 8C18 12.0637 13.5 14 12 17C10.5 14 6 12.0637 6 8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8ZM13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <input type="text" value="{{ old('kota') }}" name="kota" placeholder="Kota..."
                                class="bg-transparent text-black w-full focus:outline-none">
                        </div>
                        @error('kota')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="font-semibold montserrat-font text-gray-700 text-sm"
                            for="kecamatan">Kecamatan</label>
                        <div
                            class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 14.2864C3.14864 15.1031 2 16.2412 2 17.5C2 19.9853 6.47715 22 12 22C17.5228 22 22 19.9853 22 17.5C22 16.2412 20.8514 15.1031 19 14.2864M18 8C18 12.0637 13.5 14 12 17C10.5 14 6 12.0637 6 8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8ZM13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <input type="text" value="{{ old('kecamatan') }}" name="kecamatan"
                                placeholder="Kecamatan..."
                                class="bg-transparent text-black w-full focus:outline-none">
                        </div>
                        @error('kecamatan')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="font-semibold montserrat-font text-gray-700 text-sm"
                            for="provinsi">Provinsi</label>
                        <div
                            class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 14.2864C3.14864 15.1031 2 16.2412 2 17.5C2 19.9853 6.47715 22 12 22C17.5228 22 22 19.9853 22 17.5C22 16.2412 20.8514 15.1031 19 14.2864M18 8C18 12.0637 13.5 14 12 17C10.5 14 6 12.0637 6 8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8ZM13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <input type="text" value="{{ old('provinsi') }}" name="provinsi"
                                placeholder="Provinsi..." class="bg-transparent text-black w-full focus:outline-none">
                        </div>
                        @error('provinsi')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="font-semibold montserrat-font text-gray-700 text-sm" for="kode_pos">Kode
                            Pos</label>
                        <div
                            class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 14.2864C3.14864 15.1031 2 16.2412 2 17.5C2 19.9853 6.47715 22 12 22C17.5228 22 22 19.9853 22 17.5C22 16.2412 20.8514 15.1031 19 14.2864M18 8C18 12.0637 13.5 14 12 17C10.5 14 6 12.0637 6 8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8ZM13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <input type="text" value="{{ old('kode_pos') }}" name="kode_pos"
                                placeholder="Kode Pos..." class="bg-transparent text-black w-full focus:outline-none">
                        </div>
                        @error('kode_pos')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="font-semibold montserrat-font text-gray-700 text-sm"
                            for="latitude">Latitude</label>
                        <div
                            class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 14.2864C3.14864 15.1031 2 16.2412 2 17.5C2 19.9853 6.47715 22 12 22C17.5228 22 22 19.9853 22 17.5C22 16.2412 20.8514 15.1031 19 14.2864M18 8C18 12.0637 13.5 14 12 17C10.5 14 6 12.0637 6 8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8ZM13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <input type="number" step="any" value="{{ old('latitude') }}" name="latitude"
                                placeholder="Latitude..." class="bg-transparent text-black w-full focus:outline-none">
                        </div>
                        @error('latitude')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="font-semibold montserrat-font text-gray-700 text-sm"
                            for="longitude">Longitude</label>
                        <div
                            class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 14.2864C3.14864 15.1031 2 16.2412 2 17.5C2 19.9853 6.47715 22 12 22C17.5228 22 22 19.9853 22 17.5C22 16.2412 20.8514 15.1031 19 14.2864M18 8C18 12.0637 13.5 14 12 17C10.5 14 6 12.0637 6 8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8ZM13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <input type="number" step="any" value="{{ old('longitude') }}" name="longitude"
                                placeholder="Longitude..."
                                class="bg-transparent text-black w-full focus:outline-none">
                        </div>
                        @error('longitude')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex gap-4 items-center justify-start col-span-1 md:col-span-2">
                        <button type="submit"
                            class="group relative flex items-center rounded-full bg-primary px-6 py-2 font-bold text-lg text-white transition-all duration-300 ease-in-out hover:opacity-85 active:opacity-100">
                            <span class="montserrat-font">Submit</span>
                            <!-- SVG icon that appears on hover -->
                            <span
                                class="ml-0 w-0 overflow-hidden transition-all duration-300 ease-in-out group-hover:ml-4 group-hover:w-6">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.5 7.27783L12 12.0001M12 12.0001L3.49997 7.27783M12 12.0001L12 21.5001M14 20.889L12.777 21.5684C12.4934 21.726 12.3516 21.8047 12.2015 21.8356C12.0685 21.863 11.9315 21.863 11.7986 21.8356C11.6484 21.8047 11.5066 21.726 11.223 21.5684L3.82297 17.4573C3.52346 17.2909 3.37368 17.2077 3.26463 17.0893C3.16816 16.9847 3.09515 16.8606 3.05048 16.7254C3 16.5726 3 16.4013 3 16.0586V7.94153C3 7.59889 3 7.42757 3.05048 7.27477C3.09515 7.13959 3.16816 7.01551 3.26463 6.91082C3.37368 6.79248 3.52345 6.70928 3.82297 6.54288L11.223 2.43177C11.5066 2.27421 11.6484 2.19543 11.7986 2.16454C11.9315 2.13721 12.0685 2.13721 12.2015 2.16454C12.3516 2.19543 12.4934 2.27421 12.777 2.43177L20.177 6.54288C20.4766 6.70928 20.6263 6.79248 20.7354 6.91082C20.8318 7.01551 20.9049 7.13959 20.9495 7.27477C21 7.42757 21 7.59889 21 7.94153L21 12.5001M7.5 4.50008L16.5 9.50008M16 18.0001L18 20.0001L22 16.0001"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                        </button>

                        <button type="button" id="prev-step-btn"
                            class="group relative flex items-center rounded-full border border-primary px-6 py-2 font-bold text-lg text-primary transition-all duration-300 ease-in-out hover:opacity-85 active:opacity-100">
                            <span class="montserrat-font">Priveous</span>
                            <!-- SVG icon that appears on hover -->
                            <span
                                class="ml-0 w-0 overflow-hidden transition-all duration-300 ease-in-out group-hover:ml-4 group-hover:w-6">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 12H5M5 12L12 19M5 12L12 5" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get elements
        const step1 = document.getElementById('step1');
        const step2 = document.getElementById('step2');
        const nextBtn = document.getElementById('next-step-btn');
        const prevBtn = document.getElementById('prev-step-btn');

        // Next button click handler
        nextBtn.addEventListener('click', function() {
            // Hide step 1 and show step 2
            step1.style.display = 'none';
            step2.style.display = 'grid';
        });

        // Previous button click handler
        prevBtn.addEventListener('click', function() {
            // Hide step 2 and show step 1
            step2.style.display = 'none';
            step1.style.display = 'grid';
        });
    });
</script>

<script src="{{ asset('static/js/tailwind.js') }}"></script>

</html>
