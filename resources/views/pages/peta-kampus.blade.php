<x-layout title="Peta Kampus - Safety Web Portal UNSRI">
    <link rel="stylesheet"
    href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">

    <section class="bg-[#FFF8F0]">
        <div class="mx-auto max-w-7xl px-5 py-12 lg:px-8">

            {{-- Header halaman --}}
            <div class="mb-8">
                <p class="text-sm font-bold uppercase tracking-widest text-[#E94D9B]">
                    Safety Web Portal
                </p>

                <h1 class="mt-2 text-3xl font-extrabold text-[#7D174F] sm:text-4xl">
                    Peta Kampus
                </h1>

                <p class="mt-3 max-w-2xl text-gray-600">
                    Temukan lokasi gedung dan fasilitas penting
                    di lingkungan kampus Universitas Sriwijaya.
                </p>
            </div>

            {{-- Area Peta --}}
            <div id="campusMap" class="h-[500px] w-full rounded-2xl border border-pink-100 shadow-lg">
            <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

            </div>

            {{-- Informasi lokasi --}}
            <div id="locationInfo" class="mt-6 hidden rounded-2xl border border-pink-100 bg-white p-6 shadow-lg">

                <div class="flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">

                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-[#E94D9B]">
                            Lokasi Dipilih
                        </p>

                        <h2 id="locationName" class="mt-1 text-xl font-extrabold text-[#7D174F]">
                        </h2>

                        <p id="locationDescription" class="mt-2 text-sm text-gray-600">
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-2">

                        <a href="#"
                            class="rounded-xl bg-[#7D174F] px-4 py-2 text-sm font-bold text-white transition hover:bg-[#45132F]">
                            Lihat Denah
                        </a>

                        <a href="#"
                            class="rounded-xl bg-[#E94D9B] px-4 py-2 text-sm font-bold text-white transition hover:bg-[#d63d89]">
                            Jalur Evakuasi
                        </a>

                    </div>

                </div>

            </div>

        </div>
    </section>

    

    <script>
        function showLocation(name, description) {
            document.getElementById('locationName').textContent = name;
            document.getElementById('locationDescription').textContent = description;

            document.getElementById('locationInfo').classList.remove('hidden');
        }
    </script>

    <script>

const markerIconPertanian = L.divIcon({
            className: 'marker-fakultas-icon',
            html:`
            <div class="faculty-marker" style="--marker-color:rgb(143, 62, 5)">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>
        `,
        iconSize: [40, 40],
        iconAnchor: [22, 22],
        popupAnchor: [0, -22]
        });

const markerIconFisip = L.divIcon({
            className: 'marker-fakultas-icon',
            html:`
            <div class="faculty-marker" style="--marker-color: #0891B2">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>
        `,
        iconSize: [40, 40],
        iconAnchor: [22, 22],
        popupAnchor: [0, -22]
        });

        const markerIconKesmas = L.divIcon({
            className: 'marker-fakultas-icon',
            html:`
            <div class="faculty-marker" style="--marker-color: #E94D9B">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>
        `,
        iconSize: [40, 40],
        iconAnchor: [22, 22],
        popupAnchor: [0, -22]
        });

        const markerIconHukum = L.divIcon({
            className: 'marker-fakultas-icon',
            html:`
            <div class="faculty-marker" style="--marker-color:rgb(0, 17, 255)">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>
        `,
        iconSize: [40, 40],
        iconAnchor: [22, 22],
        popupAnchor: [0, -22]
        });

        const markerIconTeknik = L.divIcon({
            className: 'marker-fakultas-icon',
            html:`
            <div class="faculty-marker" style="--marker-color:rgb(127, 2, 138)">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>
        `,
        iconSize: [40, 40],
        iconAnchor: [22, 22],
        popupAnchor: [0, -22]
        });

        const markerIconTikum = L.divIcon({
            className: 'marker-fakultas-icon',
            html:`
            <div class="faculty-marker" style="--marker-color:rgb(255, 140, 40)">
            <i class="fa-solid fa-people-group"></i>
        </div>
        `,
        iconSize: [30, 30],
        iconAnchor: [22, 22],
        popupAnchor: [0, -22]
        });

        const markerIconFK= L.divIcon({
            className: 'marker-fakultas-icon',
            html:`
            <div class="faculty-marker" style="--marker-color:rgb(3, 215, 49)">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>
        `,
        iconSize: [30, 30],
        iconAnchor: [22, 22],
        popupAnchor: [0, -22]
        });

        const markerIconFE= L.divIcon({
            className: 'marker-fakultas-icon',
            html:`
            <div class="faculty-marker" style="--marker-color: #475569">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>
        `,
        iconSize: [30, 30],
        iconAnchor: [22, 22],
        popupAnchor: [0, -22]
        });

        const markerIconMIPA= L.divIcon({
            className: 'marker-fakultas-icon',
            html:`
            <div class="faculty-marker" style="--marker-color:rgb(255, 234, 0)">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>
        `,
        iconSize: [30, 30],
        iconAnchor: [22, 22],
        popupAnchor: [0, -22]
        });

        const markerIconFKIP= L.divIcon({
            className: 'marker-fakultas-icon',
            html:`
            <div class="faculty-marker" style="--marker-color:rgb(255, 0, 191)">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>
        `,
        iconSize: [30, 30],
        iconAnchor: [22, 22],
        popupAnchor: [0, -22]
        });

        const markerIconFasilkom= L.divIcon({
            className: 'marker-fakultas-icon',
            html:`
            <div class="faculty-marker" style="--marker-color:rgb(0, 255, 187)">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>
        `,
        iconSize: [30, 30],
        iconAnchor: [22, 22],
        popupAnchor: [0, -22]
        });

        const markerIconLokasi= L.divIcon({
            className: 'marker-fakultas-icon',
            html:`
            <div class="faculty-marker" style="--marker-color:rgb(255, 0, 0)">
            <i class="fa-solid fa-map-pin"></i>
        </div>
        `,
        iconSize: [30, 30],
        iconAnchor: [22, 22],
        popupAnchor: [0, -22]
        });

        const markerIconLab= L.divIcon({
            className: 'marker-fakultas-icon',
            html:`
            <div class="faculty-marker" style="--marker-color:rgb(255, 0, 0)">
            <i class="fa-solid fa-flask"></i>
        </div>
        `,
        iconSize: [30, 30],
        iconAnchor: [22, 22],
        popupAnchor: [0, -22]
        });

        const markerIconComp= L.divIcon({
            className: 'marker-fakultas-icon',
            html:`
            <div class="faculty-marker" style="--marker-color:rgb(255, 0, 0)">
            <i class="fa-solid fa-desktop"></i>
        </div>
        `,
        iconSize: [30, 30],
        iconAnchor: [22, 22],
        popupAnchor: [0, -22]
        });

        
        
    const map = L.map('campusMap').setView(
        [-3.2139707787869445, 104.64872625870264],18
    );

    L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', 
    {
        maxZoom:19,
        attribution: 'Tiles &copy; Esri'
    }
).addTo(map);

    const marker = L.marker([-3.2136219854581856, 104.64461113867888],
    { icon : markerIconKesmas }
).addTo(map);

    marker.bindPopup(`
        <div>
            <strong>Gedung Fakultas Kesehatan Masyarakat</strong>
            <img 
            src="./images/fakultas_kesmas.jpg"
            alt="Gedung Fakultas Kesehatan Masyarakat
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker2 = L.marker([-3.2130579298201285, 104.64523893898564],
    { icon : markerIconTikum }
).addTo(map);

    marker2.bindPopup(`
        <div>
            <strong>Gedung Student Center Fakultas Kesehatan Masyarakat Unsri </strong>
            <img 
            src="./images/tikum_kesmas.jpg"
            alt="Gedung Student Center Fakultas Kesehatan Masyarakat
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker3 = L.marker([-3.2134517951688584, 104.64539159948559],
    { icon : markerIconFK }
).addTo(map);

    marker3.bindPopup(`
        <div>
            <strong>Gedung Jurusan Ilmu Keperawatan Fakultas Kedokteran Unsri </strong>
            <img 
            src="./images/perawatan.jpg"
            alt="Gedung  Ilmu Keperawatan Fakultas Kesehatan Masyarakat
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker4 = L.marker([-3.2133584520082685, 104.64669950810477],
    { icon : markerIconLokasi }
).addTo(map);

    marker4.bindPopup(`
        <div>
            <strong> Lapangan Tenis Unsri </strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker5 = L.marker([-3.2108425498853483, 104.64599606953551],
    { icon : markerIconLokasi }
).addTo(map);

    marker5.bindPopup(`
        <div>
            <strong> Klinik Unsri Indralaya </strong>
            <img 
            src="./images/klinik_unsri.jpg"
            alt="Klinik Universitas Sriwijaya
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker6 = L.marker([-3.2135323673992686, 104.6492261437027],
    { icon : markerIconLokasi }
).addTo(map);

    marker6.bindPopup(`
        <div>
            <strong> Lapangan Rektorat Universitas Sriwijaya </strong>
            <img 
            src="./images/lapangan.jpg"
            alt="Lapangan Rektorat Universitas Sriwijaya
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker7 = L.marker([-3.215346431103549, 104.64727435445738],
    { icon : markerIconFK }
).addTo(map);

    marker7.bindPopup(`
        <div>
            <strong> Gedung Prodi Gigi Fakultas Kedokteran Universitas Sriwijaya </strong>
            <img 
            src="./images/prodi_gigi.jpg"
            alt="Gedung Prodi Gigi Fakultas Kedokteran"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker8 = L.marker([-3.2163494186199073, 104.64736170412618],
    { icon : markerIconFK }
).addTo(map);

    marker8.bindPopup(`
        <div>
            <strong> Gedung Prodi Psikologi Fakultas Kedokteran Universitas Sriwijaya </strong>
            <img 
            src="./images/prodi_psikologi.jpg"
            alt="Gedung Prodi Psikologi Fakultas Kedokteran"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker10 = L.marker([-3.215982469658407, 104.64696210113745],
    { icon : markerIconFK }
).addTo(map);

    marker10.bindPopup(`
        <div>
            <strong> Gedung Fakultas Kedokteran Universitas Sriwijaya </strong>
            <img 
            src="./images/fakultas_dokter.jpg"
            alt="Gedung Fakultas Kedokteran"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);


    const marker11 = L.marker([-3.216170254691235, 104.64663188759857],
    { icon : markerIconLab }
).addTo(map);

    marker11.bindPopup(`
        <div>
            <strong> Laboratorium Laboratorium Dasar Bersama (LDB) Universitas Sriwijaya </strong>
            <img 
            src="./images/lab_bersama.jpg"
            alt="Laboratorium Dasar Bersama"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker12 = L.marker([-3.2156632322089806, 104.64660232260927],
    { icon : markerIconComp }
).addTo(map);

    marker12.bindPopup(`
        <div>
            <strong> LAB KOMPUTER FK PSIKOLOGI LT.2 Universitas Sriwijaya </strong>
            <img 
            src="./images/lab_Komp.jpg"
            alt="Laboratorium Dasar Bersama"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker13 = L.marker([-3.21583141950961, 104.6480096177704],
    { icon : markerIconLokasi }
).addTo(map);

    marker13.bindPopup(`
        <div>
            <strong> Lembaga Bahasa Universitas Sriwijaya </strong>
            <img 
            src="./images/lembagabahasa.jpg"
            alt="Lembaga Bahasa Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker14 = L.marker([-3.2165890249191897, 104.64624838453459],
    { icon : markerIconLokasi }
).addTo(map);

    marker14.bindPopup(`
        <div>
            <strong>Lapangan Futsal Fakultas Teknik </strong>
            <img 
            src="./images/lap_futsal_teknik.jpg"
            alt="Lapangan Futsal Fakultas Teknik"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker15 = L.marker([-3.217805382024248, 104.64587977263324],
    { icon : markerIconLokasi }
).addTo(map);

    marker15.bindPopup(`
        <div>
            <strong>Lapangan Basket Fakultas Teknik </strong>
            <img 
            src="./images/lap_basket_teknik.jpg"
            alt="Lapangan Basket Fakultas Teknik"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker16 = L.marker([-3.2173745853173523, 104.64613674583491],
    { icon : markerIconTeknik }
).addTo(map);

    marker16.bindPopup(`
        <div>
            <strong>Fakultas Teknik Universitas Sriwijaya </strong>
            <img 
            src="./images/fakultas_teknik.jpg"
            alt="Fakultas Teknik Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker17 = L.marker([-3.2169219053835825, 104.64589643492307],
    { icon : markerIconTeknik }
).addTo(map);

    marker17.bindPopup(`
        <div>
            <strong>Gedung Jurusan Teknik Kimia Universitas Sriwijaya </strong>
            <img 
            src="./images/kimia.jpg"
            alt="Jurusan Teknik Kimia Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker18 = L.marker([-3.217353563893078, 104.64554163288145],
    { icon : markerIconTeknik }
).addTo(map);

    marker18.bindPopup(`
        <div>
            <strong>Gedung Jurusan Teknik Elektro Universitas Sriwijaya </strong>
            <img 
            src="./images/kimia.jpg"
            alt="Jurusan Teknik Elektro Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker19 = L.marker([-3.217685404252021, 104.64502144356848],
    { icon : markerIconTeknik }
).addTo(map);

    marker19.bindPopup(`
        <div>
            <strong>Gedung Jurusan Teknik Mesin Universitas Sriwijaya </strong>
            <img 
            src="./images/mesin.jpg"
            alt="Jurusan Teknik Mesin Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker20 = L.marker([-3.217754664884043, 104.64507727887123],
    { icon : markerIconComp }
).addTo(map);

    marker20.bindPopup(`
        <div>
            <strong>Laboratorium CAD CAM Teknik Mesin Universitas Sriwijaya </strong>
            <img 
            src="./images/mesin.jpg"
            alt="Laboratorium CAD CAM"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker21 = L.marker([-3.217582157805927, 104.64439036258901],
    { icon : markerIconTeknik }
).addTo(map);

    marker21.bindPopup(`
        <div>
            <strong>Gedung Jurusan Teknik Sipil Fakultas Teknik Universitas Sriwijaya </strong>
            <img 
            src="./images/sipil.jpg"
            alt="Gedung Jurusan Teknik Sipil"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker22 = L.marker([-3.218147410742841, 104.64449520435502],
    { icon : markerIconLab }
).addTo(map);

    marker22.bindPopup(`
        <div>
            <strong>Laboratorium Mekanika Fluida dan Hidrolika </strong>
            <img 
            src="./images/fluida.jpg"
            alt="Gedung Jurusan Teknik Sipil"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker23 = L.marker([-3.2170796958463517, 104.64445843837946],
    { icon : markerIconTeknik }
).addTo(map);

    marker23.bindPopup(`
        <div>
            <strong>Gedung Jurusan Teknik Pertambangan Fakultas Teknik Universitas Sriwijaya </strong>
            <img 
            src="./images/pertambangan.jpg"
            alt="Gedung Jurusan Teknik Pertambangan"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker24 = L.marker([-3.2167258429676786, 104.64429110096074],
    { icon : markerIconLab }
).addTo(map);

    marker24.bindPopup(`
        <div>
            <strong>Laboratorium Jurusan Teknik Pertambangan Universitas Sriwijaya </strong>
            <img 
            src="./images/pertambangan.jpg"
            alt="Laboratorium Jurusan Teknik Pertambangan"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker25 = L.marker([-3.2168064260887275, 104.64392677320075],
    { icon : markerIconTikum }
).addTo(map);

    marker25.bindPopup(`
        <div>
            <strong> Sekretariat Permata FT Unsri </strong>
            <img 
            src="./images/pertambangan.jpg"
            alt="Laboratorium Jurusan Teknik Pertambangan"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker26 = L.marker([-3.2185112826592213, 104.64410386782208],
    { icon : markerIconLab }
).addTo(map);

    marker26.bindPopup(`
        <div>
            <strong> LAB FAKULTAS TEKNIK SIPIL </strong>
            <img 
            src="./images/lab_sipil.jpg"
            alt="Laboratorium Jurusan Teknik Sipil"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker27 = L.marker([-3.217339490442896, 104.64630643116456],
    { icon : markerIconTikum}
).addTo(map);

    marker27.bindPopup(`
        <div>
            <strong> Plaza Dekanat Teknik Unsri </strong>
            <img 
            src="./images/dekanat.jpg"
            alt="Plaza Dekanat Teknik Unsri"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker28 = L.marker([-3.2179472347523794, 104.64615875256371],
    { icon : markerIconTeknik}
).addTo(map);

    marker28.bindPopup(`
        <div>
            <strong> Gedung Teknik Arsitektur  </strong>
            <img 
            src="./images/arsitektur.jpg"
            alt="Gedung Teknik Arsitektur"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker29 = L.marker([-3.218950689204354, 104.6445170846293],
    { icon : markerIconLab}
).addTo(map);

    marker29.bindPopup(`
        <div>
            <strong> Studio Teknik Arsitektur  </strong>
            <img 
            src="./images/arsitektur.jpg"
            alt="Gedung Teknik Arsitektur"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker30 = L.marker([-3.21481650041032, 104.65110414703163],
    { icon : markerIconHukum}
).addTo(map);

    marker30.bindPopup(`
        <div>
            <strong> Gedung Fakultas Hukum Unsri </strong>
            <img 
            src="./images/hukum.jpg"
            alt="Gedung Fakultas Hukum Unsri"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker31 = L.marker([-3.2164688449392296, 104.65110667805828],
    { icon : markerIconFisip}
).addTo(map);

    marker31.bindPopup(`
        <div>
            <strong> Gedung Fakultas FISIP Unsri </strong>
            <img 
            src="./images/fisip.jpg"
            alt="Gedung Fakultas FISIP Unsri"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker32 = L.marker([-3.215820519661048, 104.65110015386874],
    { icon : markerIconFisip}
).addTo(map);

    marker32.bindPopup(`
        <div>
            <strong> Gedung A FISIP Unsri </strong>
            <img 
            src="./images/fisip_gedunga.jpg"
            alt="Gedung A Fakultas FISIP Unsri"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker33 = L.marker([-3.2156445592576723, 104.65160524774281],
    { icon : markerIconFisip}
).addTo(map);

    marker33.bindPopup(`
        <div>
            <strong> Gedung Hubungan International Unsri </strong>
            <img 
            src="./images/fisip_gedunga.jpg"
            alt="Gedung A Fakultas FISIP Unsri"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker34 = L.marker([-3.216945577967735, 104.65233334601194],
    { icon : markerIconFisip}
).addTo(map);

    marker34.bindPopup(`
        <div>
            <strong> Gedung B FISIP Unsri </strong>
            <img 
            src="./images/fisip_gedunga.jpg"
            alt="Gedung A Fakultas FISIP Unsri"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker35 = L.marker([-3.2169362718911927, 104.65264153876126],
    { icon : markerIconComp}
).addTo(map);

    marker35.bindPopup(`
        <div>
            <strong> Laboratorium Ilmu Komunikasi Unsri</strong>
            <img 
            src="./images/lab_ilkom.jpg"
            alt="Laboratorium Ilmu Komunikasi Unsri"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker36 = L.marker([-3.218018205580753, 104.65065383818929],
    { icon : markerIconFE}
).addTo(map);

    marker36.bindPopup(`
        <div>
            <strong> Gedung Fakultas Ekonomi Universitas Sriwijaya </strong>
            <img 
            src="./images/ekonomi.jpg"
            alt="Gedung Fakultas Ekonomi Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker37 = L.marker([-3.2179687983939265, 104.65093064610873],
    { icon : markerIconFE}
).addTo(map);

    marker37.bindPopup(`
        <div>
            <strong> Gedung Jurusan Akuntansi Universitas Sriwijaya </strong>
            <img 
            src="./images/akuntansi.jpg"
            alt="Gedung Jurusan Akuntansi Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker38 = L.marker([-3.217942848456327, 104.65005032235662],
    { icon : markerIconFE}
).addTo(map);

    marker38.bindPopup(`
        <div>
            <strong> Gedung Baru Fakultas Ekonomi Universitas Sriwijaya </strong>
            <img 
            src="./images/gedung_baru.jpg"
            alt="Gedung Baru Fakultas Ekonomi Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker39 = L.marker([-3.217779755228345, 104.65044450182263],
    { icon : markerIconFE}
).addTo(map);

    marker39.bindPopup(`
        <div>
            <strong> Gedung Dosen Fakultas Ekonomi Universitas Sriwijaya </strong>
            <img 
            src="./images/gedung_baru.jpg"
            alt="Gedung Dosen Fakultas Ekonomi Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker40 = L.marker([-3.217839040830099, 104.65045349867411],
    { icon : markerIconLokasi}
).addTo(map);

    marker40.bindPopup(`
        <div>
            <strong> Sekret Imepa Universitas Sriwijaya </strong>
            <img 
            src="./images/imepa.jpg"
            alt="Sekret Imepa Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker41 = L.marker([-3.2177815517635113, 104.64965817698297],
    { icon : markerIconLokasi}
).addTo(map);

    marker41.bindPopup(`
        <div>
            <strong> Sekret MAFESRIPALA Universitas Sriwijaya </strong>
            <img 
            src="./images/MAFESRIPALA.jpg"
            alt="Sekret MAFESRIPALA Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker42 = L.marker([-3.219080385173751, 104.64947717750879],
    { icon : markerIconLokasi}
).addTo(map);

    marker42.bindPopup(`
        <div>
            <strong> Terminal Kampus Universitas Sriwijaya Indralaya </strong>
            <img 
            src="./images/terminal.jpg"
            alt="Terminal Kampus Universitas Sriwijaya Indralaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker43 = L.marker([-3.219337992461163, 104.64861232464801],
    { icon : markerIconLokasi}
).addTo(map);

    marker43.bindPopup(`
        <div>
            <strong> Tower Panjat Wamapala GEMPA FP UNSRI </strong>
            <img 
            src="./images/towerpanjat.jpg"
            alt="Tower Panjat Wamapala GEMPA FP UNSRI"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker44 = L.marker([-3.218652958414942, 104.64834277881447],
    { icon : markerIconLokasi}
).addTo(map);

    marker44.bindPopup(`
        <div>
            <strong> Sekretariat Wamapala GEMPA </strong>
            <img 
            src="./images/sekret_GEMPA.jpg"
            alt="Sekretariat Wamapala GEMPA"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker45 = L.marker([-3.2189062483681057, 104.64839034573143],
    { icon : markerIconLokasi}
).addTo(map);

    marker45.bindPopup(`
        <div>
            <strong> Kantor Sekretariat BEM FP Unsri </strong>
            <img 
            src="./images/sekret_GEMPA.jpg"
            alt="Kantor Sekretariat BEM FP Unsri"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker46 = L.marker([-3.218741671940978, 104.64726947396366],
    { icon : markerIconMIPA}
).addTo(map);

    marker46.bindPopup(`
        <div>
            <strong> Jurusan Kimia- Universitas Sriwijaya </strong>
            <img 
            src="./images/kimia_MIPA.jpg"
            alt="Jurusan Kimia- Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker47 = L.marker([-3.218767656373627, 104.64749792049854],
    { icon : markerIconMIPA}
).addTo(map);

    marker47.bindPopup(`
        <div>
            <strong> Jurusan Biologi - Universitas Sriwijaya </strong>
            <img 
            src="./images/biologi.jpg"
            alt="Jurusan Biologi - Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker48 = L.marker([-3.2187020459208338, 104.64685955475433],
    { icon : markerIconMIPA}
).addTo(map);

    marker48.bindPopup(`
        <div>
            <strong> Jurusan Fisika - Universitas Sriwijaya </strong>
            <img 
            src="./images/fisika.jpg"
            alt="Jurusan Fisika - Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker49 = L.marker([-3.2187194527759417, 104.64675360749223],
    { icon : markerIconLab}
).addTo(map);

    marker49.bindPopup(`
        <div>
            <strong> Laboratorium Elektronika & Instrumentasi Jurusan Fisika FMIPA UNSRI </strong>
            <img 
            src="./images/lab_elektronika.jpg"
            alt="Laboratorium Elektronika & Instrumentasi Jurusan Fisika FMIPA UNSRI"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker50 = L.marker([-3.2186833000762753, 104.64663559030082],
    { icon : markerIconLab}
).addTo(map);

    marker50.bindPopup(`
        <div>
            <strong> Laboratorium Geofisika </strong>
            <img 
            src="./images/Laboratorium_Geofisika.jpg"
            alt="Laboratorium Geofisika"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker51 = L.marker([-3.218635956985928, 104.64631622269003],
    { icon : markerIconMIPA}
).addTo(map);

    marker51.bindPopup(`
        <div>
            <strong>Gedung Fakultas MIPA Universitas Sriwijaya </strong>
            <img 
            src="./images/fakultas_MIPA.jpg"
            alt="Gedung Fakultas MIPA Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker52 = L.marker([-3.2187215691568603, 104.64556728053016],
    { icon : markerIconMIPA}
).addTo(map);

    marker52.bindPopup(`
        <div>
            <strong>Gedung Jurusan Farmasi Universitas Sriwijaya </strong>
            <img 
            src="./images/farmasi.jpg"
            alt="Gedung Jurusan Farmasi Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker53 = L.marker([-3.218500091201134, 104.64554060020265],
    { icon : markerIconMIPA}
).addTo(map);

    marker53.bindPopup(`
        <div>
            <strong>Gedung Jurusan Ilmu Kelautan Universitas Sriwijaya </strong>
            <img 
            src="./images/kelautan.jpg"
            alt="Gedung Jurusan Ilmu Kelautan Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker54 = L.marker([-3.2184433597752156, 104.64592899750653],
    { icon : markerIconLokasi}
).addTo(map);

    marker54.bindPopup(`
        <div>
            <strong>Hall FMIPA Universitas Sriwijaya </strong>
            <img 
            src="./images/hall_MIPA.jpg"
            alt="Hall FMIPA Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker55 = L.marker([-3.218996774723227, 104.64590977427697],
    { icon : markerIconTikum}
).addTo(map);

    marker55.bindPopup(`
        <div>
            <strong> Sekretariat himpunan mahasiswa biologi</strong>
            <img 
            src="./images/sekret_himp_biologi.jpg"
            alt="Sekretariat himpunan mahasiswa biologi"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker56 = L.marker([-3.219330518634376, 104.64593663702547],
    { icon : markerIconTikum}
).addTo(map);

    marker56.bindPopup(`
        <div>
            <strong> KESEKRETARIATAN HIMAIKEL UNSRI</strong>
            <img 
            src="./images/HIMAIKEL.jpg"
            alt="KESEKRETARIATAN HIMAIKEL UNSRI"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker57 = L.marker([-3.219705310585548, 104.64649305001595],
    { icon : markerIconTikum}
).addTo(map);

    marker57.bindPopup(`
        <div>
            <strong> Sekretariat Mapala SABAK</strong>
            <img 
            src="./images/mapala.jpg"
            alt="Sekretariat Mapala SABAK"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker58 = L.marker([-3.219953836256406, 104.64607626719679],
    { icon : markerIconLab}
).addTo(map);

    marker58.bindPopup(`
        <div>
            <strong> Laboratorium Analisa Farmasi</strong>
            <img 
            src="./images/lab_farmasi.jpg"
            alt="Laboratorium Analisa Farmasi"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker59 = L.marker([-3.2196670478426634, 104.64586762472635],
    { icon : markerIconLokasi}
).addTo(map);

    marker59.bindPopup(`
        <div>
            <strong>Lapangan Futsal MIPA UNSRI</strong>
            <img 
            src="./images/lap_futsal_MIPA.jpg"
            alt="Lapangan Futsal MIPA UNSRI"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker60 = L.marker([-3.220047320252199, 104.64590785785977],
    { icon : markerIconLokasi}
).addTo(map);

    marker60.bindPopup(`
        <div>
            <strong>Lapang Bola MIPA</strong>
            <img 
            src="./images/bola-MIPA.jpg"
            alt="Lapang Bola MIPA"
            class="popup-fakultas-img"> 
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker61 = L.marker([-3.2200850103741763, 104.64630609308209],
    { icon : markerIconTikum}
).addTo(map);

    marker61.bindPopup(`
        <div>
            <strong> KESEKRETARIATAN HIMAFI UNSRI</strong>
            <img 
            src="./images/himafi.jpg"
            alt="KESEKRETARIATAN HIMAFI UNSRI"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker62 = L.marker([-3.219592611128983, 104.64816211932907],
    { icon : markerIconPertanian}
).addTo(map);

    marker62.bindPopup(`
        <div>
            <strong> Fakultas Pertanian Universitas Sriwijaya </strong>
            <img 
            src="./images/fakultas_pertanian.jpg"
            alt="Fakultas Pertanian Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker63 = L.marker([-3.2202865168010675, 104.64818969097396],
    { icon : markerIconPertanian}
).addTo(map);

    marker63.bindPopup(`
        <div>
            <strong> Jurusan Sosial Ekonomi Pertanian (Agribisnis) </strong>
            <img 
            src="./images/fakultas_pertanian.jpg"
            alt="Fakultas Pertanian Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker64 = L.marker([-3.220362839047802, 104.64789665963895],
    { icon : markerIconPertanian}
).addTo(map);

    marker64.bindPopup(`
        <div>
            <strong> Jurusan Ilmu Tanah Fakultas Pertanian </strong>
            <img 
            src="./images/ilmu_tanah.jpg"
            alt="Jurusan Ilmu Tanah Fakultas Pertanian"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);


    const marker65 = L.marker([-3.219828545392838, 104.64752824356573],
    { icon : markerIconPertanian}
).addTo(map);

    marker65.bindPopup(`
        <div>
            <strong> Jurusan Budidaya Pertanian (Agronomi) </strong>
            <img 
            src="./images/agronomi.jpg"
            alt="Jurusan Budidaya Pertanian (Agronomi)"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker66 = L.marker([-3.219645104102544, 104.6475631122806],
    { icon : markerIconPertanian}
).addTo(map);

    marker66.bindPopup(`
        <div>
            <strong> Program Studi Agroekoteknologi </strong>
            <img 
            src="./images/agroteknologi.jpg"
            alt="Program Studi Agroekoteknologi"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker67 = L.marker([-3.220735547311474, 104.64765985003393],
    { icon : markerIconPertanian}
).addTo(map);

    marker67.bindPopup(`
        <div>
            <strong> Jurusan Teknologi Pertanian (Teknik Pertanian) </strong>
            <img 
            src="./images/teknologi_pertanian.jpg"
            alt="Jurusan Teknologi Pertanian (Teknik Pertanian)"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker68 = L.marker([-3.2208031661165397, 104.64688402107593],
    { icon : markerIconPertanian}
).addTo(map);

    marker68.bindPopup(`
        <div>
            <strong> Jurusan HPT Fakultas Pertanian </strong>
            <img 
            src="./images/HPT.jpg"
            alt="Jurusan HPT Fakultas Pertanian"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker69 = L.marker([-3.219820759344483, 104.64829346845887],
    { icon : markerIconTikum}
).addTo(map);

    marker69.bindPopup(`
        <div>
            <strong> Student Center Fakultas Pertanian Universitas Sriwijaya </strong>
            <img 
            src="./images/student_center.jpg"
            alt="Student Center Fakultas Pertanian Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker70 = L.marker([-3.220330913424629, 104.6481647224315],
    { icon : markerIconLab}
).addTo(map);

    marker70.bindPopup(`
        <div>
            <strong> Laboratorium Biometrika Agribisnis </strong>
            <img 
            src="./images/student_center.jpg"
            alt="Laboratorium Biometrika Agribisnis"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker71 = L.marker([-3.220378447455632, 104.64759408247099],
    { icon : markerIconLab}
).addTo(map);

    marker71.bindPopup(`
        <div>
            <strong> Laboratorium Jurusan Tanah, Fakultas Pertanian </strong>
            <img 
            src="./images/lab_tanah.jpg"
            alt="Laboratorium Jurusan Tanah, Fakultas Pertanian"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);
    

    const marker72 = L.marker([-3.220407235668158, 104.64771411131852],
    { icon : markerIconPertanian}
).addTo(map);

    marker72.bindPopup(`
        <div>
            <strong> Ruang Kuliah B (RKB) Fakultas Pertanian </strong>
            <img 
            src="./images/lab_tanah.jpg"
            alt="Ruang Kuliah B (RKB) Fakultas Pertanian"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);


    const marker73 = L.marker([-3.219774463532449, 104.64753174195211],
    { icon : markerIconPertanian}
).addTo(map);

    marker73.bindPopup(`
        <div>
            <strong> Ruang SCL BDP/Agronomi </strong>
            <img 
            src="./images/agronomi.jpg"
            alt="Ruang SCL BDP/Agronomi"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker74 = L.marker([-3.2201460324937123, 104.64715489158876],
    { icon : markerIconLab}
).addTo(map);

    marker74.bindPopup(`
        <div>
            <strong> Laboratorium Ekologi Fakultas Pertanian </strong>
            <img 
            src="./images/lab_ekologi.jpg"
            alt="Laboratorium Ekologi Fakultas Pertanian"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);


    const marker84 = L.marker([-3.2207379376715686, 104.64729634104562],
    { icon : markerIconLab}
).addTo(map);

    marker84.bindPopup(`
        <div>
            <strong> PS TEP & THP </strong>
            <img 
            src="./images/ps_tep.jpg"
            alt="PS TEP & THP"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker75 = L.marker([-3.221085357568981, 104.64724360763292],
    { icon : markerIconLab}
).addTo(map);

    marker75.bindPopup(`
        <div>
            <strong> Laboratorium Nematologi HPT </strong>
            <img 
            src="./images/lab_nematologi.jpg"
            alt="Laboratorium Nematologi HPT"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker76 = L.marker([-3.221507749177844, 104.64705030077056],
    { icon : markerIconLokasi}
).addTo(map);

    marker76.bindPopup(`
        <div>
            <strong> Lahan Penelitian Mahasiswa Jurusan HPT </strong>
            <img 
            src="./images/lab_nematologi.jpg"
            alt="Lahan Penelitian Mahasiswa Jurusan HPT"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker77 = L.marker([-3.2217897311425294, 104.64685924632552],
    { icon : markerIconLokasi}
).addTo(map);

    marker77.bindPopup(`
        <div>
            <strong> Kandang Unggas Peternakan </strong>
            <img 
            src="./images/peternakan_unggas.jpg"
            alt="Kandang Unggas Peternakan"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker78 = L.marker([-3.2222160272478244, 104.6464562615873],
    { icon : markerIconLokasi}
).addTo(map);

    marker78.bindPopup(`
        <div>
            <strong> Bengkel Mesin Pertanian </strong>
            <img 
            src="./images/bengkel_mesin.jpg"
            alt="Bengkel Mesin Pertanian"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker79 = L.marker([-3.2222160272478244, 104.6464562615873],
    { icon : markerIconLokasi}
).addTo(map);

    marker79.bindPopup(`
        <div>
            <strong> Bengkel Mesin Pertanian </strong>
            <img 
            src="./images/bengkel_mesin.jpg"
            alt="Bengkel Mesin Pertanian"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker80 = L.marker([-3.2226949336592763, 104.64650300921353],
    { icon : markerIconLokasi}
).addTo(map);

    marker80.bindPopup(`
        <div>
            <strong> Agro Training Centre Fakultas Pertanian </strong>
            <img 
            src="./images/greenhouse.jpg"
            alt="Agro Training Centre Fakultas Pertanian"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker81 = L.marker([-3.22306241930153, 104.64647732702554],
    { icon : markerIconLokasi}
).addTo(map);

    marker81.bindPopup(`
        <div>
            <strong> Agro Eko Teknologi training center </strong>
            <img 
            src="./images/ekojpg"
            alt="Agro Eko Teknologi training center"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker82 = L.marker([-3.222291794965639, 104.64515961705939],
    { icon : markerIconLokasi}
).addTo(map);

    marker82.bindPopup(`
        <div>
            <strong> Kebun Buah Fakultas Pertanian </strong>
            <img 
            src="./images/ekojpg"
            alt="Kebun Buah Fakultas Pertanian"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker83 = L.marker([-3.222291794965639, 104.64515961705939],
    { icon : markerIconLokasi}
).addTo(map);

    marker83.bindPopup(`
        <div>
            <strong> Unit Penelitian, Fakultas Pertanian </strong>
            <img 
            src="./images/unit_penelitian.jpg"
            alt="Unit Penelitian, Fakultas Pertanian"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker85 = L.marker([-3.219836150081779, 104.64932688979333],
    { icon : markerIconFKIP}
).addTo(map);

    marker85.bindPopup(`
        <div>
            <strong> Gedung Fakultas FKIP </strong>
            <img 
            src="./images/fa_FKIP.jpg"
            alt="Gedung Fakultas FKIP"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker86 = L.marker([-3.219836150081779, 104.64932688979333],
    { icon : markerIconFKIP}
).addTo(map);

    marker86.bindPopup(`
        <div>
            <strong> Gedung Fakultas FKIP </strong>
            <img 
            src="./images/fa_FKIP.jpg"
            alt="Gedung Fakultas FKIP"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker87 = L.marker([-3.2201669075623585, 104.64924078918236],
    { icon : markerIconFKIP}
).addTo(map);

    marker87.bindPopup(`
        <div>
            <strong> Ruang Baca FKIP Unsri </strong>
            <img 
            src="./images/fa_FKIP.jpg"
            alt="Ruang Baca FKIP Unsri"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker88 = L.marker([-3.2203937576307884, 104.6492162260647],
    { icon : markerIconLab}
).addTo(map);

    marker88.bindPopup(`
        <div>
            <strong> Laboratorium Jurusan Pendidikan IPA FKIP Unsri </strong>
            <img 
            src="./images/fa_FKIP.jpg"
            alt="Laboratorium Jurusan Pendidikan IPA FKIP Unsri"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker89 = L.marker([-3.22002617297386, 104.64980905903597],
    { icon : markerIconLab}
).addTo(map);

    marker89.bindPopup(`
        <div>
            <strong> GSG FKIP Unsri  </strong>
            <img 
            src="./images/GSG_FKIP.jpg"
            alt="GSG FKIP Unsri"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker90 = L.marker([-3.21992730923193, 104.65005545781106],
    { icon : markerIconLokasi}
).addTo(map);

    marker90.bindPopup(`
        <div>
            <strong> Lapangan Basket dan Futsal FKIP </strong>
            <img 
            src="./images/GSG_FKIP.jpg"
            alt="Lapangan Basket dan Futsal FKIP"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker91 = L.marker([-3.22024152729457, 104.65007695054284],
    { icon : markerIconTikum}
).addTo(map);

    marker91.bindPopup(`
        <div>
            <strong> Gazebo FKIP Unsri </strong>
            <img 
            src="./images/GSG_FKIP.jpg"
            alt="Gazebo FKIP Unsri"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);


    const marker92 = L.marker([-3.220597130059736, 104.65046842523962],
    { icon : markerIconFKIP}
).addTo(map);

    marker92.bindPopup(`
        <div>
            <strong> Gedung A FKIP Universitas Sriwijaya </strong>
            <img 
            src="./images/FKIP_A.jpg"
            alt="Gedung A FKIP Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker93 = L.marker([-3.2207504070777477, 104.64999481761917],
    { icon : markerIconFKIP}
).addTo(map);

    marker93.bindPopup(`
        <div>
            <strong> Gedung B FKIP Universitas Sriwijaya </strong>
            <img 
            src="./images/FKIP_A.jpg"
            alt="Gedung B FKIP Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker94 = L.marker([-3.220959630165428, 104.65047686881485],
    { icon : markerIconFKIP}
).addTo(map);

    marker94.bindPopup(`
        <div>
            <strong> Gedung C FKIP Universitas Sriwijaya </strong>
            <img 
            src="./images/FKIP_A.jpg"
            alt="Gedung C FKIP Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker95 = L.marker([-3.221296629869709, 104.64992167630518],
    { icon : markerIconLab}
).addTo(map);

    marker95.bindPopup(`
        <div>
            <strong> Bengkel Pendidikan Teknik Mesin FKIP Unsri </strong>
            <img 
            src="./images/bengkel_mesin_FKIP.jpg"
            alt="Bengkel Pendidikan Teknik Mesin FKIP Unsri"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker96 = L.marker([-3.2214806093756163, 104.65036844850374],
    { icon : markerIconLab}
).addTo(map);

    marker96.bindPopup(`
        <div>
            <strong> Laboratorium Kebun Botani FKIP Unsri </strong>
            <img 
            src="./images/bengkel_mesin_FKIP.jpg"
            alt="Laboratorium Kebun Botani FKIP Unsri"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker97 = L.marker([-3.2194799054801315, 104.65115685755954],
    { icon : markerIconFasilkom}
).addTo(map);

    marker97.bindPopup(`
        <div>
            <strong> Fakultas Ilmu Komputer UNSRI </strong>
            <img 
            src="./images/fa_fasilkom.jpg"
            alt="Fakultas Ilmu Komputer UNSRI"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker98 = L.marker([-3.2192250919465457, 104.65145431634586],
    { icon : markerIconFasilkom}
).addTo(map);

    marker98.bindPopup(`
        <div>
            <strong> Gedung B Fasilkom Unsri </strong>
            <img 
            src="./images/fa_fasilkom.jpg"
            alt="Gedung B Fasilkom Unsri"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker99 = L.marker([-3.219192286734118, 104.651729913318],
    { icon : markerIconFasilkom}
).addTo(map);

    marker99.bindPopup(`
        <div>
            <strong> Gedung Robotika Fasilkom </strong>
            <img 
            src="./images/fasilkom_robotika.jpg"
            alt="Gedung Robotika Fasilkom"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker100 = L.marker([-3.219105252493907, 104.65182177898025],
    { icon : markerIconTikum}
).addTo(map);

    marker100.bindPopup(`
        <div>
            <strong> Sekretariat BEM KM Fasilkom Unsri </strong>
            <img 
            src="./images/fasilkom_robotika.jpg"
            alt="Sekretariat BEM KM Fasilkom Unsri"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker101 = L.marker([-3.219782780383435, 104.65113647457896],
    { icon : markerIconFasilkom}
).addTo(map);

    marker101.bindPopup(`
        <div>
            <strong> Gedung Kuliah (D) Fasilkom </strong>
            <img 
            src="./images/fasilkom_d.jpg"
            alt="Gedung Kuliah (D) Fasilkom"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker102 = L.marker([-3.2201349422506333, 104.6513395987835],
    { icon : markerIconFasilkom}
).addTo(map);

    marker102.bindPopup(`
        <div>
            <strong> Gedung Administrasi Jurusan Fakultas Ilmu Komputer </strong>
            <img 
            src="./images/admin_fasilkom.jpg"
            alt="Gedung Administrasi Jurusan, Fakultas Ilmu Komputer"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);


    const marker103 = L.marker([-3.22110493659747, 104.65166549660958],
    { icon : markerIconFasilkom}
).addTo(map);

    marker103.bindPopup(`
        <div>
            <strong> Gedung Administrasi Jurusan Fakultas Ilmu Komputer </strong>
            <img 
            src="./images/FKIP_gedung.jpg"
            alt="Gedung Administrasi Jurusan Fakultas Ilmu Komputer"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker104 = L.marker([-3.220578640997183, 104.65131421127374],
    { icon : markerIconTikum}
).addTo(map);

    marker104.bindPopup(`
        <div>
            <strong> Sekretariat HIMAKS UNSRI </strong>
            <img 
            src="./images/himaks.jpg"
            alt="Sekretariat HIMAKS UNSRI"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker105 = L.marker([-3.2206502767679024, 104.65141680576458],
    { icon : markerIconTikum}
).addTo(map);

    marker105.bindPopup(`
        <div>
            <strong> Sekretariat HIMAPES FKIP UNSRI </strong>
            <img 
            src="./images/himaks.jpg"
            alt="Sekretariat HIMAPES FKIP UNSRI"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker106 = L.marker([-3.2206576411926164, 104.65127867200647],
    { icon : markerIconTikum}
).addTo(map);

    marker106.bindPopup(`
        <div>
            <strong> Sekret FKIP Unsri </strong>
            <img 
            src="./images/himaks.jpg"
            alt="Sekret FKIP Unsri"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker107 = L.marker([-3.217024739028143, 104.65429628746637],
    { icon : markerIconTikum}
).addTo(map);

    marker107.bindPopup(`
        <div>
            <strong> Sekretariat UKM Teater Gabi Universitas Sriwijaya </strong>
            <img 
            src="./images/teater.jpg"
            alt="Sekretariat UKM Teater Gabi Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker108 = L.marker([-3.217024739028143, 104.65429628746637],
    { icon : markerIconTikum}
).addTo(map);

    marker108.bindPopup(`
        <div>
            <strong> Sekretariat UKM Teater Gabi Universitas Sriwijaya </strong>
            <img 
            src="./images/teater.jpg"
            alt="Sekretariat UKM Teater Gabi Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker109 = L.marker([-3.2188189577594883, 104.65967298826938],
    { icon : markerIconTikum}
).addTo(map);

    marker109.bindPopup(`
        <div>
            <strong> UPT Teknologi Informasi dan Komunikasi UNSRI </strong>
            <img 
            src="./images/student_center_gede.jpg"
            alt="UPT Teknologi Informasi dan Komunikasi UNSRI"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker110 = L.marker([-3.2184714110324584, 104.65975206946156],
    { icon : markerIconTikum}
).addTo(map);

    marker110.bindPopup(`
        <div>
            <strong> Sekretariat BEM Unsri </strong>
            <img 
            src="./images/student_center_gede.jpg"
            alt="Sekretariat BEM Unsri"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker111 = L.marker([-3.218602071019964, 104.6597622228896],
    { icon : markerIconTikum}
).addTo(map);

    marker111.bindPopup(`
        <div>
            <strong> Sekretariat LPM GS Unsri </strong>
            <img 
            src="./images/student_center_gede.jpg"
            alt="Sekretariat LPM GS Unsri"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker112 = L.marker([-3.218720340825128, 104.65966407308593],
    { icon : markerIconTikum}
).addTo(map);

    marker112.bindPopup(`
        <div>
            <strong> Lembaga Pers Mahasiswa Gelora Sriwijaya </strong>
            <img 
            src="./images/student_center_gede.jpg"
            alt="Lembaga Pers Mahasiswa Gelora Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker113 = L.marker([-3.2186437470502676, 104.65955915432933],
    { icon : markerIconTikum}
).addTo(map);

    marker113.bindPopup(`
        <div>
            <strong> Sanggar Pramuka Universitas Sriwijaya </strong>
            <img 
            src="./images/student_center_gede.jpg"
            alt="Sanggar Pramuka Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker114 = L.marker([-3.2192907680029235, 104.6595634976514],
    { icon : markerIconTikum}
).addTo(map);

    marker114.bindPopup(`
        <div>
            <strong> Sekretariat Videografi Unsri </strong>
            <img 
            src="./images/student_center_gede.jpg"
            alt="Sekretariat Videografi Unsri"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker115 = L.marker([-3.219187665913848, 104.65971101914066],
    { icon : markerIconTikum}
).addTo(map);

    marker115.bindPopup(`
        <div>
            <strong> Ruang Guru UKM Unsri Mengajar </strong>
            <img 
            src="./images/student_center_gede.jpg"
            alt="Ruang Guru UKM Unsri Mengajar"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker116 = L.marker([-3.2186114188742883, 104.65810382791548],
    { icon : markerIconTikum}
).addTo(map);

    marker116.bindPopup(`
        <div>
            <strong> Stadion Universitas Sriwijaya </strong>
            <img 
            src="./images/Stadion Universitas Sriwijaya.jpg"
            alt="Stadion Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker117 = L.marker([-3.219754264020717, 104.65680337509963],
    { icon : markerIconTikum}
).addTo(map);

    marker117.bindPopup(`
        <div>
            <strong> Rusunawa Universitas Sriwijaya Indralaya </strong>
            <img 
            src="./images/rusunawa.jpg"
            alt="Rusunawa Universitas Sriwijaya Indralaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker118 = L.marker([-3.219787796195404, 104.65750448220915],
    { icon : markerIconTikum}
).addTo(map);

    marker118.bindPopup(`
        <div>
            <strong> Asrama MUBA Universitas Sriwijaya </strong>
            <img 
            src="./images/asrama_muba.jpg"
            alt="Asrama MUBA Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker119 = L.marker([-3.220715115003711, 104.65801196786734],
    { icon : markerIconTikum}
).addTo(map);

    marker119.bindPopup(`
        <div>
            <strong> Asrama Lahat Universitas Sriwijaya </strong>
            <img 
            src="./images/asrama_lahat.jpg"
            alt="Asrama Lahat Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker120 = L.marker([-3.221092498648338, 104.65713057285768],
    { icon : markerIconTikum}
).addTo(map);

    marker120.bindPopup(`
        <div>
            <strong> Asrama Palembang Universitas Sriwijaya </strong>
            <img 
            src="./images/asrama_palembang.jpg"
            alt="Asrama Palembang Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker121 = L.marker([-3.2216141108092513, 104.6565205632212],
    { icon : markerIconTikum}
).addTo(map);

    marker121.bindPopup(`
        <div>
            <strong> Asrama Mahasiswa Universitas Sriwijaya </strong>
            <img 
            src="./images/asrama_mahasiswa.jpg"
            alt="Asrama Mahasiswa Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker122 = L.marker([-3.2217627381449483, 104.65746872408855],
    { icon : markerIconTikum}
).addTo(map);

    marker122.bindPopup(`
        <div>
            <strong> Asrama Mahasiswi Universitas Sriwijaya </strong>
            <img 
            src="./images/asrama_mahasiswi.jpg"
            alt="Asrama Mahasiswi Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker123 = L.marker([-3.221721526677924, 104.65940342236341],
    { icon : markerIconTikum}
).addTo(map);

    marker123.bindPopup(`
        <div>
            <strong> Asrama OKU Universitas Sriwijaya </strong>
            <img 
            src="./images/asrama_oku.jpg"
            alt="Asrama OKU Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker124 = L.marker([-3.221020106261572, 104.65913826494275],
    { icon : markerIconTikum}
).addTo(map);

    marker124.bindPopup(`
        <div>
            <strong> Asrama Musirawas Papua Universitas Sriwijaya </strong>
            <img 
            src="./images/asrama_papua.jpg"
            alt="Asrama Musirawas Papua Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker125 = L.marker([-3.2178701112186827, 104.65535403874448],
    { icon : markerIconTikum}
).addTo(map);

    marker125.bindPopup(`
        <div>
            <strong> Masjid An - Nabawi Universitas Sriwijaya </strong>
            <img 
            src="./images/nabawi.jpg"
            alt="Masjid An - Nabawi Universitas Sriwijaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker126 = L.marker([-3.2179799500315456, 104.6518220382963],
    { icon : markerIconLokasi}
).addTo(map);

    marker126.bindPopup(`
        <div>
            <strong> Auditorium FE Unsri - Kampus Indralaya </strong>
            <img 
            src="./images/auditorium.jpg"
            alt="Auditorium FE Unsri - Kampus Indralaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker127 = L.marker([-3.2176417486273845, 104.65252616894834],
    { icon : markerIconTikum}
).addTo(map);

    marker127.bindPopup(`
        <div>
            <strong> Lembaga Penelitian & Pengabdian Kepada Masyarakat </strong>
            <img 
            src="./images/lembaga_penelitian.jpg"
            alt="Lembaga Penelitian & Pengabdian Kepada Masyarakat"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker128 = L.marker([-3.2150532496344693, 104.65065814184145],
    { icon : markerIconLokasi}
).addTo(map);

    marker128.bindPopup(`
        <div>
            <strong> Musholla Fakultas Hukum UNSRI Indralaya </strong>
            <img 
            src="./images/musholla_hukum.jpg"
            alt="Musholla Fakultas Hukum UNSRI Indralaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker129 = L.marker([-3.2189036666483615, 104.64589814946021],
    { icon : markerIconLokasi}
).addTo(map);

    marker129.bindPopup(`
        <div>
            <strong> Musholla Fakultas MIPA UNSRI Indralaya </strong>
            <img 
            src="./images/musholla_MIPA.jpg"
            alt="Musholla Fakultas MIPA UNSRI Indralaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker130 = L.marker([-3.220438785090832, 104.64981877704793],
    { icon : markerIconLokasi}
).addTo(map);

    marker130.bindPopup(`
        <div>
            <strong> Musholla Al-Barokah FKIP Unsri </strong>
            <img 
            src="./images/musholla_MIPA.jpg"
            alt="Musholla Al-Barokah FKIP Unsri"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker131 = L.marker([-3.2204078365252533, 104.65162469742631],
    { icon : markerIconLokasi}
).addTo(map);

    marker131.bindPopup(`
        <div>
            <strong> Masjid Al-Khawarizmi Fasilkom UNSRI </strong>
            <img 
            src="./images/masjid_fasilkom.jpg"
            alt="Masjid Al-Khawarizmi Fasilkom UNSRI"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker132 = L.marker([-3.216063784645227, 104.65136781508825],
    { icon : markerIconLokasi}
).addTo(map);

    marker132.bindPopup(`
        <div>
            <strong> Musholla FISIP UNSRI Indralaya </strong>
            <img 
            src="./images/musholla_fisip.jpg"
            alt="Musholla FISIP UNSRI Indralaya"
            class="popup-fakultas-img">
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);


    

    









    


    


   /* const marker2 = L.marker([-3.2139573888359663, 104.64872625870264]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Tugu Logo Unsri</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);


    const marker4 = L.marker([-3.212955794057723, 104.64525712940943]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Aula Fakultas Kesehatan Masyarakat</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker5 = L.marker([-3.213354836264282, 104.64537294568979]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Prodi Ilmu Keperawatan Fakultas Kedokteran Unsri</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker6 = L.marker([-3.215310960864686, 104.64726599496477]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Prodi Dokter Gigi Fakultas Kedokteran Unsri</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker7 = L.marker([-3.2163171777981034, 104.64735982498289]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Prodi Psikologi Unsri</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker8 = L.marker([-3.2159597974164735, 104.64697060417035]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Fakultas Kedokteran Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker9 = L.marker([-3.2173132143123917, 104.64612247001087]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Fakultas Teknik Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker10 = L.marker([-3.216852246038345, 104.64586761389113]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Jurusan Teknik Kimia Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker11 = L.marker([-3.217637735848244, 104.64498485141169]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Jurusan Teknik Mesin Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker12 = L.marker([-3.2173205898006776, 104.64552780574004]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Jurusan Teknik Elektro Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker13 = L.marker([-3.2175825032814536, 104.64438452861984]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Jurusan Teknik Sipil Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker14 = L.marker([-3.2171282233200853, 104.64445843677862]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Jurusan Teknik Pertambangan Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker15 = L.marker([-3.216729286949919, 104.64429676267537]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Laboratorium Jurusan Teknik Pertambangan Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker16 = L.marker([-3.2181313285372832, 104.6444977004857]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Laboratorium Mekanika Fluida dan Hidrolika Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker17 = L.marker([-3.2185325703436556, 104.6441119922821]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Laboratorium Teknik Sipil Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);
    
    const marker18 = L.marker([-3.2179353967368374, 104.64617131223825]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Teknik Arsitektur Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker19 = L.marker([-3.2186280712029105, 104.64631773219222]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Fakultas MIPA Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker20 = L.marker([-3.218708048449373, 104.64557746439114]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Jurusan Farmasi Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker21 = L.marker([-3.2185039685705257, 104.64553879367791]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Jurusan Ilmu Kelautan FMIPA Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker22 = L.marker([-3.219943558196094, 104.64608847017197]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Laboratorium Analisa Farmasi Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker23 = L.marker([-3.2148048966500853, 104.65110834698758]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Fakultas Hukum Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker24 = L.marker([-3.2148048966500853, 104.65110834698758]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Fakultas Hukum Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker25 = L.marker([-3.2164327191223747, 104.65111543413697]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Fakultas Ilmu Sosial dan Ilmu Politik Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker26 = L.marker([-3.2157926808137525, 104.65110470530138]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung A FISIP Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);
    const marker27 = L.marker([-3.215615933762338, 104.65160896057377]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Hubungan International Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);


    const marker28 = L.marker([-3.2169540384411963, 104.65232763885852]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung B FISIP Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker29 = L.marker([-3.2169424580767396, 104.65264756804523]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Laboratorium Ilmu Komunikasi Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker30 = L.marker([-3.2179962067628525, 104.65065587887085]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Fakultas Ekonomi Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker31 = L.marker([-3.217959804769898, 104.6509360526345]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Jurusan Akuntansi Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker32 = L.marker([-3.2179436710982583, 104.6500458595827]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Baru Fakultas Ekonomi Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker33 = L.marker([-3.2194682889237494, 104.6511739344762]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Fakultas Ilmu Komputer Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker34 = L.marker([-3.2191937507837673, 104.651438776021]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung B Fakultas Ilmu Komputer Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker35 = L.marker([-3.2197803953559343, 104.65113920116337]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung D Fakultas Ilmu Komputer Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker36 = L.marker([-3.2191793014058256, 104.6517296675472]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Robotika Ilmu Komputer Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker37 = L.marker([-3.220109840926204, 104.65132733996744]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Administrasi Jurusan Fasilkom Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker38 = L.marker([-3.2192082001622055, 104.65115222615863]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Perpusatakaan Fasilkom Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker39 = L.marker([-3.2211068466290773, 104.651658753693]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Fakultas FKIP Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker40 = L.marker([-3.2205619025643806, 104.650457702452]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung A Fakultas FKIP Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker41 = L.marker([-3.2207581358600503, 104.65000565186895]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung B Fakultas FKIP Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker42 = L.marker([-3.2209282046856993, 104.65047571896076]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung C Fakultas FKIP Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker43 = L.marker([-3.219671399550808, 104.64921296161856]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Fakultas FKIP Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker44 = L.marker([-3.2212969292246987, 104.65000689548329]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Bengkel Pendidikan Teknik Mesin FKIP Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker45 = L.marker([-3.2200216748759285, 104.6497904185228]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung GSG FKIP Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker46 = L.marker([-3.2203665769920327, 104.64921075402937]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Laboratorium Jurusan Pendidikan IPA FKIP Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker47 = L.marker([-3.2203665769920327, 104.64921075402937]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Laboratorium Jurusan Pendidikan IPA FKIP Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker48 = L.marker([-3.220171896566882, 104.64924118187965]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Ruang Baca FKIP Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker49 = L.marker([-3.2195682285286296, 104.64815469591696]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Fakultas Pertanian Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker50 = L.marker([-3.2202868024654108, 104.64818129757023]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Jurusan Agribisnis Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker51 = L.marker([-3.22033875750354, 104.6481725505508]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Laboratorium Biometrika Agribisnis  Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker52 = L.marker([-3.220351752996783, 104.6478968471103]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Jurusan Ilmu Tanah Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker53 = L.marker([-3.2203836510123347, 104.6475998446834]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Laboratorium Jurusan Ilmu Tanah Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker54 = L.marker([-3.2204027662680654, 104.64770645154104]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Ruang Kuliah B Fakultas Pertanian Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker55 = L.marker([-3.2196409792828677, 104.64755136195814]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Program Studi Agroteknologi  Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker56 = L.marker([-3.2198230815858615, 104.64754331533088]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Jurusan Budidaya Pertanian (Agronomi) Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker57 = L.marker([-3.220125746691483, 104.64715454762717]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Laboratorium Ekologi Fakultas Pertanian Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker58 = L.marker([-3.2210684991902605, 104.64724101883833]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Laboratorium Nematologi HPT Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker59 = L.marker([-3.2210684991902605, 104.64724101883833]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Laboratorium Nematologi HPT Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker60 = L.marker([-3.220719142378799, 104.64765774531188]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Jurusan Teknologi Pertanian Universitas Sriwijaya</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker61 = L.marker([-3.2207419646869484, 104.64729728570563]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung PS TEP & THP</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker62 = L.marker([-3.2207928759879176, 104.64686297583863]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung HPT Department of the Faculty of Agriculture Unsri</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker63 = L.marker([-3.218929600134504, 104.64450885724793]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Studio Arsitektur Unsri</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker64 = L.marker([-3.2187632480563293, 104.64748978000027]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Jurusan Biologi Unsri</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker65 = L.marker([-3.2187582095784046, 104.6472819149578]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Jurusan Biologi Kimia Unsri</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker66 = L.marker([-3.2187023067932237, 104.6468621492468]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Gedung Jurusan Fisika Unsri</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker67 = L.marker([-3.2187194955747067, 104.64675248812298]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Laboratorium Elektronika & Instrumentasi Jurusan Fisika FMIPA UNSRI</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

    const marker68 = L.marker([-3.218677520228178, 104.64663920917724]).addTo(map)
    .bindPopup(`
        <div>
            <strong>Laboratorium Geofisika FMIPA UNSRI</strong>
            <p>Lokasi kampus — data gedung akan ditambahkan.</p>
        </div>
    `);

*/
</script>


</x-layout>