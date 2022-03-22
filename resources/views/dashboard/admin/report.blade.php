@extends('dashboard.layout.main')
@section('report')
    active
@endsection
@section('content')



    <div class="modal fade" id="addreport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Reprot</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{url('admin/upload/report')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">


                            <div class="col-lg-12 ">
                                <lable class="label">Select file</lable>
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
                            <li class="breadcrumb-item"><a href="#">Relatórios</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-lg-12 text-right" style="text-align: right">
                <button class="btn btn-primary my-2" data-toggle="modal" data-target="#addreport"><i
                        class="fa fa-plus"></i> ADD Report
                </button>
            </div>

            <div class="row">

                @foreach($report as $report)
                    <div class="col-lg-6">
                        <div class="report-card mt-4 d-flex align-items-center">
                            <img src="{{asset('assets/dashboard/img/doc file.png')}}" alt="alt-file">
                            <h6>{{$report->file}}</h6>
                            <a href="{{asset('assets/dashboard/report/'.$report->file.'')}}" download="">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path fill="white" d="M3 19h18v2H3v-2zm10-5.828L19.071 7.1l1.414 1.414L12 17 3.515 8.515 4.929 7.1 11 13.17V2h2v11.172z"/></svg>

                            </a>

                            <a href="{{url('admin/report/delete/'.$report->id.'')}}" onclick="return confirm('Are you sure you want to delete this?');">   <i  class="fa fa-trash text-danger" style="font-size: 20px"></i>
                            </a>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>
    <!-- Dashboard End -->
@endsection
