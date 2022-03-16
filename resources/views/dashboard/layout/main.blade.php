<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/home.css')}}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('assets/dashboard/fonts/icofont/icofont.min.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css"
          integrity="sha512-CB+XYxRC7cXZqO/8cP3V+ve2+6g6ynOnvJD6p4E4y3+wwkScH9qEOla+BTHzcwB4xKgvWn816Iv0io5l3rAOBA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">



    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
@include('component.partial')
<div class="page-block ">

    <!-- respon -->

    <!-- Sidebar Start -->
    <div class="side-navbar">
        <div class="menu-icon text-right">
            <svg class="d-none d-lg-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="37"
                 height="27">
                <path fill="none" d="M0 0h24v24H0z"/>
                <path fill="#fff" d="M3 4h18v2H3V4zm0 7h18v2H3v-2zm0 7h18v2H3v-2z"/>
            </svg>
            <i class="icofont-ui-close d-block d-lg-none p-3" onclick={navbarHide()}></i>

        </div>
        <ul class="nav flex-column">
            @if(Auth::user()->role=='user')

                <li class="nav-item">
                    <a class="nav-link @yield('dashboard')" href="{{url('user/index')}}"> <img
                            src="{{asset('assets/dashboard/img/dashboard.png')}}" alt="dashboard-icon"
                            class="menu-icon"> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('upload')" href="{{url('user/upload')}}"> <img
                            src="{{asset('assets/dashboard/img/upload.png')}}" alt="dashboard-icon" class="menu-icon">
                        Upload</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('loan') " href="{{url('user/status')}}"> <img
                            src="{{asset('assets/dashboard/img/status.png')}}" alt="dashboard-icon" class="menu-icon">
                        Status</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('report')" href="{{url('user/report')}}"> <img
                            src="{{asset('assets/dashboard/img/rela.png')}}" alt="dashboard-icon" class="menu-icon">
                        Relatórios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('myprofile')" href="{{url('user/myprofile')}}"> <img
                            src="{{asset('assets/dashboard/img/profile.png')}}" alt="dashboard-icon" class="menu-icon">
                        Meu Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('refrel')" href="{{url('user/refrel')}}"> <img
                            src="{{asset('assets/dashboard/img/afil.png')}}" alt="dashboard-icon" class="menu-icon">
                        Afiliados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('history')" href="{{url('user/history')}}"> <img
                            src="{{asset('assets/dashboard/img/history.png')}}" alt="dashboard-icon" class="menu-icon">
                        History</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{url('logout')}}"> <img
                            src="{{asset('assets/dashboard/img/history.png')}}" alt="dashboard-icon" class="menu-icon">
                        Logout</a>
                </li>




            @endif

            @if(Auth::user()->role=='admin')


                <li class="nav-item">
                    <a class="nav-link @yield('dashboard')" href="{{url('admin/index')}}"> <img
                            src="{{asset('assets/dashboard/img/dashboard.png')}}" alt="dashboard-icon"
                            class="menu-icon"> Dashboard</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link @yield('user')" href="{{url('admin/user')}}"> <i class="fa fa-user"></i>
                        Users</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('companies')" href="{{url('admin/companies')}}"> <img src="{{asset('assets/dashboard/img/bx_link.png')}}"
                                                            alt="dashboard-icon" class="menu-icon">
                            Companies</a>
                    </li>

                <li class="nav-item">
                    <a class="nav-link @yield('loan')" href="#"> <img src="{{asset('assets/dashboard/img/status.png')}}"
                                                        alt="dashboard-icon" class="menu-icon">
                        Loan Status</a>
                </li>



                <li class="nav-item">
                    <a class="nav-link @yield('myprofile')" href="{{url('admin/myprofile')}}"> <img
                            src="{{asset('assets/dashboard/img/profile.png')}}" alt="dashboard-icon" class="menu-icon">
                        Meu Perfil</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link " href="{{url('logout')}}"> <img
                            src="{{asset('assets/dashboard/img/history.png')}}" alt="dashboard-icon" class="menu-icon">
                        Logout</a>
                </li>

            @endif

        </ul>

    </div>
    <!-- Siderbar End -->
    <main>
        <!-- header start -->
        <div class="header-bar">
            <div class="row m-0 w-100">
                <div class="col-md-6 col-12 px-0 py-1">

                    <div class="d-flex align-items-center">
                        <div class="menu-icon d-block d-lg-none" onClick="showNav()">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="37" height="27">
                                <path fill="none" d="M0 0h24v24H0z"/>
                                <path fill="#fff" d="M3 4h18v2H3V4zm0 7h18v2H3v-2zm0 7h18v2H3v-2z"/>
                            </svg>
                        </div>
                        <div class="logo-side">
                            <img src="{{asset('assets/dashboard/img/Logo.png')}}" alt="header-img" class="header-logo">
                        </div>
                    </div>


                </div>
                <div class="col-md-6 col-12 p-0">
                    <div
                        class="profile-side d-flex justify-content-md-end justify-content-between align-items-center mt-3 mt-md-0">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="25"
                             height="30">
                            <path fill="none" d="M0 0h24v24H0z"/>
                            <path fill="#fff"
                                  d="M20 17h2v2H2v-2h2v-7a8 8 0 1 1 16 0v7zM9 21h6v2H9v-2z"/>
                        </svg>
                        <img
                            src="{{asset('assets/dashboard/profile/'.Auth::user()->profile.'')}}"
                            alt="user-img" class="user-img">
                    </div>
                </div>
            </div>
        </div><!-- header bar end -->
        <!-- header end -->


        @yield('content')


    </main>
</div>




<!-- Bootstrap js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

@yield('js')

</body>

</html>
<div></div>

<script>
    var navbar = document.querySelector(".side-navbar").style;

    function showNav() {

        console.log(navbar);

        console.log('reh');
        console.log('suf');

        navbar.left = 0 + "px";
    }

    function navbarHide() {
        navbar.left = -216 + "px";
    }
</script>






