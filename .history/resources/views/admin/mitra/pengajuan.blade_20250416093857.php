<x-admin-layout title="pengajuan-mitra">
    @foreach ($mitraPenyewa as $Pengajuans)
        <ul>{{$Pengajuans->email}}</ul>
    @endforeach
</x-admin-layout>