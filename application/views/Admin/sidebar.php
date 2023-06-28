<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url('AdminBSB')?>/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ADMIN</div>
                    <div class="email">rtqalhasan@gmail.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profil</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo site_url('Admin/logout') ?> "><i class="material-icons">input</i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">NAVIGASI UTAMA</li>
                    <li class="<?php echo $menu_home ?>">
                        <a href="<?php echo site_url('Admin') ?>">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li class="<?php echo $menu_guru ?>">
                        <a href="<?php echo site_url('Admin/guru_list') ?>">
                            <i class="material-icons">group</i>
                            <span>Guru</span>
                        </a>
                    </li>
                    <li class="<?php echo $menu_murid ?>">
                        <a href="<?php echo site_url('Admin/murid_list') ?>">
                            <i class="material-icons">school</i>
                            <span>Murid</span>
                        </a>
                    </li>
                    <li class="<?php echo $menu_berita ?>">
                        <a href="<?php echo site_url('Admin/berita_list') ?>">
                            <i class="material-icons">book</i>
                            <span>Berita</span>
                        </a>
                    </li>
                       <li class="<?php echo $menu_hafalan ?>">
                        <a href="<?php echo site_url('Admin/hafalan_list') ?>">
                            <i class="material-icons">star</i>
                            <span>Hafalan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Admin/logout') ?> " >
                            <i class="material-icons">exit_to_app</i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2023 <a href="javascript:void(0);">RUMAH TAHFIDZ QUR'AN AL HASAN</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        
    </section>