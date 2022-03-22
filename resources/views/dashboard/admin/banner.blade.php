@extends('dashboard.layout.main')
@section('banner')
    active
@endsection
@section('content')

    <div class="modal fade" id="banner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <form method="post" action="{{url('admin/update/banner')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">


                            <div class="col-lg-12 ">
                                <lable class="label">Select banner image</lable>
                                <input type="file" class="form-control" name="file" required>
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
                            <li class="breadcrumb-item"><a href="#">Banner</a></li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-lg-6 text-center m-auto">




                                    <img class="w-100" src="{{asset('assets/dashboard/banner/'.$banner->image.'')}}" alt="">



                                    <a data-toggle="modal" data-target="#banner"> <i
                                            style="color: blue" class="fa fa-edit"></i></a>




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
