<main id="main">

    <!-- Bagian Hero -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container" id="hero-desc" data-aos="zoom-in" data-aos-delay="100">
            <h1 id="hero-title" class="text-success">
                Pondok Pesantren<br>RIYADUS SHOLIHIN TARUB<br> KAB.TEGAL
            </h1>
            <h2 class="text-dark">AYO MONDOK SEKARANG JUGA !</h2>
            <p class="text-dark">
                membimbing generasi muda <br> untuk belajar ilmu agama dan mandiri
            </p>
            <a href="<?php echo base_url('daftar/tambah') ?>" id="btn-daftar" class="card btn-get-started bg-success">Daftar Sekarang</a>
        </div>
    </section>


    <!-- Bagian Card Pendaftaran -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card content">
                        <h3>Apakah Anda kesulitan Mendaftar?</h3>
                        <p>Jika Calon Santri mengalami kesulitan untuk mendaftar di website eponpes riyadus sholihin, anda bisa masuk ke halaman berikut</p>
                        <div class="text-center">
                            <a href="<?php echo base_url('utama/kesulitanMendaftar') ?>" class="card more-btn bg-light text-success">Masuk Halaman <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Bagian Alamat -->
                <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="card icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-map"></i>
                                    <h4>Alamat</h4>
                                    <p>Jl. Lokajaya, Karangmangu,Kec.Tarub, Kab.Tegal, Jawa Tengah 52184</p>
                                </div>
                            </div>
                            <?php
                            foreach ($data as $data) { ?>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="card icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-home"></i>
                                        <h4>Fasilitas</h4>
                                        <p><?php echo substr($data['fasilitas'], 0, 150) . '.'; ?></p>
                                    </div>
                                </div>

                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="card icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-detail"></i>
                                        <h4>Informasi Pendaftaran</h4>
                                        <p>Dibuka Pendaftaran :<br>
                                            <font color="blue"><?php echo ucwords($data['pendaftaran_awal']); ?> </font><br>
                                            Batas Pendaftaran : <br>
                                            <font color="red"> <?php echo ucwords($data['batas_akhir']); ?> </font><br>
                                            Tahun ajar : <?php echo ucwords($data['periode']); ?>
                                        </p>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section id="about" class="card about bg-light">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <h3 class="text-center"><strong>PPDB Online</strong></h3>
                <p>Proses seleksi pendaftaran penerimaan peseta didik baru yang dilaksanakan sepanjang tahun untuk Kategori Tahfidz, Kitab, dan RTQ Pesantren
                    Riyadus Sholihin Tarub Kab.Tegal yang dilakukan secara online melalui jalur internal, prestasi, dan reguler.</p><br>
                <div class="col-md-4">
                    <?php
                                foreach ($brosur as $br) { ?>
                        <img src="<?php echo base_url(); ?>assets/images/upload/<?= $br['image']; ?>" align="right" width="100px" height="100px" class="img-fluid rounded" alt="...">
                    <?php } ?>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2>Brosur Penerimaan Peserta Didik Baru <?php echo ucwords($data['periode']); ?> </h2>
                        <p class="card-text text-justify">Pondok Pesantren Riyadus sholihin Tarub membuka pendaftaran peserta didik baru</p>
                        <a class="btn btn-primary btn-sm" href="<?php echo base_url('Utama/brosur') ?>">Lihat Brosur</a>
                        <a class="btn btn-success btn-sm" href="<?php echo base_url('daftar/tambah') ?>"> Daftar sekarang </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Bagian Tentang Ponpes -->
    <section id="tentangkami" class="tentangkami">
        <div class="container" data-aos="fade-up">

            <div class=" p-3" style="max-width: cover;">
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url() ?>assets/frontend/img/logo_ponpes.jpg" class="img-fluid rounded" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body"><br>
                            <h2 class="text-center">PONDOK PESANTREN RIYADUSH SHOLIHIN TARUB KAB.TEGAL</h2><br>
                            <p class="card-text text-justify">Pondok Pesantren Riyadus Sholihin Adalah PonPes Putra Dan Putri,
                                Yang Merupakan PonPes Yang Menganut Sistem Pembelajaran Modern Atau Dikenal "Pondok Pesantren
                                Perpadauan Metodologi Belajar Menggabungkan Dari Salaf Dan Khalaf". Hafalan Menggunakan Pelajaran
                                Modern 2021 Seperti Ceramah, Diskusi, Presentasi Serta Memanfaatkan Teknologi Untuk Menunjang
                                Proses Belajar.<br><br>
                                Dibangun Di Atas Pondasi TAQWA Dengan Asas Al-Quran Dan Sunnah,
                                Berupaya Mengembalikan Masyarakat Iman Islam Kepada Ajaran Islam Yang Sesungguhnya
                                Yang Datang Dari Alloh Dan Rasul-Nya Serta Berupaya Mendidik Dan Membekali Kader Dakwah
                                Dengan Aqidah Sholihah, Ibadah, Adab Dan Akhlak Dan Mu’amalah Berdasarkan Al-Quran Dan Sunnah
                                Dengan Manhaj Salafus Sholeh, Ahlus Sunnah Wal Jama’ah Serta Ditambah Materi Khusus Hafalan
                                Al-Qur’an Juga Dipadu Dengan Keilmuan Umum Dan Keterampilan Yang Diimbangi Oleh Tenaga Pengajar
                                Professional Dibidangnya.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Visi Misi Ponpes -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="<?php echo base_url() ?>assets/frontend/img/p2.jpg" class="img-fluid" alt="" style="width: 100%;height:400px;">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3>
                        VISI MISI
                    </h3>
                    <p class="fst-italic">
                        pondok pesantren riyadus sholihin tentunya juga punya visi misi untuk menyukseskan generasi muda sekarang.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> Unggul dalam ilmu,terampil dalam amal, dan mulia dalam akhlak.</li>
                        <li><i class="bi bi-check-circle"></i> mendidik santri mengamalkan Al Qur'an dan Sunnah Rasulullah SAW.</li>
                        <li><i class="bi bi-check-circle"></i> Melatih santri untuk menghafal ayat-ayat Al Qur'an.</li>
                        <li><i class="bi bi-check-circle"></i> Mengembangkan potensi santri berjiwa mandiri,kerja keras,kompetitif dan jujur.</li>
                        <li><i class="bi bi-check-circle"></i> Mempersiapkan santri untuk menjadi Hafish Al Qur'an.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <!-- Bagian Tata Cara Pendaftaran -->
    <section id="about" class="about section-bg bg-white">
        <div class="container" data-aos="fade-up">
            <div class="section-title text-center">
                <h1><strong class="text-dark">Tata Cara pendaftaran</strong> </h1>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="<?php echo base_url() ?>assets/frontend/img/form.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center bg-white" data-aos="fade-up" data-aos-delay="100">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="resume-item pb-0">
                                <h5 class="card text-white bg-dark">Masuk ke website ponpes riyadush sholihin tarub</h5><br><br>
                            </div>
                            <div class="resume-item pb-0">
                                <h5 class="card text-white bg-dark">Persiapkan terlebih dahulu berkas-berkasnya</h5><br><br>
                            </div>
                            <div class="resume-item pb-0">
                                <h5 class="card text-white bg-dark">Jika berkasnya sudah disiapkan, Klik Tombol Daftar Sekarang</h5><br><br>
                            </div>
                            <div class="resume-item pb-0">
                                <h5 class="card text-white bg-dark">Isi formulir pendaftaran dengan data yang Valid!</h5><br><br>
                            </div>
                            <div class="resume-item pb-0">
                                <h5 class="card text-white bg-dark">Jika sudah diisi lalu klik Daftar dan akan muncul pesan "Pendaftaran berhasil" .
                                </h5><br><br>
                            </div>
                            <div class="resume-item pb-0">
                                <h5 class="card text-white bg-dark">Pendaftaran sudah diproses ponpes, untuk pemberitahuan selanjutnya akan diberitahu melalui <strong>No HP/Whatsapp</strong> calon santri.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>



<?php } ?>
<!-- Bagian Peta -->
<section id="features" class="features">
    <div class="container" data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41861.221564241016!2d109.19118662589902!3d-6.945777798187543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb96ac80aa19d%3A0xeec7377655a2b090!2sPondok%20pesantren%20riyadush%20sholihin!5e0!3m2!1sid!2sid!4v1658368615358!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded"></iframe>
    </div>
</section>




</main>