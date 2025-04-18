<x-mitra-layout title="Settings Mitra">
    <ul>
        {{$user}}
    </ul>
    
    <ul>
        <li>{{$mitra->tipe_mitra}}</li>
        <li>{{$mitra->nama_mitra}}</li>
        <li>{{$mitra->nama_pemilik}}</li>
        <li>{{$mitra->no_identitas}}</li>
        <li>{{$mitra->npwp}}</li>
        <li>{{$mitra->status_verifikasi}}</li>
        <li>{{$mitra->foto_mitra}}</li>
        <li>{{$mitra->created_at}}</li>
        <li></li>
    </ul>
</x-mitra-layout>
