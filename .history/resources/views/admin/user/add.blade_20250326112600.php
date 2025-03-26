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
                            <label for="full_name" class="text-sm font-semibold text-gray-500">Full Name</label>
                            <input type="text" id="full_name" name="full_name"
                                class="border rounded-md border-gray-300 p-2 focus:outline-none"
                                placeholder="Type your full name..." value="{{ old('full_name') }}">
                            @error('full_name')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex flex-col">
                            <label for="email" class="text-sm font-semibold text-gray-500">Email</label>
                            <input type="text" id="email" name="email"
                                class="border rounded-md border-gray-300 p-2 focus:outline-none"
                                placeholder="Type your email..." value="{{ old('email') }}">
                            @error('email')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex flex-col">
                            <label for="no_hp" class="text-sm font-semibold text-gray-500">Phone Number</label>
                            <input type="text" id="no_hp" name="no_hp"
                                class="border rounded-md border-gray-300 p-2 focus:outline-none"
                                placeholder="Type your phone number..." value="{{ old('no_hp') }}">
                            @error('no_hp')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex flex-col">
                            <label for="role" class="text-sm font-semibold text-gray-500">Role</label>
                            <select name="role" id="role" class="border rounded-md border-gray-300 p-2 focus:outline-none">
                                <option value="User" {{ old('role') == 'User' ? 'selected' : '' }}>User</option>
                                <option value="Admin" {{ old('role') == 'Admin' ? 'selected' : '' }}>Admin</option>
                                <option value="Mitra" {{ old('role') == 'Mitra' ? 'selected' : '' }}>Mitra</option>
                            </select>
                            @error('role')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex flex-col">
                            <label for="verified" class="text-sm font-semibold text-gray-500">Verified Account</label>
                            <div class="flex gap-4 p-2">
                                <label class="flex items-center space-x-3 cursor-pointer">
                                    <input type="radio" name="verified" value="1" class="hidden peer"
                                        {{ old('verified', '1') == '1' ? 'checked' : '' }}>
                                    <div class="w-4 h-4 border-2 border-gray-400 rounded-full flex items-center justify-center peer-checked:border-blue-500 peer-checked:bg-blue-500">
                                        <div class="w-2.5 h-2.5 bg-white rounded-full"></div>
                                    </div>
                                    <span class="text-gray-700">Verified</span>
                                </label>

                                <label class="flex items-center space-x-3 cursor-pointer">
                                    <input type="radio" name="verified" value="0" class="hidden peer"
                                        {{ old('verified', '1') == '0' ? 'checked' : '' }}>
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
                            <input type="password" name="password"
                                class="border rounded-md border-gray-300 p-2 focus:outline-none"
                                placeholder="Type your password...">
                            @error('password')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="password_confirmation" class="text-sm font-semibold text-gray-500">Confirm Password</label>
                            <input type="password" name="password_confirmation"
                                class="border rounded-md border-gray-300 p-2 focus:outline-none"
                                placeholder="Type your confirm password...">
                        </div>
                    </div>

                    <div class="bg-white rounded-lg flex flex-col gap-4 p-4 shadow-lg">
                        <div class="text-center">
                            <h1 class="uppercase font-bold">Profile Account</h1>
                        </div>
                        <div class="flex items-center gap-4">
                            <img id="imagePreview" class="w-48 h-48 object-cover rounded-lg bg-gray-100 hidden">
                            <div id="dropzone"
                                class="w-full h-full flex justify-center items-center p-2 border-2 border-dashed border-gray-500 rounded-lg text-center cursor-pointer bg-white/5 hover:bg-white/10 transition">
                                <p class="text-gray-400 text-sm">Click to select or drag and drop an image here.</p>
                                <input type="file" id="fileInput" name="photo_profile" accept="image/*"
                                    class="hidden">
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
