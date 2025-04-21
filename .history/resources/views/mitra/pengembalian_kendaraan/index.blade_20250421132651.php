<x-mitra-layout title="Edit Mitra Profile">
x-mitra-layout
<div class="p-4">
    <h1 class="text-xl font-semibold mb-4">Daftar ID Unit Kendaraan</h1>
    
    <div class="grid gap-2">
        @forelse ($unitIds as $id)
            <div class="p-3 bg-white shadow rounded border border-gray-200">
                ID Unit: <span class="font-mono text-blue-600">{{ $id }}</span>
            </div>
        @empty
            <div class="text-gray-500">Tidak ada unit kendaraan yang terkait.</div>
        @endforelse
    </div>
</div>

