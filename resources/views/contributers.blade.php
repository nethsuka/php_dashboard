<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <!-- <link href="./assets/demo/demo.css" rel="stylesheet" /> -->
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <!-- <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div> -->
          <!-- <p>CT</p> -->
        </a>
        <a href="/">
          <img src="assets/img/wis_logo.png" height="48px" alt="logo">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="javascript:;">
              <i class="nc-icon nc-bank"></i>
              <p>First Item</p>
            </a>
          </li>
          <li>
            <a href="/links">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>Social Media</p>
            </a>
          </li>
          <li class='active'>
            <a href="/contributers">
              <i class="nc-icon nc-controller-modern"></i>
              <p>Access Controls</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Title</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
          <a href="/new-member"><button type="button" class="btn btn-success float-right mr-4">Add Member</button></a>
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->name }}
                  <i class="nc-icon nc-circle-10"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                                            document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                  <!-- <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a> -->
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <!-- content -->
      <div class="content">
        @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show w-50">
            <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
              <i class="nc-icon nc-simple-remove"></i>
            </button>
            <span>{{ session('success') }}</span>
          </div>
        @elseif(session('error'))
          <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
              <i class="nc-icon nc-simple-remove"></i>
            </button>
            <span>{{ session('error') }}</span>
          </div>
        @endif
        <div class="row">
          <div class="col-md-9">
              <div class="card ">
                <div class="card-header ">
                  <h5 class="card-title">Member List</h5>
                  <p class="card-category">Access Controllers</p>
                </div>
                <div class="card-body ">
                  <div class="row">
                    <div class="col-md">&nbsp;&nbsp;&nbsp;Name</div>
                    <div class="col-sm">Membership</div>
                    <div class="col-sm"></div>
                    <div class="col-sm"></div>
                  </div><br>
                  @if(!$user_list->isEmpty())
                    @foreach($user_list as $member)
                      <div class="row">
                        <div class="col-md"><p><i class="fa fa-circle text-primary"></i> {{ $member->name }}</p></div>
                        <div class="col-sm"><p><b>{{ $member->type }}</b></p></div>
                        <div class="col-sm">
                          <form action="/contributers/{{ $member->id }}">
                            @csrf
                            <input type="submit" value="Change">
                          </form>
                        </div>
                        <div class="col-sm">
                          <form action="{{ route('new-member.destroy', $member->id)  }}" method="post" onsubmit="return confirm('Are you sure you want to delete this member?');">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm mt-0" title="Delete">
                                  <img src="./assets/img/bin-removebg-preview.png" alt="delete icon" height="15px">
                              </button>
                          </form>
                        </div>
                      </div>
                    @endforeach
                  @else
                    <p>There is no data to show</p>
                  @endif
                </div>
                <!-- <div class="card-footer ">
                  <div class="legend">
                    <i class="fa fa-circle text-primary"></i> Opened
                    <i class="fa fa-circle text-warning"></i> Read
                    <i class="fa fa-circle text-danger"></i> Deleted
                    <i class="fa fa-circle text-gray"></i> Unopened
                  </div>
                  <hr>
                  <div class="stats">
                    <i class="fa fa-calendar"></i> Number of emails sent
                  </div>
                </div> -->
              </div>
            </div>
            <div class="col-md-12">
              <h3 class="description">Your content here</h3>
            </div>
          </div>
        </div>
      </div>
      <!-- content ends here -->

      <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
        <div class="container-fluid">
          <div class="row">
            <div class="credits ml-auto">
              <span class="copyright">
                © 2024, made By Sanuja Nethsuka
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>

</html>
