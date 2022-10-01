<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"><?=$judul;?></strong>
                        <a class="btn btn-sm btn-danger float-right" href="<?=site_url('inventaris')?>"> <i class="fa fa-arrow-left"></i> Back </a>
                    </div>
                    <div class="card-body">
                      <?php if ($this->session->has_userdata('error')): ?>
                        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                            <span class="badge badge-pill badge-danger">Perhatian!</span>
                            <?=$this->session->flashdata('error');?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                        </div>
                      <?php endif; ?>
                      <form action="<?=base_url('inventaris/update/'.$row['id_barang']);?>" method="post" enctype="multipart/form-data">


                        <div class="form-group">
                          <label for="tgl_terima"> Tanggal Terima</label><br>
                          <input class="form-control" id="tgl_terima" type="date" name="tgl_terima" value="<?=$row['tgl_terima']?>" required oninvalid="this.setCustomValidity('Tanggal Teriman Wajib Diisi')"
                          oninput="this.setCustomValidity('')">
                        </div>

                        <div class="form-group">
                          <label for="nama_tamu"> Nama Barang </label><br>
                          <input class="form-control" id="nama_barang" type="text" name="nama_barang" value="<?=$row['nama_barang']?>" required oninvalid="this.setCustomValidity('Nama Barang Wajib Diisi')"
                          oninput="this.setCustomValidity('')">
                        </div>

                        <div class="form-group">
                          <label for="identitas_barang"> Identitas Barang </label><br>
                          <input class="form-control" id="identitas_barang" type="text" name="identitas_barang" value="<?=$row['identitas_barang']?>" required oninvalid="this.setCustomValidity('Identitas Barang Wajib Diisi')"
                          oninput="this.setCustomValidity('')">
                        </div>

                        <div class="form-group">
                          <label for="keadaan"> Keadaan Barang</label><br>
                          <select class="form-control" name="keadaan" required
                          oninvalid="this.setCustomValidity('Pilih Keadaan disini')" oninput="setCustomValidity('')">
                            <option value="">:: Pilih Keadaan Barang ::</option>
                            <option value="1" <?=$row['keadaan'] == '1' ? 'selected' : null?>>Baik</option>
                            <option value="2" <?=$row['keadaan'] == '2' ? 'selected' : null?>>Kurang Baik</option>
                            <option value="3" <?=$row['keadaan'] == '3' ? 'selected' : null?>>Rusak</option>
                          </select>
                        </div>


                        <div class="form-group">
                          <label for="jumlah"> Jumlah </label><br>
                          <input class="form-control" id="jumlah" type="text" name="jumlah" value="<?=$row['jumlah']?>" required oninvalid="this.setCustomValidity('jumlah Wajib Diisi')"
                          oninput="this.setCustomValidity('')">
                        </div>

                        <div class="form-group">
                          <label for="asal"> Asal Barang </label><br>
                          <input class="form-control" id="asal" type="text" name="asal" value="<?=$row['asal']?>" required oninvalid="this.setCustomValidity('Asal Barang Wajib Diisi')"
                          oninput="this.setCustomValidity('')">
                        </div>

                        <button class="btn btn-sm btn-primary" type="submit"> <i class="fa fa-save"></i> Save </button>
                        <button class="btn btn-sm btn-secondary" type="reset"> <i class="fa fa-rotate-right"></i> Reset </button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
