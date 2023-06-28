
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url('AdminBSB')?>/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url('AdminBSB')?>/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url('AdminBSB')?>/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url('AdminBSB')?>/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url('AdminBSB')?>/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo base_url('AdminBSB')?>/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="<?php echo base_url('AdminBSB')?>/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url('AdminBSB')?>/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="<?php echo base_url('AdminBSB')?>/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?php echo base_url('AdminBSB')?>/plugins/flot-charts/jquery.flot.js"></script>
    <script src="<?php echo base_url('AdminBSB')?>/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url('AdminBSB')?>/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url('AdminBSB')?>/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="<?php echo base_url('AdminBSB')?>/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo base_url('AdminBSB')?>/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url('AdminBSB')?>/js/admin.js"></script>
    <script src="<?php echo base_url('AdminBSB')?>/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url('AdminBSB')?>/js/demo.js"></script>

      <!-- Datatables -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/v/bs/jszip-2.5.0/dt-1.13.4/af-2.5.3/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/cr-1.6.2/date-1.4.1/fc-4.2.2/fh-3.3.2/kt-2.9.0/r-2.4.1/rg-1.3.1/rr-1.3.3/sc-2.1.1/sb-1.4.2/sp-2.1.2/sl-1.6.2/sr-1.2.2/datatables.min.js"></script>

    <!-- alert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
    
        <!-- di bawah ini adalah script untuk konfirmasi hapus data dengan sweet alert  -->
        <script>
            $('.alert_notif').on('click',function(){
                var getLink = $(this).attr('href');
                Swal.fire({
                    title: "Apakah Anda Yakin Ingin Menghapus Data?",            
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonColor: '#3085d6',
                    cancelButtonText: "Batal"
                
                }).then(result => {
                    //jika klik ya maka arahkan ke proses.php
                    if(result.isConfirmed){
                        window.location.href = getLink
                    }
                })
                return false;
            });
        </script>

        <!-- Alert Modal Simpan Data -->
        <script type="text/javascript">

        function simpan() {

           swal({

                title: "Berhasil!",

                text: "Data Berhasil Di Simpan",

                icon: "success",

                timer: 100000,

                button: false

            });

        }

    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>

</body>

</html>