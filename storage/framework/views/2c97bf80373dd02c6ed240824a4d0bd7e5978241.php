<?php $__env->startSection('content'); ?>




    <!-- Dashboard Start -->
    <section class="page-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Meu Perfil</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center mt-4 ">
                <div class="col-11">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <div class="profile-details p-4">
                                <div class="profile-img mx-auto my-3">
                                    <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1742&q=80"
                                         alt="user-img">
                                    <div class="add-profile text-center">
                                        <img src="<?php echo e(asset('assets/dashboard/img/add-img.png')); ?>" alt="" class="mx-auto">
                                    </div>
                                </div>
                                <h4>
                                    Ronald Richards
                                </h4>
                                <div class="profile-menu px-3 mt-4 mb-5">
                                    <ul class="list-group" id="tabs-nav">
                                        <a href="#tab1"
                                           class="list-group-item d-flex justify-content-between align-items-center item-active">
                                            <h5 class="mb-0"> <img src="<?php echo e(asset('assets/dashboard/img/profile-icon.png')); ?>" alt="icon"> Meus dados</h5>
                                            <span class=""><i class="icofont-simple-right"></i></span>
                                        </a>
                                        <a href="#tab2"
                                           class="list-group-item d-flex justify-content-between align-items-center ">
                                            <h5 class="mb-0"> <img src="<?php echo e(asset('assets/dashboard/img/change-pass.png')); ?>" alt="icon">
                                                Alterar senha</h5>
                                            <span class=""><i class="icofont-simple-right"></i></span>
                                        </a>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="profile-items p-5 tab-content" id="tab1">
                                <h5>
                                    Meus dados
                                </h5>
                            </div>
                            <div class="profile-items p-5 tab-content" id="tab2">
                                <h5>
                                    Alterar senh
                                </h5>
                                <div class="change-pass mt-5">
                                    <form class="text-center">
                                        <div class="form-group text-start mt-4">
                                            <label >Senha atual</label>
                                            <input type="email" class="form-control">
                                        </div>
                                        <div class="form-group text-start mt-4">
                                            <label >Nova senha</label>
                                            <input type="email" class="form-control">
                                        </div>
                                        <div class="form-group text-start mt-4">
                                            <label >Repetir nova senha</label>
                                            <input type="email" class="form-control">
                                        </div>

                                        <button type="submit" class="btn w-50 my-5 change-pass-btn">Salvar</button>
                                    </form>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard End -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        // Show the first tab and hide the rest
        $('#tabs-nav li:first-child').addClass('active');
        $('.tab-content').hide();
        $('.tab-content:first').show();

        // Click function
        $('#tabs-nav a').click(function(){
            $('#tabs-nav a').removeClass('item-active');
            $(this).addClass('item-active');
            $('.tab-content').hide();

            var activeTab = $(this).attr('href');
            console.log(activeTab);
            $(activeTab).fadeIn();
            return false;
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xamp\htdocs\loanManagement\resources\views/dashboard/admin/myprofile.blade.php ENDPATH**/ ?>