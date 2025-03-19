<x-admin-layout title="User Data">
    <div class="p-4">
        <div class="flex items-end justify-between">
            <form action="" class="flex gap-4 items-center">
                <div class="flex rounded-full items-center gap-2 text-gray-400 bg-white w-fit pl-2">
                    <label for="search">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 21L16.65 16.65M11 6C13.7614 6 16 8.23858 16 11M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </label>
                    <input type="text" id="search" placeholder="Search..."
                        class="w-80 bg-transparent text-black placeholder:text-gray-400 focus:outline-none">
                    <button type="submit" class="bg-primary text-white font-semibold rounded-full p-2 px-4">
                        Search
                    </button>
                </div>
            </form>
            <div>
                <p class="text-sm text-gray-400">Showing 12 of records</p>
            </div>
        </div>
        <div class="container mx-auto mt-4">
            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="w-full text-sm text-left border-collapse">
                    <thead class="bg-primary text-white uppercase">
                        <tr>
                            <th class="px-6 py-3 border-b">Account</th>
                            <th class="px-6 py-3 border-b">Phone Number</th>
                            <th class="px-6 py-3 border-b">Status</th>
                            <th class="px-6 py-3 border-b">Role</th>
                            <th class="px-6 py-3 border-b">Date Join</th>
                            <th class="px-6 py-3 border-b">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @for ($i = 1; $i <= 10; $i++)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 flex items-center gap-4">
                                    <img class="w-8 h-8" src="https://www.pngmart.com/files/23/Profile-PNG-Photo.png"
                                        alt="">
                                    <p><span class="font-semibold">Franklin</span> - franklinchang@gmail.com</p>
                                </td>
                                <td class="px-6 py-4">08123456789</td>
                                <td class="px-6 py-4">
                                    <div class="bg-green-600/20 p-2 text-center rounded-full text-green-600 font-bold">
                                        Active
                                    </div>
                                </td>
                                <td class="px-6 py-4">Admin</td>
                                <td class="px-6 py-4">Wed, 19 March 2025</td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('admin.user.edituserView') }}" class="text-blue-600 hover:underline">Edit</a>
                                    <form action="" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline ml-2">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
        <a href="{{ route('admin.user.adduserView') }}" class="fixed bottom-0 right-0 p-2 rounded-md text-white m-5 bg-primary transition-all duration-300 ease-in-out hover:scale-125">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 8V16M8 12H16M7.8 21H16.2C17.8802 21 18.7202 21 19.362 20.673C19.9265 20.3854 20.3854 19.9265 20.673 19.362C21 18.7202 21 17.8802 21 16.2V7.8C21 6.11984 21 5.27976 20.673 4.63803C20.3854 4.07354 19.9265 3.6146 19.362 3.32698C18.7202 3 17.8802 3 16.2 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V16.2C3 17.8802 3 18.7202 3.32698 19.362C3.6146 19.9265 4.07354 20.3854 4.63803 20.673C5.27976 21 6.11984 21 7.8 21Z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </div>
</x-admin-layout>
