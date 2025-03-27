<x-admin-layout title="Clasifications Vehicles">
    <div class="p-4 space-y-4">
        <div class="bg-white p-4 rounded-md shadow-md">
            <div class="flex items-center gap-4 mb-4">
                <svg width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 16V12M12 8H12.01M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <h1 class="text-xl montserrat-font font-bold uppercase">Jenis Kendaraan</h1>
            </div>
            <div class="w-full grid grid-cols-2 gap-4">
                <div class="border-l-2 flex gap-4 items-center pl-4 py-2 border-primary bg-primary/10 rounded-md">
                    <svg width="25" height="25" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 13H8M2 9L4 10L5.27064 6.18807C5.53292 5.40125 5.66405 5.00784 5.90729 4.71698C6.12208 4.46013 6.39792 4.26132 6.70951 4.13878C7.06236 4 7.47705 4 8.30643 4H15.6936C16.523 4 16.9376 4 17.2905 4.13878C17.6021 4.26132 17.8779 4.46013 18.0927 4.71698C18.3359 5.00784 18.4671 5.40125 18.7294 6.18807L20 10L22 9M16 13H19M6.8 10H17.2C18.8802 10 19.7202 10 20.362 10.327C20.9265 10.6146 21.3854 11.0735 21.673 11.638C22 12.2798 22 13.1198 22 14.8V17.5C22 17.9647 22 18.197 21.9616 18.3902C21.8038 19.1836 21.1836 19.8038 20.3902 19.9616C20.197 20 19.9647 20 19.5 20H19C17.8954 20 17 19.1046 17 18C17 17.7239 16.7761 17.5 16.5 17.5H7.5C7.22386 17.5 7 17.7239 7 18C7 19.1046 6.10457 20 5 20H4.5C4.03534 20 3.80302 20 3.60982 19.9616C2.81644 19.8038 2.19624 19.1836 2.03843 18.3902C2 18.197 2 17.9647 2 17.5V14.8C2 13.1198 2 12.2798 2.32698 11.638C2.6146 11.0735 3.07354 10.6146 3.63803 10.327C4.27976 10 5.11984 10 6.8 10Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div>
                        <h1 class="text-xl font-bold uppercase montserrat-font">Mobil</h1>
                        <p class="plus-jakarta-sans-font">Kendaraan yang memiliki 4 roda</p>
                    </div>
                </div>
                <div class="border-l-2 flex gap-4 items-center pl-4 py-2 border-primary bg-primary/10 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"
                        width="30" height="30" viewBox="0 0 50 50">
                        <path
                            d="M37.164062 9C35.776026 9 34.510655 9.3013275 33.511719 9.859375C32.988328 10.151763 32.515961 10.541523 32.181641 11.013672 A 1.0001 1.0001 0 0 0 32 11L27 11 A 1.0001 1.0001 0 1 0 27 13L31.744141 13C31.8002 13.266576 31.898056 13.517555 32.03125 13.75 A 1.0001 1.0001 0 0 0 32.015625 14.179688C32.988434 19.530138 32.72952 25.149528 31.335938 29.306641C30.639146 31.385197 29.661456 33.087325 28.478516 34.234375C27.295576 35.381425 25.942196 36 24.267578 36C23.14423 36 22.237532 35.240694 21.890625 33.435547C21.543718 31.6304 21.955647 28.844708 23.869141 25.496094 A 1.0001 1.0001 0 0 0 23.931641 25.361328C24.316967 25.240604 24.678959 25.104473 24.994141 24.916016C25.478772 24.626238 26.005859 24.113335 26.005859 23.367188C26.005859 22.669659 25.835925 21.975755 25.525391 21.353516C25.370124 21.042396 25.180417 20.748361 24.902344 20.490234C24.62427 20.232108 24.213494 19.994141 23.716797 19.994141L14.28125 19.994141C14.182933 19.994141 14.091091 20.010399 14 20.027344L14 14 A 1.0001 1.0001 0 0 0 13 13L2 13 A 1.0001 1.0001 0 0 0 1 14L1 24 A 1.0001 1.0001 0 1 0 1 26L9.6640625 26C5.5053486 28.756038 4.0507813 32.683594 4.0507812 32.683594 A 1.0001 1.0001 0 0 0 4.7246094 33.960938L6.9023438 34.583984C6.3345384 35.595724 6 36.761065 6 38C6 41.854334 9.1456661 45 13 45C16.854334 45 20 41.854334 20 38L24.267578 38L32.060547 38C32.179715 38.986751 32.484448 39.717662 32.982422 40.226562C33.636252 40.89474 34.488004 41 35 41C35.218658 41 35.425951 40.949517 35.623047 40.876953C36.723498 43.307626 39.169773 45 42 45C45.853698 45 49 41.853698 49 38C49 37.195185 48.849318 36.425861 48.597656 35.703125C48.954075 35.603867 49.335495 35.406193 49.599609 35.060547C49.900433 34.666813 50 34.186166 50 33.720703C50 33.240869 49.875943 32.847389 49.623047 32.275391C49.370151 31.703392 48.970149 31.038348 48.363281 30.400391C47.229681 29.208715 45.34262 28.162063 42.585938 28.027344C42.525187 22.544809 39.819751 18.179454 38.097656 15.943359C38.396238 15.902164 38.671967 15.836607 38.927734 15.740234C39.428973 15.551366 39.862484 15.206717 40.117188 14.791016C40.626593 13.959613 40.509766 13.158415 40.509766 12.498047C40.509766 11.839768 40.626373 11.04221 40.117188 10.210938C39.862595 9.7953008 39.429108 9.4488016 38.927734 9.2597656C38.426361 9.0707297 37.857706 8.9997194 37.164062 9 z M 37.164062 11 A 1.0001 1.0001 0 0 0 37.166016 11C37.708372 10.999781 38.050639 11.068691 38.220703 11.132812C38.390767 11.196933 38.389452 11.216922 38.412109 11.253906C38.457419 11.327886 38.509766 11.778326 38.509766 12.498047C38.509766 13.219679 38.457209 13.672497 38.412109 13.746094C38.389559 13.782894 38.390899 13.803054 38.220703 13.867188C38.050459 13.931319 37.706618 14 37.164062 14C36.621082 14 36.10646 13.936107 35.650391 13.828125C35.642762 13.826319 35.636502 13.824096 35.628906 13.822266L34.865234 13.566406C34.732587 13.510803 34.597787 13.456831 34.486328 13.394531C33.865379 13.047451 33.6875 12.70423 33.6875 12.498047C33.6875 12.293566 33.865264 11.952421 34.486328 11.605469C35.107392 11.258516 36.0781 11 37.164062 11 z M 3 15L12 15L12 23.269531C11.999257 23.302165 11.994141 23.334532 11.994141 23.367188C11.994141 23.383055 11.999522 23.398228 12 23.414062L12 24L3 24L3 15 z M 34.095703 15.419922L34.164062 15.443359C34.419392 15.547893 34.687824 15.635542 34.966797 15.710938L35.400391 15.855469C35.603266 16.064068 40.416852 21.211285 40.486328 28.125C36.33626 28.755066 32.596901 31.894476 32.066406 36L29.382812 36C29.534032 35.871631 29.727656 35.810961 29.871094 35.671875C31.36306 34.225175 32.462588 32.239803 33.232422 29.943359C34.626475 25.784844 34.808484 20.562233 34.095703 15.419922 z M 14.439453 22.005859L23.560547 22.005859C23.598267 22.047929 23.658837 22.120163 23.724609 22.251953C23.854125 22.511473 23.92226 22.886315 23.951172 23.193359C23.762075 23.304956 23.361888 23.460906 22.830078 23.585938C21.757049 23.83821 20.167583 23.994141 18.435547 23.994141C16.704636 23.994141 15.413577 23.831872 14.671875 23.603516C14.308545 23.491653 14.096642 23.361921 14.021484 23.298828C14.034504 22.980653 14.131328 22.540778 14.275391 22.251953C14.341151 22.120114 14.401762 22.047935 14.439453 22.005859 z M 14.193359 26L18.15625 26C18.252521 26.000837 18.336896 26.005859 18.435547 26.005859C18.534824 26.005859 18.628203 26.000868 18.726562 26L21.527344 26C20.112855 29.001093 19.524751 31.727674 19.925781 33.814453C20.087601 34.656491 20.441432 35.36725 20.867188 36L19.140625 36L6.484375 32.384766C7.0140076 31.131905 8.7498356 27.597205 14.193359 26 z M 42 30C44.618246 30 46.053799 30.874962 46.914062 31.779297C47.344195 32.231464 47.624615 32.703202 47.792969 33.083984C47.961323 33.464767 48 33.840037 48 33.720703C48 33.812653 48.007306 33.76497 48.003906 33.78125C47.812448 33.81052 47.200239 33.77275 46.392578 33.65625C44.730245 33.416369 42.244663 33.027822 39.628906 34.070312 A 1.0001 1.0001 0 0 0 39.628906 34.072266C37.384303 34.968985 36.320563 36.506059 35.734375 37.640625C35.441281 38.207908 35.232494 38.674093 35.091797 38.880859C34.951106 39.087577 35.072978 39 35 39C34.701996 39 34.553826 38.974948 34.410156 38.828125C34.267292 38.682125 34.00296 38.227374 34 37.017578C34.042301 35.545163 34.61662 34.207109 35.513672 33.095703C37.040517 31.251351 39.519935 30 42 30 z M 8.8339844 35.134766L11.113281 35.787109C10.461821 36.339358 10 37.088037 10 38C10 39.64497 11.35503 41 13 41C14.64497 41 16 39.64497 16 38C16 37.639611 15.73216 37.393621 15.613281 37.072266L17.980469 37.748047C17.984719 37.832637 18 37.914271 18 38C18 40.773666 15.773666 43 13 43C10.226334 43 8 40.773666 8 38C8 37.054661 8.2605192 36.177234 8.7128906 35.425781 A 1.0001 1.0001 0 0 0 8.8339844 35.134766 z M 43.441406 35.390625C44.388158 35.394776 45.289306 35.518661 46.107422 35.636719C46.216447 35.652451 46.312533 35.661776 46.417969 35.677734C46.78446 36.372266 47 37.156089 47 38C47 40.772302 44.772302 43 42 43C39.661758 43 37.727993 41.399855 37.173828 39.246094C37.28571 39.017046 37.391354 38.787779 37.509766 38.558594C37.914189 37.775833 38.400152 36.996821 39.5 36.355469C39.185732 36.829379 39 37.394292 39 38C39 39.64497 40.35503 41 42 41C43.64497 41 45 39.64497 45 38C45 36.878997 44.362894 35.905249 43.441406 35.390625 z M 13 37C13.56503 37 14 37.43497 14 38C14 38.56503 13.56503 39 13 39C12.43497 39 12 38.56503 12 38C12 37.43497 12.43497 37 13 37 z M 42 37C42.56503 37 43 37.43497 43 38C43 38.56503 42.56503 39 42 39C41.43497 39 41 38.56503 41 38C41 37.43497 41.43497 37 42 37 z" />
                    </svg>
                    <div>
                        <h1 class="text-xl font-bold uppercase montserrat-font">Motor</h1>
                        <p class="plus-jakarta-sans-font">Kendaraan yang memiliki 2 roda</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white p-4 rounded-md shadow-md">
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
                @for ($i = 0; $i < 12; $i++)
                    <div class="flex flex-col gap-4 items-start p-4 relative shadow-md rounded-md">
                        <div class="w-14 h-14 rounded-2xl bg-primary/20 text-primary flex items-center justify-center">
                            <svg width="35" height="35" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 13H8M2 9L4 10L5.27064 6.18807C5.53292 5.40125 5.66405 5.00784 5.90729 4.71698C6.12208 4.46013 6.39792 4.26132 6.70951 4.13878C7.06236 4 7.47705 4 8.30643 4H15.6936C16.523 4 16.9376 4 17.2905 4.13878C17.6021 4.26132 17.8779 4.46013 18.0927 4.71698C18.3359 5.00784 18.4671 5.40125 18.7294 6.18807L20 10L22 9M16 13H19M6.8 10H17.2C18.8802 10 19.7202 10 20.362 10.327C20.9265 10.6146 21.3854 11.0735 21.673 11.638C22 12.2798 22 13.1198 22 14.8V17.5C22 17.9647 22 18.197 21.9616 18.3902C21.8038 19.1836 21.1836 19.8038 20.3902 19.9616C20.197 20 19.9647 20 19.5 20H19C17.8954 20 17 19.1046 17 18C17 17.7239 16.7761 17.5 16.5 17.5H7.5C7.22386 17.5 7 17.7239 7 18C7 19.1046 6.10457 20 5 20H4.5C4.03534 20 3.80302 20 3.60982 19.9616C2.81644 19.8038 2.19624 19.1836 2.03843 18.3902C2 18.197 2 17.9647 2 17.5V14.8C2 13.1198 2 12.2798 2.32698 11.638C2.6146 11.0735 3.07354 10.6146 3.63803 10.327C4.27976 10 5.11984 10 6.8 10Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h6 class="font-bold text-gray-700 montserrat-font text-lg uppercase">HyperCar</h6>
                        <p class="text-sm">A hypercar is an ultra-high-performance, rare, and expensive vehicle with
                            extreme speed, advanced technology, and over 1,000 HP.</p>
                        <div class="flex items-center justify-between w-full">
                            <p class="font-medium text-sm text-gray-700">14 Vehicles</p>
                            <p
                                class="font-bold uppercase text-xs text-white px-4 py-0.5 bg-primary rounded-full text-center">
                                Mobil</p>
                        </div>
                        <div class="flex gap-2 items-center">
                            <a href="{{ route('admin.clasifications.editKategoriView') }}"
                                class="bg-primary/20 rounded-xl text-primary p-2 transition-all duration-150 ease-in-out hover:text-black hover:bg-yellow-400">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 3.99998H6.8C5.11984 3.99998 4.27976 3.99998 3.63803 4.32696C3.07354 4.61458 2.6146 5.07353 2.32698 5.63801C2 6.27975 2 7.11983 2 8.79998V17.2C2 18.8801 2 19.7202 2.32698 20.362C2.6146 20.9264 3.07354 21.3854 3.63803 21.673C4.27976 22 5.11984 22 6.8 22H15.2C16.8802 22 17.7202 22 18.362 21.673C18.9265 21.3854 19.3854 20.9264 19.673 20.362C20 19.7202 20 18.8801 20 17.2V13M7.99997 16H9.67452C10.1637 16 10.4083 16 10.6385 15.9447C10.8425 15.8957 11.0376 15.8149 11.2166 15.7053C11.4184 15.5816 11.5914 15.4086 11.9373 15.0627L21.5 5.49998C22.3284 4.67156 22.3284 3.32841 21.5 2.49998C20.6716 1.67156 19.3284 1.67155 18.5 2.49998L8.93723 12.0627C8.59133 12.4086 8.41838 12.5816 8.29469 12.7834C8.18504 12.9624 8.10423 13.1574 8.05523 13.3615C7.99997 13.5917 7.99997 13.8363 7.99997 14.3255V16Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                            <form action="">
                                <button type="submit"
                                    class="bg-primary/20 rounded-xl text-primary p-2 transition-all duration-150 ease-in-out hover:text-white hover:bg-red-400">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 3H15M3 6H21M19 6L18.2987 16.5193C18.1935 18.0975 18.1409 18.8867 17.8 19.485C17.4999 20.0118 17.0472 20.4353 16.5017 20.6997C15.882 21 15.0911 21 13.5093 21H10.4907C8.90891 21 8.11803 21 7.49834 20.6997C6.95276 20.4353 6.50009 20.0118 6.19998 19.485C5.85911 18.8867 5.8065 18.0975 5.70129 16.5193L5 6M10 10.5V15.5M14 10.5V15.5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="fixed bottom-0 right-0 m-5">
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
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
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
