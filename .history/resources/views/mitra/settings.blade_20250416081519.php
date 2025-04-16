<x-mitra-layout title="Settings Mitra">
    <div class="container mx-auto p-4">
        <div class="flex gap-4">
            <div class="flex-1 bg-white p-4 rounded-md shadow-md">
                <h1 class="text-2xl font-bold montserrat-font">Company Information</h1>
                <form class="mt-4 grid grid-cols-2 gap-4">
                    <div class="col-span-2 flex flex-col gap-2">
                        <label class="font-semibold text-sm" for="">Email Company</label>
                        <input type="text" class="p-2 border rounded-md shadow-sm focus:outline-none"
                            placeholder="Pengusaha Sukses...">
                    </div>
                    <div class="col-span-2 flex flex-col gap-2">
                        <label class="font-semibold text-sm" for="">Name Company</label>
                        <input type="text" class="p-2 border rounded-md shadow-sm focus:outline-none"
                            placeholder="Pengusaha Sukses...">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="font-semibold text-sm" for="">Province</label>
                        <input type="text" class="p-2 border rounded-md shadow-sm focus:outline-none"
                            placeholder="Pengusaha Sukses...">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="font-semibold text-sm" for="">City or Regency</label>
                        <input type="text" class="p-2 border rounded-md shadow-sm focus:outline-none"
                            placeholder="Pengusaha Sukses...">
                    </div>

                    <div class="col-span-2 flex flex-col gap-2">
                        <label class="font-semibold text-sm" for="">Address</label>
                        <textarea name="" class="p-2 h-48 border rounded-md shadow-sm focus:outline-none" id=""></textarea>
                    </div>
                </form>
            </div>
            <div class="p-4 w-80 rounded-md bg-white shadow-md">
                <label class="font-semibold text-md">Profile Company</label>
                <div class="w-full flex justify-center items-center">
                    <div class="w-40 h-40 mt-4 relative">
                        <div class="w-full h-full rounded-full bg-gradient-to-br from-primary to-darkprimary p-0.5">
                            <div class="w-full h-full rounded-full bg-white p-0.5">
                                <img class="w-full h-full object-cover rounded-full "
                                    src="https://i.pinimg.com/736x/27/e0/74/27e074008b1d54fb474224de9102651b.jpg"
                                    alt="">
                            </div>
                        </div>
                        <button
                            class="bg-gradient-to-br from-primary to-darkprimary absolute bottom-2 right-0 w-10 h-10 rounded-full p-2 text-white">
                            <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 20H21M3.00003 20H4.67457C5.16376 20 5.40835 20 5.63852 19.9447C5.84259 19.8957 6.03768 19.8149 6.21663 19.7053C6.41846 19.5816 6.59141 19.4086 6.93732 19.0627L19.5001 6.49998C20.3285 5.67156 20.3285 4.32841 19.5001 3.49998C18.6716 2.67156 17.3285 2.67156 16.5001 3.49998L3.93729 16.0627C3.59139 16.4086 3.41843 16.5816 3.29475 16.7834C3.18509 16.9624 3.10428 17.1574 3.05529 17.3615C3.00003 17.5917 3.00003 17.8363 3.00003 18.3255V20Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-mitra-layout>
