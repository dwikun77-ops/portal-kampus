<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Safety Web Portal UNSRI' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>


<body class="min-h-screen flex flex-col bg-[#FFF8F0] text-[#45132F] antialiased">

    
{{-- -loading screen global --}}
<div id="loadingScreen"
        class="fixed inset-0 z-[9999] flex flex-col items-center justify-center bg-[#FFF8F0] transition-opacity duration-700">
        <div
            class="loading-logo flex h-20 w-20 items-center justify-center rounded-3xl bg-[#7D174F] text-4xl text-white shadow-xl shadow-pink-200">
            🛡
        </div>

        <h1 class="mt-6 text-2xl font-extrabold text-[#7D174F]">
            Safety Web Portal
        </h1>

        <p class="mt-2 text-sm text-gray-500">
            Universitas Sriwijaya
        </p>

        <div class="mt-8 h-1.5 w-48 overflow-hidden rounded-full bg-pink-100">
            <div class="loading-bar h-full rounded-full bg-[#E94D9B]"></div>
        </div>

        <p class="mt-3 text-xs font-medium text-[#7D174F]">
            Menyiapkan portal keselamatan...
        </p>

    </div>

    {{-- Navbar bersama --}}
    @include('layouts.partials.navbar') 

    {{-- Konten masing-masing halaman --}}
    <main class="page-content flex-1">
        {{ $slot }}
    </main>

        {{-- Footer bersama --}}
        @include('layouts.partials.footer')
    
    {{-- Animasi Loading global --}}
    <script>
    window.addEventListener('load', () => {
        const loadingScreen = document.getElementById('loadingScreen');
        const pageContent = document.querySelector('.page-content');

        if (!loadingScreen || !pageContent) return;

        // Sedikit jeda agar animasi terlihat
        setTimeout(() => {
            pageContent.classList.add('page-enter-active');
            
            loadingScreen.classList.add('fade-out');

            setTimeout(() => {
                loadingScreen.remove();
            }, 700);
        }, 500);
    });
</script>



    



</body>

</html>