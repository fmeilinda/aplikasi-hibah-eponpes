<div class="row">
  <div class="col-md-12">
    <?php if ($this->session->has_userdata('error')) : ?>
      <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
        <span class="badge badge-pill badge-danger">Perhatian!</span>
        <?= $this->session->flashdata('error'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true" style="margin-top:-25px">×</span>
        </button>
      </div>
    <?php endif; ?>
    <?php if ($this->session->has_userdata('success')) : ?>
      <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        <span class="badge badge-pill badge-success">Success</span>
        <?= $this->session->flashdata('success'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
    <?php endif; ?>
  </div>
</div>



<div class="row">
  <div class="col-md-12">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          <h4>Foto Profil</h4>
        </div>
        <div class="card-body">
          <div class="text-center pb-4">
            <img class="rounded-circle shadow" src="<?= base_url('upload/img/' . $row->img_user) ?>" alt="Foto <?= $row->nama ?>" width="150px"> <br>
            <p></p>
            <?php if ($row->role == 0) { ?>
              <span class='badge badge-primary'>Admin</span>
            <?php } elseif ($row->role == 1) { ?>
              <span class='badge badge-success'>Pengurus</span>
            <?php } else { ?>
              <span class='badge badge-danger'>Bendahara</span>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-9">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-6">
              <h4>Informasi Akun</h4>
            </div>
            <div class="col-6 text-right">
              <a href="<?= site_url('Dashboard') ?>" class="btn btn-danger btn-sm text-right" title="Kembali"><i class="fa fa-long-arrow-left"></i> Kembali</a>
            </div>
          </div>
        </div>

        <div class="card-body">
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            Hi <?= ucfirst($this->fungsi->user_login()->nama) ?>, akunmu sekarang adalah <strong>
              <?php if ($row->role == 0) {
                echo "Admin";
              } elseif ($row->role == 1) {
                echo "Pengurus";
              } else {
                echo "Bendahara";
              } ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="custom-tab">
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home" aria-selected="true">Profile</a>
                <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile" aria-selected="false">Password</a>
              </div>
            </nav>
            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
              <div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                <form action="<?= base_url('profil/process/') ?>" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id_user" value="<?= $row->id_user ?>">
                  <div class="form-group">
                    <label for="Nama"> Nama </label><br>
                    <input class="form-control" id="nama" type="text" name="nama" value="<?= $row->nama ?>" required oninvalid="this.setCustomValidity('Nama Wajib Diisi')" oninput="this.setCustomValidity('')">
                  </div>

                  <div class="form-group">
                    <label for="Email"> Email </label><br>
                    <input class="form-control" id="email" type="email" name="email" value="<?= $row->email ?>" required oninvalid="this.setCustomValidity('Email Wajib Diisi')" oninput="this.setCustomValidity('')">
                  </div>

                  <label for="upload"> Perbarui Foto Profil :</label><br>
                  <div class="form-group custom-file mb-3">
                    <input id="upload" type="file" name="img_user" class="custom-file-input" id="customFile">
                    <input type="hidden" name="old_img" value="<?= $row->img_user ?>">
                    <label class="custom-file-label" for="customFile">Pilih gambar - Maks. 2MB</label>
                  </div>

                  <div class="text-start">
                    <button class="btn btn-sm btn-secondary" type="reset"> <i class="fa fa-rotate-right"></i> Reset </button>
                    <button class="btn btn-sm btn-primary" type="submit" name="Edit"> <i class="fa fa-save"></i> Update </button>
                  </div>
                </form>

              </div>
              <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                <form action="<?= base_url('profil/update/') ?>" method="post" enctype="multipart/form-data">
                  <input type="hidden" class="form-control" name="id_user" value="<?= $row->id_user ?>">
                  <div class="form-group">
                    <label for="sandi_lama"> Sandi Lama * </label><br>
                    <input class="form-control" id="sandi_lama" type="password" name="sandi_lama" placeholder="Masukkan sandi lama" required autofocus oninvalid="this.setCustomValidity('Sandi Lama wajib diisi')" oninput="this.setCustomValidity('')">
                  </div>

                  <div class="form-group">
                    <label for="sandi_baru"> Sandi Baru * </label><br>
                    <input class="form-control" id="sandi_baru" type="password" name="sandi_baru" placeholder="Masukkan sandi baru" required oninvalid="this.setCustomValidity('Sandi Baru wajib diisi')" oninput="this.setCustomValidity('')">
                  </div>

                  <div class="form-group">
                    <label for="konf_password"> Konfirmasi * </label><br>
                    <input class="form-control" id="konf_password" type="password" name="konf_password" placeholder="Masukkan konfirmasi sandi baru" required oninvalid="this.setCustomValidity('Konfirmasi sandi baru wajib diisi')" oninput="this.setCustomValidity('')">
                  </div>

                  <div class="text-start">
                    <button class="btn btn-sm btn-secondary" type="reset"> <i class="fa fa-rotate-right"></i> Reset </button>
                    <button class="btn btn-sm btn-primary" type="submit" name="Edit"> <i class="fa fa-save"></i> Update </button>
                  </div>

                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>