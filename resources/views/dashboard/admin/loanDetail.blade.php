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
                                    <img src="{{asset('assets/dashboard/profile/'.$loan->user->profile.'')}}" alt="">
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
                            <lable class="font-weight-bold my-2">Apply in another company</lable>
                            <select name="" id="companies" class="form-control">
                                <option value="">Select Please</option>
                                @foreach($companies as $com)
                                    <option value="{{$com->name}}">{{$com->name}}</option>
                                @endforeach

                            </select>


                            <form action="{{url('admin/addCompamy/loan/'.$loan->id.'')}}" class="w-100" method="post">
                                @csrf

                                <div class="col-lg-12 my-4">

                                    <table class="table table-responsive d-table" style="width: 100% !important;">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Modalidade</th>
                                            <th scope="col">Tipo</th>
                                            <th scope="col">Valor do credito</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody id="append">


                                        </tbody>
                                    </table>


                                </div>

                                <div class="col-lg-12 text-center " style="display: none" id="save">
                                    <button class="btn btn-success" type="submit">SAVE</button>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>


            </div>

            <div class="row p-4">

                <h3> Apply History:</h3>
                <div class="card w-100">
                    <div class="card-body">


                        <form action="{{url('admin/status/loan')}}" method="post">
                            @csrf

                            <div class="col-12">
                                <div class="status-table equity  mt-4">
                                    <div class="table-icons my-2 mx-2">
                                        <i class="icofont-caret-down"></i>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                            <tr>
                                                <th class="table-heading">{{$loan->type}}</th>
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
                                            @foreach($loan->applyCom as $com)
                                                <input type="hidden" name="ids[]" value="{{$com->id}}">
                                                <tr>
                                                    <td class="px-3">{{$com->name}}</td>
                                                    <td class=" mx-auto">
                                                        <div class="progress">
                                                            <span class="title timer" data-from="0" data-to="100"
                                                                  data-speed="1800">  <i class="icofont-tick-mark"></i></span>
                                                            <div class="overlay"></div>
                                                            <div
                                                                class="left  @if($com->status=="Loan under Analysis" || $com->status=="Pending Resolution" || $com->status=="Finished") animate1 @endif   @if( $com->status=="Pending Resolution" || $com->status=="Finished") animate2 @endif"></div>
                                                            <div
                                                                class="right  @if($com->status=="Pending Resolution" || $com->status=="Finished") animate3 @endif  @if($com->status=="Finished") animate4 @endif "></div>
                                                        </div>
                                                    </td>
                                                    <td class="msg">
                                                        <a href="{{url("admin/comment/$com->id")}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             width="24" height="24">
                                                            <path fill="none" d="M0 0h24v24H0z"/>
                                                            <path fill="gray"
                                                                  d="M7.291 20.824L2 22l1.176-5.291A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.956 9.956 0 0 1-4.709-1.176zm.29-2.113l.653.35A7.955 7.955 0 0 0 12 20a8 8 0 1 0-8-8c0 1.334.325 2.618.94 3.766l.349.653-.655 2.947 2.947-.655z"/>
                                                        </svg></a>
                                                        <div class="msg-no">
                                                            {{count($com->comment)}}
                                                        </div>
                                                    </td>
                                                    <td>{{$com->category}}</td>
                                                    <td>{{$com->type}}</td>
                                                    <td>{{$com->price}}</td>
                                                    <td class="loan-status">
                                                        <select name="status[]" class="form-control" id="">
                                                            <option
                                                                {{$com->status=='Pending' ? 'selected' : null}}  value="Pending">
                                                                Pending
                                                            </option>
                                                            <option
                                                                {{$com->status=='Unfit Loan' ? 'selected' : null}} value="Unfit Loan">
                                                                Unfit Loan
                                                            </option>

                                                            <option
                                                                {{$com->status=='Documentation Pending' ? 'selected' : null}} value="Documentation Pending">
                                                                Documentation Pending
                                                            </option>
                                                            <option
                                                                {{$com->status=='Loan under Analysis' ? 'selected' : null}} value="Loan under Analysis">
                                                                Loan under Analysis
                                                            </option>
                                                            <option
                                                                {{$com->status=='Pending Resolution' ? 'selected' : null}} value="Pending Resolution">
                                                                {{$com->status=='Pending Resolution' ? 'selected' : null}} value="Pending Resolution">
                                                                Pending Resolution
                                                            </option>

                                                            <option
                                                                {{$com->status=='Finished' ? 'selected' : null}} value="Finished">
                                                                Finished
                                                            </option>

                                                            <option
                                                                {{$com->status=='Loan Rejected' ? 'selected' : null}} value="Loan Rejected">
                                                                Loan Rejected
                                                            </option>
                                                        </select></td>
                                                    <td class="msg">
                                                        <a href="{{url('admin/loan/doc/'.$com->id.'')}}">   <i class="fa fa-dedent"></i>

                                                        <div class="msg-no">
                                                            {{count($com->document)}}
                                                        </div></a>

                                                    </td>

                                                </tr>

                                            @endforeach


                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                                <div class="col-lg-12 text-center">
                                    <button class="btn btn-success" type="submit">UPDATE</button>
                                </div>
                            </div>
                        </form>
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

            $('#companies').change(function () {
                {{--                --}}
                var val = $(this).val();
                var type = "{{$loan->type}}";
                var html = '<tr>' +
                    ' <th scope="row"><input type="text" readonly name="name[]" class="form-control" value="' + val + '"></th>' +
                    ' <td><input  type="text" name="cat[]" readonly class="form-control" value="' + type + '"></td>' +
                    ' <td><input class="form-control" required  name="type[]" type="text"></td>' +
                    ' <td><input class="form-control" required name="price[]" type="text"></td>' +
                    ' <td><i class="fa fa-trash text-danger remove_tr"></i></td>' +
                    '</tr>';
                $('#append').append(html);
                $('#save').show();
            });

            $(document).on('click', '.remove_tr', function () {
                $(this).parent().parent().remove();
            })
        });
    </script>
@endsection
