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
                    <table class="table">
                        <tr>
                            <th width="15%">Guru</th>
                            <th><?php echo $id_guru; ?></th>
                        </tr>
                        <tr>
                            <th>Murid</th>
                            <th><?php echo $id_murid; ?></th>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <th><?php echo $id_kelas; ?></th>
                        </tr>
                        <tr>
                            <th>Tanggal</th>
                            <th><?php echo date('d-m-Y', strtotime($tanggal)); ?></th>
                        </tr>
                       
                    </table>
                  </div>
                  <div class="header">
                        <div class="row clearfix">
                           <div class="col-xs-12 col-sm-6">
                              <h2>AYAT PADA SURAH <span style="text-transform:uppercase;"><?= $data_surah->nama_surah; ?></span></h2>
                           </div>
                        </div>
                  </div>
                  <div class="body">
                    <div class="button-demo">
                        <?php foreach($data_ayat as $ayat){ 
                           if($ayat->hafal == "Y") { ?>
                              <a href="<?php echo site_url('Guru/hapus_hafalan_ayat/'.$id_surah.'/'.$id_setorhafalan.'/'.$ayat->id_ayat); ?>" class="btn btn-success waves-effect" id="<?= $ayat->id_ayat; ?>"><?= $ayat->no_ayat; ?></a>
                           <?php } else { ?>
                              <a href="<?php echo site_url('Guru/tambah_hafalan_ayat/'.$id_surah.'/'.$id_setorhafalan.'/'.$ayat->id_ayat); ?>" class="btn btn-default waves-effect" id="<?= $ayat->id_ayat; ?>"><?= $ayat->no_ayat; ?></a>
                           <?php }
                        } ?>
                    </div>
                  </div>
                  <div class="header">
                        <div class="row clearfix">
                           <div class="col-xs-12 col-sm-6">
                              
                           </div>
                           <div class="col-xs-12 col-sm-6 align-right">
                           <a href="<?php echo site_url('Guru/hafalan_surah/'.$id_setorhafalan) ?>" class="btn btn-danger"> 
                              <i class="material-icons">arrow_left</i> <span>Pilih Surah</span></a>
                           <a href="<?php echo site_url('Guru/hafalan_list') ?>" class="btn btn-primary"> 
                              <i class="material-icons">check</i> <span>Selesai</span></a>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
      </div>
   </div>
</section>