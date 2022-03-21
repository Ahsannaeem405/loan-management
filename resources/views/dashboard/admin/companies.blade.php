@extends('dashboard.layout.main')
@section('companies')
    active
@endsection
@section('content')


    <div class="modal fade" id="addcompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Company</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{url('admin/add/company')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">


                            <div class="col-lg-12 ">
                                <lable class="label">Company Name</lable>
                                <input type="text" class="form-control" name="name" required>
                            </div>


                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Dashboard Start -->
    <section class="page-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Companies</a></li>
                        </ol>
                    </nav>
                </div>
            </div>


            <div class="row">

                <div class="col-lg-12 text-right" style="text-align: right">
                    <button class="btn btn-primary my-2" data-toggle="modal" data-target="#addcompany"><i
                            class="fa fa-plus"></i> ADD COMPANY
                    </button>
                </div>

                <div class="col-lg-12">


                    <table id="table_id" class="display ">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($companies as $companie)
                            <tr>
                                <td>{{$companie->id}}</td>
                                <td>{{$companie->name}}</td>

                                <td>
                                    <a href="{{url('admin/company/delete/'.$companie->id.'')}}" onclick="return confirm('Are you sure you want to delete this company?');"> <i style="color: red" class="fa fa-trash"></i></a>
                                     <i data-toggle="modal" data-target="#addcompany{{$companie->id}}" style="color: blue;cursor: pointer" class="fa fa-edit"></i>
                                </td>
                            </tr>


                            <div class="modal fade" id="addcompany{{$companie->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update Company</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{url('admin/update/company/'.$companie->id.'')}}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">


                                                    <div class="col-lg-12 ">
                                                        <lable class="label">Company Name</lable>
                                                        <input type="text" class="form-control" name="name" value="{{$companie->name}}" required>
                                                    </div>


                                                </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">update</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


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
