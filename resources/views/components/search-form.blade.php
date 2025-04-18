<!-- resources/views/components/search-form.blade.php -->
@props([
    'action' => '',
    'method' => 'GET',
    'searchParams' => 'searchParams',
    'class' =>
        'bg-white rounded-md w-full shadow-lg border-2 p-6 flex flex-col lg:flex-row items-center justify-center gap-8',
])

<form
    {{ $attributes->merge(['action' => $action, 'method' => $method, 'data-aos' => 'zoom-in', 'data-aos-delay' => '150']) }}
    class="{{ $class }}">
    <!-- Hidden CSRF token for POST forms -->
    @if ($method === 'POST')
        @csrf
    @endif

    <!-- Hidden input for from_detail if present in URL -->
    @if (request()->query('from_detail'))
        <input type="hidden" name="from_detail" value="1">
    @endif
    <!-- Driver Option Selection -->
    <div class="flex flex-row lg:flex-col items-start justify-center gap-4">
        @if (request()->is('search'))
            <div class="driver-option">
                <input type="radio" id="tanpa_sopir" name="tipe_rental" value="tanpa_sopir"
                    {{ $searchParams['tipe_rental'] == 'tanpa_sopir' ? 'checked' : '' }} class="hidden peer"
                    onchange="toggleDriverOptions()">
                <label for="tanpa_sopir"
                    class="cursor-pointer w-48 text-nowrap flex items-center justify-center px-6 py-3 text-center border-2 border-gray-300 rounded-md peer-checked:border-primary peer-checked:bg-primary-50 peer-checked:text-darkprimary hover:bg-gray-50 font-medium">
                    Tanpa Sopir
                </label>
            </div>
            <div class="driver-option">
                <input type="radio" id="dengan_sopir" name="tipe_rental" value="dengan_sopir"
                    {{ $searchParams['tipe_rental'] == 'dengan_sopir' ? 'checked' : '' }} class="hidden peer"
                    onchange="toggleDriverOptions()">
                <label for="dengan_sopir"
                    class="cursor-pointer w-48 text-nowrap flex items-center justify-center px-6 py-3 text-center border-2 border-gray-300 rounded-md peer-checked:border-primary peer-checked:bg-primary-50 peer-checked:text-darkprimary hover:bg-gray-50 font-medium">
                    Dengan Sopir
                </label>
            </div>
        @else
            <div class="driver-option">
                <input type="radio" id="tanpa_sopir" name="tipe_rental" value="tanpa_sopir" checked
                    class="hidden peer" onchange="toggleDriverOptions()">
                <label for="tanpa_sopir"
                    class="cursor-pointer w-48 text-nowrap flex items-center justify-center px-6 py-3 text-center border-2 border-gray-300 rounded-md peer-checked:border-primary peer-checked:bg-primary-50 peer-checked:text-darkprimary hover:bg-gray-50 font-medium">
                    Tanpa Sopir
                </label>
            </div>
            <div class="driver-option">
                <input type="radio" id="dengan_sopir" name="tipe_rental" value="dengan_sopir" class="hidden peer"
                    onchange="toggleDriverOptions()">
                <label for="dengan_sopir"
                    class="cursor-pointer w-48 text-nowrap flex items-center justify-center px-6 py-3 text-center border-2 border-gray-300 rounded-md peer-checked:border-primary peer-checked:bg-primary-50 peer-checked:text-darkprimary hover:bg-gray-50 font-medium">
                    Dengan Sopir
                </label>
            </div>
        @endif

    </div>

    @if (request()->is('search'))
        <!-- Tanpa Sopir Form Fields -->
        <div id="tanpa_sopir_fields"
            class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 w-full gap-6 {{ $searchParams['tipe_rental'] == 'dengan_sopir' ? 'hidden' : '' }}">
            <div class="flex flex-col custom-select-container">
                <label for="lokasi_rental" class="text-sm font-bold text-primary">Lokasi Rental</label>
                <select class="p-2 border-b border-gray-400 focus:outline-none" id="lokasi_rental" name="lokasi">
                    <option>{{ $searchParams['lokasi'] }}</option>
                </select>
            </div>
            <div class="flex flex-col">
                <label for="tanggal_mulai_rental" class="text-sm font-bold text-primary">Tanggal Mulai</label>
                <input type="text" value="{{ $searchParams['tanggal_mulai'] }}"
                    class="p-2 w-full border-b border-gray-400 focus:outline-none" id="tanggal_mulai_rental"
                    name="tanggal_mulai">
            </div>
            @if ($searchParams['tipe_rental'] == 'dengan_sopir')
                <div class="flex flex-col">
                    <label for="tanggal_selesai_rental" class="text-sm font-bold text-primary">Tanggal Selesai</label>
                    <input type="text"
                        value="{{ date('Y-m-d', strtotime($searchParams['tanggal_mulai'] . '+1 day')) }}"
                        class="p-2 w-full border-b border-gray-400 focus:outline-none" id="tanggal_selesai_rental"
                        name="tanggal_selesai">
                </div>
            @else
                <div class="flex flex-col">
                    <label for="tanggal_selesai_rental" class="text-sm font-bold text-primary">Tanggal Selesai</label>
                    <input type="text" value="{{ $searchParams['tanggal_selesai'] }}"
                        class="p-2 w-full border-b border-gray-400 focus:outline-none" id="tanggal_selesai_rental"
                        name="tanggal_selesai">
                </div>
            @endif
            <div class="flex flex-col">
                <label for="waktu_mulai" class="text-sm font-bold text-primary">Waktu Mulai</label>
                <input type="time" value="{{ $searchParams['waktu_mulai'] }}"
                    class="p-2 w-full border-b border-gray-400 focus:outline-none" id="waktu_mulai" name="waktu_mulai">
            </div>
            <div class="flex flex-col">
                <label for="waktu_selesai" class="text-sm font-bold text-primary">Waktu Selesai</label>
                <input type="time" value="{{ $searchParams['waktu_selesai'] }}"
                    class="p-2 w-full border-b border-gray-400 focus:outline-none" id="waktu_selesai"
                    name="waktu_selesai">
            </div>
        </div>

        <!-- Dengan Sopir Form Fields -->
        <div id="dengan_sopir_fields"
            class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 w-full gap-6 {{ $searchParams['tipe_rental'] == 'tanpa_sopir' ? 'hidden' : '' }}">
            <div class="flex flex-col">
                <label for="lokasi_rental_sopir" class="text-sm font-bold text-primary">Lokasi Rental</label>
                <select class="p-2 border-b border-gray-400 focus:outline-none" id="lokasi_rental_sopir"
                    name="lokasi_sopir">
                    <option>{{ $searchParams['lokasi'] }}</option>
                </select>
            </div>
            <div class="flex flex-col">
                <label for="tanggal_mulai_sopir" class="text-sm font-bold text-primary">Tanggal Mulai</label>
                <input type="date" value="{{ $searchParams['tanggal_mulai'] }}"
                    class="p-2 w-full border-b border-gray-400 focus:outline-none" id="tanggal_mulai_sopir"
                    name="tanggal_mulai_sopir">
            </div>
            <div class="flex flex-col">
                <label for="durasi" class="text-sm font-bold text-primary">Durasi</label>
                <div class="flex items-center border-b border-gray-400">
                    <input type="number" min="1" class="p-2 w-full focus:outline-none" id="durasi"
                        name="durasi" placeholder="1">
                    <span class="p-2 text-gray-700">Hari</span>
                </div>
            </div>
            <div class="flex flex-col">
                <label for="waktu_jemput" class="text-sm font-bold text-primary">Waktu Jemput</label>
                <input type="time" value="{{ $searchParams['waktu_mulai'] }}"
                    class="p-2 w-full border-b border-gray-400 focus:outline-none" id="waktu_jemput"
                    name="waktu_mulai_sopir">
            </div>
        </div>
    @else
        <!-- Tanpa Sopir Form Fields -->
        <div id="tanpa_sopir_fields" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 w-full gap-6">
            <div class="flex flex-col custom-select-container">
                <label for="lokasi_rental" class="text-sm font-bold text-primary">Lokasi Rental</label>
                <select class="p-2 border-b border-gray-400 focus:outline-none" id="lokasi_rental" name="lokasi">
                    <option></option>
                </select>
            </div>
            <div class="flex flex-col">
                <label for="tanggal_mulai_rental" class="text-sm font-bold text-primary">Tanggal Mulai</label>
                <input type="text" value="{{ now()->toDateString() }}"
                    class="p-2 w-full border-b border-gray-400 focus:outline-none" id="tanggal_mulai_rental"
                    name="tanggal_mulai">
            </div>
            <div class="flex flex-col">
                <label for="tanggal_selesai_rental" class="text-sm font-bold text-primary">Tanggal Selesai</label>
                <input type="text" value="{{ now()->addDay()->toDateString() }}"
                    class="p-2 w-full border-b border-gray-400 focus:outline-none" id="tanggal_selesai_rental"
                    name="tanggal_selesai">
            </div>
            <div class="flex flex-col">
                <label for="waktu_mulai" class="text-sm font-bold text-primary">Waktu Mulai</label>
                <input type="time" value="09:00" class="p-2 w-full border-b border-gray-400 focus:outline-none"
                    id="waktu_mulai" name="waktu_mulai">
            </div>
            <div class="flex flex-col">
                <label for="waktu_selesai" class="text-sm font-bold text-primary">Waktu Selesai</label>
                <input type="time" value="17:00" class="p-2 w-full border-b border-gray-400 focus:outline-none"
                    id="waktu_selesai" name="waktu_selesai">
            </div>
        </div>

        <!-- Dengan Sopir Form Fields -->
        <div id="dengan_sopir_fields" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 w-full gap-6 hidden">
            <div class="flex flex-col">
                <label for="lokasi_rental_sopir" class="text-sm font-bold text-primary">Lokasi Rental</label>
                <select class="p-2 border-b border-gray-400 focus:outline-none" id="lokasi_rental_sopir"
                    name="lokasi_sopir">
                    <option></option>
                </select>
            </div>
            <div class="flex flex-col">
                <label for="tanggal_mulai_sopir" class="text-sm font-bold text-primary">Tanggal Mulai</label>
                <input type="date" value="{{ now()->toDateString() }}"
                    class="p-2 w-full border-b border-gray-400 focus:outline-none" id="tanggal_mulai_sopir"
                    name="tanggal_mulai_sopir">
            </div>
            <div class="flex flex-col">
                <label for="durasi" class="text-sm font-bold text-primary">Durasi</label>
                <div class="flex items-center border-b border-gray-400">
                    <input type="number" min="1" class="p-2 w-full focus:outline-none" id="durasi"
                        name="durasi" placeholder="1">
                    <span class="p-2 text-gray-700">Hari</span>
                </div>
            </div>
            <div class="flex flex-col">
                <label for="waktu_jemput" class="text-sm font-bold text-primary">Waktu Jemput</label>
                <input type="time" value="09:00" class="p-2 w-full border-b border-gray-400 focus:outline-none"
                    id="waktu_jemput" name="waktu_mulai_sopir">
            </div>
        </div>
    @endif

    <!-- Search Button -->
    <div class="flex">
        <button type="submit"
            class="bg-primary text-nowrap hover:bg-darkprimary text-white px-8 py-3 rounded-md uppercase font-semibold transition-all duration-300 transform hover:scale-105">
            Cari Kendaraan
        </button>
    </div>
</form>

<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    function toggleDriverOptions() {
        const tanpaSopirFields = document.getElementById('tanpa_sopir_fields');
        const denganSopirFields = document.getElementById('dengan_sopir_fields');

        if (document.getElementById('tanpa_sopir').checked) {
            tanpaSopirFields.classList.remove('hidden');
            denganSopirFields.classList.add('hidden');

            // Set the form to use the correct fields
            document.querySelector('form').addEventListener('submit', function(e) {
                const lokasi = document.getElementById('lokasi_rental').value;
                document.querySelector('input[name="lokasi"]').value = lokasi;

                // Clear driver-specific fields
                document.querySelector('input[name="lokasi_sopir"]').value = '';
                document.querySelector('input[name="tanggal_mulai_sopir"]').value = '';
                document.querySelector('input[name="durasi"]').value = '';
                document.querySelector('input[name="waktu_mulai_sopir"]').value = '';
            });
        } else {
            tanpaSopirFields.classList.add('hidden');
            denganSopirFields.classList.remove('hidden');

            // Set the form to use the correct fields for driver option
            document.querySelector('form').addEventListener('submit', function(e) {
                const lokasi = document.getElementById('lokasi_rental_sopir').value;
                document.querySelector('input[name="lokasi"]').value = lokasi;

                // Use driver-specific fields and clear non-driver fields
                document.querySelector('input[name="tanggal_mulai"]').value = document.querySelector(
                    'input[name="tanggal_mulai_sopir"]').value;
                document.querySelector('input[name="waktu_mulai"]').value = document.querySelector(
                    'input[name="waktu_mulai_sopir"]').value;

                // Clear non-driver specific fields
                document.querySelector('input[name="tanggal_selesai"]').value = '';
                document.querySelector('input[name="waktu_selesai"]').value = '';
            });
        }
    }

    $(document).ready(function() {
        // Initialize Select2 for location fields
        $('#lokasi_rental, #lokasi_rental_sopir').select2({
            ajax: {
                url: '{{ route('search.alamat') }}',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term || ''
                    };
                },
                processResults: function(data, params) {
                    const term = params.term || '';
                    const results = data.map(item => ({
                        id: item.alamat,
                        text: `${item.alamat}, ${item.kota}, ${item.kecamatan}, ${item.provinsi}`
                    }));
                    // Add the raw input as an option
                    if (term) {
                        results.unshift({
                            id: term,
                            text: term
                        });
                    }
                    return {
                        results
                    };
                },
                cache: true
            },
            placeholder: 'Cari kota, kecamatan, atau alamat...',
            minimumInputLength: 0,
            allowClear: true,
            language: {
                noResults: function() {
                    return 'Tidak ada hasil ditemukan';
                },
                errorLoading: function() {
                    return 'Gagal memuat data';
                }
            }
        });

        // Set default times
        // Set default duration
        document.getElementById('durasi').value = '1';
    });
</script>

<style>
    /* Custom Select2 Styling */
    .select2-container {
        width: 100% !important;
    }

    .select2-selection {
        border: none !important;
        border-bottom: 1px solid #9ca3af !important;
        border-radius: 0 !important;
        height: 42px !important;
        display: flex !important;
        align-items: center !important;
        padding: 0 !important;
        background-color: transparent !important;
    }

    .select2-selection__rendered {
        color: #333 !important;
        padding-left: 0 !important;
        line-height: 42px !important;
    }

    .select2-selection__placeholder {
        color: #9ca3af !important;
    }

    .select2-selection__arrow {
        height: 40px !important;
    }

    .select2-selection__clear {
        margin-right: 10px !important;
        color: #9ca3af !important;
    }

    .select2-dropdown {
        border-color: #e5e7eb !important;
        border-radius: 0.375rem !important;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1) !important;
        margin-top: 2px !important;
    }

    .select2-search__field {
        border: 1px solid #d1d5db !important;
        border-radius: 0.25rem !important;
        padding: 8px !important;
    }

    .select2-results__option {
        padding: 10px 12px !important;
    }

    .select2-results__option--highlighted {
        background-color: #f3f4f6 !important;
        color: #333 !important;
    }

    .select2-results__option--selected {
        background-color: #e5e7eb !important;
    }

    .select2-results__message {
        padding: 10px !important;
        text-align: center !important;
        color: #6b7280 !important;
    }

    .select2-container--focus .select2-selection {
        border-bottom: 2px solid #3b82f6 !important;
    }
</style>
