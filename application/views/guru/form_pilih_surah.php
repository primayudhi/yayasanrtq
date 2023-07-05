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
                            <th>Tanggal</th>
                            <th><?php echo date('d-m-Y', strtotime($tanggal)); ?></th>
                        </tr>
                        <tr>
                            <th>Kualitas Hafalan</th>
                            <th><?php echo $kualitas_hafalan; ?></th>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <th><?php echo $keterangan; ?></th>
                        </tr>
                    </table>
                  </div>
                  <div class="header">
                        <div class="row clearfix">
                           <div class="col-xs-12 col-sm-6">
                              <h2>PILIH SURAH HAFALAN</h2>
                           </div>
                        </div>
                  </div>
                  <div class="body">
                    <div class="list-group">
                        <?php foreach($data_surah as $surah){ 
                            $persen = $this->Guru_model->surah_by_murid($id_murid, $surah->id_surah)->persen;
                            ?>
                            <!-- id murid, id surah, id setor -->
                            
                            <a href="<?php echo site_url('Guru/hafalan_ayat/'.$id_murid.'/'.$surah->id_surah.'/'.$id_setorhafalan); ?>" class="list-group-item">
                                <span class="badge bg-teal"><?php echo $surah->jumlah_ayat; ?> Ayat</span> <?php echo $surah->nama_surah; ?>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: <?= $persen; ?>%;">
                                        <?= $persen; ?>%
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
               </div>
            </div>
      </div>
   </div>
</section>