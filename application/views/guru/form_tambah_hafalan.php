<section class="content">
   <div class="container-fluid">
      <div class="block-header">
            <h2>HAFALAN</h2>
      </div>
      
      <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="card">
                  <div class="header">
                        <div class="row clearfix">
                           <div class="col-xs-12 col-sm-6">
                              <h2>FORM PERKEMBANGAN HAFALAN</h2>
                           </div>
                        </div>
                  </div>
                  <div class="body">
                    <?php echo form_open($action, 'class="form-horizontal"') ?>

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="id_guru">Guru</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <input type="hidden" name="id_setorhafalan" value="<?= $id_setorhafalan; ?>" />
                                <select class="form-control show-tick" name="id_guru">
                                    <?php
                                        foreach($data_guru as $guru){ ?>
                                            <option value='<?php echo $guru->id_guru ?>'>
                                                <?php echo $guru->nama_guru ?>
                                            </option>
                                        <?php } ?>
                                </select>
                            </div>
                            
                        </div>
                    </div>
             
                         <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="id_murid">Murid</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <select class="form-control show-tick" name="id_murid">
                                    <?php
                                        foreach($data_murid as $murid){ ?>
                                            <option value='<?php echo $murid->id_murid ?>'>
                                                <?php echo $murid->nama_murid ?>
                                            </option>
                                        <?php } ?>
                                </select>
                            </div>
                            
                        </div>
                    </div>
                        <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="id_kelas">Kelas</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <select class="form-control show-tick" name="id_kelas">
                                    <?php
                                        foreach($data_kelas as $kelas){ ?>
                                            <option value='<?php echo $kelas->id_kelas ?>'>
                                                <?php echo $kelas->nama_kelas ?>
                                            </option>
                                        <?php } ?>
                                </select>
                            </div>
                            
                        </div>
                    </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="tanggal">Tanggal</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="date" name="tanggal" class="form-control" value="<?= $tanggal; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="">Kualitas Hafalan</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="kualitas_hafalan" type="radio" class="with-gap" value="KURANG LANCAR" id="radio_hafalan_kuranglancar"
                                        <?php if($kualitas_hafalan == 'KURANG LANCAR') { echo "checked"; } ?>/>
                                        <label for="radio_hafalan_kuranglancar">KURANG LANCAR</label>
                                        <input name="kualitas_hafalan" type="radio" class="with-gap" value="CUKUP LANCAR" id="radio_hafalan_cukuplancar" 
                                        <?php if($kualitas_hafalan == 'CUKUP LANCAR') { echo "checked"; } ?>/>
                                        <label for="radio_hafalan_cukuplancar">CUKUP LANCAR</label>
                                        <input name="kualitas_hafalan" type="radio" class="with-gap" value="LANCAR" id="radio_hafalan_lancar" 
                                        <?php if($kualitas_hafalan == 'LANCAR') { echo "checked"; } ?>/>
                                        <label for="radio_hafalan_lancar">LANCAR</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="keterangan">Keterangan</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="keterangan" class="form-control" value="<?= $keterangan; ?>">
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row clearfix">
                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                <a href="<?php echo site_url('Guru/hafalan_list') ?>" class="btn btn-danger">Kembali</a>
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