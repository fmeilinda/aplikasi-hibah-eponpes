<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"><?=$judul;?></strong>
                        <a class="btn btn-sm btn-primary float-right" href="<?= base_url('surat_masuk/tambah')?>"> <i class="fa fa-plus-square-o"></i> Tambah </a>
                    </div>
                    <div class="card-body">
                      <?php if ($this->session->has_userdata('success')): ?>
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            <span class="badge badge-pill badge-success">Success</span>
                            <?=$this->session->flashdata('success');?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                        </div>
                      <?php endif; ?>
                        <table id="bootstrap-data-table-export" class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Tanggal Terima</th>
                                  <th>Nomor Surat</th>
                                  <th>Tanggal Surat</th>
                                  <th>Pengirim</th>
                                  <th>Penerima</th>
                                  <th>Perihal</th>
                                  <th>Upload File</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $no = 1;
                              foreach ($data as $row) { ?>
                             <tr>
                               <td><?php echo $no ?></td>
                               <td><?php echo date_indo($row ['tgl_terima']); ?></td>
                               <td><?php echo ucwords($row ['nomor_surat']); ?></td>
                               <td><?php echo date_indo($row ['tgl_surat']); ?></td>
                               <td><?php echo ucwords($row ['pengirim']); ?></td>
                               <td><?php echo ucwords($row ['penerima']); ?></td>
                               <td><?php echo ucwords($row ['perihal']); ?></td>
                               <td><?php if ($row['upload_file'] != null){ ?>
                                 <i class="fa fa-eye"> Ada </i>
                               <?php } else {?>
                                 <i class="fa fa-eye-slash"> Tidak Ada</i>
                               <?php } ?>
                               </td>
                              <td>
                                 <a class="badge badge-primary" href="<?=base_url('surat_masuk/detail/'.$row['id_surat'])?>"> <i class="fa fa-eye"></i> Detail </a>
                                 <a class="badge badge-success" href="<?=base_url('surat_masuk/edit/'.$row['id_surat'])?>"> <i class="fa fa-edit"></i> Edit </a>
                                 <a class="badge badge-danger"href="<?=base_url('surat_masuk/delete/'.$row['id_surat'])?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini?')"> <i class="fa fa-trash-o"></i> Delete </a> </td>
                               </td>
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
