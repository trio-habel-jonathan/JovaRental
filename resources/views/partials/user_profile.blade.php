<div class="grid grid-cols-1 lg:grid-cols-2 grid-row-reverse items-start justify-items-center gap-8">
    <div class="w-full order-2 lg:order-1">
        {{-- User Information --}}
        <div class="space-y-2 montserrat-font">
            <h1 class="font-semibold text-xl">User Information</h1>
            <div>
                <p>Here you can edit information about yourself.</p>
                <p>The changes will be displayed for other users within 5 minutes.</p>
            </div>
        </div>
        <form action="#" method="POST" class="mt-6 grid grid-cols-1 lg:grid-cols-2 gap-6">
            @csrf
            @method('POST')
            <div class="space-y-2 col-span-2">
                <label for="email">Email Address</label>
                <div class="relative">
                    <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="w-full p-2 border rounded-lg focus:outline-primary">
                    <span class="absolute right-3 inset-y-0 flex items-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 7.99999V13C16 13.7956 16.3161 14.5587 16.8787 15.1213C17.4413 15.6839 18.2043 16 19 16C19.7956 16 20.5587 15.6839 21.1213 15.1213C21.6839 14.5587 22 13.7956 22 13V12C21.9999 9.74302 21.2362 7.55247 19.8333 5.78452C18.4303 4.01658 16.4705 2.77521 14.2726 2.26229C12.0747 1.74936 9.76793 1.99503 7.72734 2.95936C5.68676 3.92368 4.03239 5.54995 3.03325 7.57371C2.03411 9.59748 1.74896 11.8997 2.22416 14.1061C2.69936 16.3125 3.90697 18.2932 5.65062 19.7263C7.39428 21.1593 9.57143 21.9603 11.8281 21.9991C14.0847 22.0379 16.2881 21.3122 18.08 19.94M16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79085 9.79086 7.99999 12 7.99999C14.2091 7.99999 16 9.79085 16 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                </div>
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="space-y-2 col-span-2">
                <label for="no_telepon">Phone Number</label>
                <div class="relative">
                    <input type="text" name="no_telepon" id="no_telepon" value="{{ old('no_telepon', $user->no_telepon) }}" class="w-full p-2 border rounded-lg focus:outline-primary">
                    <span class="absolute right-3 inset-y-0 flex items-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.38028 8.85335C9.07627 10.303 10.0251 11.6616 11.2266 12.8632C12.4282 14.0648 13.7869 15.0136 15.2365 15.7096C15.3612 15.7694 15.4235 15.7994 15.5024 15.8224C15.7828 15.9041 16.127 15.8454 16.3644 15.6754C16.4313 15.6275 16.4884 15.5704 16.6027 15.4561C16.9523 15.1064 17.1271 14.9316 17.3029 14.8174C17.9658 14.3864 18.8204 14.3864 19.4833 14.8174C19.6591 14.9316 19.8339 15.1064 20.1835 15.4561L20.3783 15.6509C20.9098 16.1824 21.1755 16.4481 21.3198 16.7335C21.6069 17.301 21.6069 17.9713 21.3198 18.5389C21.1755 18.8242 20.9098 19.09 20.3783 19.6214L20.2207 19.779C19.6911 20.3087 19.4263 20.5735 19.0662 20.7757C18.6667 21.0001 18.0462 21.1615 17.588 21.1601C17.1751 21.1589 16.8928 21.0788 16.3284 20.9186C13.295 20.0576 10.4326 18.4332 8.04466 16.0452C5.65668 13.6572 4.03221 10.7948 3.17124 7.76144C3.01103 7.19699 2.93092 6.91477 2.9297 6.50182C2.92833 6.0436 3.08969 5.42311 3.31411 5.0236C3.51636 4.66357 3.78117 4.39876 4.3108 3.86913L4.46843 3.7115C4.99987 3.18006 5.2656 2.91433 5.55098 2.76999C6.11854 2.48292 6.7888 2.48292 7.35636 2.76999C7.64174 2.91433 7.90747 3.18006 8.43891 3.7115L8.63378 3.90637C8.98338 4.25597 9.15819 4.43078 9.27247 4.60655C9.70347 5.26945 9.70347 6.12403 9.27247 6.78692C9.15819 6.96269 8.98338 7.1375 8.63378 7.4871C8.51947 7.60142 8.46231 7.65857 8.41447 7.72538C8.24446 7.96281 8.18576 8.30707 8.26748 8.58743C8.29048 8.66632 8.32041 8.72866 8.38028 8.85335Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                </div>
                @error('no_telepon')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-2">
                <button type="submit" class="bg-primary text-white px-4 py-2 rounded-lg">Save Changes</button>
            </div>
        </form>

        <div class="space-y-2 montserrat-font mt-8">
            <h1 class="font-semibold text-xl">Password Update</h1>
            <div>
                <p>Here you can change your password for this account.</p>
                <p>The changes will cause the account to re-login.</p>
            </div>
        </div>
        <form action="#" method="POST" class="mt-6 grid grid-cols-1 lg:grid-cols-2 gap-6">
            @csrf
            @method('POST')
            <div class="space-y-2 col-span-2">
                <label for="password">Password</label>
                <div class="relative">
                    <input type="password" name="password" id="password" value="{{ old('passowrd', $user->password)}}" class="w-full p-2 border rounded-lg focus:outline-primary">
                    <span class="absolute right-3 inset-y-0 flex items-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 4.5C7 4.5 2.73 7.61 1 12C2.73 16.39 7 19.5 12 19.5C17 19.5 21.27 16.39 23 12C21.27 7.61 17 4.5 12 4.5ZM12 17C9.24 17 7 14.76 7 12C7 9.24 9.24 7 12 7C14.76 7 17 9.24 17 12C17 14.76 14.76 17 12 17ZM12 9C10.34 9 9 10.34 9 12C9 13.66 10.34 15 12 15C13.66 15 15 13.66 15 12C15 10.34 13.66 9 12 9Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                </div>
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="space-y-2 col-span-2">
                <label for="password_confirmation">Confirm Password</label>
                <div class="relative">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-2 border rounded-lg focus:outline-primary">
                    <span class="absolute right-3 inset-y-0 flex items-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 4.5C7 4.5 2.73 7.61 1 12C2.73 16.39 7 19.5 12 19.5C17 19.5 21.27 16.39 23 12C21.27 7.61 17 4.5 12 4.5ZM12 17C9.24 17 7 14.76 7 12C7 9.24 9.24 7 12 7C14.76 7 17 9.24 17 12C17 14.76 14.76 17 12 17ZM12 9C10.34 9 9 10.34 9 12C9 13.66 10.34 15 12 15C13.66 15 15 13.66 15 12C15 10.34 13.66 9 12 9Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                </div>
                @error('password_confirmation')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-2">
                <button type="submit" class="bg-primary text-white px-4 py-2 rounded-lg">Save Changes</button>
            </div>
        </form>
    
        {{-- Entity Information --}}
        <div class="space-y-2 montserrat-font mt-8">
            <h1 class="font-semibold text-xl">Entity Information</h1>
            <div>
                <p>Here you can edit information about your entity.</p>
                <p>The changes will be displayed for other users within 5 minutes.</p>
            </div>
        </div>
        <form action="#" method="POST" class="mt-6 grid grid-cols-1 lg:grid-cols-2 gap-6">
            @csrf
            @method('POST')
            <div class="space-y-2 col-span-2">
                <label for="tipe_entitas" class="block mb-1 text-s text-black-800">Entity Type</label>
                <p class="p-2 border rounded-lg bg-gray-100 text-s text-gray-800">
                    {{ ucfirst($entitas->tipe_entitas) }}
                </p>
                @error('tipe_entitas')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>            
            <div class="space-y-2 col-span-2">
                <label for="nama_entitas">Entity Name</label>
                <div class="relative">
                    <input type="text" name="nama_entitas" id="nama_entitas" value="{{ old('nama_entitas', $entitas->nama_entitas) }}" class="w-full p-2 border rounded-lg focus:outline-primary">
                    <span class="absolute right-3 inset-y-0 flex items-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 20C5.33579 17.5226 8.50702 16 12 16C15.493 16 18.6642 17.5226 21 20M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                </div>
                @error('nama_entitas')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="space-y-2">
                <label for="no_identitas">{{ $entitas->tipe_entitas === 'individu' ? 'ID Number (KTP)' : 'ID Number (NIB)' }}</label>
                <div class="relative">
                    <input type="text" name="no_identitas" id="no_identitas" value="{{ old('no_identitas', $entitas->no_identitas) }}" class="w-full p-2 border rounded-lg focus:outline-primary">
                    <span class="absolute right-3 inset-y-0 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-id-card-icon lucide-id-card">
                            <path d="M16 10h2" />
                            <path d="M16 14h2" />
                            <path d="M6.17 15a3 3 0 0 1 5.66 0" />
                            <circle cx="9" cy="11" r="2" />
                            <rect x="2" y="5" width="20" height="14" rx="2" />
                        </svg>
                    </span>
                </div>
                @error('no_identitas')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="space-y-2">
                <label for="npwp">NPWP (Required for Company)</label>
                <div class="relative">
                    <input type="text" name="npwp" id="npwp" value="{{ old('npwp', $entitas->tipe_entitas === 'perusahaan' ? $entitas->npwp : '') }}" {{ $entitas->tipe_entitas === 'individu' ? 'disabled' : '' }} class="w-full p-2 border rounded-lg focus:outline-primary {{ $entitas->tipe_entitas === 'individu' ? 'bg-gray-100' : '' }}">
                    <span class="absolute right-3 inset-y-0 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-id-card-icon lucide-id-card">
                            <path d="M16 10h2" />
                            <path d="M16 14h2" />
                            <path d="M6.17 15a3 3 0 0 1 5.66 0" />
                            <circle cx="9" cy="11" r="2" />
                            <rect x="2" y="5" width="20" height="14" rx="2" />
                        </svg>
                    </span>
                </div>
                @error('npwp')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="space-y-2 col-span-2">
                <label for="alamat">Address</label>
                <div class="relative">
                    <textarea name="alamat" id="alamat" class="w-full p-2 border rounded-lg focus:outline-primary">{{ old('alamat', $entitas->alamat) }}</textarea>
                </div>
                @error('alamat')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-2">
                <button type="submit" class="bg-primary text-white px-4 py-2 rounded-lg">Save Changes</button>
            </div>
        </form>
    </div>

    {{-- User Profile --}}
    <div class="w-full flex flex-col order-1 lg:order-2">
        <h1 class="text-start montserrat-font text-lg font-semibold mb-4">Photo Profile</h1>
        <div class="w-full flex items-center justify-center">
            <img class="rounded-full w-72 aspect-square object-cover "
                src="https://i.pinimg.com/736x/ee/cd/be/eecdbe232b5e579a9c62791f200e8a74.jpg" alt="">
        </div>

        <div class="mt-8">
            <h1 class="text-lg montserrat-font font-semibold mb-2">Notifications</h1>

            <div class="flex flex-col gap-2">
                <div class="flex items-center gap-4 p-2 rounded-xl border border-[#9EC6F3]">
                    <div class="bg-[#9EC6F3] text-white w-10 h-10 rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-check-check-icon lucide-check-check">
                            <path d="M18 6 7 17l-5-5" />
                            <path d="m22 10-7.5 7.5L13 16" />
                        </svg>
                    </div>
                    <div>
                        <h6 class="font-medium">Pemesanan Berhasil Dibuat</h6>
                        <p class="text-sm">Pesanan Anda telah berhasil terekam di sistem dan akan segera diproses</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 p-2 rounded-xl border border-[#95D2B3]">
                    <div class="bg-[#95D2B3] text-white w-10 h-10 rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-check-check-icon lucide-check-check">
                            <path d="M18 6 7 17l-5-5" />
                            <path d="m22 10-7.5 7.5L13 16" />
                        </svg>
                    </div>
                    <div>
                        <h6 class="font-medium">Pemesanan Berhasil Dibuat</h6>
                        <p class="text-sm">Pesanan Anda telah berhasil terekam di sistem dan akan segera diproses</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 p-2 rounded-xl border border-[#FADA7A]">
                    <div class="bg-[#FADA7A] text-white w-10 h-10 rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-check-check-icon lucide-check-check">
                            <path d="M18 6 7 17l-5-5" />
                            <path d="m22 10-7.5 7.5L13 16" />
                        </svg>
                    </div>
                    <div>
                        <h6 class="font-medium">Pemesanan Berhasil Dibuat</h6>
                        <p class="text-sm">Pesanan Anda telah berhasil terekam di sistem dan akan segera diproses</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 p-2 rounded-xl border border-[#F7A4A4]">
                    <div class="bg-[#F7A4A4] text-white w-10 h-10 rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-check-check-icon lucide-check-check">
                            <path d="M18 6 7 17l-5-5" />
                            <path d="m22 10-7.5 7.5L13 16" />
                        </svg>
                    </div>
                    <div>
                        <h6 class="font-medium">Pemesanan Berhasil Dibuat</h6>
                        <p class="text-sm">Pesanan Anda telah berhasil terekam di sistem dan akan segera diproses</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 p-2 rounded-xl border border-[#A6AEBF]">
                    <div class="bg-[#A6AEBF] text-white w-10 h-10 rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-check-check-icon lucide-check-check">
                            <path d="M18 6 7 17l-5-5" />
                            <path d="m22 10-7.5 7.5L13 16" />
                        </svg>
                    </div>
                    <div>
                        <h6 class="font-medium">Pemesanan Berhasil Dibuat</h6>
                        <p class="text-sm">Pesanan Anda telah berhasil terekam di sistem dan akan segera diproses</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
