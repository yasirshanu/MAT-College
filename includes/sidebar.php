<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo $sitename; ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../dist/img/defaultuser.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="../profile" class="d-block"><?php echo $fullname; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-compact nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="../dashboard" class="nav-link <?php if($page == "Dashboard")echo "active"; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../course" class="nav-link <?php if($page == "Course Management")echo "active"; ?>">
                        <i class="nav-icon fas fa-graduation-cap"></i>
                        <p>Course Management</p>
                    </a>
                </li>
                <li class="nav-item <?php if($page == 'User Type Management' || $page == 'User Management')echo "menu-open"; ?>">
                    <a href="#" class="nav-link <?php if($page == 'User Type Management' || $page == 'User Management')echo "active"; ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>User Management <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview" <?php if($page != 'User Type Management' && $page != 'User Management'){ echo "style='display: none;'"; } ?>>
                        <li class="nav-item">
                            <a href="../user-management" class="nav-link <?php if($page == 'User Type Management')echo "active"; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User Type</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../user" class="nav-link <?php if($page == 'User Management')echo "active"; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>