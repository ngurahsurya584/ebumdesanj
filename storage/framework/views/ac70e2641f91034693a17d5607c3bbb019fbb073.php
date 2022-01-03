<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   

    <?php echo e($d['title']); ?>

    <br>
    <?php echo e($d['description']); ?>

    <br>
    <?php echo e($d['userID']); ?>

    <br>
    <br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH D:\UndikshaNgurah\xampp\htdocs\newEbumdesUAS\resources\views/notifikasi.blade.php ENDPATH**/ ?>