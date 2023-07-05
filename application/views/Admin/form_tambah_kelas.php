<section class="content">
   <div class="container-fluid">
      <div class="block-header">
            <h2>KELAS</h2>
      </div>
      
      <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="card">
                  <div class="header">
                        <div class="row clearfix">
                           <div class="col-xs-12 col-sm-6">
                              <h2>FORM KELAS</h2>
                           </div>
                        </div>
                  </div>
                  <div class="body">
                    <?php echo form_open($action, 'class="form-horizontal"') ?>

                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="nama_kelas">Kelas</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                         <input type="hidden" name="id_kelas" value="<?= $id_kelas; ?>" />
                                        <input type="text" name="nama_kelas" class="form-control" value="<?= $nama_kelas; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                       
                        <div class="row clearfix">
                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                <a href="<?php echo site_url('Admin/kelas_list') ?>" class="btn btn-danger">Kembali</a>
                                <input type="submit" values="simpan" class="btn btn-primary" onclick="simpan()">
                            </div>
                        </div>

                        <?php echo form_close() ?>
                  </div>
               </div>
            </div>
      </div>
   </div>
</section>