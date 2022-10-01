<main id="main">

    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2 class="text-dark">Berita Ponpes</h2>
                <ol>
                    <li><a href="<?php echo base_url('utama') ?>">Home</a></li>
                    <li class="text-dark">Blog</li>
                </ol>
            </div>

        </div>
    </div>

    <!-- List Artikel -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">


                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-item search-form">
                            <h3 class="sidebar-title">Cari Judul Berita</h3>
                            <form action="" class="mt-3" method="post">
                                <input type="text" class="rounded" placeholder="masukan kata kunci judul Berita....." name="keyword">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                            <hr>
                            <?php
                            foreach ($footer as $ft) { ?>
                                <h4 class="sidebar-title">Sosial Media Ponpes :</h4>
                                <i class="bx bx-stop"></i> <a href="<?php echo ucwords($ft['facebook']); ?>">Facebook</a><br>
                                <i class="bx bx-stop"></i> <a href="<?php echo ucwords($ft['instagram']); ?>">Instagram</a><br>
                                <i class="bx bx-stop"></i> <a href="<?php echo ucwords($ft['youtube']); ?>">Youtube</a><br>

                                <br><br>
                                <hr>
                                <div class="social-links text-center text-md-right pt-3 pt-md-0">

                                    <a href="<?php echo ucwords($ft['youtube']); ?>" class="youtube"><i class="bx bxl-youtube"></i></a>
                                    <a href="<?php echo ucwords($ft['facebook']); ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    <a href="<?php echo ucwords($ft['instagram']); ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
                                    <a href="https://wa.me/xxxxx?text=Saya%20tertarik%20dengan%20ponpes%20Anda" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>

                <div class="col-lg-8">
                    <div class="row gy-4 posts-list">
                        <?php $no = 1;
                        foreach ($data as $data) { ?>
                            <div class="col-lg-6">
                                <article class="d-flex flex-column rounded">

                                    <div class="post-img">
                                        <img src="<?php echo base_url(); ?>assets/images/upload/<?= $data['image']; ?>" alt="" class="img-fluid rounded-top">
                                    </div>

                                    <h2 class="title">
                                        <a href=""><?php echo substr($data['judul'], 0, 25) . '...'; ?></a><br>
                                    </h2>

                                    <div class="content">
                                        <p>
                                            <?php echo substr($data['isi'], 0, 100) . '...'; ?>
                                        </p>
                                    </div>

                                    <div class="read-more mt-auto align-self-end">
                                        <a class="bg-light text-dark" href="#"><i class="bi bi-calendar-date">&nbsp;</i><?= $data['tanggal']; ?></a>
                                        <a href="<?php echo base_url('utama/detail/' . $data['id_berita']) ?>">Baca Berita</a>
                                    </div>

                                </article>
                            </div>
                        <?php $no++;
                        } ?>
                    </div>
                </div>




            </div>
        </div>
    </section>
</main>