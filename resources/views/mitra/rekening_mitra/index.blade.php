<x-mitra-layout title="List Rekening Mitra">
    <div class="p-4">
        <div class="grid grid-cols-4 gap-4">
            @foreach ($rekeningMitra as $rekening)
                <div class="bg-white montserrat-font rounded-md shadow-md p-4 space-y-4">
                    <h1 class="font-bold">{{ $rekening->metodePembayaranMitra->nama_metode }}</h1>
                    <div>
                        <p class="font-semibold">{{ $rekening->nama_pemilik }}</p>
                        <p class="text-xs">{{ $rekening->nomor_rekening }}</p>
                    </div>
                    <div class="w-full flex justify-end gap-2">
                        <a href="{{ route('mitra.rekeningMitra.RekeningEdit', $rekening->id_rekening_mitra) }}"
                            class="flex items-center justify-center w-8 h-8 text-sm text-white bg-primary rounded-full hover:text-black hover:bg-yellow-300 text-left">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 3.99998H6.8C5.11984 3.99998 4.27976 3.99998 3.63803 4.32696C3.07354 4.61458 2.6146 5.07353 2.32698 5.63801C2 6.27975 2 7.11983 2 8.79998V17.2C2 18.8801 2 19.7202 2.32698 20.362C2.6146 20.9264 3.07354 21.3854 3.63803 21.673C4.27976 22 5.11984 22 6.8 22H15.2C16.8802 22 17.7202 22 18.362 21.673C18.9265 21.3854 19.3854 20.9264 19.673 20.362C20 19.7202 20 18.8801 20 17.2V13M7.99997 16H9.67452C10.1637 16 10.4083 16 10.6385 15.9447C10.8425 15.8957 11.0376 15.8149 11.2166 15.7053C11.4184 15.5816 11.5914 15.4086 11.9373 15.0627L21.5 5.49998C22.3284 4.67156 22.3284 3.32841 21.5 2.49998C20.6716 1.67156 19.3284 1.67155 18.5 2.49998L8.93723 12.0627C8.59133 12.4086 8.41838 12.5816 8.29469 12.7834C8.18504 12.9624 8.10423 13.1574 8.05523 13.3615C7.99997 13.5917 7.99997 13.8363 7.99997 14.3255V16Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                        <label for="modal-delete-toggle-{{ $loop->iteration }}"
                            class="flex items-center justify-center w-8 h-8 text-sm text-white bg-primary rounded-full hover:bg-red-600 text-left">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path
                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                </path>
                                <line x1="10" y1="11" x2="10" y2="17">
                                </line>
                                <line x1="14" y1="11" x2="14" y2="17">
                                </line>
                            </svg>
                        </label>

                    </div>
                </div>
                <x-modal-delete counter="{{ $loop->iteration }}"
                    formAction="{{ route('mitra.rekeningMitra.RekeningDestroy', $rekening->id_rekening_mitra) }}"
                    uuid="{{ $rekening->id_rekening_mitra }}" />
            @endforeach
        </div>
    </div>
    <a href="{{ route('mitra.rekeningMitra.RekeningCreate') }}"
        class="fixed bottom-0 right-0 p-2 rounded-md text-white m-5 bg-primary transition-all duration-300 ease-in-out hover:scale-125">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M12 8V16M8 12H16M7.8 21H16.2C17.8802 21 18.7202 21 19.362 20.673C19.9265 20.3854 20.3854 19.9265 20.673 19.362C21 18.7202 21 17.8802 21 16.2V7.8C21 6.11984 21 5.27976 20.673 4.63803C20.3854 4.07354 19.9265 3.6146 19.362 3.32698C18.7202 3 17.8802 3 16.2 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V16.2C3 17.8802 3 18.7202 3.32698 19.362C3.6146 19.9265 4.07354 20.3854 4.63803 20.673C5.27976 21 6.11984 21 7.8 21Z"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </a>
</x-mitra-layout>
