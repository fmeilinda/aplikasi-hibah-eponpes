<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"><?=$judul;?></strong>
                        <a class="btn btn-sm btn-primary float-right" href="<?= base_url('user/tambah')?>"> <i class="fa fa-plus-square-o"></i> Tambah </a>
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
                                  <th>Nama User</th>
                                  <th>Email</th>
                                  <th>Role</th>
                                  <th>Foto</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $no = 1;
                              foreach ($data as $row) { ?>
                             <tr>
                               <td><?php echo $no; ?></td>
                               <td><?php echo $row ['nama']; ?></td>
                               <td><?php echo $row ['email']; ?></td>
                               <td><?php if ($row ['role'] == 0) {?>
                                  <span class="badge badge-primary">Admin</span>
                                <?php } else if ($row['role'] == 1) { ?>
                                  <span class="badge badge-success">Pengurus</span>
                                <?php } else { ?>
                                  <span class="badge badge-danger">Bendahara</span>
                                <?php } ?>
                               </td>
                               <td><?php if ($row['img_user'] != null){ ?>
                               <img src="<?=base_url('upload/img/' .$row['img_user'])?>" alt="" width="80px"> </td>
                                  <?php } ?>
                               <td>
                                 <a class="btn btn-sm btn-success" href="<?=base_url('user/edit/'.$row['id_user'])?>"> <i class="fa fa-edit"></i> Edit </a>
                                 <a class="btn btn-sm btn-danger"href="<?=base_url('user/delete/'.$row['id_user'])?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini?')"> <i class="fa fa-trash-o"></i> Delete </a> </td>
                             </tr>
                             <?php $no++; }  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
