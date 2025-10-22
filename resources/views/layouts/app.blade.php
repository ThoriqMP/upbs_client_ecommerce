<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'UPBS BRMP Biogen')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
  </head>
    @php
                $cartItems = $cartItems ?? [
                    ['nama' => 'Benih Padi Ciherang', 'harga' => 'Rp 25.000', 'gambar' => 'resources/img/sample-product.jpg'],
                    ['nama' => 'Benih Jagung Hibrida', 'harga' => 'Rp 18.000', 'gambar' => 'resources/img/sample-product.jpg'],
                ];
    @endphp

    @include('components.cart-modal', ['cartItems' => $cartItems])
  <body class="bg-gray-50 text-gray-800 font-sans">
    {{-- Navbar --}}
    @include('layouts.navbar')
    
    {{-- Konten Halaman --}}
    <main class="no-overscroll">
      @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')
  </body>
</html>
