@extends('dashboard.layout.main')
@section('history')
    active
@endsection
@section('content')


    <style>

        .main-card1 {
            background-image: linear-gradient(90deg, #77e1da, #14b3a9);
            color: white;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            border-radius: 10px
        }

        .main-card2 {
            background-image: linear-gradient(90deg, #6053fa, #3a2beb);
            color: white;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            border-radius: 10px
        }
    </style>

    <!-- Dashboard Start -->
    <section class="page-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">History</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-lg-12  my-5">
                    <div class="row ">


                        <div class="col-lg-4  col-12 mb-5">
                            <div class="card p-3 main-card1" style="">
                                <div class=" d-flex">
                                    <div class="mr-3 w-25 text-center align-items-center d-flex">
                                        <i class="fa fa-user w-100" style="font-size: 4rem"></i>
                                    </div>

                                    <div class="">
                                        <p class="mb-0 mt-2" style="font-size: 20px">Pending</p>
                                        <p style="font-size: 20px">{{$pending}}</p>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4  col-12 mb-5">
                            <div class="card p-3 main-card1" style="">
                                <div class=" d-flex">
                                    <div class="mr-3 w-25 text-center align-items-center d-flex">
                                        <i class="fa fa-user w-100" style="font-size: 4rem"></i>
                                    </div>

                                    <div class="">
                                        <p class="mb-0 mt-2" style="font-size: 20px">Unfit Loan</p>
                                        <p style="font-size: 20px">{{$unfit}}</p>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4  col-12 mb-5">
                            <div class="card p-3 main-card1" style="">
                                <div class=" d-flex">
                                    <div class="mr-3 w-25 text-center align-items-center d-flex">
                                        <i class="fa fa-user w-100" style="font-size: 4rem"></i>
                                    </div>

                                    <div class="">
                                        <p class="mb-0 mt-2" style="font-size: 20px">Documentation Pending</p>
                                        <p style="font-size: 20px">{{$dpending}}</p>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4  col-12 mb-3">
                            <div class="card p-3 main-card2" style="">
                                <div class=" d-flex">
                                    <div class="mr-3 w-25 text-center align-items-center d-flex">
                                        <i class="fa fa-user w-100" style="font-size: 4rem"></i>
                                    </div>

                                    <div class="">
                                        <p class="mb-0 mt-2" style="font-size: 20px">Loan under Analysis</p>
                                        <p style="font-size: 20px">{{$analysis}}</p>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4  col-12 mb-3">
                            <div class="card p-3 main-card2" style="">
                                <div class=" d-flex">
                                    <div class="mr-3 w-25 text-center align-items-center d-flex">
                                        <i class="fa fa-user w-100" style="font-size: 4rem"></i>
                                    </div>

                                    <div class="">
                                        <p class="mb-0 mt-2" style="font-size: 20px">Pending Resolution</p>
                                        <p style="font-size: 20px">{{$resolution}}</p>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4  col-12 mb-3">
                            <div class="card p-3 main-card2" style="">
                                <div class=" d-flex">
                                    <div class="mr-3 w-25 text-center align-items-center d-flex">
                                        <i class="fa fa-user w-100" style="font-size: 4rem"></i>
                                    </div>

                                    <div class="">
                                        <p class="mb-0 mt-2" style="font-size: 20px">Finished</p>
                                        <p style="font-size: 20px">{{$finished}}</p>
                                    </div>

                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard End -->
@endsection
