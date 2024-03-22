<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Document</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

  <title>General Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{asset('assets/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('assets/modules/jqvmap/dist/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{asset('assets/modules/weather-icon/css/weather-icons.min.css') }}">
  <link rel="stylesheet" href="{{asset('assets/modules/weather-icon/css/weather-icons-wind.min.css') }}">
  <link rel="stylesheet" href="{{asset('assets/modules/summernote/summernote-bs4.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
          <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
              <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
              <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
            </ul>
             <div class="search-element">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
              <button class="btn" type="submit"><i class="fas fa-search"></i></button>
              <div class="search-backdrop"></div>
              <div class="search-result">
                <div class="search-header">
                  Histories
                </div>
                <div class="search-item">
                  <a href="#">How to hack NASA using CSS</a>
                  <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-item">
                  <a href="#">Kodinger.com</a>
                  <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-item">
                  <a href="#">#Stisla</a>
                  <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-header">
                  Result
                </div>
                <div class="search-item">
                  <a href="#">
                    <img class="mr-3 rounded" width="30" src="assets/img/products/product-3-50.png" alt="product">
                    oPhone S9 Limited Edition
                  </a>
                </div>
                <div class="search-item">
                  <a href="#">
                    <img class="mr-3 rounded" width="30" src="assets/img/products/product-2-50.png" alt="product">
                    Drone X2 New Gen-7
                  </a>
                </div>
                <div class="search-item">
                  <a href="#">
                    <img class="mr-3 rounded" width="30" src="assets/img/products/product-1-50.png" alt="product">
                    Headphone Blitz
                  </a>
                </div>
                <div class="search-header">
                  Projects
                </div>
                <div class="search-item">
                  <a href="#">
                    <div class="search-icon bg-danger text-white mr-3">
                      <i class="fas fa-code"></i>
                    </div>
                    Stisla Admin Template
                  </a>
                </div>
                <div class="search-item">
                  <a href="#">
                    <div class="search-icon bg-primary text-white mr-3">
                      <i class="fas fa-laptop"></i>
                    </div>
                    Create a new Homepage Design
                  </a>
                </div>
              </div>
            </div>
          </form>
          <ul class="navbar-nav navbar-right">
            <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle "></i></a>
              <div class="dropdown-menu dropdown-list dropdown-menu-right">

              <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="{{asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
              <div class="d-sn--none d-lg-inline-block">Hi,{{auth()->user()->name}}</div>
              {{-- <div class="d-sm-none d-lg-inline-block"></div></a>   --}}
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Logged in 5 min ago</div>
                <a href="{{route('admin.index')}}" class="dropdown-item has-icon">
                  <i class="far fa-user"></i> Profile
                </a>
                {{-- <a href="features-activities.html" class="dropdown-item has-icon">
                  <i class="fas fa-bolt"></i> Activities
                </a>
                <a href="features-settings.html" class="dropdown-item has-icon">
                  <i class="fas fa-cog"></i> Settings
                </a> --}}
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{route('logout') }}">
                  @csrf
                <a href="#" onclick="event.preventDefault();
                this.closest('form').submit();"class="dropdown-item has-icon text-danger">
                  <i class="fas fa-sign-out-alt"></i> Logout
                </a>
              </form>
              </div>
            </li>
          </ul>
        </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            {{-- <a href="index.html">Stisla</a> --}}
          </div>
          {{-- <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div> --}}
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            {{-- <li class="dropdown active"> --}}
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                {{-- <li class=active><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li> --}}
              </ul>
            </li>
            {{-- <li class="menu-header">Starter</li> --}}
            <li class="dropdown">



                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Orders</span></a>
                    <ul class="dropdown-menu">

                <li><a class="nav-link"  href="">All Orders</a></li>
                <li><a class="nav-link" href="layout-default.html">Delivered orders</a></li>
                <li><a class="nav-link" href="layout-transparent.html">Pending orders</a></li>

              </ul>
            </li>
            {{-- <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li> --}}
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Products</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('admin.create')}}">Create Product</a></li>

                {{-- <li><a class="nav-link" href="">Edit product</a></li>{{--{{route('admin.products.edit', ['product' => $product]) }} --}}
                {{-- <li><a class="nav-link" href="{{'admin.products.index'}}">Delete product</a></li>  --}}
                <li><a class="nav-link" href="{{route('admin.view')}}">View product</a></li>

            {{-- <li class="menu-header">Pages</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
              <ul class="dropdown-menu">
                <li><a href="auth-forgot-password.html">Forgot Password</a></li>
                <li><a href="auth-login.html">Login</a></li>
                <li><a href="auth-register.html">Register</a></li>
                <li><a href="auth-reset-password.html">Reset Password</a></li>
              </ul>
            {{-- </li>
            {{-- <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Errors</span></a> --}}
              {{-- <ul class="dropdown-menu">
                <li><a class="nav-link" href="errors-503.html">503</a></li>
                <li><a class="nav-link" href="errors-403.html">403</a></li>
                <li><a class="nav-link" href="errors-404.html">404</a></li>
                <li><a class="nav-link" href="errors-500.html">500</a></li>
              </ul> --}}
            </li>
             <li class="dropdown">
               {{-- <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>Features</span></a> --}}
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="features-activities.html">Activities</a></li>
                <li><a class="nav-link" href="features-post-create.html">Post Create</a></li>
                <li><a class="nav-link" href="features-posts.html">Posts</a></li>
                {{-- <li><a class="nav-link" href="features-profile.html">Profile</a></li>
                <li><a class="nav-link" href="features-settings.html">Settings</a></li> --}}
                <li><a class="nav-link" href="features-setting-detail.html">Setting Detail</a></li>
                <li><a class="nav-link" href="features-tickets.html">Tickets</a></li>
              </ul>
            </li>
            {{-- <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Utilities</span></a>
              <ul class="dropdown-menu">
                <li><a href="utilities-contact.html">Contact</a></li>
                <li><a class="nav-link" href="utilities-invoice.html">Invoice</a></li>
                <li><a href="utilities-subscribe.html">Subscribe</a></li>
              </ul>
            </li>            <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li> --}}
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            {{-- <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a> --}}
          </div>        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section" style="margin-top: 60px;
    }

    ">
            @yield('content')
            {{-- {{$slot}} --}}
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
           &copy; 2024 <div class="bullet"></div> Gas delivery<a href="https://nauval.in/">Lucy & Caleb</a>
        </div>
        <div class="footer-right">

        </div>
      </footer>
    </div>
  </div>

   <!-- General JS Scripts -->
   <script src="{{asset('assets/modules/jquery.min.js') }}"></script>
   <script src="{{asset('assets/modules/popper.js')}}"></script>
   <script src="{{asset('assets/modules/tooltip.js') }}"></script>
   <script src="{{asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
   <script src="{{asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
   <script src="{{asset('assets/modules/moment.min.js') }}"></script>
   <script src="{{asset('assets/js/stisla.js') }}"></script>

   <!-- JS Libraies -->
   <script src="{{asset('assets/modules/simple-weather/jquery.simpleWeather.min.js') }}"></script>
   <script src="{{asset('assets/modules/chart.min.js') }}"></script>
   <script src="{{asset('assets/modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
   <script src="{{asset('assets/modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
   <script src="{{asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
   <script src="{{asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

   <!-- Page Specific JS File -->
   <script src="{{asset('assets/js/page/index-0.js') }}"></script>
   <script src="{{asset('assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js')}}"></script>

   <!-- Template JS File -->
   <script src="{{asset('assets/js/scripts.js') }}"></script>
   <script src="{{asset('assets/js/custom.js') }}"></script>

   <script>
    $.uploadPreview({
        input_field: "#image-upload",
        preview_box: "#image-preview",
        label_field: "#image-label",
        lable_default: "#choose File",
        label_selected: "#Change file",
        no_label: false,
        success_callback: null,

    });

   </script>
  @stack('scripts')
</body>
</html>
