<section class="content">
   <div class="container-fluid">
      <div class="block-header">
            <h2>MURID</h2>
      </div>
      
      <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="card">
                  <div class="header">
                        <div class="row clearfix">
                           <div class="col-xs-12 col-sm-6">
                              <h2>DAFTAR MURID</h2>
                           </div>
                        </div>
                  </div>
                  <div class="body">
                    <div class="table-responsive">
                  <table class="table table-bordered table-striped" id="tabelMurid">
                <thead>
                  <tr>
                    <th align="center" style="width: 200px;">Nama Murid</th>
                    <th align="center">Kelas</th>
                    <th align="center" style="width: 10px;">Jenis Kelamin</th>
                    <th align="center">Alamat</th>
                    <th align="center">Foto</th>
                    <th align="center">Aktif</th>
                  </tr>
              </thead>
                  <?php foreach($data_murid as $row) { ?>
                    <tbody>
                    <tr>
                        <td><?php echo $row->nama_murid; ?></td>
                        <td><?php echo $row->nama_kelas; ?></td>
                        <td><?php echo $row->jk; ?></td>
                        <td><?php echo $row->alamat; ?></td>
                        <td>
                            <?php if ($row->foto != NULL || $row->foto != "") { ?>
                            <img src="<?php echo base_url('uploads/fotomurid/'.$row->foto); ?>" style="height: 90px;border: 1px solid black;" />
                            <?php } ?> 
                        </td>
                        <td><?php echo $row->aktif; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
                  </table>
                  </div>
              </div>
               </div>
            </div>
      </div>
   </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function(){
        $('#tabelMurid').DataTable();
    })
</script>

