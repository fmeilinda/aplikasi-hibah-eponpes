<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"><?=$judul.' '.ucwords($row['id_saldo'])?></strong>
                        <a class="btn btn-sm btn-danger float-right" href="<?=site_url('keuangan')?>"> <i class="fa fa-arrow-left"></i> Back </a>
                    </div>
                    <div class="card-body">
                      <table id="bootstrap-data-table-export" class="table table-sm table-hover">

                        <tr>
                          <th>ID Saldo</th>
                          <td> : </td>
                          <td> <?=$row['id_saldo']?> </td>
                        </tr>

                        <tr>
                          <th>Tanggal</th>
                          <td> : </td>
                          <td> <?=date_indo($row['tgl_keuangan'])?> </td>
                        </tr>

                        <tr>
                          <th>Keterangan</th>
                          <td> : </td>
                          <td> <?=ucwords($row['keterangan'])?> </td>
                        </tr>

                        <tr>
                          <th>Jumlah Uang</th>
                          <td> : </td>
                          <!-- <td> <?=$row['jumlah_uang']?> </td> -->
                          <td><?php echo number_format($row['jumlah_uang'],0,',','.');?></td>
                        </tr>

                        <tr>
                          <th>Type</th>
                          <td> : </td>
                          <td> <?=$row['type']?> </td>
                        </tr>

                        <tr>
                          <th>Diinput oleh</th>
                          <td> : </td>
                          <td> <?=ucwords($row['nama'])?> </td>
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
