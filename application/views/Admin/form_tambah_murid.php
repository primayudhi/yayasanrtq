<section class="content">
   <div class="container-fluid">
      <div class="block-header">
            <h2>MURID</h2>
      </div>
      
      <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="card">
                  <div class="header">
                        <div class="row clearfix">
                           <div class="col-xs-12 col-sm-6">
                              <h2>FORM MURID</h2>
                           </div>
                        </div>
                  </div>
                  <div class="body">
                    <?php echo form_open($action, 'class="form-horizontal" enctype="multipart/form-data"') ?>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="nama_murid">Nama Murid</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="hidden" name="id_murid" value="<?= $id_murid; ?>" />
                                        <input type="text" name="nama_murid" class="form-control" placeholder="Masukkan Nama Murid" value="<?= $nama_murid; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="id_kelas">Kelas</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <input type="hidden" name="id_kelas" value="<?= $id_kelas; ?>" />
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
                                <label for="tempat_lahir">Tempat Lahir</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" value="<?= $tempat_lahir; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="date" name="tanggal_lahir" class="form-control" value="<?= $tanggal_lahir; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="">Jenis Kelamin</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="jk" type="radio" class="with-gap" value="Laki-laki" id="radio_jk_l" 
                                            <?php if($jk == 'Laki-laki') { echo "checked"; } ?>/>
                                        <label for="radio_jk_l">Laki - laki</label>
                                        <input name="jk" type="radio" class="with-gap" value="Perempuan" id="radio_jk_p" 
                                            <?php if($jk == 'Perempuan') { echo "checked"; } ?>/>
                                        <label for="radio_jk_p">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="alamat">Alamat</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat" rows="3"><?= $alamat; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="no_telepon">No. Telepon</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="no_telepon" class="form-control" value="<?= $no_telepon; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="nama_ibu">Nama Ibu</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="nama_ibu" class="form-control" value="<?= $nama_ibu; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="nama_ayah">Nama Ayah</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="nama_ayah" class="form-control" value="<?= $nama_ayah; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="nik">NIK</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="nik" class="form-control" value="<?= $nik; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="no_kk">NO KK</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="no_kk" class="form-control" value="<?= $no_kk; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="foto">Foto</label>

                            </div>

                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">

                                       <?php if($action == 'ubah_murid'){
                                            if($row->foto != NULL) { ?>
                                                <div style="margin-bottom: 5px;">
                                                    <img src="<?=base_url('./uploads/fotomurid/'.$row->foto)?>" style="width: 80%;">
                                                </div>
                                           <?php
                                            }
                                        } ?>
                                        
                                    <div class="form-line">

                                        <input type="file" name="foto" class="form-control" value="<?= $foto; ?>">
                                    </div>
                                    <p style="color: red;">Size Foto Max 2mb
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="username">Username</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="username" class="form-control" value="<?= $username; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="password">Password</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" name="password" class="form-control" value="<?= $password; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="hak_akses">Hak Akses</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="hak_akses" class="form-control" value="<?= $hak_akses; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="akif">Aktif</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="aktif" type="radio" class="with-gap" value="Y" id="radio_aktif_y" 
                                            <?php if($aktif == 'Y') { echo "checked"; } ?>/>
                                        <label for="radio_aktif_y">YA</label>
                                        <input name="aktif" type="radio" class="with-gap" value="T" id="radio_aktif_t" 
                                            <?php if($aktif == 'T') { echo "checked"; } ?>/>
                                        <label for="radio_aktif_t">TIDAK</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                <a href="<?php echo site_url('Admin/murid_list') ?>" class="btn btn-danger">Kembali</a>
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