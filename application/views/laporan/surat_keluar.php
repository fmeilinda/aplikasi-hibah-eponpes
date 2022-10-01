<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="border-radius:5px">
                    <div class="card-header">
                        <div class="row">
                          <div class="col-md-12">
                            <?php echo form_open_multipart('lap_surat_keluar/process') ?>
                            <div class="col-md-3">
                              Tanggal Awal :
                              <input type="date" class="form-control" name="tgl_awal" value="<?= $this->input->post('tgl_awal') ?>">
                            </div>
                            <div class="col-md-3">
                              Tanggal Akhir :
                              <input type="date" class="form-control" name="tgl_akhir" value="<?= $this->input->post('tgl_akhir') ?>">
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
                              <th>Tanggal Surat</th>
                              <th>Nomor Surat</th>
                              <th>Pengirim</th>
                              <th>Tujuan</th>
                              <th>Perihal</th>
                              <!-- <th>Upload File</th> -->
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no = 1;
                            foreach ($data as $row) { ?>
                              <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo date_indo($row ['tgl_surat_kel']); ?></td>
                                <td><?php echo ucwords($row ['nomor_surat_kel']); ?></td>
                                <td><?php echo ucwords($row ['pengirim']); ?></td>
                                <td><?php echo ucwords($row ['tujuan']); ?></td>
                                <td><?php echo ucwords($row ['perihal']); ?></td>
                                <!-- <td><?php if ($row['upload_file'] != null){ ?>
                                <i class="fa fa-eye"> Ada </i>
                              <?php } else {?>
                              <i class="fa fa-eye-slash"> Tidak Ada</i>
                            <?php } ?>
                          </td> -->
                        </tr>
                        <?php $no++; }  ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
