@extends('dashboard.layout.main')
@section('loan')
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
                            <li class="breadcrumb-item"><a href="#">Loan</a></li>
                            <li class="breadcrumb-item"><a href="#">Loan Detail</a></li>
                        </ol>
                    </nav>
                </div>
            </div>


            <div class="row p-4">

                <h3>Personal Information:</h3>
                <div class="card w-100">
                    <div class="card-body">

                        <div class="row">


                            <div class="col-lg-12 mb-2">
                                <div class="profile-img mx-auto my-3">
                                    <img src="{{asset('assets/dashboard/img/'.$loan->user->profile.'')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-center justify-content-center">
                                <h5 class="ml-3"> {{$loan->type}}</h5>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                <h5>Name:</h5> <h5 class="ml-3"> {{$loan->user->name}}</h5>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                <h5>Email:</h5> <h5 class="ml-3"> {{$loan->user->email}}</h5>
                            </div>


                        </div>

                    </div>

                </div>


            </div>

            <div class="row p-4">

                <h3> Documents:</h3>
                <div class="card w-100">
                    <div class="card-body">

                        <div class="row">

                            @foreach($loan->document as $doc)
                                <div class="col-lg-6 col-md-12 col-12 mt-3">
                                    <div
                                        class="display-msg-success d-flex justify-content-start align-items-center">
                                        <h6 class="mb-0">Document {{$i++}}</h6>

                                        <div class="file-details">
                                            {{$doc->file}}

                                            <i class="icofont-tick-mark"></i>

                                        </div>
                                        <a href="{{asset('assets/dashboard/document/'.$doc->file.'')}}" download=""> <i
                                                class="icofont-download"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>

                </div>


            </div>

            <div class="row p-4">

                <h3> Companies:</h3>
                <div class="card w-100">
                    <div class="card-body">

                        <div class="row">
                            <lable>Apply in another company</lable>
                            <select name="" id="" class="form-control">
                                <option value="">Select please</option>
                                @foreach($companies as $com)
                                    <option value="{{$com->name}}">{{$com->name}}</option>
                                @endforeach

                            </select>

                            <div id="append">

                            </div>

                        </div>

                    </div>

                </div>


            </div>


        </div>
    </section>



    <!-- Dashboard End -->


@endsection


@section('js')
    <script>
        $(document).ready(function () {

            $('#table_id').DataTable();
        });
    </script>
@endsection
