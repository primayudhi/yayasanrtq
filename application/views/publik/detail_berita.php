<div class="container-fluid py-5" id="terkini">
        <div class="container">
            
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h1 class="display-4 text-uppercase">BERITA</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-12">
                    <div class="d-flex h-100">
                        <div class="flex-shrink-0">
                        </div>
                        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                              <img class="img-responsive mt-3" src="<?php echo base_url('/uploads/fotoberita/'.$berita->foto); ?>" alt="" style="width: 100%">
                              <br>
                                 <h5 class="text-uppercase"><?php echo $berita->judul; ?></h5>
                            <h6 class="mb-3"><?php echo date('d-m-Y', strtotime($berita->tanggal)); ?></h6>
                            <span><?php echo $berita->isi; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>