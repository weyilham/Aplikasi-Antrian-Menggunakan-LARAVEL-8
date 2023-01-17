

<?php $__env->startSection('container'); ?>

    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-info text-white me-2">
          <i class="mdi mdi-ticket"></i>
        </span> Data Loket
      </h3> 
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            
            <div class="card-body">
              <div class="clearfix">
                <h4 class="card-title float-left">Daftar Data Loket</h4>
                <a href="/dashboard/users/create" class="btn btn-sm btn-info mb-2"> <i class="mdi mdi-table-row-plus-before"></i> Tambah Data Users</a>
              </div>
              
            <?php if(session()->has('success')): ?>
            <div class="alert alert-success alert-dismissible fade show col-md-10" role="alert">
              <strong><?php echo e(session('success')); ?></strong> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>
    
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Loket</th>
                      <th>Kode</th>
                      <th>Deskripsi</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $loket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $L): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($L->nama_loket); ?></td>
                        <td><?php echo e($L->kode); ?></td>
                        <td><?php echo e($L->deskripsi); ?></td>
                        
                        <td>
                          <a href="/dashboard/loket/<?php echo e($L->id); ?>" class="badge bg-info"><i class="mdi mdi-eye"></i></a>
                          <a href="/dashboard/loket/<?php echo e($L->id); ?>/edit" class="badge bg-success"><i class="mdi mdi-table-edit"></i></a>
                          <form action="/dashboard/loket/<?php echo e($L->id); ?>" method="post" class="d-inline">
                            <?php echo method_field('delete'); ?>
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Apakah yakin akan dihapus?')"><i class="mdi mdi-table-row-remove"></i></button>
                          </form>
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
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ilham\OneDrive\Desktop\Laravel App\antrian\resources\views/dashboard/loket/index.blade.php ENDPATH**/ ?>