<nav class="navbar navbar-expand-lg navbar-light bg-light"> 
    <div class="container"> 
        <a class="navbar-brand" href="#">POS</a> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
            <span class="navbar-toggler-icon"></span> 
        </button> 
        <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
                <li class="nav-item"> 
                    <a class="nav-link <?php echo e(Request::Is('dashboard') ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(route('dashboard')); ?>">Dashboard</a> 
                </li> 

                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::Is('admin/users') ? 'active' : ''); ?>" href="<?php echo e(route('admin.users.index')); ?>">Users</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link <?php echo e(Request::Is('produk') ? 'active' : ''); ?>" href="<?php echo e(route('produk.index')); ?>">Produk</a> 
                </li>
                <li class="nav-item"> 
                    <a class="nav-link <?php echo e(Request::is('penjualan') ? 'active' : ''); ?>" href="<?php echo e(route('penjualan.index')); ?>">Penjualan</a> 
                </li>
                <li class="nav-item"> 
                    <a class="nav-link <?php echo e(Request::is('perulangan') ? 'active' : ''); ?>" href="<?php echo e(route('perulangan.index')); ?>">Perulangan</a> 
                </li>
                <li class="nav-item"> 
                    <a class="nav-link <?php echo e(Request::is('percabangan') ? 'active' : ''); ?>" href="<?php echo e(route('percabangan.index')); ?>">Percabangan</a> 
                </li>
                <li class="nav-item"> 
                    <a class="nav-link <?php echo e(Request::is('penjualan') ? 'active' : ''); ?>" href="<?php echo e(route('penjualan.index')); ?>">Varian</a> 
                </li>
                <li class="nav-item"> 
                    <a class="nav-link <?php echo e(Request::is('penjualan') ? 'active' : ''); ?>" href="<?php echo e(route('penjualan.index')); ?>">Tipe Data</a> 
                </li>
            </ul> 
            
            <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-flex align-items-center m-0"> 
                <?php echo csrf_field(); ?> 
                <button type="submit" class="btn btn-logout btn-sm px-3 fw-bold">Keluar</button> 
            </form> 
        </div> 
    </div> 
</nav>

<style>
    .btn-logout {
        background-color: #a9746e;
        border-color: #a9746e;
        color: #fff;
    }
    .btn-logout:hover {
        background-color: #925f59;
        border-color: #925f59;
        color: #fff;
    }
</style><?php /**PATH C:\laragon\www\apk_pos\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>