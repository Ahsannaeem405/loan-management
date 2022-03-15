@extends('dashboard.layout.main')

@section('content')


    <!-- page body Start -->
    <section class="page-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">status</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-11 p-0 my-4">
                    <div class="status">
                        <div class="row">

                            <div class="col-lg-6 col-12">

                                <h5>
                                    Selecione o tipo do empréstimo
                                </h5>

                            </div>

                            <div class="col-lg-6 col-12">

                                <h5>
                                    Selecione o tipo do empréstimo
                                </h5>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="status-table equity  mt-4">
                                    <div class="table-icons my-2 mx-2">
                                        <i class="icofont-caret-down"></i>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                            <tr>
                                                <th class="table-heading">Home equity</th>
                                                <th></th>
                                                <th></th>
                                                <th>Modalidade</th>
                                                <th>Tipo</th>
                                                <th>Valor de Crédito</th>
                                                <th>Status da Operação</th>
                                                <th>Atividades</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="px-3">HAUNT INCORPORADORA & DESIGN LTDA</td>
                                                <td class=" mx-auto">
                                                    <div class="marked">
                                                        <i class="icofont-tick-mark"></i>
                                                    </div>
                                                </td>
                                                <td class="msg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path  fill="gray" d="M7.291 20.824L2 22l1.176-5.291A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.956 9.956 0 0 1-4.709-1.176zm.29-2.113l.653.35A7.955 7.955 0 0 0 12 20a8 8 0 1 0-8-8c0 1.334.325 2.618.94 3.766l.349.653-.655 2.947 2.947-.655z"/></svg>
                                                    <div class="msg-no">
                                                        5
                                                    </div>
                                                </td>
                                                <td>Home Equity</td>
                                                <td>PJ</td>
                                                <td>R$ 750.000</td>
                                                <td class="loan-status collect">Coleta de docume...</td>
                                                <td>8</td>

                                            </tr>
                                            <tr>
                                                <td class="px-3">DARRIGO INCORPORADORA E SERVICOS LTDA</td>
                                                <td class=" mx-auto">
                                                    <div class="marked">
                                                        <i class="icofont-tick-mark"></i>
                                                    </div>
                                                </td>
                                                <td class="msg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path  fill="gray" d="M7.291 20.824L2 22l1.176-5.291A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.956 9.956 0 0 1-4.709-1.176zm.29-2.113l.653.35A7.955 7.955 0 0 0 12 20a8 8 0 1 0-8-8c0 1.334.325 2.618.94 3.766l.349.653-.655 2.947 2.947-.655z"/></svg>
                                                    <div class="msg-no">
                                                        5
                                                    </div>
                                                </td>
                                                <td>Home Equity</td>
                                                <td>PJ</td>
                                                <td>R$ 1.750.000</td>
                                                <td class="loan-status approved">PRÉ-APROVADO</td>
                                                <td>6</td>

                                            </tr>
                                            <tr>
                                                <td class="px-3">FOCO - INTERMEDIAÇÃO DE NEGÓCIOS</td>
                                                <td class=" mx-auto">
                                                    <div class="marked">
                                                        <i class="icofont-tick-mark"></i>
                                                    </div>
                                                </td>
                                                <td class="msg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path  fill="gray" d="M7.291 20.824L2 22l1.176-5.291A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.956 9.956 0 0 1-4.709-1.176zm.29-2.113l.653.35A7.955 7.955 0 0 0 12 20a8 8 0 1 0-8-8c0 1.334.325 2.618.94 3.766l.349.653-.655 2.947 2.947-.655z"/></svg>
                                                    <div class="msg-no">
                                                        5
                                                    </div>
                                                </td>
                                                <td>Home Equity</td>
                                                <td>PJ</td>
                                                <td>R$ 800.000</td>
                                                <td class="loan-status collect">Coleta de docume...</td>
                                                <td>8</td>

                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="status-table  real-estate mt-4">
                                    <div class="table-icons my-2 mx-2">
                                        <i class="icofont-caret-down"></i>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                            <tr>
                                                <th class="table-heading">Financiamento Imobiliário</th>
                                                <th></th>
                                                <th></th>
                                                <th>Modalidade</th>
                                                <th>Tipo</th>
                                                <th>Valor de Crédito</th>
                                                <th>Status da Operação</th>
                                                <th>Atividades</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="px-3">HAUNT INCORPORADORA & DESIGN LTDA</td>
                                                <td class=" mx-auto">
                                                    <div class="marked">
                                                        <i class="icofont-tick-mark"></i>
                                                    </div>
                                                </td>
                                                <td class="msg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path  fill="gray" d="M7.291 20.824L2 22l1.176-5.291A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.956 9.956 0 0 1-4.709-1.176zm.29-2.113l.653.35A7.955 7.955 0 0 0 12 20a8 8 0 1 0-8-8c0 1.334.325 2.618.94 3.766l.349.653-.655 2.947 2.947-.655z"/></svg>
                                                    <div class="msg-no">
                                                        5
                                                    </div>
                                                </td>
                                                <td>Home Equity</td>
                                                <td>PJ</td>
                                                <td>R$ 750.000</td>
                                                <td class="loan-status internal-due">Diligência Interna</td>
                                                <td>8</td>

                                            </tr>
                                            <tr>
                                                <td class="px-3">DARRIGO INCORPORADORA E SERVICOS LTDA</td>
                                                <td class=" mx-auto">
                                                    <div class="marked">
                                                        <i class="icofont-tick-mark"></i>
                                                    </div>
                                                </td>
                                                <td class="msg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path  fill="gray" d="M7.291 20.824L2 22l1.176-5.291A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.956 9.956 0 0 1-4.709-1.176zm.29-2.113l.653.35A7.955 7.955 0 0 0 12 20a8 8 0 1 0-8-8c0 1.334.325 2.618.94 3.766l.349.653-.655 2.947 2.947-.655z"/></svg>
                                                    <div class="msg-no">
                                                        5
                                                    </div>
                                                </td>
                                                <td>Home Equity</td>
                                                <td>PJ</td>
                                                <td>R$ 1.750.000</td>
                                                <td class="loan-status analysis">Análise de fundo</td>
                                                <td>6</td>

                                            </tr>
                                            <tr>
                                                <td class="px-3">FOCO - INTERMEDIAÇÃO DE NEGÓCIOS</td>
                                                <td class=" mx-auto">
                                                    <div class="marked">
                                                        <i class="icofont-tick-mark"></i>
                                                    </div>
                                                </td>
                                                <td class="msg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path  fill="gray" d="M7.291 20.824L2 22l1.176-5.291A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.956 9.956 0 0 1-4.709-1.176zm.29-2.113l.653.35A7.955 7.955 0 0 0 12 20a8 8 0 1 0-8-8c0 1.334.325 2.618.94 3.766l.349.653-.655 2.947 2.947-.655z"/></svg>
                                                    <div class="msg-no">
                                                        5
                                                    </div>
                                                </td>
                                                <td>Home Equity</td>
                                                <td>PJ</td>
                                                <td>R$ 800.000</td>
                                                <td class="loan-status analysis">Análise de fundo</td>
                                                <td>8</td>

                                            </tr>
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

    </section>
    <!-- page body End -->
@endsection
