<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title"><?= $judul . ' ' . ucwords($row['nama_pengurus']) ?></strong>
            <a class="btn btn-sm btn-danger float-right" href="<?= site_url('pengurus') ?>"> <i class="fa fa-arrow-left"></i> Back </a>
          </div>
          <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-sm table-hover">
              <?php if ($row['foto_pengurus'] != null) { ?>
                <tr>
                  <th width="150px">Foto</th>
                  <td> : </td>
                  <td><img class="my-3 rounded" src="<?= base_url('upload/foto_pengurus/' . $row['foto_pengurus']) ?>" alt="" width="80px"></td>
                </tr>
              <?php } ?>
              <tr>
                <th>ID Pengurus</th>
                <td> : </td>
                <td> <?= $row['id_pengurus'] ?> </td>
              </tr>
              <tr>
                <th>NIK Pengurus</th>
                <td> : </td>
                <td> <?= $row['nik_pengurus'] ?> </td>
              </tr>
              <tr>
                <th>Nama Pengurus</th>
                <td> : </td>
                <td> <?= ucwords($row['nama_pengurus']) ?> </td>
              </tr>
              <tr>
                <th>Jenis Kelamin</th>
                <td> : </td>
                <td> <?php if ($row['jk_pengurus'] == 'L') { ?>
                    Laki-Laki
                  <?php } else { ?>
                    Perempuan
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <th>TTL</th>
                <td> : </td>
                <td> <?= ucwords($row['tempat_lahir_pengurus']) . ', ' . date_indo($row['tgl_lahir_pengurus']) ?> </td>
              </tr>
              <tr>
                <th>Mulai Masuk</th>
                <td> : </td>
                <td> <?= date_indo($row['mulai_kerja']) ?> </td>
              </tr>
              <tr>
                <th>No Telepon</th>
                <td> : </td>
                <td> <?= $row['telp_pengurus'] ?> </td>
              </tr>
              <tr>
                <th>Jabatan</th>
                <td> : </td>
                <td> <?php if ($row['jabatan'] == '1') { ?>
                    Ketua
                  <?php } else if ($row['jabatan'] == '2') { ?>
                    Wakil Ketua
                  <?php } else if ($row['jabatan'] == '3') { ?>
                    Sekretaris 1
                  <?php } else if ($row['jabatan'] == '4') { ?>
                    Sekretaris 2
                  <?php } else if ($row['jabatan'] == '5') { ?>
                    Bendahara
                  <?php } else if ($row['jabatan'] == '6') { ?>
                    Penanggungjawab sekaligus Pengajar Akhlak
                  <?php } else if ($row['jabatan'] == '7') { ?>
                    Bidang Pendidikan
                  <?php } else if ($row['jabatan'] == '8') { ?>
                    Pelaksana Harian
                  <?php } else if ($row['jabatan'] == '9') { ?>
                    Juru Masak
                  <?php } else { ?>
                    Admin
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <th>Status</th>
                <td> : </td>
                <td> <?php if ($row['status'] == '1') { ?>
                    Tetap
                  <?php } else if ($row['status'] == '2') { ?>
                    Kontrak
                  <?php } else { ?>
                    Relawan
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <th>Pendidikan</th>
                <td> : </td>
                <td> <?php if ($row['pendidikan'] == '1') { ?>
                    SMA/SMK/MA
                  <?php } else if ($row['pendidikan'] == '2') { ?>
                    D3
                  <?php } else if ($row['pendidikan'] == '3') { ?>
                    S1
                  <?php } else { ?>
                    S2
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <th>Diinput oleh</th>
                <td> : </td>
                <td> <?= ucwords($row['nama']) ?> </td>
              </tr>
              <tr>
                <th></th>
                <td></td>
                <td></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div><!-- .animated -->
</div><!-- .content -->