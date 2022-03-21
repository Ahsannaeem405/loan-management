@extends('dashboard.layout.main')
@section('user')
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
                            <li class="breadcrumb-item"><a href="#">Users</a></li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">


                    <table id="table_id" class="display ">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a href="{{url('admin/user/delete/'.$user->id.'')}}"
                                       onclick="return confirm('Are you sure you want to delete this user?');"> <i
                                            style="color: red" class="fa fa-trash"></i></a>
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
