<x-admin-layout title="Clasifications Vehicles">
    <div class="p-4 space-y-4">
        <div>
            <div class="flex items-center gap-4 mb-4">
                <svg width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 16V12M12 8H12.01M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <h1 class="text-xl montserrat-font font-bold uppercase">Jenis Kendaraan</h1>
            </div>
            <div class="w-full grid grid-cols-4 2xl:grid-cols-5 gap-4">
                @foreach ($allJenis as $jenis)
                    @include('admin.clasifications.partials.kartu_jenis')
                @endforeach
            </div>
        </div>
        <div>
            <div class="flex items-center gap-4 mb-4">
                <svg width="35" height="35" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 16V12M12 8H12.01M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <h1 class="text-xl montserrat-font font-bold uppercase">Kategori Kendaraan</h1>
            </div>
            <div class="w-full grid grid-cols-4 gap-4">
                @foreach ($allKategori as $kategori)
                    @include('admin.clasifications.partials.kartu_klasifikasi')
                @endforeach
            </div>
        </div>
        <div class="fixed bottom-5 right-5 m-5">
            <div class="relative">
                <!-- Main Action Button -->
                <button id="action-btn"
                    class="w-10 h-10 bg-primary text-white rounded-full shadow-lg 
                    flex items-center justify-center transition-all duration-300 ease-in-out 
                    hover:rotate-90 focus:outline-none focus:ring-2 focus:ring-primary/50">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>

                <!-- Hidden Container for Additional Buttons -->
                <div id="action-container"
                    class="absolute bottom-12 right-0 space-y-2 transition-all duration-300 ease-in-out transform origin-bottom-right opacity-0 scale-0 pointer-events-none">
                    <!-- Add Button -->
                    <a href="{{ route('admin.clasifications.createKategoriView') }}" id="add-kategori-button"
                        class="w-10 h-10 bg-primary/20 text-primary transition-all duration-300 ease-in-out hover:bg-primary hover:text-white rounded-full shadow-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 rotate-90" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                    </a>

                    <!-- edit Button -->
                    <a href="{{ route('admin.clasifications.createJenisView') }}" id="add-jenis-button"
                        class="w-10 h-10 bg-primary/20 text-primary transition-all duration-300 ease-in-out hover:bg-primary hover:text-white rounded-full shadow-lg flex items-center justify-center">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 13H8M2 9L4 10L5.27064 6.18807C5.53292 5.40125 5.66405 5.00784 5.90729 4.71698C6.12208 4.46013 6.39792 4.26132 6.70951 4.13878C7.06236 4 7.47705 4 8.30643 4H15.6936C16.523 4 16.9376 4 17.2905 4.13878C17.6021 4.26132 17.8779 4.46013 18.0927 4.71698C18.3359 5.00784 18.4671 5.40125 18.7294 6.18807L20 10L22 9M16 13H19M6.8 10H17.2C18.8802 10 19.7202 10 20.362 10.327C20.9265 10.6146 21.3854 11.0735 21.673 11.638C22 12.2798 22 13.1198 22 14.8V17.5C22 17.9647 22 18.197 21.9616 18.3902C21.8038 19.1836 21.1836 19.8038 20.3902 19.9616C20.197 20 19.9647 20 19.5 20H19C17.8954 20 17 19.1046 17 18C17 17.7239 16.7761 17.5 16.5 17.5H7.5C7.22386 17.5 7 17.7239 7 18C7 19.1046 6.10457 20 5 20H4.5C4.03534 20 3.80302 20 3.60982 19.9616C2.81644 19.8038 2.19624 19.1836 2.03843 18.3902C2 18.197 2 17.9647 2 17.5V14.8C2 13.1198 2 12.2798 2.32698 11.638C2.6146 11.0735 3.07354 10.6146 3.63803 10.327C4.27976 10 5.11984 10 6.8 10Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const actionBtn = document.getElementById('action-btn');
            const actionContainer = document.getElementById('action-container');
            const addKategoriButton = document.getElementById('add-kategori-button');
            const addJenisButton = document.getElementById('add-jenis-button');

            let isOpen = false;

            actionBtn.addEventListener('click', function() {
                isOpen = !isOpen;

                if (isOpen) {
                    // Show additional buttons
                    actionContainer.classList.remove('opacity-0', 'scale-0', 'pointer-events-none');
                    actionContainer.classList.add('opacity-100', 'scale-100', 'pointer-events-auto');

                    // Rotate main button
                    actionBtn.classList.add('rotate-90');
                } else {
                    // Hide additional buttons
                    actionContainer.classList.remove('opacity-100', 'scale-100', 'pointer-events-auto');
                    actionContainer.classList.add('opacity-0', 'scale-0', 'pointer-events-none');

                    // Reset main button rotation
                    actionBtn.classList.remove('rotate-90');
                }
            });

            // Optional: Add click handlers for add and edit buttons
            addKategoriButton.addEventListener('click', function() {
                // Add your add functionality here
                console.log('Add button clicked');
            });

            addJenisButton.addEventListener('click', function() {
                // Add your edit functionality here
                console.log('edit button clicked');
            });
        });
    </script>
</x-admin-layout>
