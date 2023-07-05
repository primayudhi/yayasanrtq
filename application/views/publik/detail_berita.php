<section id="contant" class="contant">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-sm-12 col-xs-12">
                  <div class="news-post-holder">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                           <div class="news-post-widget">
                              <img class="img-responsive" src="<?php echo base_url('uploads/fotoberita/'.$berita->foto); ?>" alt="">
                              <div class="news-post-detail">
                                 <span class="date"><?php echo $berita->tanggal; ?></span>
                                 <h2>
                                    <a href="<?php echo site_url('Publik/berita/'.$berita->slug); ?>">
                                       <?php echo $berita->judul; ?>
                                    </a>
                                 </h2>
                                 <p>
                                    <?php echo $berita->isi; ?>
                                 </p>
                              </div>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
         </div>
      </section>