<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"><?=$judul.' '.ucwords($row['nomor_surat_kel'])?></strong>
                        <a class="btn btn-sm btn-danger float-right" href="<?=site_url('surat_keluar')?>"> <i class="fa fa-arrow-left"></i> Back </a>
                    </div>
                    <div class="card-body">
                      <table id="bootstrap-data-table-export" class="table table-sm table-hover">

                        <tr>
                          <th>ID Surat Keluar</th>
                          <td> : </td>
                          <td> <?=$row['id_surat_kel']?> </td>
                        </tr>

                        <tr>
                          <th>Tanggal Surat</th>
                          <td> : </td>
                          <td> <?=date_indo($row['tgl_surat_kel'])?> </td>
                        </tr>

                        <tr>
                          <th>Nomor Surat</th>
                          <td> : </td>
                          <td> <?=ucwords($row['nomor_surat_kel'])?> </td>
                        </tr>

                        <tr>
                          <th>Pengirim</th>
                          <td> : </td>
                          <td> <?=$row['pengirim']?> </td>
                        </tr>

                        <tr>
                          <th>Tujuan</th>
                          <td> : </td>
                          <td> <?=ucwords($row['tujuan'])?> </td>
                        </tr>

                        <tr>
                          <th>Perihal</th>
                          <td> : </td>
                          <td> <?=ucwords($row['perihal'])?> </td>
                        </tr>

                        <tr>
                           <th>Upload File</th>
                           <td> : </td>
                           <td> <a class="badge badge-primary" href="<?=base_url('upload/surat_keluar/'.$row['upload_file'])?>"><?='Download - '.$row['upload_file']?></a>
                          </td>
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
