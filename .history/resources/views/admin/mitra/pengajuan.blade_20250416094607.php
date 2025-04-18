<x-admin-layout title="pengajuan-mitra">
    <h1>backend for pengajuan kemitraan</h1>
    @foreach ($mitraPenyewa as $Mitra) {{-- Mitra adalah user yang mengajukan sebagai mitra --}}
        <br>
        <ul>
            <h2>data user</h2>
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
            <li>{{$Mitra->no_telepon}}</li>
            <li>{{$Mitra->alamat}}</li>
            <li>{{$Mitra->kota}}</li>
            <li>{{$Mitra->kecamatan}}</li>
            <li>{{$Mitra->provinsi}}</li>
            <li>
                @if ({{$Mitra->status_verifikasi === 'pending' && $Mitra->user->role}})
                    <button>

                    </button>
                @endif
            </li>
        </ul>
    @endforeach
</x-admin-layout>