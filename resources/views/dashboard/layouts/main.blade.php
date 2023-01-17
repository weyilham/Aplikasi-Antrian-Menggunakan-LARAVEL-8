
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/vendors/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/vendors/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/vendors/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/vendors/assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      @include('dashboard.layouts.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('dashboard.layouts.sidebar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          @yield('container')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Puskesmas Kota Serang {{ date('Y') }}</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/vendors/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/vendors/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="/vendors/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/vendors/assets/js/off-canvas.js"></script>
    <script src="/vendors/assets/js/hoverable-collapse.js"></script>
    <script src="/vendors/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/vendors/assets/js/dashboard.js"></script>
    <script src="/vendors/assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>