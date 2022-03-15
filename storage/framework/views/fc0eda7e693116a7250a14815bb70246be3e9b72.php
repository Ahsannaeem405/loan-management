<?php $__env->startSection('content'); ?>


    <!-- Dashboard Start -->
    <section class="page-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Relatórios</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="report-card mt-4 d-flex align-items-center">
                        <img src="<?php echo e(asset('assets/dashboard/img/doc file.png')); ?>" alt="alt-file">
                        <h6>Relatório jurídico</h6>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path fill="white" d="M3 19h18v2H3v-2zm10-5.828L19.071 7.1l1.414 1.414L12 17 3.515 8.515 4.929 7.1 11 13.17V2h2v11.172z"/></svg>
                    </div>
                </div>
                <div class="col-11">
                    <div class="report-card mt-4 d-flex align-items-center">
                        <img src="<?php echo e(asset('assets/dashboard/img/doc file.png')); ?>" alt="alt-file">
                        <h6>Formulário</h6>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path fill="white" d="M3 19h18v2H3v-2zm10-5.828L19.071 7.1l1.414 1.414L12 17 3.515 8.515 4.929 7.1 11 13.17V2h2v11.172z"/></svg>
                    </div>
                </div>
                <div class="col-11">
                    <div class="report-card mt-4 d-flex align-items-center">
                        <img src="<?php echo e(asset('assets/dashboard/img/doc file.png')); ?>" alt="alt-file">
                        <h6>Contráto</h6>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path fill="white" d="M3 19h18v2H3v-2zm10-5.828L19.071 7.1l1.414 1.414L12 17 3.515 8.515 4.929 7.1 11 13.17V2h2v11.172z"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xamp\htdocs\loanManagement\resources\views/dashboard/user/report.blade.php ENDPATH**/ ?>