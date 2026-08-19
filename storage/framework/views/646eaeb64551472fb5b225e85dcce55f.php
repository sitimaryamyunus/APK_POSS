<?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>



<?php $__env->startSection('content'); ?>



<h1>ini halaman Percabangan</h1>


<html lang="id">
<body>

    <h2>Data</h2>
    <p id="hasil"></p>

<script>
    let nilai = 85;
    let status = (nilai >= 75) ? "Lulus" : "Tidak Lulus";
    
    // Tampilkan ke elemen <p id="hasil">
    document.getElementById('hasil').innerText = status;
</script>

</body>
</html>




<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\apk_pos\resources\views/percabangan/index.blade.php ENDPATH**/ ?>