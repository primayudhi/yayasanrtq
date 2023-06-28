<!DOCTYPE html>
<html lang="en">
        <?php $this->load->view('guru/header'); ?>
        <?php $this->load->view('guru/sidebar'); ?>
            <!-- ############ Content START-->
            <?php echo $contents ?>
            <!-- ############ Content END-->
        <?php $this->load->view('guru/footer'); ?>
    </body>
</html>