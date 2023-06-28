<section class="content">
   <div class="container-fluid">
      <div class="block-header">
            <h2>GURU</h2>
      </div>
      
      <div class="row clearfix">
            <div class="col-xs-15 col-sm-15 col-md-15 col-lg-15">
               <div class="card">
                  <div class="header">
                        <div class="row clearfix">
                           <div class="col-xs-12 col-sm-6">
                              <h2>DAFTAR GURU</h2>
                           </div>
                        </div>
                  </div>
                   <div class="body">
                    <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="tabelGuru">
                    <thead>  
                    <tr>
                        <td width="150px">Nama </td>
                        <td width="150px">Tempat Lahir</td>
                        <td width="150px">Tanggal Lahir</td>
                        <td width="250px">Alamat</td>
                        <td width="30px">Jenis Kelamin</td>
                        <td>Foto</td>
                        <td>Jabatan</td>
                        <td><center>Aksi</center></td>
                    </tr>
                    </thead>
                    <tbody>
    <?php foreach($data_guru as $row) { ?>
        <tr>
            <td width="150px"><?php echo $row->nama_guru; ?></td>
            
            <td width="150px"><?php echo $row->tempat_lahir; ?></td>
            <td width="150px"><?php echo $row->tanggal_lahir; ?></td>
            <td width="350px"><?php echo $row->alamat; ?></td>
            <td><?php echo $row->jk; ?></td>
            <td>
                <?php if ($row->foto != NULL || $row->foto != "") { ?>
                    <img src="<?php echo base_url('uploads/fotoguru/'.$row->foto); ?>" style="height: 90px;border: 1px solid black;" />
                <?php } ?>
                
            </td>
            <td><?php echo $row->jabatan; ?></td>
            
             <td class="text-nowrap">
                          
                           <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modal_detail<?php echo $row->id_guru; ?>" >Details</button>
                            <a href="<?php echo site_url('Guru/ubah_guru/' . $row->id_guru) ?>" class="btn btn-sm btn-warning">
                            <i class="material-icons">edit</i> <span>Edit</span></a>
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
   </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function(){
        $('#tabelGuru').DataTable();
    })
</script>
<?php foreach($data_guru as $guru){ ?>
<!-- Modal Detail Data -->
<div class="modal fade" id="modal_detail<?php echo $guru->id_guru; ?>"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel"></i>DETAIL DATA GURU</h5>
      </div>
      <div class="modal-body" id="data_detail">
        <div class="modal-body">
            <div class="row">
                <div class="col-sm">
                       <table class="table table-bordered table-striped">
                    <thead>
                        <tbody>
                        <tr>
                            <th style="" >Nama Guru</th>
                            <td><?php echo $guru->nama_guru; ?></td>
                        </tr>
                         <tr>
                            <th style="">Nik Guru</th>
                            <td><?php echo $guru->nik_guru; ?></td>
                        </tr>
                         <tr>
                            <th style="">Nip Guru</th>
                            <td><?php echo $guru->nip_guru; ?></td>
                        </tr>
                         <tr>
                            <th style="">Tempat lahir</th>
                            <td><?php echo $guru->tempat_lahir; ?></td>
                        </tr>
                         <tr>
                            <th style="">Tanggal Lahir</th>
                            <td><?php echo $guru->tanggal_lahir; ?></td>
                        </tr>
                         <tr>
                            <th style="">Alamat</th>
                            <td><?php echo $guru->alamat; ?></td>
                        </tr>
                         <tr>
                            <th style="">Jenis Kelamin</th>
                            <td><?php echo $guru->jk; ?></td>
                        </tr>
                        <tr>
                            <th style="">Foto</th>
                            <td> <?php if ($guru->foto != NULL || $row->foto != "") { ?>
                            <img src="<?php echo base_url('uploads/fotoguru/'.$guru->foto); ?>" style="height: 90px;border: 1px solid black;" />
                            <?php } ?></td>
                        </tr>
                         <tr>
                            <th style="">Jabatan</th>
                            <td><?php echo $guru->jabatan; ?></td>
                        </tr>
                         <tr>
                            <th style="">No Telepon</th>
                            <td><?php echo $guru->no_telepon; ?></td>
                        </tr>
                         <tr>
                            <th style="">Email</th>
                            <td><?php echo $guru->email; ?></td>
                        </tr>
                        <tr>
                            <th style="">Keterangan</th>
                            <td><?php echo $guru->keterangan; ?></td>
                        </tr>
                        <tr>
                            <th style="">Username</th>
                            <td><?php echo $guru->username; ?></td>
                        </tr>
                        <tr>
                            <th style="">Password</th>
                            <td><?php echo $guru->password_guru; ?></td>
                        </tr>
                        <tr>
                            <th style="">Hak Akses</th>
                            <td><?php echo $guru->hak_akses; ?></td>
                        </tr>
                        <tr>
                            <th style="">Aktif</th>
                            <td><?php echo $guru->aktif; ?></td>
                        </tr>
                    </tbody>
                </thead>
                </table>
                        
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<script>

</script>