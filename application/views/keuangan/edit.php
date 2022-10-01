<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"><?=$judul;?></strong>
                        <a class="btn btn-sm btn-danger float-right" href="<?=site_url('keuangan')?>"> <i class="fa fa-arrow-left"></i> Back </a>
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
                      <form action="<?=base_url('keuangan/update/'.$row['id_saldo']);?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                          <label for="tgl_keuangan"> Tanggal </label><br>
                          <input class="form-control" id="tgl_keuangan" type="date" name="tgl_keuangan" value="<?=$row['tgl_keuangan']?>" required oninvalid="this.setCustomValidity('Tanggal Wajib Diisi')"
                          oninput="this.setCustomValidity('')">
                        </div>


                        <div class="form-group">
                          <label for="keterangan"> Keterangan </label><br>
                          <input class="form-control" id="keterangan" type="text" name="keterangan" value="<?=$row['keterangan']?>" required oninvalid="this.setCustomValidity('Keterangan Wajib Diisi')"
                          oninput="this.setCustomValidity('')">
                        </div>

                        <div class="form-group">
                          <label for="jumlah_uang"> Jumlah Uang </label><br>
                          <input class="form-control" id="jumlah_uang" type="text" name="jumlah_uang" value="<?=$row['jumlah_uang']?>" required oninvalid="this.setCustomValidity('Alamat Wajib Diisi')"
                          oninput="this.setCustomValidity('')">
                        </div>

                        <div class="form-group">
                          <label for="type"> Type </label><br>
                          <select class="form-control" name="type" required
                          oninvalid="this.setCustomValidity('Pilih Type disini')" oninput="setCustomValidity('')">
                            <option value="">:: Pilih Jenis Type ::</option>
                            <option value="1" <?=$row['type'] == '1' ? 'selected' : null?>>Pemasukan</option>
                            <option value="2" <?=$row['type'] == '2' ? 'selected' : null?>>Pengeluaran</option>
                          </select>
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
