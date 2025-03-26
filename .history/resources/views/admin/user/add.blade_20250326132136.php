<x-admin-layout title="User Data">
    <div class="p-4">
        <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-2 flex justify-end">
                    <button type="submit" class="bg-primary px-6 py-2 rounded-md text-white font-semibold">
                        Save & Tambah
                    </button>
                </div>
                <div class="bg-white flex justify-center items-center w-full shadow-lg rounded-lg gap-2 p-4">
                    <div class="flex flex-col w-full gap-4">
                        <div class="text-center">
                            <h1 class="uppercase font-bold">User Account</h1>
                        </div>
                        <div class="flex flex-col">
                            <label for="name" class="text-sm font-semibold text-gray-500">Full Name</label>
                            <input type="text" id="name" name="name" class="border rounded-md border-gray-300 p-2 focus:outline-none"
                            placeholder="Type your full name..." required>                        
                        </div>
                        <div class="flex flex-col">
                            <label for="email" class="text-sm font-semibold text-gray-500">Email</label>
                            <input type="email" id="email" name="email" class="border rounded-md border-gray-300 p-2 focus:outline-none"
                                placeholder="Type your email..." required>
                        </div>
                        <div class="flex flex-col">
                            <label for="no_telepon" class="text-sm font-semibold text-gray-500">Phone Number</label>
                            <input type="text" id="no_telepon" name="no_telepon" class="border rounded-md border-gray-300 p-2 focus:outline-none"
                                placeholder="Type your phone number..." required>
                        </div>
                        <div class="flex flex-col">
                            <label for="role" class="text-sm font-semibold text-gray-500">Role</label>
                            <select name="role" id="role" class="border rounded-md border-gray-300 p-2 focus:outline-none" required>
                                <option value="">Select Role</option>
                                <option value="penyewa">Penyewa</option>
                                <option value="admin">Admin</option>
                                <option value="mitra">Mitra</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label for="verified" class="text-sm font-semibold text-gray-500">Verified Account</label>
                            <div class="flex gap-4 p-2">
                                <label class="flex items-center space-x-3 cursor-pointer">
                                    <input type="radio" name="verified" value="1" class="hidden peer">
                                    <div class="w-4 h-4 border-2 border-gray-400 rounded-full flex items-center justify-center peer-checked:border-blue-500 peer-checked:bg-blue-500">
                                        <div class="w-2.5 h-2.5 bg-white rounded-full"></div>
                                    </div>
                                    <span class="text-gray-700">Verified</span>
                                </label>
            
                                <label class="flex items-center space-x-3 cursor-pointer">
                                    <input type="radio" name="verified" value="0" class="hidden peer" checked>
                                    <div class="w-4 h-4 border-2 border-gray-400 rounded-full flex items-center justify-center peer-checked:border-blue-500 peer-checked:bg-blue-500">
                                        <div class="w-2.5 h-2.5 bg-white rounded-full"></div>
                                    </div>
                                    <span class="text-gray-700">Not Verified</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="bg-white rounded-lg flex flex-col gap-4 p-4 shadow-lg">
                        <div class="text-center">
                            <h1 class="uppercase font-bold">Password Account</h1>
                        </div>
                        <div class="flex flex-col">
                            <label for="password" class="text-sm font-semibold text-gray-500">Password</label>
                            <input type="password" id="password" name="password" class="border rounded-md border-gray-300 p-2 focus:outline-none"
                                placeholder="Type your password..." required minlength="6">
                        </div>
                        <div class="flex flex-col">
                            <label for="password_confirmation" class="text-sm font-semibold text-gray-500">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="border rounded-md border-gray-300 p-2 focus:outline-none"
                                placeholder="Confirm your password..." required minlength="6">
                        </div>
                    </div>
                    <div class="bg-white rounded-lg flex h-full flex-col gap-4 p-4 shadow-lg">
                        <div class="text-center">
                            <h1 class="uppercase font-bold">Profile Account</h1>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="relative flex items-center justify-center w-48 h-48 gap-4">
                                <img id="imagePreview" class="w-48 h-48 object-cover rounded-lg bg-gray-100 hidden">
                                <div id="imageIcon"
                                    class="absolute inset-0 flex justify-center items-center w-24 h-24 text-gray-300">
                                    <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.27209 20.7279L10.8686 14.1314C11.2646 13.7354 11.4627 13.5373 11.691 13.4632C11.8918 13.3979 12.1082 13.3979 12.309 13.4632C12.5373 13.5373 12.7354 13.7354 13.1314 14.1314L19.6839 20.6839M14 15L16.8686 12.1314C17.2646 11.7354 17.4627 11.5373 17.691 11.4632C17.8918 11.3979 18.1082 11.3979 18.309 11.4632C18.5373 11.5373 18.7354 11.7354 19.1314 12.1314L22 15M10 9C10 10.1046 9.10457 11 8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9ZM6.8 21H17.2C18.8802 21 19.7202 21 20.362 20.673C20.9265 20.3854 21.3854 19.9265 21.673 19.362C22 18.7202 22 17.8802 22 16.2V7.8C22 6.11984 22 5.27976 21.673 4.63803C21.3854 4.07354 20.9265 3.6146 20.362 3.32698C19.7202 3 18.8802 3 17.2 3H6.8C5.11984 3 4.27976 3 3.63803 3.32698C3.07354 3.6146 2.6146 4.07354 2.32698 4.63803C2 5.27976 2 6.11984 2 7.8V16.2C2 17.8802 2 18.7202 2.32698 19.362C2.6146 19.9265 3.07354 20.3854 3.63803 20.673C4.27976 21 5.11984 21 6.8 21Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <div id="dropzone" class="w-full p-2 border-2 border-dashed border-gray-500 rounded-lg text-center cursor-pointer">
                                <p class="text-gray-400 text-sm">Click or drag image here to upload.</p>
                                <input type="file" id="fileInput" name="foto_profil" accept="image/*" class="hidden">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <a href="{{ route('admin.user.userView') }}"
            class="fixed bottom-0 right-0 m-5 p-2 rounded-full bg-primary text-white transition-all duration-300 ease-in-out hover:scale-125">
            <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 8L8 12M8 12L12 16M8 12H16M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </div>
    <script>
        let dropzone = document.getElementById('dropzone');
        let fileInput = document.getElementById('fileInput');
        let imagePreview = document.getElementById('imagePreview');
        let imageIcon = document.getElementById('imageIcon');

        // Click to open file picker
        dropzone.addEventListener('click', () => fileInput.click());

        // Drag & Drop Effects
        dropzone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropzone.classList.add('border-blue-500');
        });

        dropzone.addEventListener('dragleave', () => {
            dropzone.classList.remove('border-blue-500');
        });

        dropzone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropzone.classList.remove('border-blue-500');

            let file = e.dataTransfer.files[0];
            if (file) {
                fileInput.files = e.dataTransfer.files;
                showImagePreview(file);
            }
        });

        // When user selects a file
        fileInput.addEventListener('change', function(event) {
            let file = event.target.files[0];
            if (file) {
                showImagePreview(file);
            }
        });

        // Function to show image preview
        function showImagePreview(file) {
            let reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.classList.remove('hidden');
                imageIcon.classList.add('hidden');
            };
            reader.readAsDataURL(file);
        }
    </script>
</x-admin-layout>
