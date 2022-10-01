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

            <form action="<?= base_url('user/update/' . $row['id_user']); ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="id_user" value="<?= $row['id_user'] ?>">
              <div class="form-group">
                <label for="Nama"> Nama </label><br>
                <input class="form-control" id="nama" type="text" name="nama" value="<?= $row['nama'] ?>" required oninvalid="this.setCustomValidity('Nama Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="Email"> Email </label><br>
                <input class="form-control" id="email" type="email" name="email" value="<?= $row['email'] ?>" required oninvalid="this.setCustomValidity('Nama Wajib Diisi')" oninput="this.setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="password"> Password </label><br>
                <input class="form-control" id="password" type="password" name="password">
                <small>Masukkan password jika ingin dirubah</small>
              </div>

              <div class="form-group">
                <label for="konf_password"> Konfirmasi Password </label><br>
                <input class="form-control" id="konf_password" type="password" name="konf_password">
                <small>Masukkan konfirmasi password jika ingin dirubah</small>
              </div>

              <div class="form-group">
                <label for="role"> Role </label>
                <select class="form-control" name="role" required>
                  <option value="">Pilih</option>
                  <option value="0" <?= $row['role'] == '0' ? 'selected' : null ?>>Admin</option>
                  <option value="1" <?= $row['role'] == '1' ? 'selected' : null ?>>Pengurus</option>
                  <option value="2" <?= $row['role'] == '2' ? 'selected' : null ?>>Bendahara</option>
                </select>
              </div>

              <?php if ($row['img_user'] != null) { ?>
                <div class="form-group">
                  <label class="form-label"> Foto Anda</label> <br>
                  <img src="<?= base_url('upload/img/' . $row['img_user']) ?>" alt="" width="80px"> </td>
                </div>
              <?php } ?>

              <label for="upload"> Perbarui Foto Profil :</label><br>
              <div class="form-group custom-file mb-3">
                <input id="upload" type="file" name="img_user" class="custom-file-input" id="customFile">
                <input type="hidden" name="old_img" value="<?= $row['img_user'] ?>">
                <label class="custom-file-label" for="customFile">Pilih gambar - Maks. 2MB</label>
              </div>

              <button class="btn btn-sm btn-primary" type="submit"> <i class="fa fa-save"></i> Update </button>
              <button class="btn btn-sm btn-secondary" type="reset"> <i class="fa fa-rotate-right"></i> Reset </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div><!-- .animated -->
</div><!-- .content -->