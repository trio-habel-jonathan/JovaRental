<x-admin-layout title="Metode Pembayaran Platform">
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
                <p class="text-sm text-gray-400">Showing {{ $metodePembayaran->count() }} of
                    {{ $metodePembayaran->count() }} records</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mt-4">
            @forelse ($metodePembayaran as $metode)
                <div class="bg-white p-4 rounded-xl shadow-md space-y-2">
                    <div class="flex items-center justify-between">
                        <div
                            class="{{ $metode->is_active ? 'bg-green-600/20 text-green-600' : 'bg-red-600/20 text-red-600' }} px-3 py-1 text-center rounded-md font-bold text-xs w-fit">
                            {{ $metode->is_active ? 'Active' : 'Inactive' }}
                        </div>
                        <p class="text-xs text-end">{{ date('D, d M Y', strtotime($metode->created_at)) }}</p>
                    </div>
                    <div class="py-4 space-y-2">
                        <div>
                            <h1 class="plus-jakarta-sans-font font-semibold">{{ $metode->nama_metode }}</h1>
                            <h1 class="plus-jakarta-sans-font font-bold text-lg">{{ $metode->jenis_metode }}</h1>
                        </div>
                        <div class="bg-primary/20 p-2 rounded-md">
                            <h1 class="montserrat-font font-medium text-sm">
                                {{ chunk_split($metode->nomor_rekening_platform, 4, ' ') }}
                            </h1>
                            <h1 class="plus-jakarta-sans-font font-medium text-sm">{{ $metode->nama_pemilik_platform }}
                            </h1>
                        </div>

                        <p class="text-xs line-clamp-3 plus-jakarta-sans-font">Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Sunt
                            libero repellendus dolores ad
                            laudantium corrupti suscipit repellat aliquam, culpa ea, nesciunt beatae! Iste explicabo
                            quos,
                            deserunt omnis dolorem illo. In.</p>
                    </div>
                    <div class="flex items-center justify-end gap-2">
                        <div
                            class="text-primary bg-primary/20 p-2 flex items-center justify-center rounded-full transition-all duration-300 ease-in-out hover:bg-yellow-300 hover:text-black">
                            <a
                                href="{{ route('admin.metodePembayaran.edit', $metode->id_metode_pembayaran_platform) }}">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 3.99998H6.8C5.11984 3.99998 4.27976 3.99998 3.63803 4.32696C3.07354 4.61458 2.6146 5.07353 2.32698 5.63801C2 6.27975 2 7.11983 2 8.79998V17.2C2 18.8801 2 19.7202 2.32698 20.362C2.6146 20.9264 3.07354 21.3854 3.63803 21.673C4.27976 22 5.11984 22 6.8 22H15.2C16.8802 22 17.7202 22 18.362 21.673C18.9265 21.3854 19.3854 20.9264 19.673 20.362C20 19.7202 20 18.8801 20 17.2V13M7.99997 16H9.67452C10.1637 16 10.4083 16 10.6385 15.9447C10.8425 15.8957 11.0376 15.8149 11.2166 15.7053C11.4184 15.5816 11.5914 15.4086 11.9373 15.0627L21.5 5.49998C22.3284 4.67156 22.3284 3.32841 21.5 2.49998C20.6716 1.67156 19.3284 1.67155 18.5 2.49998L8.93723 12.0627C8.59133 12.4086 8.41838 12.5816 8.29469 12.7834C8.18504 12.9624 8.10423 13.1574 8.05523 13.3615C7.99997 13.5917 7.99997 13.8363 7.99997 14.3255V16Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                        <form
                            action="{{ route('admin.metodePembayaran.destroy', $metode->id_metode_pembayaran_platform) }}"
                            method="POST" class="inline"
                            onsubmit="return confirm('Are you sure you want to delete this method?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-primary bg-primary/20 p-2 flex items-center justify-center rounded-full transition-all duration-300 ease-in-out hover:bg-red-600 hover:text-white"><svg
                                    width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 3H15M3 6H21M19 6L18.2987 16.5193C18.1935 18.0975 18.1409 18.8867 17.8 19.485C17.4999 20.0118 17.0472 20.4353 16.5017 20.6997C15.882 21 15.0911 21 13.5093 21H10.4907C8.90891 21 8.11803 21 7.49834 20.6997C6.95276 20.4353 6.50009 20.0118 6.19998 19.485C5.85911 18.8867 5.8065 18.0975 5.70129 16.5193L5 6M10 10.5V15.5M14 10.5V15.5"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></button>
                        </form>
                    </div>
                </div>
            @empty
                <tr>
                    <td colspan="7" class="text-center p-4 text-gray-500">
                        No payment methods found.
                    </td>
                </tr>
            @endforelse

        </div>

        <a href="{{ route('admin.metodePembayaran.create') }}"
            class="fixed bottom-0 right-0 p-2 rounded-md text-white m-5 bg-primary transition-all duration-300 ease-in-out hover:scale-125">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 8V16M8 12H16M7.8 21H16.2C17.8802 21 18.7202 21 19.362 20.673C19.9265 20.3854 20.3854 19.9265 20.673 19.362C21 18.7202 21 17.8802 21 16.2V7.8C21 6.11984 21 5.27976 20.673 4.63803C20.3854 4.07354 19.9265 3.6146 19.362 3.32698C18.7202 3 17.8802 3 16.2 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V16.2C3 17.8802 3 18.7202 3.32698 19.362C3.6146 19.9265 4.07354 20.3854 4.63803 20.673C5.27976 21 6.11984 21 7.8 21Z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </div>
</x-admin-layout>
