<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card" style="border-radius:5px;">
          <div class="card-header">
            <div class="row">
              <div class="col-md-12">
                <?php echo form_open_multipart('lap_anak/process') ?>
                <div class="col-md-2">
                  <div class="form-group">
                    Umur
                    <select class="form-control" name="umur">
                      <option value='' <?= $this->input->post('umur') == '' ? 'selected' : null ?>>Pilih Umur</option>
                      <option value='1' <?= $this->input->post('umur') == 1 ? 'selected' : null ?>>7 - 11 Tahun</option>
                      <option value='2' <?= $this->input->post('umur') == 2 ? 'selected' : null ?>>12 - 14 Tahun</option>
                      <option value='3' <?= $this->input->post('umur') == 3 ? 'selected' : null ?>>15 - 20 Tahun</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    Pendidikan
                    <select class="form-control" name="pendidikan">
                      <option value='' <?= $this->input->post('pendidikan') == '' ? 'selected' : null ?>>Semua Pendidikan</option>
                      <option value='1' <?= $this->input->post('pendidikan') == 1 ? 'selected' : null ?>>Tafidz (Ponpes)</option>
                      <option value='2' <?= $this->input->post('pendidikan') == 2 ? 'selected' : null ?>>Kitab (Ponpes)</option>
                      <option value='3' <?= $this->input->post('pendidikan') == 3 ? 'selected' : null ?>>RTQ</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    Status
                    <select class="form-control" name="status">
                      <option value='' <?= $this->input->post('status') == '' ? 'selected' : null ?>>Pilih Status</option>
                      <option value='1' <?= $this->input->post('status') == 1 ? 'selected' : null ?>>Aktif</option>
                      <option value='2' <?= $this->input->post('status') == 2 ? 'selected' : null ?>>Tidak Aktif</option>
                      <option value='3' <?= $this->input->post('status') == 3 ? 'selected' : null ?>>Alumni</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    Tahun Masuk
                    <select class="form-control" name="tahun_masuk">
                      <option value='' <?= $this->input->post('tahun_masuk') == '' ? 'selected' : null ?>>Pilih Tahun</option>
                      <option value='2017' <?= $this->input->post('tahun_masuk') == 2017 ? 'selected' : null ?>>2017</option>
                      <option value='2018' <?= $this->input->post('tahun_masuk') == 2018 ? 'selected' : null ?>>2018</option>
                      <option value='2019' <?= $this->input->post('tahun_masuk') == 2019 ? 'selected' : null ?>>2019</option>
                      <option value='2020' <?= $this->input->post('tahun_masuk') == 2020 ? 'selected' : null ?>>2020</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-3">
                  Proses <br>
                  <button type="submit" class="btn btn-outline-secondary btn-sm" title="Reset Data" name="reset"><i class="fa fa-refresh"></i> Reset</button>
                  <button type="submit" class="btn btn-primary btn-sm" title="Cari Data" name="cari"><i class="fa fa-search"></i> Cari</button>
                  <button type="submit" class="btn btn-danger btn-sm" title="Cetak PDF" name="cetak" target="_blank"><i class="fa fa-print"></i> Cetak</button>
                </div>
              </div>
            </div>

            <?php echo form_close(); ?>
          </div>
        </div>
        <div class="card" style="border-radius:5px;">
          <div class="card-body table-responsive">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered dt-responsive nowrap">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Foto Anak</th>
                  <th>NIK Anak</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Tempat Tanggal Lahir</th>
                  <th>Nama Ibu</th>
                  <th>Nama Bapak</th>
                  <th>Agama</th>
                  <th>Pendidikan</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($data as $row) { ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td> <?php if ($row['foto_anak'] != null) { ?>
                        <img src="<?= base_url('upload/foto_anak/' . $row['foto_anak']) ?>" alt="" width="80px">
                      <?php } ?>
                    </td>
                    <td><?php echo $row['nik_anak']; ?></td>
                    <td><?php echo ucwords($row['nama_anak']); ?></td>
                    <td>
                      <?php if ($row['jk_anak'] == 'L') { ?>
                        <span class="badge badge-primary">Laki-laki</span>
                      <?php } else { ?>
                        <span class="badge badge-danger">Perempuan</span>
                      <?php } ?>
                    </td>
                    <td><?php echo ucwords($row['tempat_lahir_anak'] . ', ' . date_indo($row['tgl_lahir_anak'])); ?></td>
                    <td><?php echo ucwords($row['nama_ibu_kandung']); ?></td>
                    <td><?php echo ucwords($row['nama_bapak_kandung']); ?></td>
                    <td>
                      <?php if ($row['agama'] == 1) { ?>
                        <span class="badge badge-primary">Islam</span>
                      <?php } elseif ($row['agama'] == 2) { ?>
                        <span class="badge badge-danger">Kristen</span>
                      <?php } elseif ($row['agama'] == 3) { ?>
                        <span class="badge badge-danger">Katholik</span>
                      <?php } elseif ($row['agama'] == 4) { ?>
                        <span class="badge badge-danger">Hindu</span>
                      <?php } elseif ($row['agama'] == 5) { ?>
                        <span class="badge badge-danger">Budha</span>
                      <?php } else { ?>
                        <span class="badge badge-success">Konghucu</span>
                      <?php } ?>
                    </td>
                    <td>
                      <?php if ($row['pendidikan'] == 1) { ?>
                        <span class="badge badge-primary">SD/MI</span>
                      <?php } elseif ($row['pendidikan'] == 2) { ?>
                        <span class="badge badge-danger">SMP/MTS</span>
                      <?php } elseif ($row['pendidikan'] == 3) { ?>
                        <span class="badge badge-danger">SMK/SMA/MA</span>
                      <?php } else { ?>
                        <span class="badge badge-success">Kuliah</span>
                      <?php } ?>
                    </td>
                    <td>
                      <?php if ($row['status'] == '1') { ?>
                        <a href="<?= site_url('anak/tidak_aktif/' . $row['nik_anak']) ?>" title="Klik untuk merubah"><span class="badge badge-primary">Aktif</span></a>
                      <?php } elseif ($row['status'] == '2') { ?>
                        <a href="<?= site_url('anak/aktif/' . $row['nik_anak']) ?>" title="Klik untuk merubah"><span class="badge badge-secondary">Tidak Aktif</span></a>
                      <?php } elseif ($row['status'] == '3') { ?>
                        <a href="<?= site_url('anak/alumni/' . $row['nik_anak']) ?>" title="Klik untuk merubah"><span class="badge badge-success">Alumni</span></a>
                      <?php } elseif ($row['status'] == '4') { ?>
                        <a href="<?= site_url('anak/belum_diverifikasi/' . $row['nik_anak']) ?>" title="Klik untuk merubah"><span class="badge badge-warning">Masih Dalam Seleksi</span></a>
                      <?php } else { ?>
                        <a href="<?= site_url('anak/tidak_diterima/' . $row['nik_anak']) ?>" title="Klik untuk merubah"><span class="badge badge-danger">Tidak diterima</span></a>
                      <?php } ?>
                    <td>
                  </tr>
                <?php $no++;
                }  ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>