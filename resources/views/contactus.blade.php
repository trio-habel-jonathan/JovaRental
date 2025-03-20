<x-user-layout title="Home">
    <section id="contactfrom">
        <div class="w-full p-6 lg:p-12 flex flex-col justify-center items-center">
            <div class="w-full lg:w-1/2 flex flex-col justify-center items-center space-y-4">
                <h1 class="text-primary uppercase font-bold text-center text-4xl">Contact Us</h1>
                <div class="h-[2px] rounded-full w-32 bg-primary"></div>
                <p class="text-center">Jika Anda mengalami masalah seperti pemesanan, kendaraan, atau layanan kami,
                    jangan ragu untuk
                    menghubungi tim support kami. Kami siap membantu Anda dengan cepat dan profesional!</p>
            </div>
            <form action="" class="p-6 w-full lg:w-3/4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 rounded-md shadow-lg bg-white">
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
</x-user-layout>
