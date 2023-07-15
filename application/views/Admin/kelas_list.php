<section class="content">
   <div class="container-fluid">
      <div class="block-header">
            <h2>KELAS</h2>
      </div>
      
      <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="card">
                  <div class="header">
                        <div class="row clearfix">
                           <div class="col-xs-12 col-sm-6">
                              <h2>DAFTAR KELAS</h2>
                           </div>
                           <div class="col-xs-12 col-sm-6 align-right">
                           <a href="<?php echo site_url('Admin/tambah_kelas_admin') ?>" class="btn btn-primary"> 
                              <i class="material-icons">add</i> <span>Tambah</span></a>
                           </div>
                        </div>
                  </div>
                  <div class="body">
                     <div class="table-responsive">
                  <table class="table table-bordered table-striped" id="tabelBerita">
                <thead>
                  <tr>
                    <th><center>No</center></th>
                    <th style="width: 550px;"><center>Nama Kelas</center></th>
                    <th><center>Aksi</center></th>
                  </tr>
              </thead>
                    <tbody>
                  <?php $no=1; foreach($data_kelas as $row) { ?>
                    <tr>    
                        <td><center><?php echo $no++; ?></center></td>
                        <td><center><?php echo $row->nama_kelas; ?></center></td>
                        <td class="text-nowrap">
                            <center>
                            <a href="<?php echo site_url('Admin/ubah_kelas/' . $row->id_kelas) ?>" class="btn btn-sm btn-warning">
                            <i class="material-icons">edit</i> <span>Edit</span></a>
                            <a href="<?php echo site_url('Admin/hapus_kelas/' . $row->id_kelas) ?>" class="btn btn-sm btn-danger alert_notif">
                            <i class="material-icons">clear</i> <span>Hapus</span></a>
                        </center>
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

