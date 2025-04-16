<x-admin-layout title="pengajuan-mitra">
    <h1>backend for pengajuan kemitraan</h1>
    @foreach ($mitraPenyewa as $M)
        <ul>
            <li>{{$Pengajuans->email}}</li>
        </ul>
    @endforeach
</x-admin-layout>