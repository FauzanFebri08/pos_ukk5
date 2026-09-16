

<?php $__env->startSection('title', 'Tambah Jenis'); ?>

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/user-form.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-4">
        <div class="card form-card shadow-sm border-0">
            
            <div class="card-header bg-primary text-white p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="fw-bold mb-1">Tambah Jenis</h3>
                        <p class="mb-0 text-white-50">Isi formulir di bawah ini untuk menambahkan jenis baru.</p>
                    </div>
                    <a href="<?php echo e(route('jenis.index')); ?>" class="btn btn-light text-primary fw-bold px-3">
                        &larr; Kembali
                    </a>
                </div>
            </div>

            <div class="card-body p-4">
                <form action="<?php echo e(route('jenis.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    
                    <div class="mb-4">
                        <label for="nama" class="form-label fw-semibold">Nama Jenis <span class="text-danger">*</span></label>
                        <input 
                            type="text" 
                            name="nama" 
                            id="nama" 
                            class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                            value="<?php echo e(old('nama')); ?>" 
                            placeholder="Masukkan nama jenis..."
                            required
                        >
                        <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    
                    <div class="d-flex justify-content-end gap-2">
                        <a href="<?php echo e(route('jenis.index')); ?>" class="btn btn-secondary px-4">Batal</a>
                        <button type="submit" class="btn btn-primary px-4 fw-bold">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\pos_ukk5\resources\views/jenis/create.blade.php ENDPATH**/ ?>