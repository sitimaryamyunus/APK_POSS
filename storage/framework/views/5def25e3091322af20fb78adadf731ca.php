<?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>



<?php $__env->startSection('content'); ?>


<h1 class="h3 mb-4 text-gray-800">ini halaman Perulangan</h1>


<html lang="id">
<body>

    <h2>Daftar Perulangan</h2>
    <ul id="daftar-item"></ul>

    <script>
        const wadah = document.getElementById('daftar-item');

        // Perulangan 5 kali
        for (let i = 1; i <= 5; i++) {
            const li = document.createElement('li');
            li.textContent = 'Baris ke-' + i;
            wadah.appendChild(li);
        }
    </script>

</body>
</html>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\apk_pos\resources\views/perulangan/index.blade.php ENDPATH**/ ?>