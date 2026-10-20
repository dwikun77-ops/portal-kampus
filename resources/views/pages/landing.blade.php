<x-layout title="Beranda | Safety Web Portal UNSRI">
        <!-- HERO SECTION -->
        <section id="beranda" class="relative isolate overflow-hidden bg-[#7D174F]">
            <div class="absolute inset-0 -z-20">
                <img
                    src="https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=2000&q=85"
                    alt="Gedung universitas"
                    class="h-full w-full object-cover"
                >
            </div>

            <div class="absolute inset-0 -z-10 bg-gradient-to-r from-[#45132F]/95 via-[#7D174F]/85 to-[#7D174F]/35"></div>

            <div class="mx-auto grid max-w-7xl items-center gap-10 px-5 py-20 sm:py-24 lg:grid-cols-2 lg:px-8 lg:py-28">
                <div>
                    <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-medium text-white backdrop-blur">
                        <span class="h-2 w-2 rounded-full bg-[#FFD66B]"></span>
                        Keselamatan Bersama, Kampus Lebih Aman
                    </div>

                    <h2 class="max-w-2xl text-4xl font-black leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">
                        Kenali Kampusmu,
                        <span class="text-[#FFD66B]">Siap Hadapi Keadaan Darurat.</span>
                    </h2>

                    <p class="mt-6 max-w-xl text-base leading-7 text-pink-50 sm:text-lg">
                        Akses informasi keselamatan kampus, peta lokasi, denah gedung,
                        jalur evakuasi, video edukasi, dan kontak darurat dalam satu portal.
                    </p>

                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="{{ route('peta-kampus') }}" class="inline-flex items-center gap-2 rounded-xl bg-[#F5A623] px-6 py-3.5 font-bold text-[#45132F] shadow-lg shadow-black/10 transition hover:-translate-y-0.5 hover:bg-[#FFD66B]">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l5.553 2.776A1 1 0 0022 18.882V7.118a1 1 0 00-1.447-.894L15 9m0 8V9m0 0L9 7"/>
                            </svg>
                            Lihat Peta Kampus
                        </a>

                        <a href="{{ route('edukasi') }}" class="inline-flex items-center gap-2 rounded-xl border border-white/50 bg-white/10 px-6 py-3.5 font-bold text-white backdrop-blur transition hover:bg-white/20">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                            Video Edukasi
                        </a>
                    </div>

                    <div class="mt-8 flex items-center gap-3 text-sm text-pink-100">
                        <span class="flex h-9 w-9 items-center justify-center rounded-full bg-white/15">✓</span>
                        Mudah diakses melalui QR Code, tanpa instalasi aplikasi.
                    </div>
                </div>

                <div class="hidden lg:block">
                    <div class="rounded-3xl border border-white/30 bg-white/10 p-4 shadow-2xl backdrop-blur-md">
                        <img
                            src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1000&q=85"
                            alt="Area lingkungan kampus"
                            class="h-72 w-full rounded-2xl object-cover"
                        >
                        <div class="flex items-center justify-between gap-4 px-2 pb-1 pt-5">
                            <div>
                                <p class="text-sm text-pink-100">Portal Informasi</p>
                                <h3 class="mt-1 text-xl font-bold text-white">Satu Akses, Banyak Informasi</h3>
                            </div>
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-[#FFD66B] text-2xl">🛡</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MENU PORTAL -->
        <section class="mx-auto max-w-7xl px-5 py-16 lg:px-8 lg:py-20">
            <div class="mb-10 flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
                <div>
                    <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#E94D9B]">Jelajahi Portal</p>
                    <h2 class="mt-2 text-3xl font-black text-[#7D174F] sm:text-4xl">
                        Informasi dalam Satu Akses
                    </h2>
                    <p class="mt-3 max-w-2xl leading-7 text-gray-600">
                        Temukan informasi kampus dan panduan keselamatan yang kamu butuhkan.
                    </p>
                </div>
                <span class="w-fit rounded-full bg-pink-100 px-4 py-2 text-sm font-semibold text-[#7D174F]">
                    6 Menu Utama
                </span>
            </div>

            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                <!-- Peta Kampus -->
                <a id="peta" href="{{ route('peta-kampus') }}" class="group rounded-2xl border border-pink-100 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#E94D9B]/40 hover:shadow-xl hover:shadow-pink-100">
                    <div class="flex items-start justify-between">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-50 text-3xl">🗺️</div>
                        <span class="text-xl text-gray-400 transition group-hover:translate-x-1 group-hover:text-[#E94D9B]">→</span>
                    </div>
                    <h3 class="mt-5 text-xl font-extrabold text-[#7D174F]">Peta Kampus</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        Temukan lokasi gedung, fasilitas, dan area penting di lingkungan kampus.
                    </p>
                </a>

                <!-- Denah Gedung -->
                <a id="denah" href="{{ route('denah-gedung') }}" class="group rounded-2xl border border-pink-100 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#E94D9B]/40 hover:shadow-xl hover:shadow-pink-100">
                    <div class="flex items-start justify-between">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-orange-50 text-3xl">🏢</div>
                        <span class="text-xl text-gray-400 transition group-hover:translate-x-1 group-hover:text-[#E94D9B]">→</span>
                    </div>
                    <h3 class="mt-5 text-xl font-extrabold text-[#7D174F]">Denah Tiap Gedung</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        Lihat denah gedung dan tata letak ruangan berdasarkan lantai.
                    </p>
                </a>

                <!-- Jalur Evakuasi -->
                <a id="evakuasi" href="{{ route('evakuasi') }}" class="group rounded-2xl border border-pink-100 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#E94D9B]/40 hover:shadow-xl hover:shadow-pink-100">
                    <div class="flex items-start justify-between">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-green-50 text-3xl">🏃</div>
                        <span class="text-xl text-gray-400 transition group-hover:translate-x-1 group-hover:text-[#E94D9B]">→</span>
                    </div>
                    <h3 class="mt-5 text-xl font-extrabold text-[#7D174F]">Jalur Evakuasi</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        Pelajari rute keluar darurat dan lokasi titik kumpul yang ditentukan.
                    </p>
                </a>

                <!-- Video Edukasi -->
                <a id="video" href={{ route('edukasi') }} class="group rounded-2xl border border-pink-100 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#E94D9B]/40 hover:shadow-xl hover:shadow-pink-100">
                    <div class="flex items-start justify-between">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-yellow-50 text-3xl">🎬</div>
                        <span class="text-xl text-gray-400 transition group-hover:translate-x-1 group-hover:text-[#E94D9B]">→</span>
                    </div>
                    <h3 class="mt-5 text-xl font-extrabold text-[#7D174F]">Video Edukasi</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        Pelajari langkah keselamatan melalui video edukasi kebencanaan.
                    </p>
                </a>

                <!-- Kontak Darurat -->
                <a id="kontak" href={{ route('kontak-darurat') }} class="group rounded-2xl border border-pink-100 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#E94D9B]/40 hover:shadow-xl hover:shadow-pink-100">
                    <div class="flex items-start justify-between">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-red-50 text-3xl">📞</div>
                        <span class="text-xl text-gray-400 transition group-hover:translate-x-1 group-hover:text-[#E94D9B]">→</span>
                    </div>
                    <h3 class="mt-5 text-xl font-extrabold text-[#7D174F]">Kontak Darurat</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        Temukan nomor petugas kampus dan layanan darurat yang relevan.
                    </p>
                </a>

                <!-- Panduan Keselamatan -->
                <a href="#panduan" class="group rounded-2xl border border-pink-100 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#E94D9B]/40 hover:shadow-xl hover:shadow-pink-100">
                    <div class="flex items-start justify-between">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-purple-50 text-3xl">🛡️</div>
                        <span class="text-xl text-gray-400 transition group-hover:translate-x-1 group-hover:text-[#E94D9B]">→</span>
                    </div>
                    <h3 class="mt-5 text-xl font-extrabold text-[#7D174F]">Panduan Keselamatan</h3>
                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        Kenali langkah dasar yang perlu dilakukan saat keadaan darurat.
                    </p>
                </a>
            </div>
        </section>

        <!-- BANNER DARURAT -->
        <section id="kontak-darurat" class="mx-auto max-w-7xl px-5 pb-16 lg:px-8">
            <div class="flex flex-col items-start justify-between gap-6 rounded-3xl border border-pink-200 bg-gradient-to-r from-[#FCE7EF] to-[#FFF0D4] p-6 sm:flex-row sm:items-center sm:p-9">
                <div class="flex items-start gap-4">
                    <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-[#7D174F] text-2xl text-white">!</div>
                    <div>
                        <p class="text-sm font-bold uppercase tracking-wider text-[#E94D9B]">Butuh bantuan?</p>
                        <h2 class="mt-1 text-2xl font-black text-[#7D174F]">Dalam Keadaan Darurat?</h2>
                        <p class="mt-2 max-w-2xl text-sm leading-6 text-gray-700">
                            Tetap tenang, ikuti jalur evakuasi yang ditentukan, dan hubungi petugas melalui kontak resmi kampus.
                        </p>
                    </div>
                </div>
                <a href="#kontak" class="inline-flex shrink-0 items-center gap-2 rounded-xl bg-[#E94D9B] px-5 py-3.5 font-bold text-white shadow-lg shadow-pink-200 transition hover:bg-[#7D174F]">
                    <span>☎</span>
                    Lihat Kontak Darurat
                    <span>→</span>
                </a>
            </div>
        </section>

</x-layout>