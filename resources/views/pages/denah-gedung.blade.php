@php
    $gedung = [
        [
            'id' => 'gedung-a',
            'nama' => 'Gedung A',
            'deskripsi' => 'Gedung perkuliahan dan kegiatan akademik.',
            'lantai' => 3,
        ],
        [
            'id' => 'gedung-b',
            'nama' => 'Gedung B',
            'deskripsi' => 'Gedung administrasi dan pelayanan.',
            'lantai' => 2,
        ],
        [
            'id' => 'gedung-c',
            'nama' => 'Gedung C',
            'deskripsi' => 'Gedung perkuliahan dan fasilitas mahasiswa.',
            'lantai' => 3,
        ],
    ];
@endphp

<x-layout title="Denah Gedung - Safety Web Portal UNSRI">

    <section class="bg-[#FFF8F0]">
        <div class="mx-auto max-w-7xl px-5 py-12 lg:px-8">

            {{-- Header --}}
            <div class="mb-8">
                <p class="text-sm font-bold uppercase tracking-widest text-[#E94D9B]">
                    Safety Web Portal
                </p>

                <h1 class="mt-2 text-3xl font-extrabold text-[#7D174F] sm:text-4xl">
                    Denah Tiap Gedung
                </h1>

                <p class="mt-3 max-w-2xl text-gray-600">
                    Lihat denah setiap gedung untuk menemukan ruangan,
                    fasilitas, dan akses penting di dalam gedung.
                </p>
            </div>

            {{-- Pilihan Gedung --}}
            <div class="mb-6 rounded-2xl border border-pink-100 bg-white p-5 shadow-sm">

                <label
                    for="buildingSelect"
                    class="mb-2 block text-sm font-bold text-[#7D174F]">
                    Pilih Gedung
                </label>

                <select
                    id="buildingSelect"
                    class="w-full rounded-xl border border-pink-100 bg-white px-4 py-3 text-sm text-gray-700 outline-none transition focus:border-[#E94D9B] focus:ring-2 focus:ring-pink-100 sm:max-w-md">

                    @foreach ($gedung as $index => $item)
                        <option value="{{ $index }}">
                            {{ $item['nama'] }}
                        </option>
                    @endforeach

                </select>

            </div>

            {{-- Informasi Gedung --}}
            <div class="mb-6 rounded-2xl border border-pink-100 bg-white p-6 shadow-sm">

                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-[#E94D9B]">
                            Gedung Dipilih
                        </p>

                        <h2
                            id="buildingName"
                            class="mt-1 text-2xl font-extrabold text-[#7D174F]">
                            {{ $gedung[0]['nama'] }}
                        </h2>

                        <p
                            id="buildingDescription"
                            class="mt-2 text-sm text-gray-600">
                            {{ $gedung[0]['deskripsi'] }}
                        </p>
                    </div>

                    <div class="rounded-xl bg-pink-50 px-4 py-3 text-center">
                        <p class="text-xs font-semibold text-gray-500">
                            Jumlah Lantai
                        </p>

                        <p
                            id="buildingFloors"
                            class="text-xl font-extrabold text-[#E94D9B]">
                            {{ $gedung[0]['lantai'] }}
                        </p>
                    </div>

                </div>

            </div>

            {{-- Pilihan Lantai --}}
            <div class="mb-5 flex gap-2 overflow-x-auto pb-2">

                <button
                    type="button"
                    class="floor-button rounded-xl bg-[#7D174F] px-5 py-2.5 text-sm font-bold text-white">
                    Lantai 1
                </button>

                <button
                    type="button"
                    class="floor-button rounded-xl bg-white px-5 py-2.5 text-sm font-bold text-gray-600 shadow-sm ring-1 ring-pink-100 transition hover:bg-pink-50 hover:text-[#E94D9B]">
                    Lantai 2
                </button>

                <button
                    type="button"
                    class="floor-button rounded-xl bg-white px-5 py-2.5 text-sm font-bold text-gray-600 shadow-sm ring-1 ring-pink-100 transition hover:bg-pink-50 hover:text-[#E94D9B]">
                    Lantai 3
                </button>

            </div>

            {{-- Area Denah --}}
            <div class="overflow-hidden rounded-3xl border border-pink-100 bg-white shadow-xl">

                <div class="flex min-h-[500px] items-center justify-center bg-[#FDE7F1] p-6">

                    <div class="w-full max-w-4xl rounded-2xl border-4 border-[#7D174F] bg-white p-6 shadow-lg">

                        {{-- Judul Denah --}}
                        <div class="mb-5 text-center">
                            <p class="text-xs font-bold uppercase tracking-widest text-[#E94D9B]">
                                Denah Sementara
                            </p>

                            <h3 class="mt-1 text-xl font-extrabold text-[#7D174F]">
                                Gedung A — Lantai 1
                            </h3>
                        </div>

                        {{-- Denah Dummy --}}
                        <div class="grid grid-cols-3 gap-3">

                            <div class="flex h-28 items-center justify-center rounded-xl bg-pink-100 text-sm font-bold text-[#7D174F]">
                                Ruang 101
                            </div>

                            <div class="flex h-28 items-center justify-center rounded-xl bg-pink-100 text-sm font-bold text-[#7D174F]">
                                Ruang 102
                            </div>

                            <div class="flex h-28 items-center justify-center rounded-xl bg-[#FFD66B] text-sm font-bold text-[#7D174F]">
                                Tangga
                            </div>

                            <div class="col-span-3 flex h-16 items-center justify-center rounded-xl bg-[#F6A6C8] text-sm font-bold text-[#7D174F]">
                                Koridor
                            </div>

                            <div class="flex h-28 items-center justify-center rounded-xl bg-pink-100 text-sm font-bold text-[#7D174F]">
                                Ruang 103
                            </div>

                            <div class="flex h-28 items-center justify-center rounded-xl bg-pink-100 text-sm font-bold text-[#7D174F]">
                                Ruang 104
                            </div>

                            <div class="flex h-28 items-center justify-center rounded-xl bg-[#E94D9B] text-sm font-bold text-white">
                                Toilet
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <script>
        const buildings = @json($gedung);

        const buildingSelect = document.getElementById('buildingSelect');
        const buildingName = document.getElementById('buildingName');
        const buildingDescription = document.getElementById('buildingDescription');
        const buildingFloors = document.getElementById('buildingFloors');

        buildingSelect.addEventListener('change', function () {

            const building = buildings[this.value];

            buildingName.textContent = building.nama;
            buildingDescription.textContent = building.deskripsi;
            buildingFloors.textContent = building.lantai;

        });

        document.querySelectorAll('.floor-button').forEach(button => {

            button.addEventListener('click', function () {

                document.querySelectorAll('.floor-button').forEach(item => {
                    item.classList.remove(
                        'bg-[#7D174F]',
                        'text-white'
                    );

                    item.classList.add(
                        'bg-white',
                        'text-gray-600'
                    );
                });

                this.classList.remove(
                    'bg-white',
                    'text-gray-600'
                );

                this.classList.add(
                    'bg-[#7D174F]',
                    'text-white'
                );

            });

        });
    </script>

</x-layout>