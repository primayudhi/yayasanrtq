<section id="contant" class="contant">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-sm-12 col-xs-12">
                  <div class="news-post-holder">
                     <?php foreach($data_berita as $berita){ ?>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                           <div class="news-post-widget">
                              <img class="img-responsive mt-3" src="<?php echo base_url('uploads/fotoberita/'.$berita->foto); ?>" alt="" style="width: 50%;">
                              <div class="news-post-detail">
                                 <span class="date"><?php echo $berita->tanggal; ?></span>
                                 <h2>
                                    <a href="<?php echo site_url('Publik/berita/'.$berita->slug); ?>#contant">
                                       <?php echo $berita->judul; ?>
                                    </a>
                                 </h2>
                                 <p>
                                    <?php echo substr($berita->isi, 0, 50) . '...'; ?>
                                 </p>
                              </div>
                           </div>
                        </div>
                     <?php } ?>
                  </div>
               </div>
            </div>
         </div>
      </section>