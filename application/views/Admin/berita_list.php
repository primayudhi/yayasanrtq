<section class="content">
   <div class="container-fluid">
      <div class="block-header">
            <h2>BERITA</h2>
      </div>
      
      <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="card">
                  <div class="header">
                        <div class="row clearfix">
                           <div class="col-xs-12 col-sm-6">
                              <h2>DAFTAR BERITA</h2>
                           </div>
                           <div class="col-xs-12 col-sm-6 align-right">
                           <a href="<?php echo site_url('Admin/tambah_berita_admin') ?>" class="btn btn-primary"> 
                              <i class="material-icons">add</i> <span>Tambah</span></a>
                           </div>
                        </div>
                  </div>
                  <div class="body">
                     <div class="table-responsive">
                  <table class="table table-bordered table-striped" id="tabelBerita">
                <thead>
                  <tr>
                    <th style="width: 10%;">Tanggal</th>
                    <th style="width: 20%;">Judul</th>
                    <th style="width: 15%;">Foto</th>
                    <th style="width: 45%;">Isi</th>
                    <th style="width: 10%"><center>Aksi</center></th>
                  </tr>
              </thead>
                    <tbody>
                  <?php foreach($data_berita as $row) { ?>
                    <tr>
                        <td><?php echo $row->tanggal; ?></td>
                        <td><?php echo $row->judul; ?></td>
                        <td align="center">
                            <?php if ($row->foto != NULL || $row->foto != "") { ?>
                            <img src="<?php echo base_url('uploads/fotoberita/'.$row->foto); ?>" style="height: 90px;border: 1px solid black;" />
                            <?php } ?> 
                        </td>
                        <td><?php echo $row->isi; ?></td>
                        <td class="text-nowrap">
                            <a href="<?php echo site_url('Admin/ubah_berita/' . $row->id_berita) ?>" class="btn btn-sm btn-warning">
                            <i class="material-icons">edit</i> <span>Edit</span></a>
                            <a href="<?php echo site_url('Admin/hapus_berita/' . $row->id_berita) ?>" class="btn btn-sm btn-danger alert_notif">
                            <i class="material-icons">clear</i> <span>Hapus</span></a>
                        </td>
                    </tr>
                <?php } ?>
                    </tbody>
                  </table>
                  </div>
               </div>
            </div>
      </div>
   </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function(){
        $('#tabelBerita').DataTable();
    })
</script>

