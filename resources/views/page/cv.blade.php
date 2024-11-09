@extends('componen.index')

@section('home')

    <section id="home" class="home container">
        <div class="row d-flex align-items-center flex-md-row flex-column-reverse">
            <div class="col-12 col-md-8">
                <p class="fw-bold mb-0" style="font-size: 55px;">Gilang Sabastian Vernando</p>
                <p class="mb-0 text-secondary">085748647996 | gilangvernando9@gmail.com</p>
                <p class="text-secondary"> Jl. Terate, No. 8, Dsn. Gentong Kidul, RT. 003/003, Ds. Gentong, Paron, Ngawi,
                    Jawa Timur</p>
                <p>Seorang pemimpin yang berpengalaman dalam mengelola tim serta berorganisasi, dengan latar
                    belakang akademisi prodi Sistem Informasi dari Universitas Teknologi Yogyakarta. Memiliki
                    keahlian yang solid dalam pengembangan program website dan implementasi proyek sistem yang
                    berhasil. Pengalaman luas dalam berbagai organisasi telah memperkaya keterampilan dalam
                    beradaptasi dengan lingkungan yang beragam, sementara dedikasi yang tinggi terhadap kemampuan
                    ingin belajar membantu saya untuk mencapai tujuan</p>
            </div>
            <div class="col-12 col-md-4 d-flex justify-content-md-end justify-content-center">
                <img src="{{ asset('storage/potrait.png') }}" alt="potrait">
            </div>
        </div>
        <a class="text-decoration-none arrow w-100 d-flex align-items-center flex-column">
            <div class=" text-secondary">More info</div>
            <img id="arrow" class="mt-1" src="{{ asset('storage/arrow.svg') }}" alt="arrow icon">
        </a>
    </section>

    <section class="pendidikan container">
        <div class="pendidikan-exp-item">
            <div class="pendidikan-exp-item-header">
                <div>
                    <div class="font">MAN 2 NGAWI (2017-2020)</div>
                    <p>Ilmu Pengetahuan Sosial</p>
                </div>
            </div>
        </div>
        <div class="pendidikan-exp-item">
            <div class="pendidikan-exp-item-header">
                <div>
                    <div class="font">UNIVERSITAS TEKNOLOGI YOGYAKARTA (2020-2024)</div>
                    <p>SARJANA Sistem Informasi-3.79/4.00 </p>
                </div>
            </div>
        </div>
        <hr>
    </section>

    <section class="about container">
        <div class="about-exp-item">
            <div class="about-exp-item-header">
                <div>
                    <div class="font">Organisasi Siswa Intra Sekolah (2017-2019)</div>
                    <p>Ketua Devisi Wawasan Dan Bela Negara</p>
                </div>
                <button class="btn button" onclick="toggleDetail(event)">More Info</button>
            </div>
            <div class="about-exp-item-detail ">
                <p>Organisasi siswa intra sekolah merupakan organisasi yang berperan sebagai perwakilan siswa yang menjadi
                    pelopor
                    kedisiplinan dan sebagai penyalur aspirasi siswa ke lingkungan sekolah.</p>
                <p>- Mengelola serta memimpin anggota guna untuk meningkatkan keterampilan kepemimpinan, tanggung jawab, dan
                    disiplin.</p>
                <p>- Penampung aspirasi anggota.</p>
                <p>- Penegak kedisiplinan.</p>
            </div>
        </div>
        <div class="about-exp-item">
            <div class="about-exp-item-header">
                <div>
                    <div class="font">Himpunan Pecinta Alam Lawalata (2018-2019)</div>
                    <p>Ketua Umum</p>
                </div>
                <button class="btn button" onclick="toggleDetail(event)">More Info</button>
            </div>
            <div class="about-exp-item-detail ">
                <p>Merupakan organisasi pecinta alam yang ada di MAN 2 Ngawi. Memiliki program kerja dalam peningkatan
                    kualitas siswadengan memberikan edukasi di bidang alam baik kesadaran akan kebersihan lingkungan.</p>
                <p>- Memimpin serta mengelola organisasi dalam pengembangan dan implementasi strategi jangka pendek menengah
                    hingga jangka panjang untuk meningkatkan efisiensi dan efektivitas organisasi.
                </p>
                <p>- Pemangku kebijakan.</p>
                <p>- Bertanggung jawab atas perencanaan dan manajemen organisasi.</p>
            </div>
        </div>
        <div class="about-exp-item">
            <div class="about-exp-item-header">
                <div>
                    <div class="font"> Barisan Ansor Serbaguna (2018-2020)</div>
                    <p>Ketua Ranting</p>
                </div>
                <button class="btn button" onclick="toggleDetail(event)">More Info</button>
            </div>
            <div class="about-exp-item-detail ">
                <p>Baser merupakan organisasi masyarakat yang sudah berkembang pesat khususnya di jawa timur. Banser
                    didirikan dengan
                    tujuan untuk memberikan kontribusi positif baik dalam konteks keamanan maupun pelayanan sosial. </p>
                <p>- Memimpin serta mengelola organisasi dalam pengembangan dan implementasi strategi jangka pendek,
                    menengah hingga
                    jangka panjang untuk meningkatkan efisiensi dan efektivitas organisasi.
                </p>
                <p>- Pemangku kebijakan
                </p>
                <p>- Bertanggung jawab atas perencanaan dan manajemen organisasi</p>
            </div>
        </div>
        <div class="about-exp-item">
            <div class="about-exp-item-header">
                <div>
                    <div class="font">Barisan Ansor Serbaguna (2020-2022)</div>
                    <p>Bendahara</p>
                </div>
                <button class="btn button" onclick="toggleDetail(event)">More Info</button>
            </div>
            <div class="about-exp-item-detail ">
                <p>Banser mempunyai tujuan untuk memberikan kontribusi positif bagi masyarakat, baik dalam konteks keamanan
                    maupun
                    pelayanan sosial.</p>
                <p>- Menyusun dan mengelola anggaran organisasi, memastikan alokasi dana yang efektif</p>
                <p>- Mengelola pemasukan dan pengeluaran agar sesuai dengan rencana keuangan yang telah ditetapkan.</p>
            </div>
        </div>
        <div class="about-exp-item">
            <div class="about-exp-item-header">
                <div>
                    <div class="font">Pramuka (2018-2019)</div>
                    <p>Humas</p>
                </div>
                <button class="btn button" onclick="toggleDetail(event)">More Info</button>
            </div>
            <div class="about-exp-item-detail ">
                <p>suatu gerakan pendidikan kepanduan yang bertujuan mengembangkan potensi dan karakter positif pemuda
                    Indonesia.
                </p>
                <p>- Membangun dan menjaga hubungan baik dengan pihak sekolah, guru, staf dan eskternal organisasi untuk
                    memastikan
                    dukungan dan partisipasi aktif dalam kegiatan pramuka.
                </p>
                <p>- Sebagai penyalur informasi</p>
            </div>
        </div>
        <div class="about-exp-item">
            <div class="about-exp-item-header">
                <div>
                    <div class="font">Bagana (2019-2023)</div>
                    <p>Tim Reaksi Cepat</p>
                </div>
                <button class="btn button" onclick="toggleDetail(event)">More Info</button>
            </div>
            <div class="about-exp-item-detail ">
                <p>Bagian dari organisasi Nahdlatul Ulama (NU) yang memiliki peran khusus dalam menanggapi bencana alam.
                </p>
                <p>- Merespons panggilan darurat dan kejadian darurat, memberikan pertolongan pertama.</p>
                <p>- Memimpin tim dalam upaya penyelamatan</p>
                <p>- Keahlian di bidang Vertical Rescue dan Water Rescue</p>
            </div>
        </div>
        <div class="about-exp-item">
            <div class="about-exp-item-header">
                <div>
                    <div class="font">Himpunan Mahasiswa Sistem Informasi (2022-2023)</div>
                    <p>Ketua Umum</p>
                </div>
                <button class="btn button" onclick="toggleDetail(event)">More Info</button>
            </div>
            <div class="about-exp-item-detail ">
                <p>Himpunan Mahasiswa Sistem Informasi Universitas Teknologi Yogyakarta merupakan organisasi yang bergerak
                    membantu dan
                    mewadahi minat, bakat dan aspirasi mahasiswa di tingkat program studi.</p>
                <p>- Memimpin serta mengelola organisasi dalam pengembangan dan implementasi strategi jangka pendek,
                    menengah hingga
                    jangka panjang untuk meningkatkan efisiensi dan efektivitas organisasi.</p>
                <p>- Pemangku Kebijakan.
                </p>
                <p>- Bertanggung jawab atas perencanaan dan manajemen organisasi.</p>
            </div>
        </div>
        <hr>
    </section>

    <section class="kerja container">
        <div class="about-exp-item">
            <div class="about-exp-item-header">
                <div>
                    <div class="font">Atmo Coorperation (2022-2023)</div>
                    <p>Parttime Event Organizer</p>
                </div>
                <button class="btn button" onclick="toggleDetail(event)">More Info</button>
            </div>
            <div class="about-exp-item-detail ">
                <p>Merupakan perusahaan yang melayani jasa penyedia layanan wedding organizer, event organizer dan persewaan
                    perlengkapan event yang berada di ngawi
                </p>
                <p>- Pernah menjalankan jobdesk asisten pengantin, koordinator acara dan asisten fotografer.</p>
                <p>- Bertanggung jawab atas terselenggarakan event.</p>
                <p>- Bekerja sama dengan rekan tim.</p>
            </div>
        </div>
        <div class="about-exp-item">
            <div class="about-exp-item-header">
                <div>
                    <div class="font">Kerja Praktik di Klinik Korpagama UGM (2023)</div>
                    <p>Project Pemgembangan Sistem Informasi Farmasi Berbasis Web</p>
                </div>
                <button class="btn button" onclick="toggleDetail(event)">More Info</button>
            </div>
            <div class="about-exp-item-detail ">
                <p>Pada kegiatan kerja praktik ini merupakan wujud kegiatan mata kuliah kampus yang mengharuskan terjun
                    langsung ke lapangan, dengan memilih klinik korpagama UGM yang menjadi object dari penelitian ini dan
                    guna memunculkan inoovasi baru.
                </p>
                <p>- Identifikasi masalah</p>
                <p>- Memberikan ide gagasan atau penyelesaian masalah.</p>
                <p>- Melakukan perancangan sistem dengan memadukan pemindaian barcode.</p>
            </div>
        </div>
        <div class="about-exp-item">
            <div class="about-exp-item-header">
                <div>
                    <div class="font">Kerja Praktik di Toko Bangunan Sadar Hati Putra (2024)</div>
                    <p>Project Pengembangan Sistem Informasi Penjualan Berbasis Web Menggunakan Framework Laravel </p>
                </div>
                <button class="btn button" onclick="toggleDetail(event)">More Info</button>
            </div>
            <div class="about-exp-item-detail ">
                <p>Merupakan kegiatan matakuliah kampus yang mengharuskan untuk terjun langsung ke lapangan untuk melakukan
                    penelitian terkait sistem informasi penjualan
                </p>
                <p>- Identifikasi masalah</p>
                <p>- Memberikan inovasi baru.</p>
                <p>- Melakukan perancangan dan implementasi sistem di tambah dengan payment gateway.</p>
            </div>
        </div>
        <hr>
    </section>


    <section class="skill container">
        <div class="row">
            <!-- Skill 1 -->
            <div class="col-md-6 skill-item">
                <div class="skill-title">English Proficiency Test</div>
                <p>Program pengujian kemampuan bahasa inggris dengan skor 450</p>
                <div class="skill-bar-wrapper">
                    <div class="progress">
                        <div class="progress-bar bg-info skill-bar" role="progressbar" style="width: 75%;"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <p class="skill-level">75% proficiency
                    <a href="https://drive.google.com/file/d/1JftsfsMFrX8E7hTPgIFLwWjb2AVDdGM4/view?usp=sharing" class="btn-cert" target="_blank">View
                        Certificate</a>
                </p>
            </div>

            <!-- Skill 2 -->
            <div class="col-md-6 mb-4">
                <div class="skill-title">Microsoft Office Specialist "WORD"</div>
                <p>Microsoft Office Specialist "WORD", Skor 900/1000
                </p>
                <div class="progress">
                    <div class="progress-bar bg-success skill-bar" role="progressbar" style="width: 90%"
                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="skill-level">90%
                    <a href="https://drive.google.com/file/d/1UzKrQk7Dvmj6MdwmMnDsySEolwYtCOc2/view?usp=drive_link" class="btn-cert" target="_blank">View
                        Certificate</a>
                </div>
            </div>

            <!-- Skill 3 -->
            <div class="col-md-6 mb-4">
                <div class="skill-title">Microsoft Office Specialist "EXCEL"</div>
                <p>Microsoft Office Specialist "EXCEL", Skor 756/1000</p>
                <div class="progress">
                    <div class="progress-bar bg-info skill-bar" role="progressbar" style="width: 76%" aria-valuenow="76"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="skill-level">76%
                    <a href="https://drive.google.com/file/d/16uiurJu2UTfrPYVHpgS_bTzcojupKPwa/view?usp=drive_link" class="btn-cert" target="_blank">View
                        Certificate</a>
                </div>
            </div>

            <!-- Skill 4 -->
            <div class="col-md-6 mb-4">
                <div class="skill-title">Data Engginer</div>
                <p>Mampu mengolah data untuk menghasilkan informasi yang dapat membantu mendukung
                    keputusan</p>
                <div class="progress">
                    <div class="progress-bar bg-info skill-bar" role="progressbar" style="width: 70%" aria-valuenow="70"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="skill-level">70%
                    <a href="https://drive.google.com/file/d/1XnFBwhQvpswoeIf-5yxS_yCx30fwqLob/view?usp=drive_link" class="btn-cert" target="_blank">View
                        Certificate</a>
                </div>
            </div>
            <!-- Skill 5 -->
            <div class="col-md-6 mb-4">
                <div class="skill-title">Machine Learning</div>
                <p>Dapat mengolah data dengan menggunakan metode naive bayes dan lain sebagainya.</p>
                <div class="progress">
                    <div class="progress-bar bg-info skill-bar" role="progressbar" style="width: 70%" aria-valuenow="70"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="skill-level">70%
                    <a href="https://drive.google.com/file/d/1GlnGGe30psVVQFl4T04IZYPrYoMf1M1V/view?usp=sharing" class="btn-cert" target="_blank">View
                        Certificate</a>
                </div>
            </div>

            <!-- Skill 6 -->
            <div class="col-md-6 mb-4">
                <div class="skill-title">Pemrograman</div>
                <p>Mampu melakukan perancangan hingga implementasi website dengan menggunakan bahasa
                    pemrograman HTML, CSS, PHP, AJAX, Javascript dan Framework Laravel.</p>
                <div class="progress">
                    <div class="progress-bar bg-warning skill-bar" role="progressbar" style="width: 85%"
                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="skill-level">85%
                    <a href="https://drive.google.com/drive/folders/1nYeP_2v3DyhOHXY0LZEuhIkeR8PSdPPr?usp=sharing" class="btn-cert" target="_blank">View
                        Certificate</a>
                </div>
            </div>

            <!-- Skill 7 -->
            <div class="col-md-6 mb-4">
                <div class="skill-title">Database Administrator</div>
                <p>Menguasai MySQL Query guna membantu dalam pembuatan database dan mengelola
                    database. Telah mengikuti kursus online coding studio</p>
                <div class="progress">
                    <div class="progress-bar bg-success skill-bar" role="progressbar" style="width: 95%"
                        aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="skill-level">95%
                    <a href="https://drive.google.com/file/d/1FaZwWxWI7jYxvlEAXQyYqeg1WW0KpJAu/view?usp=sharing" class="btn-cert" target="_blank">View
                        Certificate</a>
                </div>
            </div>

            <!-- Skill 8 -->
            <div class="col-md-6 mb-4">
                <div class="skill-title">UI/UX Design</div>
                <p>Mampu mengoprasikan Figma dalam membangun UI/UX Design dan telah mengikuti kursus
                    online</p>
                <div class="progress">
                    <div class="progress-bar bg-success skill-bar" role="progressbar" style="width: 95%"
                        aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="skill-level">95%
                    <a href="https://drive.google.com/drive/folders/1RgZVOXYS6iONEiiOKs1Kk6D2MXceIW3t?usp=sharing" class="btn-cert" target="_blank">View
                        Certificate</a>
                </div>
            </div>
            <hr>
    </section>



    <!-- Achievements Section -->
    <section class="achievement container">
        <div class="row">
            <!-- Achievement 1 -->
            <div class="col-md-12 mb-4">
                <div class="achievement-item">
                    <i class="achievement-icon bi bi-trophy-fill"></i>
                    <div>
                        <div class="font">Juara 1 Himapala Instructional Video Competition</div>
                        <p>Perlombaan pembuatan vidio pengenalan peralatan dan teknik climbing yang diadakan oleh himapala
                            universitas nahdhotul ulama yogyakarta</p>
                        <a href="https://drive.google.com/file/d/1LYRDYNkyAno5vLkVwBJQYIZFZjgvehji/view?usp=sharing" class="btn btn-primary btn-cert"
                            target="_blank">View Certificate</a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work container">
        <div class="row d-flex align-items-center gap-5">
            <div class="col-12 col-5">
                <p class="text-center">Portofolio ini meliputi design web dan juga hasil output dari program yang telah saya buat terkait sistem
                    informasi penjualan berbasis web  yang di implementasikan pada toko bangunan, dalam pembuatan sistem menggunakan metode SDLC model
                    waterfall. dapat dilihat hadil desain dan output sistem yang telah saya buat.</p>
            </div>
            <div class="col-12 col-6 work-img">
                <div id="work-1" class="work-img-item">
                    <img src="{{ asset('storage/work-1.png') }}" alt="work 1">
                </div>
                <div id="work-2" class="work-img-item">
                    <img src="{{ asset('storage/work-2.png') }}" alt="work 2">
                </div>
                <div id="work-3" class="work-img-item">
                    <img src="{{ asset('storage/work-3.png') }}" alt="work 3">
                </div>

            </div>
        </div>
    </section>
