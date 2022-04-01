@extends('dashboard.layout.main')
@section('report')
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
                            <li class="breadcrumb-item"><a href="#">Relatórios</a></li>
                        </ol>
                    </nav>
                </div>
            </div>


            <div class="row">

                @forelse($report as $report)
                    <div class="col-lg-6">
                        <div class="report-card mt-4 d-flex align-items-center">
                            <img src="{{asset('assets/dashboard/img/doc file.png')}}" alt="alt-file">
                            <h6>{{$report->file}}</h6>
                            <a href="{{asset('assets/dashboard/report/'.$report->file.'')}}" download="">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path fill="white" d="M3 19h18v2H3v-2zm10-5.828L19.071 7.1l1.414 1.414L12 17 3.515 8.515 4.929 7.1 11 13.17V2h2v11.172z"/></svg>

                            </a>


                        </div>
                    </div>

                @empty
                    <div class="row w-100  d-flex justify-content-center">
                        <div class="col-lg-6 d-flex justify-content-center align-items-center" style="">
                            <img src="{{asset('assets/dashboard/banner/norecord.jpg')}}" class="w-100" alt="">
                        </div>
                    </div>


                @endforelse



            </div>
        </div>
    </section>
    <!-- Dashboard End -->
@endsection
