<section class="content">
   <div class="container-fluid">
      <div class="block-header">
            <h2>GURU</h2>
      </div>
      
      <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="card">
                  <div class="header">
                        <div class="row clearfix">
                           <div class="col-xs-12 col-sm-6">
                              <h2>FORM GURU</h2>
                           </div>
                        </div>
                  </div>
                  <div class="body">
                    <?php echo form_open($action, 'class="form-horizontal" enctype="multipart/form-data"') ?>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="nama_guru">Nama Guru</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="hidden" name="id_guru" value="<?= $id_guru; ?>" />
                                        <input type="text" name="nama_guru" class="form-control" placeholder="Masukkan Nama Guru" value="<?= $nama_guru; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="nik_guru">NIK</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="nik_guru" class="form-control" placeholder="Masukkan Nik Guru" value="<?= $nik_guru; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="nip_guru">NIP</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="nip_guru" class="form-control" placeholder="Masukkan Nip Guru" value="<?= $nip_guru; ?>">
                                    </div>
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
                                <label for="alamat">Alamat</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat" rows="3"> <?= $alamat; ?></textarea>
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
                        <?php if($foto == NULL || $foto == "") { ?>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="foto">Foto Guru</label>

                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" name="foto" class="form-control" value="<?= $foto; ?>">
                                    </div>
                                    <p style="color: red;">Size Foto Max 2mb</p>
                                </div>
                            </div>
                        </div>
                        <?php } else { ?>
                            <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="foto_pemain">Foto Guru</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                    <img src="<?php echo base_url('uploads/fotoguru/'.$foto); ?>" style="height: 90px;border: 1px solid black;" />
                                    </div>
                                    <br/>
                                    <a class="resetfoto" href="<?php echo site_url('Admin/resetfotoguru/'.$id_guru.''); ?>" ><i class="material-icons">clear</i> Reset Foto</a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="jabatan">Jabatan</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="jabatan" class="form-control" value="<?= $jabatan; ?>">
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
                                <label for="email">Email</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="email" class="form-control" value="<?= $email; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="">Pendidikan Terakhir</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="pendidikan_terakhir" type="radio" class="with-gap" value="SMA/SMK" id="radio_pendidikan_sma/smk"
                                        <?php if($pendidikan_terakhir == 'SMA/SMK') { echo "checked"; } ?>/>
                                        <label for="radio_pendidikan_sma/smk">SMA/SMK</label>
                                        <input name="pendidikan_terakhir" type="radio" class="with-gap" value="D3" id="radio_pendidikan_d3" 
                                        <?php if($pendidikan_terakhir == 'D3') { echo "checked"; } ?>/>
                                        <label for="radio_pendidikan_d3">D3</label>
                                        <input name="pendidikan_terakhir" type="radio" class="with-gap" value="S1" id="radio_pendidikan_s1" 
                                        <?php if($pendidikan_terakhir == 'S1') { echo "checked"; } ?>/>
                                        <label for="radio_pendidikan_s1">S1</label>
                                        <input name="pendidikan_terakhir" type="radio" class="with-gap" value="S2" id="radio_pendidikan_s2" 
                                        <?php if($pendidikan_terakhir == 'S2') { echo "checked"; } ?>/>
                                        <label for="radio_pendidikan_s2">S2</label>
                                        <input name="pendidikan_terakhir" type="radio" class="with-gap" value="Lainnya" id="radio_pendidikan_lainnya" 
                                        <?php if($pendidikan_terakhir == 'Lainnya') { echo "checked"; } ?>/>
                                        <label for="radio_pendidikan_lainnya">Lainnya</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="masa_kerja">Masa Kerja</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="masa_kerja" class="form-control" value="<?= $masa_kerja; ?>">
                                    </div>
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
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="akif">Aktif</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="aktif" type="radio" class="with-gap" value="Y" id="radio_aktif_y" <?php if($aktif == 'Y') { echo "checked"; } ?>/>
                                        <label for="radio_aktif_y">YA</label>
                                        <input name="aktif" type="radio" class="with-gap" value="T" id="radio_aktif_t" <?php if($aktif == 'T') { echo "checked"; } ?>/>
                                        <label for="radio_aktif_t">TIDAK</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">

                                <a href="<?php echo site_url('Admin/guru_list') ?>" class="btn btn-danger">Kembali</a>
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

