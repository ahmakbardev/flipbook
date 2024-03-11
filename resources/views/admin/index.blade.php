<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="DC.publisher" content="Tahta Media Group" />
  <meta name="DC.date" content="2024-01-01" />
  <meta name="DC.type" content="Book" />
  <meta name="DC.type" content="PeerReviewed" />
  <meta name="DC.format" content="text" />
  <meta name="DC.language" content="en" />
  <meta name="DC.identifier" content="http://repository.um.ac.id/5409/1/fullteks.pdf" />
  <meta name="DC.format" content="image" />
  <meta name="DC.language" content="en" />
  <meta name="DC.identifier" content="http://repository.um.ac.id/5409/2/cover.jpeg" />
  <title>Admin Flipbook</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assets/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('logo.png') }}" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.html">
            <h4 class="fw-bold">Flipbook</h4>
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <h4 class="fw-bold">Flipbook</h4>
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            {{-- <h1 class="welcome-text">Halo <span class="text-black fw-bold">{{ Auth::->name }}</span></h1> --}}
            <h1 class="welcome-text">Halo <span class="text-black fw-bold">{{ auth('admin')->name }}</span></h1>

            <h3 class="welcome-sub-text">Ini adalah kumpulan buku flipbook kamu </h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">

          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="{{ asset('user.webp')}}" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              {{-- <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="{{ asset('assets/images/faces/face8.jpg')}}" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a> --}}
              <a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->


      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index')}}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                    <div class="row">
                      <div class="col-lg-12 d-flex flex-column">

                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                                <div class="card-body">
                                    <div class="d-sm-flex justify-content-between align-items-start">
                                        <div>
                                            <h4 class="card-title card-title-dash">Flipbook list</h4>
                                            <p class="card-subtitle card-subtitle-dash">Jumlah Flipbook: {{ $pdfs->count() }}</p>
                                        </div>
                                        <div>
                                            <a href="{{ route('pdfs.create') }}" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button">
                                                <i class="mdi mdi-plus"></i>Tambah Flipbook
                                            </a>
                                        </div>
                                    </div>
                                    <div class="table-responsive  mt-1">
                                        <table class="table select-table">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>File</th>
                                                    <th>Cover</th>
                                                    <th>Actions</th> <!-- New column for Edit and Delete actions -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($pdfs as $pdf)
                                                <tr>
                                                    <td>{{ $pdf->title }}</td>
                                                    <td>
                                                        <a href="{{ route('details', $pdf) }}" target="_blank">View PDF</a>
                                                    </td>
                                                    <td>
                                                        <img src="{{ Storage::url($pdf->cover_image) }}" alt="Cover Image" width="80" height="80">
                                                    </td>
                                                    <td>
                                                        <!-- Edit button linking to the edit route with the PDF ID -->
                                                        <a href="{{ route('pdfs.edit', $pdf->id) }}" class="btn btn-warning">Edit</a>

                                                        <!-- Form for deleting the PDF using the destroy route -->
                                                        <form action="{{ route('pdfs.destroy', $pdf->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          {{-- <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div> --}}
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('assets/js/off-canvas.js')}}"></script>
  <script src="{{ asset('assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('assets/js/template.js')}}"></script>
  <script src="{{ asset('assets/js/settings.js')}}"></script>
  <script src="{{ asset('assets/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('assets/js/jquery.cookie.js" type="text/javascript')}}"></script>
  <script src="{{ asset('assets/js/dashboard.js')}}"></script>
  <script src="{{ asset('assets/js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>

