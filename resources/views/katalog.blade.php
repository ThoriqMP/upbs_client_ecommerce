@extends('layouts.app')

@section('title', 'Katalog Produk - UPBS BRMP Biogen')

@section('content')
<section class="pt-28 pb-16 bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <!-- Judul -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">Katalog Produk</h1>
            <p class="text-gray-700 text-lg">Temukan berbagai varietas unggul hasil inovasi UPBS BRMP Biogen 🌾</p>
        </div>
        <!-- 🔹 Filter Kategori -->
        <div class="mb-10 relative">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold text-gray-800">Pilih Kategori</h2>

                <!-- 🔘 Tombol ikon filter -->
                <button id="filterToggle"
                    class="flex items-center justify-center w-10 h-10 rounded-full border border-gray-300 bg-white shadow-sm hover:bg-gray-100 transition">
                    <!-- Ikon filter (pakai emoji atau SVG) -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 4.5h18M6 12h12m-9 7.5h6" />
                    </svg>
                </button>

                <!-- 🔽 Dropdown filter -->
                <div id="filterDropdown"
                    class="hidden absolute right-0 mt-2 w-32 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
                    <button class="dropdown-item w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 transition"
                        data-filter="BS">BS</button>
                    <button class="dropdown-item w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 transition"
                        data-filter="FS">FS</button>
                </div>
            </div>

            <div id="filterKategori" class="flex flex-wrap gap-4">
                <!-- Tombol tampilkan semua -->
                <button
                    class="kategori-btn active bg-[#B4DEBD] text-black border border-[#B4DEBD]/60 rounded-2xl shadow-md px-5 py-3 text-sm font-medium hover:bg-[#B4DEBD]/90 transition"
                    data-kategori="all">
                    Tampilkan Semua
                </button>

                @foreach (['Padi', 'Jagung', 'Ubi', 'Kedelai', 'Kacang Hijau', 'Sorgum', 'Gandum', 'Kentang'] as $kategori)
                    <button
                        class="kategori-btn bg-[#B4DEBD]/40 backdrop-blur-md border border-[#B4DEBD]/50 rounded-xl shadow-md px-5 py-3 text-sm font-medium text-gray-800 hover:bg-[#B4DEBD]/60 transition"
                        data-kategori="{{ strtolower($kategori) }}">
                        {{ $kategori }}
                    </button>
                @endforeach
            </div>
        </div>
        <!-- Grid Produk -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach (range(1, 8) as $i)
                <div class="group relative bg-white/30 backdrop-blur-lg border border-white/40 rounded-2xl shadow-xl overflow-hidden transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <!-- Gambar -->
                    <div class="h-40 bg-gray-200 flex items-center justify-center overflow-hidden">
                        <img src="{{ Vite::asset('resources/img/sample-product.jpg') }}" 
                             alt="Produk {{ $i }}" 
                             class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-500">
                    </div>

                    <!-- Konten -->
                    <div class="p-4 text-center">
                        <h3 class="font-semibold text-gray-900 text-base mb-2">Benih Unggul {{ $i }}</h3>
                        <p class="text-sm text-gray-700 mb-3">
                            Stok: 
                            <span class="font-semibold text-green-700">BS: {{ rand(10, 50) }}</span> | 
                            <span class="font-semibold text-blue-700">FS: {{ rand(5, 30) }}</span>
                        </p>
                        
                        <a href="#"
                           class="inline-block bg-gray-900/80 text-white text-sm px-4 py-2 rounded-lg hover:bg-gray-900/90 backdrop-blur-md transition">
                           Lihat Detail
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
<script>
    // 🔘 Toggle dropdown filter
    const filterToggle = document.getElementById('filterToggle');
    const filterDropdown = document.getElementById('filterDropdown');

    filterToggle.addEventListener('click', (e) => {
        e.stopPropagation();
        filterDropdown.classList.toggle('hidden');
    });

    // Tutup dropdown jika klik di luar area
    document.addEventListener('click', (e) => {
        if (!filterDropdown.contains(e.target) && !filterToggle.contains(e.target)) {
            filterDropdown.classList.add('hidden');
        }
    });

    // 🔹 Event handler untuk pilihan BS / FS
    document.querySelectorAll('.dropdown-item').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const filterValue = e.target.dataset.filter;
            alert(`Filter dipilih: ${filterValue}`); // Ganti ini nanti dengan logika filter produkmu
            filterDropdown.classList.add('hidden');
        });
    });
</script>
@endsection
