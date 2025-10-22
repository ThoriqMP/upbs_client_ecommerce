<section class="relative py-16 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative">

        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center mt-4">Kategori Produk</h2>

        <!-- Tombol scroll kiri -->
        <button id="scrollLeft"
            class="hidden md:flex absolute left-0 top-1/2 -translate-y-1/2 bg-white/60 backdrop-blur-md border border-gray-200 shadow-md p-3 rounded-full hover:bg-gray-100 transition z-20">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                class="w-5 h-5 text-gray-800">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
        </button>

        <!-- Scroll Container -->
        <div id="categoryScroll" class="mt-4 flex gap-6 overflow-x-auto scroll-smooth no-scrollbar pb-4 relative z-10">
            @foreach ([
                ['nama' => 'Padi', 'icon' => '🌾'],
                ['nama' => 'Jagung', 'icon' => '🌽'],
                ['nama' => 'Ubi', 'icon' => '🥔'],
                ['nama' => 'Kedelai', 'icon' => '🌱'],
                ['nama' => 'Kacang Hijau', 'icon' => '🫘'],
                ['nama' => 'Gandum', 'icon' => '🌾'],
                ['nama' => 'Sorgum', 'icon' => '🌿'],
                ['nama' => 'Kentang', 'icon' => '🥔'],
                ['nama' => 'Talas', 'icon' => '🍠']
            ] as $kategori)
                <div
                    class="group relative min-w-[180px] flex-shrink-0 rounded-2xl border border-white/30 bg-white/10 backdrop-blur-md shadow-lg p-6 text-center hover:scale-105 transition-all duration-300 cursor-pointer">
                    <div class="text-4xl mb-3">{{ $kategori['icon'] }}</div>
                    <p class="font-semibold text-gray-800">{{ $kategori['nama'] }}</p>

                    <!-- Tombol muncul saat hover -->
                    <div
                        class="absolute inset-0 bg-white/40 backdrop-blur-md rounded-2xl flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <a href="#"
                            class="bg-gray-900/60 text-white px-4 py-2 rounded-lg text-sm shadow hover:bg-gray-900/90 transition-all duration-200">
                            Lihat Produk
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Tombol scroll kanan -->
        <button id="scrollRight"
            class="hidden md:flex absolute right-0 top-1/2 -translate-y-1/2 bg-white/60 backdrop-blur-md border border-gray-200 shadow-md p-3 rounded-full hover:bg-gray-100 transition z-20">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                class="w-5 h-5 text-gray-800">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5 15.75 12l-7.5 7.5" />
            </svg>
        </button>

    </div>
</section>
