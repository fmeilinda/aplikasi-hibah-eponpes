<main id="main">
  <div class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2 class="text-dark">Galeri</h2>
        <ol>
          <li><a href="<?php echo base_url('utama') ?>">Home</a></li>
          <li class="text-dark">Blog</li>
        </ol>
      </div>

    </div>
  </div>

  <!-- Gallery Grid -->
  <section id="blog" class="blog">
    <div class="container">
      <div class="row">
        <!-- Gallery item -->
        <?php foreach ($data as $data) : ?>
          <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
            <div class="bg-white rounded shadow-sm p-2">
              <img src="<?php echo base_url(); ?>assets/images/upload/<?= $data['image']; ?>" alt="" class="zoom img-fluid card-img-top rounded">
              <div class="p-4">
                <p class="small text-muted mb-0 text-center"><?= $data['judul']; ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>