<x-admin-layout title="pengajuan-mitra">
    @foreach ($mitraPenyewa as $Pengajuans)
        <ul>{{$Pengajuans->}}</ul>
    @endforeach
</x-admin-layout>