
<?php $__env->startSection('title', 'Tarif Air'); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="page-inner mt--5">
            <div class="card">
                <div class="card-header">
                    <a href="" class="btn btn-success btn-sm"><i class="fas fa-file-excel "></i></a>
                    <a href="" class="btn btn-danger btn-sm"><i class="fas fas fa-file-pdf "></i></a>
                    <a href="" class="btn btn-primary btn-sm"><i class="fas fa-sync "></i></a>

                </div>
                <div id="read" class="card-body ">

                </div>

            </div>
        </div>
    </div>



    

    <div class="modal fade bd-example-modal-lg mt-5" id="modalCreateTarifAir" tabindex="-1" role="dialog"
        aria-labelledby="bd-example-modal-lg" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Perbarui data tarif</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="page" class="modal-body">

                </div>

            </div>
        </div>
    </div>







<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UndikshaNgurah\xampp\htdocs\newEbumdesUAS\resources\views/admin/tarif_air/v_tarif_air.blade.php ENDPATH**/ ?>