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
                              <h2>DAFTAR HAFALAN</h2>
                           </div>
                           <div class="col-xs-12 col-sm-6 align-right">
                           <a href="<?php echo site_url('Guru/tambah_hafalan_guru') ?>" class="btn btn-primary"> 
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
                    <th style="width: 150px;">Kelas</th>
                    <th style="width: 200px;">Tanggal</th>
                    <th style="width: 350px;">Kualitas Hafalan</th>
                    <th style="width: 350px;">Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                    </thead>
                  <?php foreach($setor_hafalan as $row) { ?>
                    <tbody>
                    <tr>
                        <td><?php echo $row->nama_guru; ?></td>
                        <td><?php echo $row->nama_murid; ?></td>
                        <td><?php echo $row->nama_kelas; ?></td>
                        <td><?php echo $row->tanggal; ?></td>
                        <td><?php echo $row->kualitas_hafalan; ?></td>
                        <td><?php echo $row->ket_hafalan; ?></td>
                        <td class="text-nowrap">
                            
                             <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modal_detail<?php echo $row->id_setorhafalan; ?>" >Details</button>

                            <a href="<?php echo site_url('Guru/hapus_hafalan/' . $row->id_setorhafalan) ?>" class="btn btn-sm btn-danger alert_notif">
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


<!-- <?php foreach($data_hafalanayat as $hafalan){ ?> -->
<!-- Modal Detail Data 
<div class="modal fade" id="modal_detail<?php echo $hafalan->id_setorhafalan; ?>"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel"></i>DETAIL DATA HAFALAN</h5>
      </div>
      <div class="modal-body" id="data_detail">
        <div class="modal-body">
            <div class="row">
                <div class="col-sm">
                       <table class="table table-bordered table-striped">
                    <thead>
                        <tbody>
                        <tr>
                            <th style="" >Nama Surah</th>
                            <td><?php echo $hafalan->nama_surah; ?></td>
                        </tr>
                         <tr>
                            <th style="">Ayat</th>
                            <td><?php echo $hafalan->nama_ayat; ?></td>
                        </tr>
                         <tr>
                            <th style="">Kualitas Hafalan</th>
                            <td><?php echo $hafalan->kualitas_hafalan; ?></td>
                        </tr>
                         <tr>
                            <th style="">Keterangan</th>
                            <td><?php echo $hafalan->keterangan; ?></td>
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
<?php } ?> -->

<script>

</script>
