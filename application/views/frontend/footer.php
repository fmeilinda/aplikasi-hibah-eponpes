 <!-- Bagian Footer -->
 <footer id="footer">

     <div class="footer-top">
         <div class="container">
             <div class="row">
                 <div class="col-lg-3 col-md-6 footer-contact">
                     <h3>Hubungi kami :</h3>
                     <p>
                         <br>
                         <?php
                            foreach ($footer as $data) { ?>
                             <strong><i class='bx bx-phone'></i> : <?php echo ucwords($data['no_hp']); ?></strong><br>
                             <strong><i class='bx bxl-gmail'></i> : <?php echo ucwords($data['email']); ?></strong><br>
                             <strong><i class='bx bxl-whatsapp'></i> : <?php echo ucwords($data['whatsapp']); ?></strong> <br><br>
                         <?php } ?>
                     </p>
                 </div>

                 <div class="col-lg-2 col-md-6 footer-links">
                     <h4>Halaman Kami</h4>
                     <ul>
                         <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('utama') ?>">Beranda</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('utama/tentangKami') ?>">Tentang kami</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('utama/galeri') ?>">Galeri</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('utama/blog') ?>">Berita Ponpes</a></li>

                     </ul>
                 </div>

                 <div class="col-lg-3 col-md-6 footer-links">
                     <h4>Pendaftaran</h4>
                     <ul>
                         <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('utama/tataCaraMendaftar') ?>">Tata cara Pendaftaran</a></li>
                     </ul>
                 </div>

                 <div class="col-lg-4 col-md-6 footer-newsletter">
                     <h4>PONDOK PESANTREN RIYADUS SHOLIHIN</h4>
                     <p>Membimbing generasi muda sekarang untuk belajar ilmu agama dan mandiri</p>
                     <img src="<?= base_url() ?>assets/blog/img/logo.png" class="img-fluid rounded" alt="..." width="25%">
                 </div>

             </div>
         </div>
     </div>

     <!-- Bagian Copyright -->
     <div class="container d-md-flex py-4">
         <div class="me-md-auto text-center text-md-start">
             <div class="copyright">
                 &copy; Copyright <strong><span> PP Riyadus Sholihin Tarub Tegal <script type="text/javascript">
                             var creditsyear = new Date();
                             document.write(creditsyear.getFullYear());
                         </script></span></strong>. All Rights Reserved
             </div>
         </div>
         <div class="social-links text-center text-md-right pt-3 pt-md-0">
             <?php
                foreach ($footer as $data) { ?>
                 <a href="<?php echo ucwords($data['youtube']); ?>" class="youtube"><i class="bx bxl-youtube"></i></a>
                 <a href="<?php echo ucwords($data['facebook']); ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                 <a href="<?php echo ucwords($data['instagram']); ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
                 <a href="https://wa.me/xxxxx?text=Saya%20tertarik%20dengan%20ponpes%20Anda" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
             <?php } ?>
         </div>
     </div>
 </footer>

 <div id="preloader"></div>
 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <!-- Vendor JS Files -->
 <script src="<?php echo base_url() ?>assets/frontend/vendor/purecounter/purecounter_vanilla.js"></script>
 <script src="<?php echo base_url() ?>assets/frontend/vendor/aos/aos.js"></script>
 <script src="<?php echo base_url() ?>assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="<?php echo base_url() ?>assets/frontend/vendor/swiper/swiper-bundle.min.js"></script>
 <script src="<?php echo base_url() ?>assets/frontend/vendor/php-email-form/validate.js"></script>

 <!-- Blog Vendor JS Files -->
 <script src="<?php echo base_url() ?>assets/blog/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="<?php echo base_url() ?>assets/blog/vendor/aos/aos.js"></script>
 <script src="<?php echo base_url() ?>assets/blog/vendor/glightbox/js/glightbox.min.js"></script>
 <script src="<?php echo base_url() ?>assets/blog/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="<?php echo base_url() ?>assets/blog/vendor/swiper/swiper-bundle.min.js"></script>
 <script src="<?php echo base_url() ?>assets/blog/vendor/php-email-form/validate.js"></script>

 <!-- Template Main JS File -->
 <script src="<?php echo base_url() ?>assets/frontend/js/main.js"></script>

 <!-- Template Main JS File -->
 <script src="<?php echo base_url() ?>assets/blog/js/main.js"></script>

 </body>

 </html>