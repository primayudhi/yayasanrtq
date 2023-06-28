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
                              <h2>DAFTAR PERKEMBANGAN HAFALAN</h2>
                           </div>
                           <div class="col-xs-12 col-sm-6 align-right">
                           <a href="<?php echo site_url('Admin/tambah_hafalan_admin') ?>" class="btn btn-primary"> 
                              <i class="material-icons">add</i> <span>Tambah</span></a>
                           </div>
                        </div>
                  </div>
                  <div class="body">
                     <div class="table-responsive">
                  <table class="table table-bordered table-striped" id="tabelHafalan">
                    <thead>
                        <tr>
                    <th style="width: 100px;">Guru</th>
                    <th style="width: 150px;">Murid</th>
                    <th style="width: 200px;">Tanggal</th>
                    <th style="width: 350px;">Kualitas Hafalan</th>
                    <th style="width: 350px;">Keterangan</th>
                    <th>Aksi</th>
                    <!-- <th>Aksi</th> -->
                  </tr>
                    </thead>
                    <tbody>
                        <?php foreach($setor_hafalan as $row) { ?>
                    <tr>
                        <td><?php echo $row->nama_guru; ?></td>
                        <td><?php echo $row->nama_murid; ?></td>
                        <td><?php echo $row->tanggal; ?></td>
                        <td><?php echo $row->kualitas_hafalan; ?></td>
                        <td><?php echo $row->ket_hafalan; ?></td>
                        <td class="text-nowrap">
                             
                            <a href="<?php echo site_url('Admin/ubah_hafalan/' . $row->id_setorhafalan) ?>" class="btn btn-sm btn-warning">
                            <i class="material-icons">edit</i> <span>Edit</span></a>
                            <a href="<?php echo site_url('Admin/hapus_hafalan/' . $row->id_setorhafalan) ?>" class="btn btn-sm btn-danger alert_notif">
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
            $('#tabelHafalan').DataTable();
        })


    </script>

 