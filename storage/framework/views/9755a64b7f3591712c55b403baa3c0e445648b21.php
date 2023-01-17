

<?php $__env->startSection('container'); ?>

    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-info text-white me-2">
          <i class="mdi mdi-home"></i>
        </span> Dashboard
      </h3> 
    </div>
    <div class="row">
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
          <div class="card-body">
            <img src="/vendors/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Jumlah Users <i class="mdi mdi-account mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">10 Orang</h2>
            <h6 class="card-text">User Aktif</h6>
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
          <div class="card-body">
            <img src="/vendors/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3"> Jumlah Loket <i class="mdi mdi-desktop-mac mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">4 Loket </h2>
            <h6 class="card-text">Bpjs & Umum</h6>
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
          <div class="card-body">
            <img src="/vendors/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Jumlah Antrian <i class="mdi mdi mdi-account-multiple mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">100 Antrian</h2>
            <h6 class="card-text">Antrian</h6>
          </div>
        </div>
      </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ilham\OneDrive\Desktop\Laravel App\antrian\resources\views/dashboard/index.blade.php ENDPATH**/ ?>