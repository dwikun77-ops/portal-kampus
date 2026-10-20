```blade
@php
    $contacts = [
        [
            'category' => 'Keamanan Kampus',
            'name' => 'Pos Keamanan Kampus',
            'description' => 'Hubungi petugas keamanan untuk melaporkan kejadian mencurigakan atau meminta bantuan di lingkungan kampus.',
            'phone' => null,
            'location' => 'Lokasi pos keamanan belum dikonfirmasi.',
            'icon' => 'shield',
            'color' => '#7D174F',
            'bg' => '#FCE7F3',
        ],
        [
            'category' => 'Kebakaran',
            'name' => 'Petugas Pemadam Kebakaran',
            'description' => 'Untuk melaporkan kebakaran dan meminta bantuan penanganan awal keadaan darurat.',
            'phone' => null,
            'location' => 'Lokasi pos petugas belum dikonfirmasi.',
            'icon' => 'flame',
            'color' => '#C2410C',
            'bg' => '#FFEDD5',
        ],
        [
            'category' => 'Kesehatan',
            'name' => 'Layanan Medis / Ambulans',
            'description' => 'Untuk meminta pertolongan ketika terjadi kondisi medis darurat atau kecelakaan.',
            'phone' => null,
            'location' => 'Lokasi layanan medis belum dikonfirmasi.',
            'icon' => 'heart-pulse',
            'color' => '#1D4ED8',
            'bg' => '#DBEAFE',
        ],
        [
            'category' => 'Pengelola Kampus',
            'name' => 'Pusat Informasi Kampus',
            'description' => 'Untuk memperoleh informasi dan bantuan koordinasi dengan unit terkait di lingkungan kampus.',
            'phone' => null,
            'location' => 'Lokasi pusat informasi belum dikonfirmasi.',
            'icon' => 'building-2',
            'color' => '#047857',
            'bg' => '#D1FAE5',
        ],
    ];
@endphp

<x-layout title="Kontak Darurat | Safety Web Portal UNSRI">
    <section class="min-h-screen bg-[#FFF8F0]">
        <div class="mx-auto max-w-7xl px-5 py-12 lg:px-8">

            {{-- Header --}}
            <div class="mx-auto mb-10 max-w-3xl text-center">
                <span class="inline-flex items-center gap-2 rounded-full bg-pink-100 px-4 py-2 text-xs font-bold uppercase tracking-widest text-[#E94D9B]">
                    <span class="h-2 w-2 rounded-full bg-[#E94D9B]"></span>
                    Safety Web Portal UNSRI
                </span>

                <h1 class="mt-5 text-3xl font-extrabold tracking-tight text-[#7D174F] sm:text-4xl lg:text-5xl">
                    Kontak Darurat
                </h1>

                <p class="mx-auto mt-4 max-w-2xl text-sm leading-7 text-gray-600 sm:text-base">
                    Temukan informasi layanan dan lokasi petugas yang dapat
                    membantu ketika terjadi keadaan darurat di lingkungan kampus.
                </p>
            </div>

            {{-- Informasi penting --}}
            <div class="mb-10 overflow-hidden rounded-3xl bg-[#7D174F] shadow-xl shadow-pink-200/40">
                <div class="flex flex-col gap-5 p-6 sm:flex-row sm:items-center sm:p-8">
                    <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-white/15 text-white">
                        <i class="fa-solid fa-triangle-exclamation text-2xl"></i>
                    </div>

                    <div class="flex-1">
                        <h2 class="text-xl font-extrabold text-white sm:text-2xl">
                            Dalam keadaan darurat?
                        </h2>
                        <p class="mt-2 max-w-3xl text-sm leading-6 text-pink-100">
                            Tetap tenang, utamakan keselamatan diri, ikuti jalur
                            evakuasi, dan hubungi petugas melalui nomor yang
                            telah diverifikasi.
                        </p>
                    </div>

                    <a href="{{ route('edukasi') }}"
                        class="inline-flex shrink-0 items-center justify-center gap-2 rounded-xl bg-white px-5 py-3 text-sm font-bold text-[#7D174F] transition hover:bg-pink-50">
                        <i class="fa-solid fa-circle-play"></i>
                        Panduan Keselamatan
                    </a>
                </div>
            </div>

            {{-- Judul daftar kontak --}}
            <div class="mb-6">
                <h2 class="text-xl font-extrabold text-[#7D174F] sm:text-2xl">
                    Layanan Bantuan
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    Pilih layanan sesuai kebutuhan dan keadaan yang terjadi.
                </p>
            </div>

            {{-- Kartu kontak --}}
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($contacts as $contact)
                    <article class="group flex h-full flex-col overflow-hidden rounded-2xl border border-pink-100 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-pink-100/70">

                        {{-- Aksen warna --}}
                        <div class="h-1.5 w-full" style="background-color: {{ $contact['color'] }}"></div>

                        <div class="flex flex-1 flex-col p-5 sm:p-6">

                            {{-- Ikon dan kategori --}}
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex h-12 w-12 items-center justify-center rounded-2xl"
                                    style="background-color: {{ $contact['bg'] }}; color: {{ $contact['color'] }}">
                                    <i class="fa-solid fa-{{ $contact['icon'] }} text-xl"></i>
                                </div>

                                <span class="rounded-full px-3 py-1 text-[10px] font-bold uppercase tracking-wide"
                                    style="background-color: {{ $contact['bg'] }}; color: {{ $contact['color'] }}">
                                    {{ $contact['category'] }}
                                </span>
                            </div>

                            {{-- Informasi layanan --}}
                            <h3 class="mt-5 text-lg font-extrabold leading-snug text-[#7D174F]">
                                {{ $contact['name'] }}
                            </h3>

                            <p class="mt-3 text-sm leading-6 text-gray-600">
                                {{ $contact['description'] }}
                            </p>

                            {{-- Nomor telepon --}}
                            <div class="mt-5 rounded-xl bg-gray-50 p-3">
                                <div class="flex items-start gap-3">
                                    <i class="fa-solid fa-phone mt-1 text-sm"
                                        style="color: {{ $contact['color'] }}"></i>

                                    <div class="min-w-0 flex-1">
                                        <p class="text-xs font-bold text-gray-500">
                                            Nomor telepon
                                        </p>

                                        @if (!empty($contact['phone']))
                                            <p class="mt-1 break-words text-sm font-bold text-gray-800">
                                                {{ $contact['phone'] }}
                                            </p>
                                        @else
                                            <p class="mt-1 text-sm italic text-gray-500">
                                                Belum tersedia
                                            </p>
                                            <p class="mt-1 text-xs leading-5 text-gray-400">
                                                Nomor resmi perlu dikonfirmasi.
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Lokasi petugas --}}
                            <div class="mt-3 flex items-start gap-3">
                                <i class="fa-solid fa-location-dot mt-1 text-sm"
                                    style="color: {{ $contact['color'] }}"></i>

                                <div class="min-w-0 flex-1">
                                    <p class="text-xs font-bold text-gray-500">
                                        Lokasi petugas
                                    </p>
                                    <p class="mt-1 text-sm leading-5 text-gray-700">
                                        {{ $contact['location'] }}
                                    </p>
                                </div>
                            </div>

                            {{-- Tombol telepon --}}
                            <div class="mt-auto pt-6">
                                @if (!empty($contact['phone']))
                                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', $contact['phone']) }}"
                                        class="inline-flex w-full items-center justify-center gap-2 rounded-xl px-4 py-3 text-sm font-bold text-white transition hover:opacity-90"
                                        style="background-color: {{ $contact['color'] }}">
                                        <i class="fa-solid fa-phone"></i>
                                        Hubungi Sekarang
                                    </a>
                                @else
                                    <button type="button" disabled
                                        class="inline-flex w-full cursor-not-allowed items-center justify-center gap-2 rounded-xl bg-gray-100 px-4 py-3 text-sm font-bold text-gray-400">
                                        <i class="fa-solid fa-phone-slash"></i>
                                        Nomor Belum Tersedia
                                    </button>
                                @endif
                            </div>

                        </div>
                    </article>
                @endforeach
            </div>

            {{-- Catatan verifikasi --}}
            <div class="mt-8 flex items-start gap-3 rounded-2xl border border-amber-200 bg-amber-50 p-5">
                <i class="fa-solid fa-circle-info mt-0.5 text-lg text-amber-600"></i>
                <div>
                    <h3 class="text-sm font-bold text-amber-900">
                        Informasi kontak sedang menunggu verifikasi
                    </h3>
                    <p class="mt-1 text-sm leading-6 text-amber-800">
                        Nama layanan, nomor telepon, dan lokasi pada halaman ini
                        merupakan contoh awal. Pastikan seluruh informasi telah
                        dikonfirmasi oleh pihak UNSRI sebelum portal dipublikasikan.
                    </p>
                </div>
            </div>

        </div>
    </section>
</x-layout>
```