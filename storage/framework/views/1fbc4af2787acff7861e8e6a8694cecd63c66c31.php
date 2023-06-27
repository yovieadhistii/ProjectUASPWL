<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(route('dashboard')); ?>" class="brand-link">
        <img src="<?php echo e(asset('img/app-logo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo e(config('app.name')); ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <?php if(auth()->guard()->check()): ?>
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo e(asset('img/user-photo-default.png')); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="<?php echo e(route('profil')); ?>" class="d-block"><?php echo e(Auth::user()->nama); ?> | <?php echo e(Auth::user()->role); ?></a>
            </div>
        </div>
        <?php endif; ?>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">






                <li class="nav-item">
                    <a href="<?php echo e(route('dashboardmahasiswa')); ?>" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                    </form>
                    <a href="javascript:void(0)" class="nav-link" onclick="$('#logout-form').submit();">
                        <i class="nav-icon fa fa-sign-out"></i>
                        <p>Logout</p>
                    </a>
                </li>
                
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH C:\projectUASPWL\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>