<section class="content">
   <div class="container-fluid">
      <div class="block-header">
            <h2>DETAIL GURU</h2>
      </div>
      
      <div class="row clearfix">
            <div class="col-xs-15 col-sm-15 col-md-15 col-lg-15">
               <div class="card">
                  <div class="header">
                        <div class="row clearfix">
                           <div class="col-xs-12 col-sm-6">
                              <h2>DAFTAR DETAIL GURU</h2>
                           </div>
                        </div>
                  </div>

                  <div class="body">
                    <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="tabelGuru">
                    <thead>  
                    <tr>
                        <td>Nama </td>
                        <td>NIK </td>
                        <td>Tempat Lahir</td>
                        <td>Tanggal Lahir</td>
                        <td>Alamat</td>
                        <td>Jenis Kelamin</td>
                        <td>Foto</td>
                        <td>Jabatan</td>
                        <td>No Telepon</td>
                        <td>Email</td>
                        <td>Keterangan</td>
                        <td>Username</td>
                        <td>Password</td>
                        <td>Aktif</td>
                        
                    </tr>
                    </thead>
                    <tbody>
    <?php foreach($data_guru as $row) { ?>
        <tr>
            <td><?php echo $row->nama_guru; ?></td>
            <td><?php echo $row->nik_guru; ?></td>
            <td><?php echo $row->tempat_lahir; ?></td>
            <td><?php echo $row->tanggal_lahir; ?></td>
            <td><?php echo $row->alamat; ?></td>
            <td><?php echo $row->jk; ?></td>
            <td>
                <?php if ($row->foto != NULL || $row->foto != "") { ?>
                    <img src="<?php echo base_url('uploads/fotoguru/'.$row->foto); ?>" style="height: 90px;border: 1px solid black;" />
                <?php } ?>
                
            </td>
            <td><?php echo $row->jabatan; ?></td>
            <td><?php echo $row->no_telepon; ?></td>
            <td><?php echo $row->email; ?></td>
            <td><?php echo $row->keterangan; ?></td>
            <td><?php echo $row->username; ?></td>
            <td><?php echo $row->password; ?></td>
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


   
