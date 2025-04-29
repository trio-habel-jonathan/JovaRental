<x-mitra-layout title="Pengembalian Kendaraan">
    {{-- <div class="grid gap-4">
        {{dd($kendaraanDetails)}}
        @forelse ($kendaraanDetails as $kendaraan)
            <div class="p-4 bg-white shadow rounded border border-gray-200">
                <div>
                    <strong>ID Unit:</strong> <span class="font-mono text-blue-600">{{ $kendaraan['id_unit'] }}</span>
                </div>
                <div>
                    <strong>Nama Kendaraan:</strong> <span
                        class="font-semibold">{{ $kendaraan['nama_kendaraan'] }}</span>
                </div>
                <div>
                    <strong>Pemesanan ID:</strong> <span class="text-gray-500">{{ $kendaraan['id_pemesanan'] }}</span>
                </div>

                <!-- Include id_unit in the URL -->
                <a href="{{ route('mitra.pengembalian.create', ['id_unit' => $kendaraan['id_unit']]) }}">Kembalikan</a>
            </div>
        @empty
            <div class="text-gray-500">Tidak ada kendaraan yang perlu dikembalikan.</div>
        @endforelse
    </div> --}}
    <div class="grid grid-cols-1 gap-4 p-4">
        @forelse ($pesanan as $data)
            @foreach ($data->detailPemesanan as $item)
                <div class="bg-white p-4 rounded-md flex gap-4">
                    <div class="w-1/3 h-48">
                        <swiper-container class="mySwiper w-full h-full" pagination="true" pagination-clickable="true"
                            navigation="true" space-between="30" centered-slides="true" autoplay-delay="2500"
                            autoplay-disable-on-interaction="false">
                            @php
                                $decode_foto = json_decode($item->unitKendaraan->kendaraan->fotos);
                            @endphp
                            @if ($item->unitKendaraan->kendaraan->fotos)
                                @foreach ($decode_foto as $foto)
                                    <swiper-slide class="w-full h-full">
                                        <img src="{{ asset('/kendaraan/' . $foto) }}" class="h-full w-full object-cover"
                                            alt="">
                                    </swiper-slide>
                                @endforeach
                            @endif
                        </swiper-container>
                    </div>
                    <div class="w-full space-y-4">
                        <h1 class="montserrat-font font-bold text-lg">
                            {{ $item->unitKendaraan->kendaraan->nama_kendaraan }}</h1>
                        <div class="bg-primary/20 text-primary w-fit h-fit px-6 py-1 rounded-lg">
                            <h1 class="montserrat-font text-xs">{{ $item->unitKendaraan->plat_nomor }}</h1>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="montserrat-font">
                                <p class="font-bold text-sm">Tanggal Kembali</p>
                                <h1 class="text-xs">{{ date('D, d M Y - h:i', strtotime($item->tanggal_kembali)) }}</h1>
                            </div>
                            <div class="montserrat-font">
                                <p class="font-bold text-sm">Lokasi Pengembalian</p>
                                <h1 class="text-xs">{{ $item->lokasi_pengembalian }}</h1>
                            </div>
                            <div class="montserrat-font">
                                <p class="font-bold text-sm">Nama Penyewa</p>
                                <h1 class="text-xs">{{ $data->entitasPenyewa->nama_entitas }}</h1>
                            </div>
                            <div class="montserrat-font">
                                <p class="font-bold text-sm">Nama Penyewa</p>
                                <h1 class="text-xs">{{ $data->entitasPenyewa->user->no_telepon }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @empty
        @endforelse
    </div>
</x-mitra-layout>
