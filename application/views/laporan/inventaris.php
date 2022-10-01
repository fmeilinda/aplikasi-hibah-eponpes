<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="border-radius:5px">
                    <div class="card-header">
                        <div class="row">
                          <div class="col-md-12">
                            <?php echo form_open_multipart('lap_inventaris/process') ?>
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
                        <?php echo form_close(); ?>
                      </div>
                    </div>
                  </div>
                    <div class="card" style="border-radius:5px">
                      <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-hover table-bordered">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Tanggal Terima</th>
                              <th>Kode Barang</th>
                              <th>Nama Barang</th>
                              <th>Identitas Barang</th>
                              <th>Keadaan Barang</th>
                              <th>Jumlah</th>
                              <th>Asal Barang</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no = 1;
                            foreach ($data as $row) { ?>
                              <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo date_indo($row ['tgl_terima']); ?></td>
                                <td><?php echo ucwords($row ['kode_barang']); ?></td>
                                <td><?php echo ucwords($row ['nama_barang']); ?></td>
                                <td><?php echo ucwords($row ['identitas_barang']); ?></td>
                                <td>
                                  <?php if ($row['keadaan'] == 1){ ?>
                                    <span class="badge badge-primary">Baik</span>
                                  <?php } elseif ($row['keadaan'] == 2){ ?>
                                    <span class="badge badge-primary">Kurang Baik</span>
                                  <?php } else {?>
                                    <span class="badge badge-success">Rusak</span>
                                  <?php } ?>
                                </td>
                                <td><?php echo ucwords($row ['jumlah']); ?></td>
                                <td><?php echo ucwords($row ['asal']); ?></td>

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
