<main id="main">

    <!-- Bagian Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2 class="text-dark"><?= $judul; ?></h2>
                <ol>
                    <li><a href="<?php echo base_url('utama') ?>">Home</a></li>
                    <li class="text-dark"><?= $judul; ?></li>
                </ol>
            </div>

        </div>
    </div>

    <!-- Bagian Detail Halaman -->
    <section>
        <?php
        foreach ($data as $data) { ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <img class="img-fluid" width="100px" height="100px" src="<?= base_url() ?>assets/blog/img/logo.png" alt="">
                        <br><br>
                        <p style="width: 90%; text-align: justify;">

                            Pondok Pesantren Riyadus Sholihin Adalah PonPes Putra Dan Putri,
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
                            Professional Dibidangnya.

                        </p>
                    </div>

                    <div class="col-lg-3">
                        <div class="text-center card shadow-none rounded p-4">
                            <div class="member-card pt-2 pb-2">
                                <h4 class="fw-bold mb-3" style="color: #5fcf80;">Kepala Ponpes</h4>
                                <div class="thumb-lg member-thumb mx-auto">
                                    <img src="<?= base_url() ?>assets/images/upload/<?php echo ucwords($data['image']); ?>" class="rounded-circle img-thumbnail" alt="profile-image" style="width: 100px;">
                                </div>
                                <div class="mt-3">
                                    <span><strong><?php echo ucwords($data['nama_kepala_ponpes']); ?></strong></span>
                                </div>
                                <span>______</span>
                                <div class="captions mt-2 fs-6">
                                    <p>Puji syukur kepada Alloh SWT, Tuhan Yang Maha Esa yang telah memberikan rahmat dan anugerahNya sehingga website ini dapat terus berkiprah dan eksis di dunia maya.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </section>

</main>