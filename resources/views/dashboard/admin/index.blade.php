@extends('dashboard.layout.main')

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
                        <p>Seja bem vindo ao novo Dashboard! Precisa de ajuda? <a href="#">Clique aqui!</a> </p>
                    </div>

                    <div class="blank-div mt-4"></div>
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
                                        <img src="{{asset('assets/dashboard/img/defual.png')}}" alt="icon">
                                        <p class="mb-0 pl-2">Veja nosso novo sistema de afiliados, indique e
                                            ganhe.
                                            Clique no menu a esquerda.</p>
                                    </div>
                                    <div class="d-flex align-items-start mb-3">
                                        <img src="{{asset('assets/dashboard/img/defual.png')}}" alt="icon">
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
