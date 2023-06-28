<table>
    <tr>
        <td>ID</td>
        <td>Nama Admin</td>
        <td>Username</td>
        <td>Password</td>
        <td>Hak Akses</td>
        <td>Aktif</td>


    </tr>
    <?php foreach($data_admin as $row) { ?>
        <tr>
            <td><?php echo $row->id_user; ?></td>
            <td><?php echo $row->nama_admin; ?></td>
            <td><?php echo $row->username; ?></td>
            <td><?php echo $row->password_admin; ?></td>
            <td><?php echo $row->hak_akses; ?></td>
            <td><?php echo $row->aktif; ?></td>

            <td>
                <a href="<?php echo site_url('Admin/hapus_admin/' . $row->id_user) ?>"> Hapus </a>
            </td>
        </tr>
    <?php } ?>

</table>



