<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"><?=$judul;?></strong>
                        <a class="btn btn-sm btn-danger float-right" href="<?=site_url('surat_keluar')?>"> <i class="fa fa-arrow-left"></i> Back </a>
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
                      <form action="<?=base_url('surat_keluar/update/'.$row['id_surat_kel']);?>" method="post" enctype="multipart/form-data">


                        <div class="form-group">
                          <label for="tgl_surat_kel"> Tanggal Surat </label><br>
                          <input class="form-control" id="tgl_surat_kel" type="date" name="tgl_surat_kel" value="<?=$row['tgl_surat_kel']?>" required oninvalid="this.setCustomValidity('Tanggal Surat Keluar Wajib Diisi')"
                          oninput="this.setCustomValidity('')">
                        </div>


                        <div class="form-group">
                          <label for="nomor_surat_kel"> Nomor Surat </label><br>
                          <input class="form-control" id="nomor_surat_kel" type="text" name="nomor_surat_kel" value="<?=$row['nomor_surat_kel']?>" required oninvalid="this.setCustomValidity('Nomor Surat Wajib Diisi')"
                          oninput="this.setCustomValidity('')">
                        </div>


                        <div class="form-group">
                          <label for="tujuan"> Tujuan </label><br>
                          <input class="form-control" id="tujuan" type="text" name="tujuan" value="<?=$row['tujuan']?>" required oninvalid="this.setCustomValidity('Tujuan Wajib Diisi')"
                          oninput="this.setCustomValidity('')">
                        </div>

                        <div class="form-group">
                          <label for="pengirim"> Pengirim </label><br>
                          <input class="form-control" id="pengirim" type="text" name="pengirim" value="<?=$row['pengirim']?>" required oninvalid="this.setCustomValidity('Penerima Wajib Diisi')"
                          oninput="this.setCustomValidity('')">
                        </div>

                        <div class="form-group">
                          <label for="perihal"> Perihal </label><br>
                          <input class="form-control" id="perihal" type="text" name="perihal" value="<?=$row['perihal']?>" required oninvalid="this.setCustomValidity('Perihal Lampiran Wajib Diisi')"
                          oninput="this.setCustomValidity('')">
                        </div>

                        <div class="form-group">
                          <label for="upload_file"> Upload File </label><br>
                          <input class="form-control" id="upload_file" type="file" name="upload_file" />
                          <input type="hidden" name="old_file" value="<?=$row['upload_file']?>">
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
