<x-admin-layout title="pengajuan-mitra">
    <h1>backend for pengajuan kemitraan</h1>
    @foreach ($mitraPenyewa as $Mitra) {{-- Mitra adalah user yang menyewa sebagai mitra --}}
        <ul>
            <li>{{$Mitra->user->email}}</li>
            <li>{{$Mitra->user->email}}</li>
            <li>{{$Mitra->user->email}}</li>
        </ul>
    @endforeach
</x-admin-layout>