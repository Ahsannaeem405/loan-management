@extends('dashboard.layout.main')
@section('dashboard')
active
@endsection
@section('content')


    <!-- Dashboard Start -->
    <section class="page-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-lg-9 col-11 p-0 my-5">
                    <div class="welcom-note py-3 px-2 ">
                        <p>Seja bem vindo ao novo Dashboard! </p>
                    </div>

                    <div class="w-100 mt-4 d-flex justify-content-center">
                        <img style="border-radius: 20px" src="{{asset('assets/dashboard/banner/'.$banner->image.'')}}" class="img-fluid" alt="">
                    </div>
                    <!--black-div end-->

                    <div class="blog-notes  w-100 ">
                        <div class="row">
                            <div class="col-lg-6 col-12 mt-4">
                                <h4>ÚLTIMAS DO BLOG</h4>
                                <div class="details-block">
                                    <div class="d-flex align-items-start mb-3">
                                        <i class="icofont-wifi"></i>
                                        <p class="mb-0 pl-2">Como imprimir dinheiro em flops com pares sendo o
                                            agressor
                                            pre-flop</p>
                                    </div>
                                    <div class="d-flex align-items-start mb-3">
                                        <i class="icofont-wifi"></i>
                                        <p class="mb-0 pl-2">Saiba como calcular o valor esperado nas apostas
                                            esportivas
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-start mb-3">
                                        <i class="icofont-wifi"></i>
                                        <p class="mb-0 pl-2">ICM do Poker - Explicado</p>
                                    </div>
                                    <div class="d-flex align-items-start mb-3">
                                        <i class="icofont-wifi"></i>
                                        <p class="mb-0 pl-2">Quando (e como) os melhores do mundo overbetam no
                                            turn</p>
                                    </div>
                                    <div class="d-flex align-items-start mb-3">
                                        <i class="icofont-wifi"></i>
                                        <p class="mb-0 pl-2">Respostas do Quiz: Quando defender o big blind</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 mt-4">
                                <h4>AVISOS</h4>
                                <div class="details-block">
                                    <div class="d-flex align-items-start mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path fill="gray" d="M7.291 20.824L2 22l1.176-5.291A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.956 9.956 0 0 1-4.709-1.176zm.29-2.113l.653.35A7.955 7.955 0 0 0 12 20a8 8 0 1 0-8-8c0 1.334.325 2.618.94 3.766l.349.653-.655 2.947 2.947-.655z"></path>
                                        </svg>
                                        <p class="mb-0 pl-2">Veja nosso novo sistema de afiliados, indique e
                                            ganhe.
                                            Clique no menu a esquerda.</p>
                                    </div>
                                    <div class="d-flex align-items-start mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path fill="gray" d="M7.291 20.824L2 22l1.176-5.291A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.956 9.956 0 0 1-4.709-1.176zm.29-2.113l.653.35A7.955 7.955 0 0 0 12 20a8 8 0 1 0-8-8c0 1.334.325 2.618.94 3.766l.349.653-.655 2.947 2.947-.655z"></path>
                                        </svg>
                                        <p class="mb-0 pl-2">Consulte o histórico de transações anteriores a
                                            17/05/2021
                                            aqui.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- blog-notes end -->
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard End -->


@endsection
