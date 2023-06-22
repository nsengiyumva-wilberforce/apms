<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo/star-admin2-free/template/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 07:46:27 GMT -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>APMS</title>
  @include('layouts.links')
</head>

<body>
  <div class="container-scroller">
        <!-- Add topbar -->
        @include('layouts.topbar')
    <!-- partial -->
    <div class="d-flex flex-row">
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('layouts.sidebar')
      <!-- partial -->
      @yield('content')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        {{-- <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"> <a
                href="/" target="_blank">APMS</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights
              reserved.</span>
          </div>
        </footer> --}}
        <!-- partial -->
      </div>
      <!-- main-panel ends -->

    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  @include('layouts.scripts')

  @yield("page_scripts")
</body>
</html>
