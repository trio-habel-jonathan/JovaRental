<x-admin-layout title="pengajuan-mitra">
    <h1>backend for pengajuan kemitraan</h1>
    @foreach ($mitraPenyewa as $Mitra) {{-- Mitra adalah user yang mengajukan sebagai mitra --}}
        <br>
        <ul>
            <h2>data user</h2>
            <li><a href="{{ route('admin.mitra.detailmitraView') }}"></a></li>
            <li>{{$Mitra->user->email}}</li>
            <li>{{$Mitra->user->no_telepon}}</li>
            <li>{{$Mitra->user->role}}</li>
        </ul>
        <br>
        <ul>
            <h2>data mitra</h2>
            <li>{{$Mitra->nama_mitra}}</li>
            <li>{{$Mitra->nama_pemilik}}</li>
            <li>{{$Mitra->no_identitas}}</li>
            <li>{{$Mitra->npwp}}</li>

            <li>
                @if ($Mitra->status_verifikasi === 'pending' && $Mitra->user->role === 'penyewa')
                <form action="{{ route('admin.mitra.verifikasi', $Mitra->id_mitra) }}" method="POST" class="inline-block">
                    @csrf
                    @method('PATCH')
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Verifikasi Pengajuan
                    </button>
                </form>
            
                <form action="{{ route('admin.mitra.tolak', $Mitra->id_mitra) }}" method="POST" class="inline-block ml-2">
                    @csrf
                    @method('PATCH')
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Tolak Pengajuan
                    </button>
                </form>
            @endif
            
            </li>
            <li>{{$Mitra->foto_mitra}}</li>
        </ul>
    @endforeach
</x-admin-layout>