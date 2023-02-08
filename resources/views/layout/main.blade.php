<!DOCTYPE html>
<html lang="es_MX" dir="ltr">

<head>
    <head>
        <meta charset="utf-8" /><meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>@yield('title') | UAQ</title>
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content=" Descripción del módulo " name="description" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('/public/img/logos/ico.png') }}">

        <!-- App css -->
        <link href="{{ url('/public/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('/public/css/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('/public/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('/public/css/style.css').'?'.date('msh') }}" rel="stylesheet" type="text/css" />

        @yield('header')
    </head>

        <!-- Top Bar Start -->
        <!-- <div class="topbar">
             <nav class="navbar-custom">
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                            <img src="{{ url('/public/img/logos/anahuac.png') }}" alt="Anáhuac Querétaro" class="logo-sm">
                        </span>
                        <span>
                            <img src="{{ url('/public/img/logos/anahuac.png') }}" alt="Anáhuac Querétaro" class="logo-lg">
                        </span>
                    </a>
                </div>
            </nav>
        </div> -->

        <div class="topbar">
             <!-- Navbar -->
             <nav class="navbar-custom">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                            <img src="{{ url('/public/img/logos/anahuac.png') }}" alt="logo-small" class="logo-sm">
                        </span>
                        <!-- <span>
                            <img src="{{ url('/public/img/logos/anahuac.png') }}" alt="logo-large" class="logo-lg">
                        </span> -->
                    </a>
                </div>

                <ul class="list-unstyled topbar-nav float-right mb-0">

                      <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="{{url('/public//img/user/user.png')}}" alt="profile-user" class="rounded-circle" />
                            <span class="ml-1 nav-user-name hidden-sm"> <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
 							<a class="dropdown-item"><i class="dripicons-user text-muted mr-2"></i> {{ Crypt::decryptString(auth()->user()->name)}}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('logout')}}"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                        </div>
                    </li>
                    <li class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link" id="mobileToggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>
                </ul>

                <ul class="list-unstyled topbar-nav mb-0">
                    

                </ul>

            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->

        <div class="page-wrapper-img">
            <div class="page-wrapper-img-inner">

                <!-- Page-Title -->
                    <div class="col-sm-12">
                      <div class="row">
                        <div class="page-title-box">
                          @if(isset($info))

                          @if($info['act_menu']->men_name == "Inicio")
                            <h2 class="page-title mb-2">  <i class="{{ $info['act_menu']->men_icon }} mr-2"></i>{{ (empty($info['act_submenu']))?$info['act_menu']['men_name']:(json_decode($info['act_menu']['sub_bread'], true)[$info['act_submenu']]['name']) }}</h2>
                            <div class="">

                              <!-- breadcrumb -->

                            </div>
                          @else

                          <h4 class="page-title mb-2">  <i class="{{ $info['act_menu']->menu->men_icon }} mr-2"></i>{{ (empty($info['act_submenu']))?$info['act_menu']['men_name']:(json_decode($info['act_menu']['sub_bread'], true)[$info['act_submenu']]['name']) }}</h4>
                          <div class="">

                            <!-- breadcrumb -->
                            <ol class="breadcrumb">
                              {!! (empty($info['act_submenu'])) ? "" :
                              '<li class="breadcrumb-item">' . $info['act_menu']->menu->men_name."</li>".
                              '<li class="breadcrumb-item">' . $info['act_menu']->sub_name ."</li>".
                              '<li class="breadcrumb-item">' . (json_decode($info['act_menu']['sub_bread'], true)[$info['act_submenu']]['name']) ."</li>" !!}
                            </ol>
                          </div>
                          @endif
                          @endif
                        </div><!--end page title box-->
                    </div><!--end col-->
                </div><!--end row-->

                <!-- end page title end breadcrumb -->
            </div><!--end page-wrapper-img-inner-->
        </div><!--end page-wrapper-img-->


        <div class="page-wrapper">
            <div class="page-wrapper-inner">
                <div class="navbar-custom-menu">
                    <div class="container-fluid">
                      @include('general.menu')
                    </div>
                </div>
                <!-- end left-sidenav-->
            </div>
            <!--end page-wrapper-inner -->
            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                  @yield('content')
                </div>
                <footer class="footer text-center text-sm-left">
                    &copy; 2022 Universidad Anáhuac Querétaro  <span class="text-muted d-none d-sm-inline-block float-right"> by DMNH</span>
                </footer>
            </div>
        </div>

        <!-- jQuery  -->
        <script src="{{ url('/public/js/jquery.min.js') }}"></script>
        <script src="{{ url('/public/js/bootstrap.bundle.min.js') }}"></script>
        @yield('footer')

        <!-- App js -->
        <script src="{{ url('assets/js/app.js') }}"></script>





    </body>
</html>
