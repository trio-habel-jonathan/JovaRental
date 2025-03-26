<x-auth-layout title="Register">
    <div class="grid grid-cols-2">
        <div class="w-full h-full bg-black hidden lg:block">
            <img draggable="false" src="https://i.pinimg.com/736x/81/bb/9b/81bb9b0c6be3bc436339d58c5d658df1.jpg"
                class="h-screen w-full object-cover" alt="">
        </div>
        <div class="w-full h-full py-4 flex flex-col justify-center gap-4 items-center">
            <h1 class="font-bold text-xl md:text-2xl lg:text-3xl uppercase">Daftar Sebagai Mitra</h1>
            <form action="{{route('register.mitra')}}" method="POST" class="w-3/4 grid grid-cols-2 gap-6">
                @csrf
                <div>
                    <label class="font-semibold montserrat-font text-gray-700 text-sm" for="nama_mitra">Nama
                        Mitra</label>
                    <div
                        class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.5 11H4.6C4.03995 11 3.75992 11 3.54601 11.109C3.35785 11.2049 3.20487 11.3578 3.10899 11.546C3 11.7599 3 12.0399 3 12.6V21M16.5 11H19.4C19.9601 11 20.2401 11 20.454 11.109C20.6422 11.2049 20.7951 11.3578 20.891 11.546C21 11.7599 21 12.0399 21 12.6V21M16.5 21V6.2C16.5 5.0799 16.5 4.51984 16.282 4.09202C16.0903 3.71569 15.7843 3.40973 15.408 3.21799C14.9802 3 14.4201 3 13.3 3H10.7C9.57989 3 9.01984 3 8.59202 3.21799C8.21569 3.40973 7.90973 3.71569 7.71799 4.09202C7.5 4.51984 7.5 5.0799 7.5 6.2V21M22 21H2M11 7H13M11 11H13M11 15H13"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <input type="text" name="nama_mitra" id="nama_mitra"
                            class="bg-transparent w-full text-black focus:outline-none" value="{{ old('nama_mitra') }}"
                            placeholder="Nama Mitra...">
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
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 20C5.33579 17.5226 8.50702 16 12 16C15.493 16 18.6642 17.5226 21 20M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
                    <label class="font-semibold montserrat-font text-gray-700 text-sm" for="no_identitas">Nomor Induk
                        Berusaha</label>
                    <div
                        class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.38028 8.85335C9.07627 10.303 10.0251 11.6616 11.2266 12.8632C12.4282 14.0648 13.7869 15.0136 15.2365 15.7096C15.3612 15.7694 15.4235 15.7994 15.5024 15.8224C15.7828 15.9041 16.127 15.8454 16.3644 15.6754C16.4313 15.6275 16.4884 15.5704 16.6027 15.4561C16.9523 15.1064 17.1271 14.9316 17.3029 14.8174C17.9658 14.3864 18.8204 14.3864 19.4833 14.8174C19.6591 14.9316 19.8339 15.1064 20.1835 15.4561L20.3783 15.6509C20.9098 16.1824 21.1755 16.4481 21.3198 16.7335C21.6069 17.301 21.6069 17.9713 21.3198 18.5389C21.1755 18.8242 20.9098 19.09 20.3783 19.6214L20.2207 19.779C19.6911 20.3087 19.4263 20.5735 19.0662 20.7757C18.6667 21.0001 18.0462 21.1615 17.588 21.1601C17.1751 21.1589 16.8928 21.0788 16.3284 20.9186C13.295 20.0576 10.4326 18.4332 8.04466 16.0452C5.65668 13.6572 4.03221 10.7948 3.17124 7.76144C3.01103 7.19699 2.93092 6.91477 2.9297 6.50182C2.92833 6.0436 3.08969 5.42311 3.31411 5.0236C3.51636 4.66357 3.78117 4.39876 4.3108 3.86913L4.46843 3.7115C4.99987 3.18006 5.2656 2.91433 5.55098 2.76999C6.11854 2.48292 6.7888 2.48292 7.35636 2.76999C7.64174 2.91433 7.90747 3.18006 8.43891 3.7115L8.63378 3.90637C8.98338 4.25597 9.15819 4.43078 9.27247 4.60655C9.70347 5.26945 9.70347 6.12403 9.27247 6.78692C9.15819 6.96269 8.98338 7.1375 8.63378 7.4871C8.51947 7.60142 8.46231 7.65857 8.41447 7.72538C8.24446 7.96281 8.18576 8.30707 8.26748 8.58743C8.29048 8.66632 8.32041 8.72866 8.38028 8.85335Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <input type="text" name="no_identitas" value="{{ old('no_identitas') }}" id="no_identitas"
                            class="bg-transparent w-full text-black focus:outline-none"
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
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.38028 8.85335C9.07627 10.303 10.0251 11.6616 11.2266 12.8632C12.4282 14.0648 13.7869 15.0136 15.2365 15.7096C15.3612 15.7694 15.4235 15.7994 15.5024 15.8224C15.7828 15.9041 16.127 15.8454 16.3644 15.6754C16.4313 15.6275 16.4884 15.5704 16.6027 15.4561C16.9523 15.1064 17.1271 14.9316 17.3029 14.8174C17.9658 14.3864 18.8204 14.3864 19.4833 14.8174C19.6591 14.9316 19.8339 15.1064 20.1835 15.4561L20.3783 15.6509C20.9098 16.1824 21.1755 16.4481 21.3198 16.7335C21.6069 17.301 21.6069 17.9713 21.3198 18.5389C21.1755 18.8242 20.9098 19.09 20.3783 19.6214L20.2207 19.779C19.6911 20.3087 19.4263 20.5735 19.0662 20.7757C18.6667 21.0001 18.0462 21.1615 17.588 21.1601C17.1751 21.1589 16.8928 21.0788 16.3284 20.9186C13.295 20.0576 10.4326 18.4332 8.04466 16.0452C5.65668 13.6572 4.03221 10.7948 3.17124 7.76144C3.01103 7.19699 2.93092 6.91477 2.9297 6.50182C2.92833 6.0436 3.08969 5.42311 3.31411 5.0236C3.51636 4.66357 3.78117 4.39876 4.3108 3.86913L4.46843 3.7115C4.99987 3.18006 5.2656 2.91433 5.55098 2.76999C6.11854 2.48292 6.7888 2.48292 7.35636 2.76999C7.64174 2.91433 7.90747 3.18006 8.43891 3.7115L8.63378 3.90637C8.98338 4.25597 9.15819 4.43078 9.27247 4.60655C9.70347 5.26945 9.70347 6.12403 9.27247 6.78692C9.15819 6.96269 8.98338 7.1375 8.63378 7.4871C8.51947 7.60142 8.46231 7.65857 8.41447 7.72538C8.24446 7.96281 8.18576 8.30707 8.26748 8.58743C8.29048 8.66632 8.32041 8.72866 8.38028 8.85335Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <input type="text" name="npwp" value="{{ old('npwp') }}" id="npwp"
                            class="bg-transparent w-full text-black focus:outline-none" placeholder="NPWP...">
                    </div>
                    @error('npwp')
                    @enderror
                </div>
                <div>
                    <label class="font-semibold montserrat-font text-gray-700 text-sm" for="">Tipe Mitra</label>
                    <div
                        class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 20C5.33579 17.5226 8.50702 16 12 16C15.493 16 18.6642 17.5226 21 20M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <select name="tipe_mitra" class="bg-transparent text-black w-full focus:outline-none" id="">

                            <option value="individu">Individu</option>
                            <option value="perusahaan">Perusahaan</option>
                        </select>
                    </div>
                    @error('tipe_mitra')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="font-semibold montserrat-font text-gray-700 text-sm" for="">Alamat</label>
                    <div
                        class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 14.2864C3.14864 15.1031 2 16.2412 2 17.5C2 19.9853 6.47715 22 12 22C17.5228 22 22 19.9853 22 17.5C22 16.2412 20.8514 15.1031 19 14.2864M18 8C18 12.0637 13.5 14 12 17C10.5 14 6 12.0637 6 8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8ZM13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <input type="text" value="{{ old('alamat') }}" name="alamat" placeholder="Alamat..."
                            class="bg-transparent text-black w-full focus:outline-none">
                    </div>
                    @error('alamat')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="font-semibold montserrat-font text-gray-700 text-sm" for="">No Telepon</label>
                    <div
                        class="flex gap-4 items-center text-gray-400 border-b-2 border-gray-400 bg-transparent p-3 transition-all duration-300 ease-in-out">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 14.2864C3.14864 15.1031 2 16.2412 2 17.5C2 19.9853 6.47715 22 12 22C17.5228 22 22 19.9853 22 17.5C22 16.2412 20.8514 15.1031 19 14.2864M18 8C18 12.0637 13.5 14 12 17C10.5 14 6 12.0637 6 8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8ZM13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <input type="number" inputmode="numeric" value="{{ old('no_telepon') }}" name="no_telepon"
                            placeholder="Nomor Telepon..." class="bg-transparent text-black w-full focus:outline-none">
                    </div>
                    @error('alamat')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex gap-4 items-center justify-end">
                    <button
                        class="w-full py-2 rounded-full shadow-2xl text-white uppercase font-bold bg-gradient-to-r from-sky-600 to-indigo-800 transition-all duration-300 ease-in-out hover:scale-105">
                        Register
                    </button>
                    <a href="{{ route('home') }}"
                        class="w-full py-2 text-center rounded-full shadow-2xl text-primary uppercase font-bold bg-white  transition-all duration-300 ease-in-out hover:scale-105">
                        Back
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-auth-layout>