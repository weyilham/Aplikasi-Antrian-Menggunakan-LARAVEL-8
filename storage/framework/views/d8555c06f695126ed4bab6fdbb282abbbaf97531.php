<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="/dashboard" class="nav-link">
          <div class="nav-profile-image">
            <img src="/vendors/assets/images/faces/face1.jpg" alt="profile">
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2"><?php echo e(auth()->user()->name); ?></span>
            <span class="text-secondary text-small">Administrator</span>
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/dashboard">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('is_admin')): ?>  
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Master Data</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/dashboard/users">Data Users</a></li>
            <li class="nav-item"> <a class="nav-link" href="/dashboard/loket">Data Loket</a></li>
          </ul>
        </div>
      </li>
      <?php endif; ?>

      <li class="nav-item">
        <a class="nav-link" href="/dashboard/antrian">
          <span class="menu-title">Antrian</span>
          <i class="mdi mdi-ticket-account menu-icon"></i>
        </a>
      </li>
      
    </ul>
  </nav><?php /**PATH C:\Users\ilham\OneDrive\Desktop\Laravel App\antrian\resources\views/dashboard/layouts/sidebar.blade.php ENDPATH**/ ?>