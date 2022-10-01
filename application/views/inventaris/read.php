<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"><?=$judul;?></strong>
                        <a class="btn btn-sm btn-primary float-right" href="<?= base_url('inventaris/tambah')?>"> <i class="fa fa-plus-square-o"></i> Tambah </a>
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
                                  <th>Nama Barang</th>
                                  <th>Identitas Barang</th>
                                  <th>Keadaan Barang</th>
                                  <th>Jumlah</th>
                                  <th>Asal Barang</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $no = 1;
                              foreach ($data as $row) { ?>
                             <tr>
                               <td><?php echo $no ?></td>
                               <td><?php echo date_indo($row ['tgl_terima']); ?></td>
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
                               <td>
                                 <a class="mb-1 btn btn-sm btn-primary" href="<?=base_url('inventaris/detail/'.$row['id_barang'])?>"> <i class="fa fa-eye"></i> Detail </a>
                                 <a class="mb-1 btn btn-sm btn-success" href="<?=base_url('inventaris/edit/'.$row['id_barang'])?>"> <i class="fa fa-edit"></i> Edit </a>
                                 <a class="mb-1 btn btn-sm btn-danger"href="<?=base_url('inventaris/delete/'.$row['id_barang'])?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini?')"> <i class="fa fa-trash-o"></i> Delete </a> </td>
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
