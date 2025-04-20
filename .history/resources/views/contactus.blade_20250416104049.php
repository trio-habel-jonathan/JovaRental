<x-user-layout title="Home">
    <section id="contactfrom">
        <div class="max-w-[1600px] mx-auto w-full p-6 lg:p-12 flex flex-col justify-center items-center">
            <div class="w-full mb-4 lg:w-1/2 flex flex-col justify-center items-start lg:items-center space-y-4">
                <h1 data-aos="fade-up" class="text-primary uppercase font-bold text-center text-4xl">Contact Us</h1>
                <div data-aos="fade-up" data-aos-delay="150" class="h-[2px] rounded-full w-32 bg-primary"></div>
                <p data-aos="fade-up" data-aos-delay="300" class="text-start lg:text-center text-sm md:text-base">Jika
                    Anda mengalami masalah seperti
                    pemesanan, kendaraan, atau layanan kami,
                    jangan ragu untuk
                    menghubungi tim support kami. Kami siap membantu Anda dengan cepat dan profesional!</p>
            </div>
            <form action="" data-aos="fade-up" data-aos-delay="450"
                class="p-6 w-full lg:w-3/4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 rounded-md shadow-lg bg-white">
                <div>
                    <label class="font-semibold text-primary" for="name">Name</label>
                    <input type="text" id="name"
                        class="p-2 w-full border-2 shadow-md border-gray-300 rounded-md focus:outline-none transition-all duration-300 ease-in-out hover:scale-105 focus:scale-105"
                        placeholder="Type your email...">
                </div>
                <div>
                    <label class="font-semibold text-primary" for="email">Email</label>
                    <input type="text" id="email"
                        class="p-2 w-full border-2 shadow-md border-gray-300 rounded-md focus:outline-none transition-all duration-300 ease-in-out hover:scale-105 focus:scale-105"
                        placeholder="Type your email...">
                </div>
                <div>
                    <label class="font-semibold text-primary" for="no_hp">Phone Number</label>
                    <input type="text" id="no_hp"
                        class="p-2 w-full border-2 shadow-md border-gray-300 rounded-md focus:outline-none transition-all duration-300 ease-in-out hover:scale-105 focus:scale-105"
                        placeholder="Type your phone number...">
                </div>

                <div class="col-span-1 md:col-span-2 lg:col-span-3">
                    <label class="font-semibold text-primary" for="messages">Messages</label>
                    <textarea name="" id="messages" class="p-2 h-56 w-full border-2 border-gray-300 rounded-md focus:outline-none"
                        id="" placeholder="Type your massage for us"></textarea>
                </div>
                <div>
                    <button
                        class="bg-primary px-6 py-2 text-white font-semibold uppercase rounded-md shadow-md transition-all duration-150 ease-in-out hover:scale-105">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </section>
    <section>
        <!-- Peta Lokasi -->
        <div class="max-w-[1600px] mx-auto w-full p-6 lg:p-12 flex flex-col justify-center items-center">
            <div class="text-center mb-10">
                <h2 data-aos="fade-up" class="text-4xl font-light text-gray-800 tracking-tight">OUR
                    LOCATION</h2>
                <div data-aos="fade-up" class="mt-3 h-1 w-24 bg-primary mx-auto"></div>
                <p data-aos="fade-up" class="mt-4 text-gray-600 max-w-2xl mx-auto">Lokasi kantor
                    pusat kami</p>
            </div>

            <div data-aos="fade-right" data-aos-delay="150" class="bg-white w-full lg:w-3/4 rounded-2xl shadow-xl overflow-hidden">
                <div class="aspect-w-16 aspect-h-9 w-full">
                    <iframe class="w-full h-[500px] border-0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1254.627029895096!2d104.06711693199878!3d1.11411289972001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303133717060061f%3A0x7c748248a50f7e1d!2sPT.%20Pundi%20Mas%20Berjaya!5e0!3m2!1sen!2ssg!4v1743038777005!5m2!1sen!2ssg"
                        allowfullscreen="" loading="lazy" aria-label="PT. Pundi Mas Berjaya location on Google Maps">
                    </iframe>
                </div>

                <div class="p-8 sm:flex sm:items-center sm:justify-between">
                    <div class="mb-4 sm:mb-0">
                        <h3 class="text-xl font-semibold text-gray-900">PT. Pundi Mas Berjaya</h3>
                        <p class="text-gray-600 mt-1">Batam, Indonesia</p>
                    </div>
                    <a href="https://maps.google.com/?q=PT.%20Pundi%20Mas%20Berjaya" target="_blank"
                        class="inline-flex items-center px-5 py-3 bg-primary hover:bg-darkprimary text-white rounded-lg transition-colors duration-200">
                        <span>Get Directions</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-user-layout>
