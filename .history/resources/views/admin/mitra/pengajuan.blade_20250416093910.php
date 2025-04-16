<x-admin-layout title="pengajuan-mitra">
    @foreach ($mitraPenyewa as $Pengajuans)
        <ul>
            <li>{{$Pengajuans->email}}</li>
        </ul>
    @endforeach
</x-admin-layout>