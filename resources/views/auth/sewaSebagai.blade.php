<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Sebagai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css">
    <style>
        body {
            background-color: white;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cpath fill='%238b5cf6' fill-opacity='0.06' d='M50 0L93.3 25v50L50 100L6.7 75V25z'/%3E%3C/svg%3E");
            background-size: 80px 80px;
        }

        .container-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
        }

        .hover-card {
            transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s;
            background: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .hover-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            border-color: #7c3aed;
        }

        h1 {
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        /* Responsive styles */
        @media (max-width: 640px) {
            body {
                background-image: none;
                background-color: white;
            }

            .container-card {
                background: transparent !important;
                box-shadow: none !important;
                padding: 1rem !important;
            }

            .card-container {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <!-- ========== CONTAINER ========== -->
    <div class="flex flex-col items-center justify-center h-screen gap-10">
        <!-- ========== WRAPPER ========== -->
        <div class="container-card p-12 flex flex-col items-center">
            <h1 class="text-4xl font-bold text-purple-900 mb-8">Sewa Sebagai?</h1>
            <form action="{{ route('entityForm') }}" method="GET" class="flex gap-8">
                @csrf
                @method('GET')
                <button type="submit" name="role" value="individu"
                    class="hover-card p-10 rounded-2xl flex flex-col items-center border-2 border-purple-800">
                    <span class="text-purple-800">
                        <svg width="80" height="80" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 21C20 19.6044 20 18.9067 19.8278 18.3389C19.44 17.0605 18.4395 16.06 17.1611 15.6722C16.5933 15.5 15.8956 15.5 14.5 15.5H9.5C8.10444 15.5 7.40665 15.5 6.83886 15.6722C5.56045 16.06 4.56004 17.0605 4.17224 18.3389C4 18.9067 4 19.6044 4 21M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    <p class="mt-4 text-purple-800 text-lg font-medium">Individu</p>
                </button>

                <!-- Pilih Sebagai Perusahaan -->
                <button type="submit" name="role" value="perusahaan"
                    class="hover-card p-10 rounded-2xl flex flex-col items-center border-2 border-purple-800">
                    <span class="text-purple-800">
                        <svg width="80" height="80" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.5 11H4.6C4.03995 11 3.75992 11 3.54601 11.109C3.35785 11.2049 3.20487 11.3578 3.10899 11.546C3 11.7599 3 12.0399 3 12.6V21M16.5 11H19.4C19.9601 11 20.2401 11 20.454 11.109C20.6422 11.2049 20.7951 11.3578 20.891 11.546C21 11.7599 21 12.0399 21 12.6V21M16.5 21V6.2C16.5 5.0799 16.5 4.51984 16.282 4.09202C16.0903 3.71569 15.7843 3.40973 15.408 3.21799C14.9802 3 14.4201 3 13.3 3H10.7C9.57989 3 9.01984 3 8.59202 3.21799C8.21569 3.40973 7.90973 3.71569 7.71799 4.09202C7.5 4.51984 7.5 5.0799 7.5 6.2V21M22 21H2M11 7H13M11 11H13M11 15H13"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    <p class="mt-4 text-purple-800 text-lg font-medium">Perusahaan</p>
                </button>
            </form>
        </div>
    </div>
</body>

</html>
