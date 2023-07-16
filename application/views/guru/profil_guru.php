<section class="content">
   <div class="container-fluid">
      <div class="block-header">
            <h2>PROFIL GURU</h2>
      </div>
      
      <div class="row clearfix">
            <div class="col-xs-15 col-sm-15 col-md-15 col-lg-15">
               <div class="card">
                  <div class="header">
                        <div class="row clearfix">
                           <div class="col-xs-12 col-sm-6">
                            <?php foreach($data_guru as $guru) { ?>
                              <h2>PROFIL </h2><h4 class="mb-0" style="font-family: sans-serif; color: skyblue; "><?php echo $guru->nama_guru; ?></h4>
                           </div>
                        </div>
                  </div>

                  <div class="body">
                    <div class="row mb-3 align-items-center">
                         
                        <div class="col-auto">
                            <center>
                             <?php if ($guru->foto != NULL || $guru->foto != "") { ?>
                            <img src="<?php echo base_url('uploads/fotoguru/'.$guru->foto); ?>" style="height: 200px;border: 5px solid whitesmokess; border-radius: 50px;" />
                             <?php } ?>
                         </center>
                        </div>
                        <br>
                        <hr>
                        <div class="col">
                            <center>
                            <label>NAMA LENGKAP : <h4 class="mb-0" style="font-family: sans-serif; "><?php echo $guru->nama_guru; ?></h4></label>
                            </center>

                        </div>
                        <hr>
                    
                    <div class="col">
                            <center>
                            <label>NIK : <h4 class="mb-0" style="font-family: sans-serif; "><?php echo $guru->nik_guru; ?></h4></label>
                            </center>

                        </div>
                        <hr>
                        <div class="col">
                            <center>
                            <label>TEMPAT LAHIR : <h4 class="mb-0" style="font-family: sans-serif; "><?php echo $guru->tempat_lahir; ?></h4></label>
                            </center>

                        </div>
                        <hr>
                        <div class="col">
                            <center>
                            <label>TANGGAL LAHIR: <h4 class="mb-0" style="font-family: sans-serif; "><?php echo $guru->tanggal_lahir; ?></h4></label>
                            </center>

                        </div>
                        <hr>
                        <div class="col">
                            <center>
                            <label>ALAMAT : <h4 class="mb-0" style="font-family: sans-serif; "><?php echo $guru->alamat; ?></h4></label>
                            </center>

                        </div>

                        <hr>
                        <div class="col">
                           <center>
                            <label>JENIS KELAMIN : <h4 class="mb-0" style="font-family: sans-serif; "><?php echo $guru->jk; ?></h4></label>
                            </center>>

                        </div>
                         <hr>
                        <div class="col">
                            <center>
                            <label>JABATAN: <h4 class="mb-0" style="font-family: sans-serif; "><?php echo $guru->jabatan; ?></h4></label>
                            </center>

                        </div>
                        <hr>
                        <div class="col">
                           <center>
                            <label>NO TELEPON : <h4 class="mb-0" style="font-family: sans-serif; "><?php echo $guru->no_telepon; ?></h4></label>
                            </center>

                        </div>
                        <hr>
                        <div class="col">
                            <center>
                            <label>EMAIL : <h4 class="mb-0" style="font-family: sans-serif; "><?php echo $guru->email; ?></h4></label>
                            </center>

                        </div>
                        <hr>
                        <div class="col">
                            <center>
                            <label>PENDIDIKAN TERAKHIR : <h4 class="mb-0" style="font-family: sans-serif; "><?php echo $guru->pendidikan_terakhir; ?></h4></label>
                            </center>

                        </div>
                        <hr>
                        <div class="col">
                            <center>
                            <label>MASA KERJA : <h4 class="mb-0" style="font-family: sans-serif; "><?php echo $guru->masa_kerja; ?></h4></label>
                            </center>

                        </div>
                     
                    
                    <?php } ?>
</div>
</div>
               </div>
            </div>
      </div>

   </div>
</section>





