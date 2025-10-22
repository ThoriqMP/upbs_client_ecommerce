<nav class="fixed top-4 left-1/2 -translate-x-1/2 z-50 bg-white/30 backdrop-blur-xl border border-white/20 shadow-lg rounded-3xl px-6 py-3 w-[90%] md:w-[80%] flex items-center justify-between">
  <!-- 🧬 Logo -->
  <div class="flex items-center space-x-2">
    <div class="w-10 h-10 overflow-hidden rounded-full flex items-center justify-center bg-white/50">
      <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="Logo" class="object-contain w-8 h-8">
    </div>
    <span class="font-semibold text-gray-900 text-lg hidden sm:block">UPBS BRMP</span>
  </div>

  <!-- 🌿 Menu Tengah (desktop) -->
  <ul class="hidden md:flex space-x-8 text-gray-800 font-medium">
    <li>
      <a href="{{ route('home') }}" 
         class="{{ request()->routeIs('home') ? 'text-indigo-600 font-semibold' : 'hover:text-indigo-600' }} transition">
         Beranda
      </a>
    </li>
    <li>
      <a href="{{ route('katalog') }}" 
         class="{{ request()->routeIs('katalog') ? 'text-indigo-600 font-semibold' : 'hover:text-indigo-600' }} transition">
         Katalog
      </a>
    </li>
    <li>
      <a href="#"
         class="hover:text-indigo-600 transition">
         Tentang Kami
      </a>
    </li>
  </ul>

  <!-- 🌾 Ikon kanan -->
  <div class="flex items-center space-x-4">
    <!-- 🛒 Keranjang -->
    <div class="relative cursor-pointer" id="cartIcon">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
        stroke-width="1.8" stroke="currentColor"
        class="w-6 h-6 text-gray-800 hover:text-indigo-600 transition">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M2.25 3h1.386c.51 0 .955.343 1.087.836L5.67 8.25M7.5 14.25h9.75m-9.75 0a3 3 0 01-2.91-2.25L3.75 6.75m3.75 7.5h10.5a3 3 0 002.91-2.25l1.047-4.5a1.125 1.125 0 00-1.09-1.5H6.375m1.125 13.5a1.125 1.125 0 11-2.25 0m13.5 0a1.125 1.125 0 11-2.25 0" />
      </svg>
      <span class="absolute -top-1 -right-1 bg-red-500 text-white text-[10px] font-bold rounded-full px-[5px] py-[1px]">3</span>
    </div>

    <!-- 🍔 Menu mobile -->
    <button id="menuToggle" class="md:hidden focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
        stroke-width="2" stroke="currentColor" class="w-7 h-7 text-gray-800">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>

  <!-- 📱 Dropdown Mobile -->
  <div id="mobileMenu"
       class="hidden absolute top-full right-0 mt-3 w-56 bg-white/70 backdrop-blur-xl border border-white/30 shadow-xl rounded-2xl p-4 md:hidden">
    <ul class="space-y-3 text-gray-800 font-medium">
      <li>
        <a href="{{ route('home') }}" 
           class="block px-3 py-2 rounded-lg hover:bg-[#B4DEBD]/40 transition {{ request()->routeIs('home') ? 'text-indigo-600 font-semibold' : '' }}">
           Beranda
        </a>
      </li>
      <li>
        <a href="{{ route('katalog') }}" 
           class="block px-3 py-2 rounded-lg hover:bg-[#B4DEBD]/40 transition {{ request()->routeIs('katalog') ? 'text-indigo-600 font-semibold' : '' }}">
           Katalog
        </a>
      </li>
      <li>
        <a href="#"
           class="block px-3 py-2 rounded-lg hover:bg-[#B4DEBD]/40 transition">
           Tentang Kami
        </a>
      </li>
    </ul>
  </div>
</nav>
