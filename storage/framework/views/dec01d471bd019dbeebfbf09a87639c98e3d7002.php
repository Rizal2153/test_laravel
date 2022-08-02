<!DOCTYPE html>
<html>
<head>
    <title>Crud Barang - hairulrizal.com</title>
</head>
<body>
    <h2>Data barang</h2>

    <a href="/barang/tambah"> + Tambah Barang Baru</a>

    <br/>
    <br/>

    <table border="1">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Created Date</th>
            <th>Modified Date</th>
        </tr>
        <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($b->kode_barang); ?></td>
            <td><?php echo e($b->nama_barang); ?></td>
            <td><?php echo e($b->harga_barang); ?></td>
            <td><?php echo e($b->created_date); ?></td>
            <td><?php echo e($b->modified_date); ?></td>
            <td>
                <a href="/barang/edit/<?php echo e($b->id_barang); ?>">Edit</a>
                |
                <a href="/barang/hapus/<?php echo e($b->id_barang); ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>



</body>
</html><?php /**PATH C:\xampp\htdocs\test_laravel\resources\views/index.blade.php ENDPATH**/ ?>