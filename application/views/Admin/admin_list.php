<section class="content">
   <div class="container-fluid">
      <div class="block-header">
            <h2>ADMIN</h2>
      </div>
      
      <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="card">
                  <div class="header">
                        <div class="row clearfix">
                           <div class="col-xs-12 col-sm-6">
                              <h2>DATA ADMIN</h2>
                           </div>
                           <div class="col-xs-12 col-sm-6 align-right">
                           <a href="<?php echo site_url('Admin/tambah_admin_admin') ?>" class="btn btn-primary"> 
                              <i class="material-icons">add</i> <span>Tambah</span></a>
                           </div>
                        </div>
                  </div>
                  <div class="body">
                     <div class="table-responsive">
                  <table class="table table-bordered table-striped" id="tabelAdmin">
                <thead>
                  <tr>
                    <th style="width: 300px;">Nama</th>
                    <th style="width: 150px;">Username</th>
                    <th style="width: 200px;">Password</th>
                    <th style="width: 100px;">Hak Akses</th>
                    <th style="width: 100px;">Aktif</th>
                    <th><center>Aksi</center></th>
                  </tr>
              </thead>
                    <tbody>
                  <?php foreach($data_admin as $row) { ?>
                    <tr>
                        <td><?php echo $row->nama_admin; ?></td>
                        <td><?php echo $row->username; ?></td>
                        <td><?php echo $row->password; ?></td>
                        <td><?php echo $row->hak_akses; ?></td>
                        <td><?php echo $row->aktif; ?></td>
                        <td class="text-nowrap">
                            <a href="<?php echo site_url('Admin/ubah_admin/' . $row->id_user) ?>" class="btn btn-sm btn-warning">
                            <i class="material-icons">edit</i> <span>Edit</span></a>
                            <a href="<?php echo site_url('Admin/hapus_admin/' . $row->id_user) ?>" class="btn btn-sm btn-danger alert_notif">
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
        $('#tabelAdmin').DataTable();
    })
</script>

