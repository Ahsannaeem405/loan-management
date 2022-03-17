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
                        </ol>
                    </nav>
                </div>
            </div>


            <div class="row">



                <div class="col-lg-12">


                    <table id="table_id" class="display ">
                        <thead>
                        <tr>
                            <th>Loan ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Loan type</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($loans as $loan)
                            <tr>
                                <td>{{$loan->id}}</td>
                                <td>{{$loan->user->name}}</td>
                                <td>{{$loan->user->email}}</td>
                                <td>{{$loan->type}}</td>

                                <td>
                                    <a href="{{url('admin/loan/delete/'.$loan->id.'')}}"> <i style="color: red" class="fa fa-trash"></i></a>

                                    <a href="{{url('admin/loan/detail/'.$loan->id.'')}}"> <i style="color: blueviolet" class="fa fa-eye"></i></a>
                                </td>
                            </tr>




                        @endforeach

                        </tbody>
                    </table>
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
