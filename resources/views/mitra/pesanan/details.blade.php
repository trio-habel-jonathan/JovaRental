<x-mitra-layout title="Detail Pesanan">
    <div class="p-4">
        <div class="flex gap-4">
            <div class="bg-white p-4 rounded-md w-full">
                <div>
                    <h1 class="font-bold text-md montserrat-font">Ordered Items</h1>
                </div>
                <div class="grid grid-cols-1 gap-2 overflow-auto custom-scrollbar pr-2 mt-4 h-96">
                    @for ($i = 1; $i < 5; $i++)
                        <div class="flex gap-2 justify-between items-center">
                            <div class="flex items-center gap-2">
                                <img class="w-24 h-24 object-cover rounded-sm"
                                    src="https://i.pinimg.com/736x/28/42/71/284271ea0f2d525a896694bc643cf8e5.jpg"
                                    alt="">
                                <div>
                                    <h1 class="font-bold text-lg montserrat-font">Nissan GT-86 2025</h1>
                                    <p class="text-sm font-semibold text-gray-500">Black</p>
                                    <p class="text-sm font-semibold text-gray-500">With Driver</p>
                                </div>
                            </div>
                            <div
                                class="flex gap-2 items-center text-sm font-semibold text-gray-700 plus-jakarta-sans-font">
                                <p>IDR 2.000.000</p>
                                <p>X</p>
                                <p>2</p>
                            </div>
                            <h1 class="flex gap-2 items-center text-md font-bold text-gray-900 plus-jakarta-sans-font">
                                IDR
                                4.000.000</h1>
                        </div>
                        <div class="h-[1px] w-full my-1 bg-slate-200"></div>
                    @endfor
                </div>
            </div>
            <div class="bg-white rounded-lg p-4 w-96">
                <div>
                    <h1 class="font-bold text-md montserrat-font">Detail Ordered</h1>
                </div>
            </div>
        </div>
    </div>
</x-mitra-layout>
