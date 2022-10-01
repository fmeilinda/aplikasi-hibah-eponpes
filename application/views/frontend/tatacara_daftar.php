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

</main>