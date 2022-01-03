<div class="card-body">
    <div class="table-responsive">
        <table id="basic" class="display table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Range Pemakaian</th>
                    <th>Biaya Tarif Per-M3</th>
                    <th>Biaya Pemeliharaan</th>
                    <th>Biaya Administrasi</th>

                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php $__currentLoopData = $data_tarif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td>1</td>
                        <td><?php echo e($dt->r_a_awal); ?> - <?php echo e($dt->r_a_akhir); ?></td>
                        <td><?php echo e($dt->r_a_biaya); ?></td>
                        <td><?php echo e($dt->biaya_admin); ?></td>
                        <td><?php echo e($dt->biaya_service); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <?php $__currentLoopData = $data_tarif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td>2</td>
                        <td><?php echo e($dt->r_b_awal); ?> - <?php echo e($dt->r_b_akhir); ?></td>
                        <td><?php echo e($dt->r_b_biaya); ?></td>
                        <td><?php echo e($dt->biaya_admin); ?></td>
                        <td><?php echo e($dt->biaya_service); ?></td>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                <tr>
                    <?php $__currentLoopData = $data_tarif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td>3</td>
                        <td><?php echo e($dt->r_c_awal); ?> - <?php echo e($dt->r_c_akhir); ?></td>
                        <td><?php echo e($dt->r_c_biaya); ?></td>
                        <td><?php echo e($dt->biaya_admin); ?></td>
                        <td><?php echo e($dt->biaya_service); ?></td>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </tbody>
        </table>

    </div>
</div>
<div class="card-footer ">

    <?php $__currentLoopData = $data_tarif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <button type="button" class="btn btn-warning float-right editbtn" onclick="show(<?php echo e($dt->id_tarif); ?>) "><i
                class=" fas fas fa-pen"> </i>
            Update
        </button>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div>
<?php /**PATH D:\UndikshaNgurah\xampp\htdocs\newEbumdesUAS\resources\views/admin/tarif_air/r_tarif_air.blade.php ENDPATH**/ ?>