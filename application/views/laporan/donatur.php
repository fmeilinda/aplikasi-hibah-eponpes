<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card" style="border-radius:5px">
          <div class="card-header">
            <div class="row">
              <div class="col-md-12">
                <?php echo form_open_multipart('lap_donatur/process') ?>
                <div class="col-md-3">
                  Tanggal Awal :
                  <input type="month" class="form-control" name="tgl_awal" value="<?= $this->input->post('tgl_awal') ?>">
                </div>
                <div class="col-md-3">
                  Tanggal Akhir :
                  <input type="month" class="form-control" name="tgl_akhir" value="<?= $this->input->post('tgl_akhir') ?>">
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    Kategori
                    <select class="form-control" name="kategori">
                      <option value='' <?= $this->input->post('kategori') == '' ? 'selected' : null ?>>Semua Kategori</option>
                      <option value='1' <?= $this->input->post('kategori') == 1 ? 'selected' : null ?>>Uang</option>
                      <option value='2' <?= $this->input->post('kategori') == 2 ? 'selected' : null ?>>Logistik</option>
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
          </div>
          <?php echo form_close(); ?>
        </div>
        <div class="card" style="border-radius:5px">
          <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal Donasi</th>
                  <th>Nama Donatur</th>
                  <th>Alamat</th>
                  <th>Nomor HP</th>
                  <th>Kategori</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($data as $row) { ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo date_indo($row['tgl_donatur']); ?></td>
                    <td><?php echo ucwords($row['nama_donatur']); ?></td>
                    <td><?php echo ucwords($row['alamat_donatur']); ?></td>
                    <td><?php echo ucwords($row['no_hp_donatur']); ?></td>
                    <td>
                      <?php if ($row['kategori'] == 1) { ?>
                        <span class="badge badge-primary">Uang</span>
                      <?php } else { ?>
                        <span class="badge badge-success">Logistik</span>
                      <?php } ?>
                    </td>
                    <td><?php echo ucwords($row['keterangan']); ?></td>
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