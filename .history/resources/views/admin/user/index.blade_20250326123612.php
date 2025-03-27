<x-admin-layout title="User Data">
    <div class="p-4">
        <div class="flex items-end justify-between">
            <form action="" class="flex gap-4 items-center">
                <div class="flex rounded-full items-center gap-2 text-gray-400 bg-white w-fit pl-2">
                    <label for="search">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 21L16.65 16.65M11 6C13.7614 6 16 8.23858 16 11M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </label>
                    <input type="text" id="search" placeholder="Search..."
                        class="w-80 bg-transparent text-black placeholder:text-gray-400 focus:outline-none">
                    <button type="submit" class="bg-primary text-white font-semibold rounded-full p-2 px-4">
                        Search
                    </button>
                </div>
            </form>
            <div>
                <p class="text-sm text-gray-400">Showing {{ $users->count() }} of {{ $users->count() }} records</p>
            </div>
        </div>
        <div class="container mx-auto mt-4">
            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="w-full text-sm text-left border-collapse">
                    <thead class="bg-primary text-white uppercase">
                        <tr>
                            <th class="px-6 py-3 border-b">Account</th>
                            <th class="px-6 py-3 border-b">Phone Number</th>
                            <th class="px-6 py-3 border-b">Status</th>
                            <th class="px-6 py-3 border-b">Role</th>
                            <th class="px-6 py-3 border-b">Date Join</th>
                            <th class="px-6 py-3 border-b">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @forelse ($users as $user)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 flex items-center gap-4">
                                    @if($user->foto_profil)
                                        <img class="w-8 h-8 rounded-full object-cover" 
                                             src="{{ asset('storage/' . $user->foto_profil) }}" 
                                             alt="{{ $user->name }}'s profile">
                                    @else
                                        <img class="w-8 h-8" 
                                             src="https://www.pngmart.com/files/23/Profile-PNG-Photo.png" 
                                             alt="Default profile">
                                    @endif
                                    <p>
                                        <span class="font-semibold">{{ $user->name }}</span> 
                                        - {{ $user->email }}
                                    </p>
                                </td>
                                <td class="px-6 py-4">{{ $user->no_telepon }}</td>
                                <td class="px-6 py-4">
                                    <div class="{{ $user->is_verified ? 'bg-green-600/20 text-green-600' : 'bg-red-600/20 text-red-600' }} p-2 text-center rounded-full font-bold">
                                        {{ $user->is_verified ? 'Active' : 'Inactive' }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">{{ ucfirst($user->role) }}</td>
                                <td class="px-6 py-4">{{ $user->created_at->format('D, d F Y') }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('admin.user.edituserView', $user->id_user) }}" 
                                       class="text-blue-600 hover:underline">Edit</a>
                                    <form action="{{ route('admin.user.destroy', $user->id_user) }}" 
                                          method="POST" 
                                          class="inline"
                                          onsubmit="return confirm('Are you sure you want to delete this user?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline ml-2">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center p-4 text-gray-500">
                                    No users found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <a href="{{ route('admin.user.adduserView') }}" 
           class="fixed bottom-0 right-0 p-2 rounded-md text-white m-5 bg-primary transition-all duration-300 ease-in-out hover:scale-125">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 8V16M8 12H16M7.8 21H16.2C17.8802 21 18.7202 21 19.362 20.673C19.9265 20.3854 20.3854 19.9265 20.673 19.362C21 18.7202 21 17.8802 21 16.2V7.8C21 6.11984 21 5.27976 20.673 4.63803C20.3854 4.07354 19.9265 3.6146 19.362 3.32698C18.7202 3 17.8802 3 16.2 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V16.2C3 17.8802 3 18.7202 3.32698 19.362C3.6146 19.9265 4.07354 20.3854 4.63803 20.673C5.27976 21 6.11984 21 7.8 21Z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </div>
</x-admin-layout>
```