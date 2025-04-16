<x-admin-layout title="pengajuan-mitra">
    <h1>backend for pengajuan kemitraan</h1>
    @foreach ($mitraPenyewa as $Mitra) {{-- Mitra adalah user yang mengajukan sebagai mitra --}}
        <ul>
            <h2>data user</h2>
            <li>{{$Mitra->user->email}}</li>
            <li>{{$Mitra->user->no_telepon}}</li>
            <li>{{$Mitra->user->role}}</li>
        </ul>

        <ul>
            <li>{{$Mitra->nama_mitra}}</li>
            <li>{{$Mitra->nama_pemilik}}</li>
        </ul>
    @endforeach
</x-admin-layout>