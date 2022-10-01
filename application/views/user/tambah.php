<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title"><?= $judul; ?></strong>
            <a class="btn btn-sm btn-danger float-right" href="<?= site_url('user') ?>"> <i class="fa fa-arrow-left"></i> Back </a>
          </div>
          <div class="card-body">
            <?php if ($this->session->has_userdata('error')) : ?>
              <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                <span class="badge badge-pill badge-danger">Perhatian!</span>
                <?= $this->session->flashdata('error'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
            <?php endif; ?>
            <form action="<?= base_url('user/save'); ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="Nama"> Nama </label><br>
                <input class="form-control" id="nama" type="text" name="nama" placeholder="Masukkan Nama" required oninvalid="this.setCustomValidity('Nama Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="Email"> Email </label><br>
                <input class="form-control" id="email" type="email" name="email" placeholder="Masukkan Email" required oninvalid="this.setCustomValidity('Email Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="password"> Password </label><br>
                <input class="form-control" id="password" type="password" name="password" placeholder="Masukkan Password" required oninvalid="this.setCustomValidity('Password Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="role"> Role </label>
                <select class="form-control" name="role" required>
                  <option value="">Pilih</option>
                  <option value="0">Admin</option>
                  <option value="1">Pengurus</option>
                  <option value="2">Bendahara</option>
                </select>
              </div>

              <label for="upload"> Upload Foto Profil :</label><br>
              <div class="form-group custom-file mb-3">
                <input id="upload" type="file" name="img_user" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Pilih gambar - Maks. 2MB</label>
              </div>

              <button class="btn btn-sm btn-primary" type="submit"> <i class="fa fa-save"></i> Save </button>
              <button class="btn btn-sm btn-secondary" type="reset"> <i class="fa fa-rotate-right"></i> Reset </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div><!-- .animated -->
</div><!-- .content -->