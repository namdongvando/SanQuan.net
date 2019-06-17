<header class="main-header ">
    <a href="<?php echo BASE_DIR ?>quantri/" class="logo">
        <span class="logo-mini"><b>A</b>LT</span>
        <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" onclick="ajax('<?php echo BASE_DIR ?>quantri/MenuCookie')" role="button">
            <span class="sr-only">Toggle navigation</span> 
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo BASE_DIR ?>quantrioption">Thông Tin Của Website <i class="fa fa-gear"></i></a></li>
                <li ><a target="_blank" href="<?php echo BASE_DIR ?>">Xem Trang Web</a></li>
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo BASE_DIR ?>public/templateadmin/dist/img/avatar.png" class="user-image" alt="User Image">
                        <span class="hidden-xs">
                            <?php
                            echo $_NhanVienHienTai->HoTen;
                            ?>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="<?php echo BASE_DIR ?>public/templateadmin/dist/img/avatar.png" class="user-image" alt="User Image">
                            <p>
                                <?php
                                echo $_NhanVienHienTai->HoTen;
                                ?>
                                <small><?php
                                    echo $_NhanVienHienTai->TenNhom;
                                    ?></small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?php echo BASE_DIR ?>quantriprofile" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo BASE_DIR ?>quantri/logout" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
