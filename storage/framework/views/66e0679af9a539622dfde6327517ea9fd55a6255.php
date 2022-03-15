<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/dashboard/css/home.css')); ?>">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('assets/dashboard/fonts/icofont/icofont.min.css')); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css" integrity="sha512-CB+XYxRC7cXZqO/8cP3V+ve2+6g6ynOnvJD6p4E4y3+wwkScH9qEOla+BTHzcwB4xKgvWn816Iv0io5l3rAOBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
<div class="page-block ">
    <!-- Sidebar Start -->
    <div class="side-navbar">
        <div class="menu-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="37" height="27">
                <path fill="none" d="M0 0h24v24H0z" />
                <path fill="#fff" d="M3 4h18v2H3V4zm0 7h18v2H3v-2zm0 7h18v2H3v-2z" />
            </svg>
        </div>
        <ul class="nav flex-column">
            <?php if(Auth::user()->role=='user'): ?>

                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo e(url('user/index')); ?>"> <img src="<?php echo e(asset('assets/dashboard/img/dashboard.png')); ?>" alt="dashboard-icon"
                                                              class="menu-icon"> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo e(url('user/upload')); ?>"> <img src="<?php echo e(asset('assets/dashboard/img/upload.png')); ?>" alt="dashboard-icon" class="menu-icon">
                        Upload</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo e(url('user/status')); ?>"> <img src="<?php echo e(asset('assets/dashboard/img/status.png')); ?>" alt="dashboard-icon" class="menu-icon">
                        Status</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo e(url('user/report')); ?>"> <img src="<?php echo e(asset('assets/dashboard/img/rela.png')); ?>" alt="dashboard-icon" class="menu-icon">
                        Relatórios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo e(url('user/myprofile')); ?>"> <img src="<?php echo e(asset('assets/dashboard/img/profile.png')); ?>" alt="dashboard-icon" class="menu-icon">
                        Meu Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo e(url('user/refrel')); ?>"> <img src="<?php echo e(asset('assets/dashboard/img/afil.png')); ?>" alt="dashboard-icon" class="menu-icon">
                        Afiliados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo e(url('user/history')); ?>"> <img src="<?php echo e(asset('assets/dashboard/img/history.png')); ?>" alt="dashboard-icon" class="menu-icon">
                        History</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="<?php echo e(url('logout')); ?>"> <img src="<?php echo e(asset('assets/dashboard/img/history.png')); ?>" alt="dashboard-icon" class="menu-icon">
                        Logout</a>
                </li>




            <?php endif; ?>

            <?php if(Auth::user()->role=='admin'): ?>


                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo e(url('admin/index')); ?>"> <img src="<?php echo e(asset('assets/dashboard/img/dashboard.png')); ?>" alt="dashboard-icon"
                                                                                      class="menu-icon"> Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#"> <i class="fa fa-user"></i>
                            Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#"> <img src="<?php echo e(asset('assets/dashboard/img/status.png')); ?>" alt="dashboard-icon" class="menu-icon">
                          Loan  Status</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#"> <img src="<?php echo e(asset('assets/dashboard/img/bx_link.png')); ?>" alt="dashboard-icon" class="menu-icon">
                            Companies</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo e(url('admin/myprofile')); ?>"> <img src="<?php echo e(asset('assets/dashboard/img/profile.png')); ?>" alt="dashboard-icon" class="menu-icon">
                            Meu Perfil</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo e(url('logout')); ?>"> <img src="<?php echo e(asset('assets/dashboard/img/history.png')); ?>" alt="dashboard-icon" class="menu-icon">
                            Logout</a>
                    </li>

            <?php endif; ?>



        </ul>

    </div>
    <!-- Siderbar End -->
    <main>
        <!-- header start -->
        <div class="header-bar">
            <div class="row m-0 w-100">
                <div class="col-md-6 col-12 px-0 py-1">
                    <div class="logo-side">
                        <img src="<?php echo e(asset('assets/dashboard/img/Logo.png')); ?>" alt="header-img" class="header-logo">
                    </div>
                </div>
                <div class="col-md-6 col-12 p-0">
                    <div
                        class="profile-side d-flex justify-content-md-end justify-content-between align-items-center mt-3 mt-md-0">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="25"
                             height="30">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path fill="#fff"
                                  d="M20 17h2v2H2v-2h2v-7a8 8 0 1 1 16 0v7zM9 21h6v2H9v-2z" />
                        </svg>
                        <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                             alt="user-img" class="user-img">
                    </div>
                </div>
            </div>
        </div><!-- header bar end -->
        <!-- header end -->


        <?php echo $__env->yieldContent('content'); ?>


    </main>
</div>

<!-- Bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>






</body>

</html>
<?php /**PATH D:\Xamp\htdocs\loan-management\resources\views/dashboard/layout/main.blade.php ENDPATH**/ ?>