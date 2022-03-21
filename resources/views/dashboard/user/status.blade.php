@extends('dashboard.layout.main')
@section('loan')
    active
@endsection
@section('content')

    <style>



        .progress {
            width: 30px;
            height: 30px;
            font-size: 15px;
            color: #fff;
            border-radius: 50%;
            overflow: hidden;
            position: relative;
            background: white;
            text-align: center;

        }


        .progress .title {
            position: relative;
            z-index: 100;
            margin: auto
        }

        .progress .overlay {
            width: 50%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            background-color: white;
        }

        .progress .left, .progress .right {
            width: 50%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            border: 3px solid #26da17;
            border-radius: 100px 0px 0px 100px;
            border-right: 0;
            transform-origin: right;
        }

        .icofont-tick-mark {
            color: gray;
        }

        .animate1 {
            animation: load1 1s linear forwards;
        }

        .animate2 {
            animation: load2 1s linear forwards;
        }

        .animate3 {
            animation: load3 1s linear forwards;
        }

        .animate4 {
            animation: load4 1s linear forwards;
        }


        /*.progress:nth-of-type(2) .right, .progress:nth-of-type(3) .right {animation: load2 .5s linear forwards 1s;}*/

        /*.progress:last-of-type .right, .progress:first-of-type .right {animation: load3 .8s linear forwards 1s;}*/

        @keyframes load1 {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(110deg);
            }
        }

        @keyframes load2 {
            0% {
                transform: rotate(110deg);
            }

            100% {
                transform: rotate(180deg);
            }
        }

        @keyframes load3 {
            0% {
                z-index: 100;
                transform: rotate(180deg);
            }

            100% {
                z-index: 100;
                transform: rotate(240deg);
            }
        }

        @keyframes load4 {
            0% {
                z-index: 100;
                transform: rotate(240deg);
            }

            100% {
                z-index: 100;
                transform: rotate(360deg);
            }
        }
    </style>




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
            <div class="row justify-content-center w-100">
                <div class="col-12 p-0 my-4">
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
                                                <th class="table-heading" colspan="3">Home equity</th>

                                                <th>Modalidade</th>
                                                <th>Tipo</th>
                                                <th>Valor de Crédito</th>
                                                <th>Status da Operação</th>
                                                <th>Atividades</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($equity as $equity)
                                                <tr>
                                                    <td class="px-3">{{$equity->name}}</td>
                                                    <td class=" mx-auto">

                                                        <div class="progress">
                                                            <span class="title timer" data-from="0" data-to="100"
                                                                  data-speed="1800">  <i class="icofont-tick-mark"></i></span>
                                                            <div class="overlay"></div>
                                                            <div
                                                                class="left  @if($equity->status=="Loan under Analysis" || $equity->status=="Pending Resolution" || $equity->status=="Finished") animate1 @endif   @if( $equity->status=="Pending Resolution" || $equity->status=="Finished") animate2 @endif"></div>
                                                            <div
                                                                class="right  @if($equity->status=="Pending Resolution" || $equity->status=="Finished") animate3 @endif  @if($equity->status=="Finished") animate4 @endif "></div>
                                                        </div>


                                                    </td>
                                                    <td class="msg">
                                                        <a href="{{url("user/comment/$equity->id")}}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                 width="24" height="24">
                                                                <path fill="none" d="M0 0h24v24H0z"/>
                                                                <path fill="gray"
                                                                      d="M7.291 20.824L2 22l1.176-5.291A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.956 9.956 0 0 1-4.709-1.176zm.29-2.113l.653.35A7.955 7.955 0 0 0 12 20a8 8 0 1 0-8-8c0 1.334.325 2.618.94 3.766l.349.653-.655 2.947 2.947-.655z"/>
                                                            </svg>
                                                            <div class="msg-no">
                                                                {{count($equity->comment)}}
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>{{$equity->category}}</td>
                                                    <td>{{$equity->type}}</td>
                                                    <td>{{$equity->price}}</td>
                                                    <td class="loan-status
@if($equity->status=="Pending") btn-danger
@elseif($equity->status=="Unfit Loan") btn-danger
@elseif($equity->status=="Loan Rejected") btn-danger
@elseif($equity->status=="Documentation Pending") btn-warning
@elseif($equity->status=="Loan under Analysis") btn-primary
@elseif($equity->status=="Pending Resolution") btn-primary
@elseif($equity->status=="Finished") btn-success
@endif
                                                        ">{{$equity->status}}</td>
                                                    <td class="msg">
                                                        <a href="{{url('user/loan/doc/'.$equity->id.'')}}"> <i
                                                                class="fa fa-dedent"></i>

                                                            <div class="msg-no">
                                                                {{count($equity->document)}}
                                                            </div>
                                                        </a>
                                                    </td>

                                                </tr>

                                            @endforeach


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
                                                <th class="table-heading" colspan="3">Financiamento Imobiliário</th>


                                                <th>Modalidade</th>
                                                <th>Tipo</th>
                                                <th>Valor de Crédito</th>
                                                <th>Status da Operação</th>
                                                <th>Atividades</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($estate as $estate)
                                                <tr>
                                                    <td class="px-3">{{$estate->name}}</td>
                                                    <td class=" mx-auto">
                                                        <div class="progress">
                                                            <span class="title timer" data-from="0" data-to="100"
                                                                  data-speed="1800">  <i class="icofont-tick-mark"></i></span>
                                                            <div class="overlay"></div>
                                                            <div
                                                                class="left  @if($estate->status=="Loan under Analysis" || $estate->status=="Pending Resolution" || $estate->status=="Finished") animate1 @endif   @if( $estate->status=="Pending Resolution" || $estate->status=="Finished") animate2 @endif"></div>
                                                            <div
                                                                class="right  @if($estate->status=="Pending Resolution" || $estate->status=="Finished") animate3 @endif  @if($estate->status=="Finished") animate4 @endif "></div>
                                                        </div>


                                                    </td>
                                                    <td class="msg">
                                                        <a href="{{url("user/comment/$estate->id")}}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                 width="24" height="24">
                                                                <path fill="none" d="M0 0h24v24H0z"/>
                                                                <path fill="gray"
                                                                      d="M7.291 20.824L2 22l1.176-5.291A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.956 9.956 0 0 1-4.709-1.176zm.29-2.113l.653.35A7.955 7.955 0 0 0 12 20a8 8 0 1 0-8-8c0 1.334.325 2.618.94 3.766l.349.653-.655 2.947 2.947-.655z"/>
                                                            </svg>
                                                            <div class="msg-no">
                                                                {{count($estate->comment)}}
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>{{$estate->category}}</td>
                                                    <td>{{$estate->type}}</td>
                                                    <td>{{$estate->price}}</td>
                                                    <td class="loan-status
@if($estate->status=="Pending") btn-danger
@elseif($estate->status=="Unfit Loan") btn-danger
@elseif($estate->status=="Loan Rejected") btn-danger
@elseif($estate->status=="Documentation Pending") btn-warning
@elseif($estate->status=="Loan under Analysis") btn-primary
@elseif($estate->status=="Pending Resolution") btn-primary
@elseif($estate->status=="Finished") btn-success
@endif
                                                        ">{{$estate->status}}</td>
                                                    <td class="msg">
                                                        <a href="{{url('user/loan/doc/'.$estate->id.'')}}"> <i
                                                                class="fa fa-dedent"></i>

                                                            <div class="msg-no">
                                                                {{count($estate->document)}}
                                                            </div>
                                                        </a>
                                                    </td>

                                                </tr>

                                            @endforeach
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
