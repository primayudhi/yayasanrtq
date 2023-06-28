<!DOCTYPE html>
<html lang="en">
        <?php $this->load->view('admin/header'); ?>
        <?php $this->load->view('admin/sidebar'); ?>
            <!-- ############ Content START-->
            <?php echo $contents ?>
            <!-- ############ Content END-->
        <?php $this->load->view('admin/footer'); ?>
    </body>
</html>