<!-- 🛒 Modal Keranjang -->
<div id="cartModal"
     class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm hidden transition-opacity duration-300">
    <div class="relative bg-white/70 backdrop-blur-lg border border-white/40 rounded-3xl shadow-2xl w-[90%] max-w-lg p-6">

        <!-- Header -->
        <div class="flex items-center justify-between mb-6 border-b border-gray-300 pb-3">
            <h2 class="text-xl font-bold text-gray-900 flex items-center gap-2">
                🛒 Keranjang Belanja
            </h2>
            <button id="closeCartBtn" class="text-gray-700 hover:text-gray-900 transition" title="Tutup">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Isi Keranjang -->
        <div class="space-y-4 max-h-[60vh] overflow-y-auto pr-2">
            

            @forelse ($cartItems as $item)
                <div class="flex items-center bg-white/60 border border-gray-200 rounded-2xl p-4 shadow-sm hover:shadow-md transition">
                    <div class="w-16 h-16 rounded-xl overflow-hidden flex-shrink-0">
                        <img src="{{ Vite::asset($item['gambar']) }}" alt="{{ $item['nama'] }}"
                             class="object-cover w-full h-full">
                    </div>
                    <div class="ml-4 flex-1">
                        <h3 class="text-gray-900 font-semibold text-sm">{{ $item['nama'] }}</h3>
                        <p class="text-gray-700 text-sm mt-1">{{ $item['harga'] }}</p>
                    </div>
                    <button class="text-gray-500 hover:text-red-600 transition" title="Hapus item">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.8" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            @empty
                <p class="text-gray-600 text-center py-6">Keranjang belanja kamu masih kosong 🛍️</p>
            @endforelse
        </div>

        <!-- Footer -->
        <div class="mt-6 flex justify-between items-center border-t border-gray-300 pt-4">
            <p class="text-gray-800 font-medium">Total Item: {{ count($cartItems ?? []) }}</p>

            <div class="flex items-center gap-3">
                <!-- Tombol Hapus Semua -->
                <button id="clearCartBtn"
                        class="text-red-600 hover:text-red-800 transition flex items-center gap-1"
                        title="Hapus semua item">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 6h18M9 6v12m6-12v12M10 11h4m-6 7h8a2 2 0 002-2V6H8v10a2 2 0 002 2z" />
                    </svg>
                </button>

                <!-- Tombol Checkout -->
                <button class="bg-gray-900 text-white px-6 py-2 rounded-xl hover:bg-gray-800 transition">
                    Checkout
                </button>
            </div>
        </div>
    </div>
</div>

<!-- 🧠 Script -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const cartIcon = document.querySelector("#cartIcon");
    const cartModal = document.querySelector("#cartModal");
    const closeCartBtn = document.querySelector("#closeCartBtn");
    const clearCartBtn = document.querySelector("#clearCartBtn");

    if (cartIcon && cartModal) {
        cartIcon.addEventListener("click", () => {
            cartModal.classList.toggle("hidden");
        });
        closeCartBtn.addEventListener("click", () => {
            cartModal.classList.add("hidden");
        });
    }

    clearCartBtn?.addEventListener("click", () => {
        if (confirm("Yakin ingin menghapus semua item di keranjang?")) {
            const items = cartModal.querySelectorAll(".flex.items-center.bg-white\\/60");
            items.forEach(el => el.remove());
        }
    });
});
</script>
