<section class="content">
   <div class="container-fluid">
      <div class="block-header">
            <h2>PROFIL MURID</h2>
      </div>
      
      <div class="row clearfix">
            <div class="col-xs-15 col-sm-15 col-md-15 col-lg-15">
               <div class="card">
                  <div class="header">
                        <div class="row clearfix">
                           <div class="col-xs-12 col-sm-6">
                            <?php foreach($data_murid as $murid) { ?>
                              <h2>PROFIL </h2><h4 class="mb-0" style="font-family: sans-serif; color: skyblue; "><?php echo $murid->nama_murid; ?></h4>
                           </div>
                        </div>
                  </div>

                  <div class="body">
                    <div class="row mb-3 align-items-center">
                         
                        <div class="col-auto">
                            <center>
                             <?php if ($murid->foto != NULL || $murid->foto != "") { ?>
                            <img src="<?php echo base_url('uploads/fotomurid/'.$murid->foto); ?>" style="height: 200px;border: 5px solid whitesmokess; border-radius: 50px;" />
                             <?php } ?>
                         </center>
                        </div>
                        <br>
                        <hr>
                        <div class="col">
                            <center>
                            <label>NAMA LENGKAP : <h4 class="mb-0" style="font-family: sans-serif; "><?php echo $murid->nama_murid; ?></h4></label>
                            </center>

                        </div>
                        <hr>
                    
                    <div class="col">
                            <center>
                            <label>KELAS : <h4 class="mb-0" style="font-family: sans-serif; "><?php echo $murid->nama_kelas; ?></h4></label>
                            </center>

                        </div>
                        <hr>
                        <div class="col">
                            <center>
                            <label>TEMPAT LAHIR : <h4 class="mb-0" style="font-family: sans-serif; "><?php echo $murid->tempat_lahir; ?></h4></label>
                            </center>

                        </div>
                        <hr>
                        <div class="col">
                            <center>
                            <label>TANGGAL LAHIR: <h4 class="mb-0" style="font-family: sans-serif; "><?php echo $murid->tanggal_lahir; ?></h4></label>
                            </center>

                        </div>
                        <hr>
                        <div class="col">
                           <center>
                            <label>JENIS KELAMIN : <h4 class="mb-0" style="font-family: sans-serif; "><?php echo $murid->jk; ?></h4></label>
                            </center>>

                        </div>
                        <hr>
                        <div class="col">
                            <center>
                            <label>ALAMAT : <h4 class="mb-0" style="font-family: sans-serif; "><?php echo $murid->alamat; ?></h4></label>
                            </center>

                        </div>
                        <hr>
                        <div class="col">
                            <center>
                            <label>NO TELEPON : <h4 class="mb-0" style="font-family: sans-serif; "><?php echo $murid->no_telepon; ?></h4></label>
                            </center>

                        </div>
                        <hr>
                        <div class="col">
                           <center>
                            <label>NAMA IBU : <h4 class="mb-0" style="font-family: sans-serif; "><?php echo $murid->nama_ibu; ?></h4></label>
                            </center>

                        </div>
                        <hr>
                        <div class="col">
                            <center>
                            <label>NAMA AYAH : <h4 class="mb-0" style="font-family: sans-serif; "><?php echo $murid->nama_ayah; ?></h4></label>
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





