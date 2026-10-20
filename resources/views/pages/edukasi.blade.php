@php
    $videos = [
        [
            'title' => 'Cara Menggunakan APAR dengan Benar',
            'description' => 'Panduan penggunaan APAR dengan benar di lingkungan kampus.',
            'youtube_id' => 'JC5p2rNqx9c?si=5RwkjX6MA3vADB_9',
            'thumnail'  => 'UJm5VzIa524',
        ],
        [
            'title' => 'Prosedur Evakuasi Gedung',
            'description' => 'Panduan melakukan evakuasi dengan aman.',
            'youtube_id' => 'Z5VkdB6Xbu8',
            'thumnail'  => 'Z5VkdB6Xbu8',
        ],
        [
            'title' => 'Keselamatan Saat Gempa',
            'description' => 'Langkah keselamatan yang perlu dilakukan saat terjadi gempa.',
            'youtube_id' => 'NihNPyDagKE',
            'thumnail'  => 'NihNPyDagKE',
        ],
    ];
@endphp

<x-layout title="Video - Edukasi | Safety Web Portal UNSRI">
    <section class="bg-[#FFF8F0]">
        <div class="mx-auto max-w-7xl px-5 py-12 lg:px-8">

            {{-- Judul Halaman --}}

            <div class="mb-8">
                <p class="text-sm font-bold uppercase tracking-widest text-[#E94D9B]">
                    Safety Web Portal
                </p>

                <h1 class="mt-2 text-3xl font-extrabold text-[#7D174F] sm:text-4xl">
                    Video Edukasi
                </h1>

                <p class="mt-3 max-w-2xl text-gray-600">
                    Pelajari berbagai panduan keselamatan dan kesiapsiagaan
                    dalam menghadapi kondisi darurat di lingkungan kampus.
                </p>
            </div>

            {{-- Video Utama--}}

            <div class="overflow-hidden rounded-3xl bg-white shadow-xl shadow-pink-100/50">
                <div class="aspect-video w-full bg-black">
                    <iframe id="videoPlayer" class="h-full w-full"
                        src="https://www.youtube.com/embed/{{ $videos[0]['youtube_id'] }}"
                        title="{{ $videos[0]['title'] }}"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>

                    </iframe>
                </div>

                <div class="p-6 sm:p-8">
                    <h2 id="videoTitle" class="text-xl font-extrabold text-[#7D174F] sm:text-2xl">
                        {{ $videos[0]['title'] }}
                    </h2>

                    <p id="videoDescription" class="mt-2 max-w-3xl text-sm leading-relaxed text-gray-600 sm:text-base">
                        {{ $videos[0]['description'] }}
                    </p>

                </div>

            </div>

            {{-- Playlist langsung di bawah video --}}
            <div class="mt-6">

                <div class="flex gap-4 overflow-x-auto pb-4 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">

                    @foreach ($videos as $index => $video)

                        <button type="button" onclick="changeVideo({{ $index }})"
                            class="video-card group w-[240px] flex-none rounded-2xl border-2 border-transparent bg-white p-3 text-left shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

                            {{-- Thumbnail --}}
                            <div class="relative aspect-video overflow-hidden rounded-xl bg-pink-50">

                                <img src="https://img.youtube.com/vi/{{ $video['thumnail'] }}/hqdefault.jpg"
                                    alt="{{ $video['title'] }}"
                                    class="h-full w-full object-cover transition duration-300 group-hover:scale-105">

                                {{-- Tombol play --}}
                                <div
                                    class="absolute inset-0 flex items-center justify-center bg-black/10 transition group-hover:bg-black/30">

                                    <span
                                        class="flex h-11 w-11 items-center justify-center rounded-full bg-[#E94D9B] text-white shadow-lg transition group-hover:scale-110">
                                        ▶
                                    </span>

                                </div>

                            </div>

                            {{-- Judul --}}
                            <h3 class="mt-3 line-clamp-2 text-sm font-bold leading-snug text-[#7D174F]">
                                {{ $video['title'] }}
                            </h3>

                        </button>

                    @endforeach

                </div>
            </div>

        </div>

    </section>

    <script>
        const videos = @json($videos);

        function changeVideo(index){
            const video = videos[index];

            document.getElementById('videoPlayer').src = `https://www.youtube.com/embed/${video.youtube_id}`;
            document.getElementById('videoPlayer').title = video.title;
            document.getElementById('videoTitle').textContent =video.title;
            document.getElementById('videoDescription').textContent = video.description;

            document.querySelectorAll('.video-card').forEach((card, cardIndex) => {
                card.classList.remove(
                    'border-[#E94D9B]',
                    'bg-pink-50'
                );

                if (cardIndex === index) {
                    card.classList.add(
                        'border-[#E94D9B]',
                        'bg-pink-50'
                    );
                }
            });
        }

        document.querySelector('.video-card')?.classList.add(
            'border-[#E94D9B]',
            'bg-pink-50'
        );
        
    </script>
</x-layout>