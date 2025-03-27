<x-admin-layout title="Create kategori Kendaraan">
    <div class="p-4">
        <div class="bg-white rounded-md shadow-md p-4">
            <form action="{{route('admin.clasifications.kategori.store')}}" method="post" class="space-y-6">
                @csrf
                <div class="flex flex-col gap-2">
                    <label for="nama_kategori" class="text-sm font-semibold text-gray-500">Jenis Kendaraan</label>
                    <div class="relative w-full">
                        <div id="custom-select" class="relative">
                            <input type="text" id="select-input" placeholder="Select an option"
                                class="w-full border border-gray-300 rounded-md p-2 pr-8 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            <button id="toggle-dropdown"
                                class="absolute right-2 top-1/2 -translate-y-1/2 text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div id="dropdown-options"
                            class="absolute z-10 w-full mt-1 bg-white border border-gray-300 rounded-md shadow-lg max-h-60 overflow-y-auto hidden">
                            <div id="options-list">
                                <!-- Options will be dynamically populated -->
                                @foreach ($allJenis as $jenis)
                                <div class="option px-3 py-2 hover:bg-gray-100 cursor-pointer"
                                    data-value="{{$jenis->nama_jenis}}" data-id="{{$jenis->id_jenis}}">
                                    {{$jenis->nama_jenis}}
                                </div>
                                @endforeach
                                <input type="text" name="id_jenis" class="hidden" id="id_jenis">
                                @error('id_jenis')
                                <p class="text-[red]">{{$message}}</p>
                                @enderror

                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="nama_kategori" class="text-sm font-semibold text-gray-500">Nama Kategori
                        Kendaraan</label>
                    <input type="text" id="nama_kategori" name="nama_kategori"
                        class="w-full border border-gray-300 rounded-md p-2 pr-8 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                        placeholder="Ketik nama kategori kendaraan...">
                    @error('nama_kategori')
                    <p class="text-[red]">{{$message}}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-2">
                    <label for="deskirpsi" class="text-sm font-semibold text-gray-500">Deskripsi Kategori
                        Kendaraan</label>
                    <input type="text" id="deskirpsi" name="deskripsi"
                        class="w-full border border-gray-300 rounded-md p-2 pr-8 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                        placeholder="Ketik deskripsi kategori kendaraan...">
                    @error('deskripsi')
                    <p class="text-[red]">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <button
                        class="bg-primary px-6 py-2 rounded-md text-white font-semibold transition-all duration-200 ease-in-out hover:scale-105">
                        Save & Tambah
                    </button>
                    <a href="{{ route('admin.clasifications.clasificationsView') }}"
                        class="bg-gray-300 px-6 py-2 rounded-md text-primary font-semibold transition-all duration-200 ease-in-out hover:scale-105">Back</a>
                </div>
            </form>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const selectInput = document.getElementById('select-input');
                const id_jenis = document.getElementById("id_jenis");
                const toggleDropdownBtn = document.getElementById('toggle-dropdown');
                const dropdownOptions = document.getElementById('dropdown-options');
                const optionsList = document.getElementById('options-list');
                const options = document.querySelectorAll('.option');

                // Toggle dropdown
                function toggleDropdown() {
                    dropdownOptions.classList.toggle('hidden');
                    selectInput.focus();
                }

                toggleDropdownBtn.addEventListener('click', toggleDropdown);
                selectInput.addEventListener('click', toggleDropdown);

                // Close dropdown when clicking outside
                document.addEventListener('click', function(event) {
                    if (!document.getElementById('custom-select').contains(event.target)) {
                        dropdownOptions.classList.add('hidden');
                    }
                });

                // Search functionality using main input
                selectInput.addEventListener('input', function() {
                    const searchTerm = this.value.toLowerCase();

                    options.forEach(option => {
                        const text = option.textContent.toLowerCase();
                        option.style.display = text.includes(searchTerm) ? 'block' : 'none';
                    });

                    // Show dropdown when typing
                    if (searchTerm) {
                        dropdownOptions.classList.remove('hidden');
                    }
                });

                // Select option
                options.forEach(option => {
                    option.addEventListener('click', function() {
                        const selectedValue = this.getAttribute('data-value');
                        const selectedId = this.getAttribute('data-id');
                        id_jenis.value = selectedId
                        selectInput.value = selectedValue;
                        dropdownOptions.classList.add('hidden');
                    });
                });

                // Keyboard navigation
                selectInput.addEventListener('keydown', function(e) {
                    if (e.key === 'ArrowDown' || e.key === 'ArrowUp') {
                        e.preventDefault();
                        dropdownOptions.classList.remove('hidden');

                        const visibleOptions = Array.from(options).filter(opt => opt.style.display !== 'none');
                        if (visibleOptions.length > 0) {
                            visibleOptions[0].focus();
                        }
                    }
                });

                // Add keyboard navigation for options
                options.forEach((option, index) => {
                    option.setAttribute('tabindex', '0');
                    option.addEventListener('keydown', function(e) {
                        const visibleOptions = Array.from(options).filter(opt => opt.style.display !==
                            'none');
                        const currentIndex = visibleOptions.indexOf(this);

                        if (e.key === 'ArrowDown' && currentIndex < visibleOptions.length - 1) {
                            e.preventDefault();
                            visibleOptions[currentIndex + 1].focus();
                        } else if (e.key === 'ArrowUp' && currentIndex > 0) {
                            e.preventDefault();
                            visibleOptions[currentIndex - 1].focus();
                        } else if (e.key === 'Enter') {
                            selectInput.value = this.getAttribute('data-value');
                            dropdownOptions.classList.add('hidden');
                        }
                    });
                });
            });
        </script>
        <style>
            /* Ensure no scrollbar when not needed */
            #dropdown-options::-webkit-scrollbar {
                display: none;
            }
        </style>
    </div>
</x-admin-layout>