
<?php $__env->startSection('title', 'Pengguna Air'); ?>
<?php $__env->startSection('content'); ?>

    <div class="content">

        <div class="page-inner mt--5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="modal fade mt-5" id="exampleModalLong" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Tambah data Pengguna</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/add_pengguna" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="modal-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-user-circle"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Nama" name="nama_lengkap"
                                    value="<?php echo e(old('nama_lengkap')); ?>">
                            </div>
                            <div class=" has-error text-danger">
                                <?php $__errorArgs = ['nama_lengkap'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-users"></i>
                                    </span>
                                </div>
                                <input type="number" class="form-control" placeholder="Nik" name="nik"
                                    value="<?php echo e(old('nik')); ?>">
                            </div>
                            <div class=" has-error text-danger">
                                <?php $__errorArgs = ['nik'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="modal-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fab fa-whatsapp"></i>
                                    </span>
                                </div>
                                <input type="number" class="form-control" placeholder="Nomer WhatsApp" name="nomer_hp"
                                    value="<?php echo e(old('nomer_hp')); ?>">
                            </div>
                            <div class=" has-error text-danger">
                                <?php $__errorArgs = ['nomer_hp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-venus-mars"></i>
                                    </span>
                                </div>

                                <select class="form-control" name="jenis_kelamin" value="<?php echo e(old('jenis_kelamin')); ?>">
                                    <option value="" hidden>Jenis Kelamin</option>
                                    <option value="P">Perempuan</option>
                                    <option value="L">Laki-Laki</option>
                                </select>
                            </div>
                            <div class=" has-error text-danger">
                                <?php $__errorArgs = ['jenis_kelamin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Alamat" name="alamat_pengguna"
                                    value="<?php echo e(old('alamat_pengguna')); ?>">
                            </div>
                            <div class=" has-error text-danger">
                                <?php $__errorArgs = ['alamat_pengguna'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-power-off"></i>
                                    </span>
                                </div>
                                <select class="form-control" name="status_pengguna"
                                    value="<?php echo e(old('status_pengguna')); ?>">

                                    <option value="" hidden>Status Pengguna</option>
                                    <option value="T">Tidak Aktif</option>
                                    <option value="Y">Aktif</option>
                                </select>

                            </div>
                            <div class=" has-error text-danger">
                                <?php $__errorArgs = ['status_pengguna'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-danger" data-dismiss="modal"> <i
                                    class="fas fa-window-close mr-2"></i> Tutup</button>
                            <button type="submit" class="btn btn-primary "> <i class="fas fa-save mr-2"></i>
                                Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        

        
        <div class="page-inner">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                        data-target="#exampleModalLong"><i class="fas fa-plus-circle "></i>
                    </button>
                    <a href="" class="btn btn-success btn-sm"><i class="fas fa-file-excel "></i></a>
                    <a href="" class="btn btn-danger btn-sm"><i class="fas fas fa-file-pdf "></i></a>
                    <a href="" class="btn btn-primary btn-sm"><i class="fas fa-sync "></i></a>
                </div>

                <div class="card-body">
                    <div class="accordion accordion-secondary">
                        <div class="card">
                            <div class="card-header btn-warning" id="headingOne" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="span-icon">
                                    <div class="fas fa-bullhorn"></div>
                                </div>
                                <div class="span-title">
                                    Hati-hati!
                                </div>
                                <div class="span-mode"></div>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it
                                    squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica,
                                    craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur
                                    butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                    synth
                                    nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pengguna</th>
                                        <th>NIK</th>
                                        <th>Nomer WhatsApp</th>
                                        <th>JK</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php $__currentLoopData = $pengguna_air; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>

                                            <td><?php echo e($no++); ?></td>
                                            <td><?php echo e($pa->nama_lengkap); ?></td>
                                            <td><?php echo e($pa->nik); ?></td>
                                            <td><?php echo e($pa->nomer_hp); ?></td>

                                            <td>
                                                <?php if($pa->jenis_kelamin == 'L'): ?>
                                                    Laki - Laki
                                                <?php else: ?>
                                                    Perempuan
                                                <?php endif; ?>
                                            </td>

                                            <td><?php echo e($pa->alamat_pengguna); ?></td>

                                            <td>
                                                <?php if($pa->status_pengguna == 'Y'): ?>
                                                    Aktif
                                                <?php else: ?>
                                                    Tidak Aktif
                                                <?php endif; ?>
                                            </td>

                                            <td>
                                                

                                                <a href="#" class="btn btn-warning btn-xs editbtn">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <button type="button" class=" btn btn-danger btn-xs" data-toggle="modal"
                                                    data-target="#hapus<?php echo e($pa->id_pengguna_air); ?>">
                                                    <i class="fas fa-trash"></i>
                                                </button>



                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        

        <div class="modal fade" id="modalUpdateData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit data Pengguna</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="/pengguna_air" method="POST" id="editForm">

                        <?php echo csrf_field(); ?>

                        <input type="text" hidden class="form-control" name="id" id="edit_id_pengguna_air" value="">
                        <div class="modal-body">
                            <div class="modal-body">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-user-circle"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Nama" name="nama_lengkap"
                                        id="edit_nama_lengkap" value="">
                                </div>
                                <div class=" has-error text-danger">
                                    <?php $__errorArgs = ['nama_lengkap'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-users"></i>
                                        </span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Nik" name="nik" id="edit_nik"
                                        value="">
                                </div>
                                <div class=" has-error text-danger">
                                    <?php $__errorArgs = ['nik'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="modal-body">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fab fa-whatsapp"></i>
                                        </span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Nomer WhatsApp"
                                        id="edit_nomer_hp" name="nomer_hp" value="">
                                </div>
                                <div class=" has-error text-danger">
                                    <?php $__errorArgs = ['nomer_hp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-venus-mars"></i>
                                        </span>
                                    </div>

                                    <select class="form-control" name="jenis_kelamin" value="" id="edit_jenis_kelamin">
                                        <option value="" hidden>Jenis Kelamin</option>
                                        <option value="P">Perempuan</option>
                                        <option value="L">Laki-Laki</option>
                                    </select>
                                </div>
                                <div class=" has-error text-danger">
                                    <?php $__errorArgs = ['jenis_kelamin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Alamat" name="alamat_pengguna"
                                        id="edit_alamat_pengguna" value="">
                                </div>
                                <div class=" has-error text-danger">
                                    <?php $__errorArgs = ['alamat_pengguna'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-power-off"></i>
                                        </span>
                                    </div>
                                    <select class="form-control" name="status_pengguna" id="edit_status_pengguna"
                                        value="">
                                        <option hidden>Status Pengguna</option>
                                        <option value="T">Tidak Aktif</option>
                                        <option value="Y">Aktif</option>
                                    </select>

                                </div>
                                <div class=" has-error text-danger">
                                    <?php $__errorArgs = ['status_pengguna'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"> <i
                                    class="fas fa-window-close mr-2"></i>Tutup</button>
                            <button type="submit" class="btn btn-primary"> <i class="fas fa-save mr-2"></i> Perbarui
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        

        

        <?php $__currentLoopData = $pengguna_air; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="modal  fade mt-5" id="hapus<?php echo e($pa->id_pengguna_air); ?>" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog " role="document">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus pengguna <?php echo e($pa->nama_lengkap); ?> ?
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Apakah anda ingin menghapus data dari <?php echo e($pa->nama_lengkap); ?>?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="/pengguna/delete/<?php echo e($pa->id_pengguna_air); ?>" class="btn btn-primary">Yes</a>
                            
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



        




    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UndikshaNgurah\xampp\htdocs\newEbumdesUAS\resources\views/admin/pengguna_air/v_pengguna_air.blade.php ENDPATH**/ ?>