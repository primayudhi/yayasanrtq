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
                           <div class="col-xs-12 col-sm-20 align-right">
                           <a href="<?php echo site_url('Admin/tambah_murid_admin') ?>" class="btn btn-primary"> 
                              <i class="material-icons">add</i> <span>Tambah</span></a>
                           </div>
                        </div>
                  </div>
                  <div class="body">
                    <div class="table-responsive">
                  <table id="tabelMurid" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                  <tr>
                    <th align="center" style="width: 100px;">Nama Murid</th>
                    <th align="center">Kelas</th>
                    <th align="center">Tempat Lahir</th>
                    <th align="center">Tanggal Lahir</th>
                    <th align="center" style="width: 10px;">Jenis Kelamin</th>
                    <th align="center" width="300px">Alamat</th>
                    <th align="center">Foto</th>
                    <th>Aksi</th>
                  </tr>
              </thead>
                  <?php foreach($data_murid as $row) { ?>
                    <tbody>
                    <tr>
                        <td><?php echo $row->nama_murid; ?></td>
                        <td><?php echo $row->kelas; ?></td>
                        <td><?php echo $row->tempat_lahir; ?></td>
                        <td><?php echo $row->tanggal_lahir; ?></td>
                        <td><?php echo $row->jk; ?></td>
                        <td><?php echo $row->alamat; ?></td>
                        <td>
                            <?php if ($row->foto != NULL || $row->foto != "") { ?>
                            <img src="<?php echo base_url('uploads/fotomurid/'.$row->foto); ?>" style="height: 90px;border: 1px solid black;" />
                            <?php } ?>
                
                        </td>
                         <td class="text-nowrap">
                            <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modal_detail<?php echo $row->id_murid; ?>" >Details</button>
                            <a href="<?php echo site_url('Admin/ubah_murid/' . $row->id_murid) ?>" class="btn btn-sm btn-warning">
                            <i class="material-icons">edit</i> <span>Edit</span></a>
                            <a href="<?php echo site_url('Admin/hapus_murid/' . $row->id_murid) ?>" class="btn btn-sm btn-danger alert_notif">
                            <i class="material-icons">clear</i> <span>Hapus</span></a>
                        </td>
                    </tr>
                </tbody>
                <?php } ?>

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

<?php foreach($data_murid as $murid){ ?>
<!-- Modal Detail Data -->
<div class="modal fade" id="modal_detail<?php echo $murid->id_murid; ?>"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel"></i>DETAIL DATA MURID</h5>
      </div>
      <div class="modal-body" id="data_detail">
        <div class="modal-body">
            <div class="row">
                <div class="col-sm">
                       <table class="table table-bordered table-striped">
                    <thead>
                        <tbody>
                        <tr>
                            <th style="" >Nama Murid</th>
                            <td><?php echo $murid->nama_murid; ?></td>
                        </tr>
                         <tr>
                            <th style="">kelas</th>
                            <td><?php echo $murid->kelas; ?></td>
                        </tr>
                         <tr>
                            <th style="">Tempat Lahir</th>
                            <td><?php echo $murid->tempat_lahir; ?></td>
                        </tr>
                         <tr>
                            <th style="">Tanggal Lahir</th>
                            <td><?php echo $murid->tanggal_lahir; ?></td>
                        </tr>
                         <tr>
                            <th style="">Jenis Kelamin</th>
                            <td><?php echo $murid->jk; ?></td>
                        </tr>
                         <tr>
                            <th style="">Alamat</th>
                            <td><?php echo $murid->alamat; ?></td>
                        </tr>
                        <tr>
                            <th style="">Foto</th>
                            <td> <?php if ($murid->foto != NULL || $row->foto != "") { ?>
                            <img src="<?php echo base_url('uploads/fotomurid/'.$murid->foto); ?>" style="height: 90px;border: 1px solid black;" />
                            <?php } ?></td>
                        </tr>
                         <tr>
                            <th style="">No Telepon</th>
                            <td><?php echo $murid->no_telepon; ?></td>
                        </tr>
                         <tr>
                            <th style="">Nama Ibu</th>
                            <td><?php echo $murid->nama_ibu; ?></td>
                        </tr>
                         <tr>
                            <th style="">Nama Ayah</th>
                            <td><?php echo $murid->nama_ayah; ?></td>
                        </tr>
                        <tr>
                            <th style="">Username</th>
                            <td><?php echo $murid->username; ?></td>
                        </tr>
                        <tr>
                            <th style="">Password</th>
                            <td><?php echo $murid->password; ?></td>
                        </tr>
                        <tr>
                            <th style="">Hak Akses</th>
                            <td><?php echo $murid->hak_akses; ?></td>
                        </tr>
                        <tr>
                            <th style="">Aktif</th>
                            <td><?php echo $murid->aktif; ?></td>
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