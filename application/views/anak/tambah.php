<div class="container">
  <a class="btn btn-sm btn-danger float-right" href="<?= site_url('anak') ?>"> <i class="fa fa-arrow-left"></i> Back </a>
</div>
<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <strong class="card-title"><?= $judul; ?></strong>
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
            <form action="<?= base_url('anak/saveanak'); ?>" method="post" enctype="multipart/form-data">
              <div class="row">

                <!-- Bagian kiri -->
                <div class="col-lg-6">
                  <div class="form-group mt-3">
                    <label for="nik_anak"><strong> NIK Anak </strong></label><br>
                    <input class="form-control" id="nik_anak" type="text" name="nik_anak" placeholder="Masukkan Nomor Induk Kependudukan" required oninvalid="this.setCustomValidity('NIK Wajib Diisi')" oninput="this.setCustomValidity('')">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="nama_anak"><strong> Nama Lengkap Anak </strong></label><br>
                    <input class="form-control" id="nama_anak" type="text" name="nama_anak" placeholder="Masukkan Nama" required oninvalid="this.setCustomValidity('Nama Wajib Diisi')" oninput="this.setCustomValidity('')">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="alamat"><strong> Alamat Lengkap </strong> </label><br>
                    <textarea class="form-control" id="alamat" type="address" name="alamat" placeholder="Masukkan Alamat Lengkap " required oninvalid="this.setCustomValidity('Alamat Wajib Diisi')" oninput="this.setCustomValidity('')"></textarea>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="no_hp"><strong> No HP / whatsapp</strong></label><br>
                    <input class="form-control" id="no_hp" type="number" name="no_hp" placeholder="Masukkan Nomor Handphone yang bisa dihubungi" required oninvalid="this.setCustomValidity('No hp Wajib Diisi')" oninput="this.setCustomValidity('')">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="jk_anak"><strong> Jenis Kelamin </strong> </label><br>
                    <select class="form-control" name="jk_anak" required oninvalid="this.setCustomValidity('Pilih Jenis Kelamin disini')" oninput="setCustomValidity('')">
                      <option value="">:: Pilih Jenis Kelamin ::</option>
                      <option value="L">Laki-Laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="tempat_lahir_anak"> <strong> Tempat Lahir Anak </strong></label><br>
                    <input class="form-control" id="tempat_lahir_anak" type="text" name="tempat_lahir_anak" placeholder="Masukkan Tempat Lahir" required oninvalid="this.setCustomValidity('Tempat Lahir Wajib Diisi')" oninput="this.setCustomValidity('')">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="tgl_lahir_anak"><strong> Tanggal Lahir Anak </strong> </label><br>
                    <input class="form-control" id="tgl_lahir_anak" type="date" name="tgl_lahir_anak" placeholder="Masukkan Tanggal Lahir" required oninvalid="this.setCustomValidity('Tanggal Lahir Wajib Diisi')" oninput="this.setCustomValidity('')">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="umur"><strong> Umur Calon Santri </strong></label><br>
                    <input class="form-control" id="umur" type="number" name="umur" placeholder="Masukkan Umur kamu" required oninvalid="this.setCustomValidity('Umur Wajib Diisi')" oninput="this.setCustomValidity('')">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="nama_ibu_kandung"><strong> Nama ibu </strong></label><br>
                    <input class="form-control" id="nama_ibu_kandung" type="text" name="nama_ibu_kandung" placeholder="Masukkan Nama ibu kamu" required oninvalid="this.setCustomValidity('nama Ibu Wajib Diisi')" oninput="this.setCustomValidity('')">
                  </div>
                  <br>

                  <div class="form-group">
                    <label for="nama_bapak_kandung"><strong> Nama Ayah </strong></label><br>
                    <input class="form-control" id="nama_bapak_kandung" type="text" name="nama_bapak_kandung" placeholder="Masukkan Nama Ayah kamu" required oninvalid="this.setCustomValidity('Nama Ayah Wajib Diisi')" oninput="this.setCustomValidity('')">
                  </div>
                </div>

                <!-- Bagian Kanan -->
                <div class="col-lg-6">
                  <div class="form-group mt-3">
                    <Link for="pekerjaan_ibu"><strong>Pekerjaan Ibu</strong></label><br>
                    <input class="form-control" id="pekerjaan_ibu" type="text" name="pekerjaan_ibu" placeholder="Masukkan pekerjaan ibu" required oninvalid="this.setCustomValidity('Pekerjaan ibu wajib diisi')" oninput="this.setCustomValidity('')">
                  </div>

                  <div class="form-group mt-3">
                    <label for="pekerjaan_ayah"><strong> Pekerjaan Ayah </strong></label><br>
                    <input class="form-control" id="pekerjaan_ayah" type="text" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan ayah" required oninvalid="this.setCustomValidity('Pekerjaan ayah wajib diisi')" oninput="this.setCustomValidity('')">
                  </div>
                  <br>
                  <div class="form-group mt-3">
                    <label for="ktp"><strong> Foto KTP Ayah/Ibu </strong></label><br>
                    <input id="ktp" type="file" name="ktp" class="form-control" required>
                    <small class="help-block"> Maks. 2MB</small>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="agama"><strong> Agama </strong></label><br>
                    <select class="form-control" name="agama" required oninvalid="this.setCustomValidity('Pilih Agama disini')" oninput="setCustomValidity('')">
                      <option value="">:: Pilih Agama ::</option>
                      <option value="1">Islam</option>
                    </select>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="pendidikan"><strong> Kategori pendaftaran</strong></label><br>
                    <select class="form-control" name="pendidikan" required oninvalid="this.setCustomValidity('Pilih Pendidikan disini')" oninput="setCustomValidity('')">
                      <option value="">:: Pilih Kategori Pendaftaran ::</option>
                      <option value="1">Tafidz ( ponpes )</option>
                      <option value="2">Kitab ( ponpes )</option>
                      <option value="3">RTQ ( Rumah Tafidz Qur'an )</option>
                    </select>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="scan_ijasah"><strong>Foto Ijazah Pendidikan Terakhir Calon Santri</strong></label><br>
                    <input id="scan_ijasah" type="file" name="scan_ijasah" class="form-control">
                    <small class="help-block"> Maks. 2MB</small>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="scan_kk"><strong>Foto Kartu Keluarga</strong> </label><br>
                    <input id="scan_kk" type="file" name="scan_kk" class="form-control" required>
                    <small class="help-block"> Maks. 2MB</small>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="scan_akte"><strong>Foto Akta Kelahiran Calon Santri</strong></label><br>
                    <input id="scan_akte" type="file" name="scan_akte" class="form-control" required>
                    <small class="help-block"> Maks. 2MB</small>
                  </div>
                  <br>
                  <div class="form-group">
                    <input class="form-control" id="tahun_masuk" type="hidden" name="tahun_masuk" value="<?php echo date('Y') ?>">
                  </div>

                  <div class="form-group">
                    <label for="foto_anak"><strong> Upload Pas Foto Calon Santri ( 3x4 ) </strong></label><br>
                    <input id="foto_anak" type="file" name="foto_anak" class="form-control" required>
                    <small class="help-block"> Maks. 2MB</small>
                  </div>
                  <br>
                  <div class="form-group">
                    <input class="form-control" id="jenis_masalah" type="hidden" name="jenis_masalah" value="8">
                  </div>

                  <div class="form-group">
                    <input class="form-control" id="keadaan_saat_ini" type="hidden" name="keadaan_saat_ini" value="1">
                  </div>

                  <div class="form-group">
                    <input class="form-control" id="akta" type="hidden" name="akta" value="1">
                  </div>

                  <div class="form-group">
                    <input class="form-control" id="tempat_tinggal" type="hidden" name="tempat_tinggal" value="-">
                  </div>

                  <div class="form-group">
                    <input class="form-control" id="wali" type="hidden" name="wali" value="-">
                  </div>

                  <div class="form-group">
                    <input class="form-control" id="alasan_masuk_panti" type="hidden" name="alasan_masuk_panti" value="1">
                  </div>

                  <div class="form-group">
                    <input class="form-control" id="jenis_bantuan" type="hidden" name="jenis_bantuan" value="5">
                  </div>

                  <div class="form-group">
                    <input class="form-control" id="masuk_dtks" type="hidden" name="masuk_dtks" value="2">
                  </div>

                  <div class="form-group">
                    <input class="form-control" id="tahun_bantuan" type="hidden" name="tahun_bantuan" value="-">
                  </div>

                  <div>
                    <button class="btn btn-sm btn-primary" type="submit"> <i class="fa fa-save"></i> Daftar </button>
                    <button class="btn btn-sm btn-secondary" type="reset"> <i class="fa fa-rotate-right"></i> Reset </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div><!-- .animated -->
</div><!-- .content -->