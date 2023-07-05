<div class="container-fluid py-5" id="terkini">
        <div class="container">
            
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">DAFTAR</h2>
                <h1 class="display-4 text-uppercase">BERITA</h1>
            </div>
            <div class="row g-3">
            <?php foreach($data_berita as $row) { ?>
                <div class="col-lg-4">
                    <div class="d-flex h-100">
                        <div class="flex-shrink-0">
                        </div>
                        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                              <img class="img-responsive mt-3" src="<?php echo base_url('/uploads/fotoberita/'.$row->foto); ?>" alt="" style="width: 100%">
                              <br>
                              <a href="<?php echo site_url('Publik/berita/'.$row->slug); ?>">
                                 <h5 class="text-uppercase"><?php echo substr($row->judul, 0, 50) . '...'; ?></h5>
                              </a>
                            <h6 class="mb-3"><?php echo date('d-m-Y', strtotime($row->tanggal)); ?></h6>
                            <span><?php echo substr($row->isi, 0, 100) . '...'; ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>