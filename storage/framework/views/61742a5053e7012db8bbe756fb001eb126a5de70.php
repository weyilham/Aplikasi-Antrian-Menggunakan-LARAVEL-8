

<?php $__env->startSection('container'); ?>
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-info text-white me-2">
        <i class="mdi mdi-account-multiple"></i>
      </span> Data Users
    </h3> 
  </div>
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="clearfix">
            <h4 class="card-title float-left">Edit Data User</h4>
          </div>
          
          <form action="/dashboard/users/<?php echo e($user->username); ?>" method="post">
            <?php echo method_field('put'); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="email" class="form-label">Email : </label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" value="<?php echo e(old('email', $user->email)); ?>" readonly disabled autofocus>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap : </label>
                <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" id="name" placeholder="Nama Lengkap" value="<?php echo e(old('name', $user->name)); ?>" required>
            <?php $__errorArgs = ['name'];
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

            <div class="mb-3">
                <label for="username" class="form-label">Username : </label>
                <input type="text" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="username" id="username" placeholder="Username" value="<?php echo e(old('username', $user->username)); ?>" required>
            <?php $__errorArgs = ['username'];
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

            <button type="submit" class="btn btn-gradient-info btn-sm mt-2">Edit Data</button>
              
          </form>
          
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ilham\OneDrive\Desktop\Laravel App\antrian\resources\views/dashboard/users/edit.blade.php ENDPATH**/ ?>