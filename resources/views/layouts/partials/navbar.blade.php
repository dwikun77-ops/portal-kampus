

<header class="sticky top-0 z-50 border-b border-pink-100 bg-white/95 backdrop-blur-md">
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 lg:px-8">
            <a href="#beranda" class="flex items-center gap-3">
                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#7D174F] text-2xl text-white shadow-lg shadow-pink-200">
                    🛡
                </div>
                <div>
                    <h1 class="text-lg font-extrabold leading-tight text-[#7D174F] sm:text-xl">
                        Safety Web Portal
                    </h1>
                    <p class="text-xs font-medium text-gray-500">Universitas Sriwijaya</p>
                </div>
            </a>

            <div class="hidden items-center gap-1 lg:flex">
                <a href="{{ route('home') }}" 
                @class(['rounded-full px-4 py-2 text-sm transition',
                'bg-pink-100 font-bold text-[#7D174F]'=> request()-> routeIs('home'),
                'font-semibold text-gray-600 hover:bg-pink-50 hover:text-[#E94D9B]' => !request()->routeIs('home'),
                ])>
                    Beranda
                </a>
                <a href="{{ route('peta-kampus') }}"
                @class(['rounded-full px-4 py-2 text-sm transition',
                'bg-pink-100 font-bold text-[#7D174F]'=> request()-> routeIs('peta-kampus'),
                'font-semibold text-gray-600 hover:bg-pink-50 hover:text-[#E94D9B]' => !request()->routeIs('peta-kampus'),
                ])>
                    Peta Kampus
                </a>
                <a href="{{ route('denah-gedung') }}"
                @class(['rounded-full px-4 py-2 text-sm transition',
                'bg-pink-100 font-bold text-[#7D174F]'=> request()-> routeIs('denah-gedung'),
                'font-semibold text-gray-600 hover:bg-pink-50 hover:text-[#E94D9B]' => !request()->routeIs('denah-gedung'),
                ])>
                    Denah Gedung
                </a>
                <a href="{{ route('evakuasi') }}"
                @class(['rounded-full px-4 py-2 text-sm transition',
                'bg-pink-100 font-bold text-[#7D174F]'=> request()-> routeIs('evakuasi'),
                'font-semibold text-gray-600 hover:bg-pink-50 hover:text-[#E94D9B]' => !request()->routeIs('evakuasi'),
                ])>
                    Jalur Evakuasi
                </a>
                <a href="{{ route('edukasi') }}"
                @class(['rounded-full px-4 py-2 text-sm transition',
                'bg-pink-100 font-bold text-[#7D174F]'=> request()-> routeIs('edukasi'),
                'font-semibold text-gray-600 hover:bg-pink-50 hover:text-[#E94D9B]' => !request()->routeIs('edukasi'),
                ])>
                    Video Edukasi
                </a>
                <a href="{{ route('kontak-darurat') }}"
                @class(['rounded-full px-4 py-2 text-sm transition',
                'bg-pink-100 font-bold text-[#7D174F]'=> request()-> routeIs('kontak-darurat'),
                'font-semibold text-gray-600 hover:bg-pink-50 hover:text-[#E94D9B]' => !request()->routeIs('kontak-darurat'),
                ])>
                    Kontak Darurat
                </a>
            </div>

            <button id="menuButton" type="button" aria-label="Buka menu navigasi" aria-expanded="false" class="rounded-xl border border-pink-100 p-2 text-[#7D174F] lg:hidden">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </nav>

        <div id="mobileMenu" class="hidden border-t border-pink-100 bg-white px-5 py-3 lg:hidden">
            <div class="mx-auto flex max-w-7xl flex-col gap-1">
                <a href="#beranda" class="rounded-lg px-3 py-3 text-sm font-semibold hover:bg-pink-50">Beranda</a>
                <a href="#peta" class="rounded-lg px-3 py-3 text-sm font-semibold hover:bg-pink-50">Peta Kampus</a>
                <a href="#denah" class="rounded-lg px-3 py-3 text-sm font-semibold hover:bg-pink-50">Denah Gedung</a>
                <a href="#evakuasi" class="rounded-lg px-3 py-3 text-sm font-semibold hover:bg-pink-50">Jalur Evakuasi</a>
                <a href="#video" class="rounded-lg px-3 py-3 text-sm font-semibold hover:bg-pink-50">Video Edukasi</a>
                <a href="#kontak" class="rounded-lg px-3 py-3 text-sm font-semibold hover:bg-pink-50">Kontak Darurat</a>
            </div>
        </div>

        <script>
        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');

        menuButton.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.toggle('hidden');
            menuButton.setAttribute('aria-expanded', String(!isHidden));
        });

        mobileMenu.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                menuButton.setAttribute('aria-expanded', 'false');
            });
        });
    </script>
    </header>

