<tbody class="divide-y">
    @foreach ($users as $user)
        <tr class="hover:bg-gray-50 transition">
            <td class="px-6 py-4 flex items-center gap-4">
                <img class="w-8 h-8 rounded-full" src="{{ $user->foto_profil ?? 'https://www.pngmart.com/files/23/Profile-PNG-Photo.png' }}" alt="Foto Profil">
                <p><span class="font-semibold">{{ $user->name ?? 'Unknown' }}</span> - {{ $user->email }}</p>
            </td>
            <td class="px-6 py-4">{{ $user->no_telepon }}</td>
            <td class="px-6 py-4">
                <div class="p-2 text-center rounded-full font-bold 
                    {{ $user->is_verified ? 'bg-green-600/20 text-green-600' : 'bg-red-600/20 text-red-600' }}">
                    {{ $user->is_verified ? 'Active' : 'Inactive' }}
                </div>
            </td>
            <td class="px-6 py-4 capitalize">{{ $user->role }}</td>
            <td class="px-6 py-4">{{ $user->created_at->format('D, d M Y') }}</td>
            <td class="px-6 py-4">
                <a href="{{ route('admin.user.edituserView', $user->id_user) }}" class="text-blue-600 hover:underline">Edit</a>
                <form action="{{ route('admin.user.delete', $user->id_user) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline ml-2" onclick="return confirm('Are you sure?')">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>
