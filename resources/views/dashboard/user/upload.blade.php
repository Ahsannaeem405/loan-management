@extends('dashboard.layout.main')
@section('upload')
    active
@endsection
@section('content')




    <!-- page body Start -->
    <section class="page-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Upload</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-11 p-0 my-4">
                    <div class="upload">
                        <h5>
                            Selecione o tipo do empréstimo
                        </h5>

                        <div class="upload-details ">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mt-3">
                                    <div sec="1"
                                        class="upload-btn active py-4 d-flex align-items-center justify-content-center">
                                        <i class="icofont-home"></i>
                                        Home Equity
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mt-3">
                                    <div sec="2"
                                        class="upload-btn py-4 d-flex align-items-center justify-content-center">
                                        <i class="icofont-ui-folder"></i>
                                        Financiamento
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4 div1">
                                <form id="form1" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="file" id="file1" class="d-none">
                                    <input type="hidden" name="type" value="Home equity">
                                </form>
                                <div class="col-lg-12 text-center">
                                    <button class="btn btn-primary upload1">UPLOAD DOCUMENT</button>
                                </div>

                                @if($equity)
                                    @foreach($equity->equity as $equity)
                                        <div class="col-lg-6 col-md-12 col-12 mt-3">
                                            <div
                                                class="display-msg-success d-flex justify-content-start align-items-center">
                                                <h6 class="mb-0">Document {{$i++}}</h6>
                                                <div class="file-details">
                                                    {{$equity->file}}
                                                    <i class="icofont-tick-mark"></i>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                @endif



                            </div>
                            <div class="row mt-4 div2 " style="display: none">
                                <form id="form2" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="file" id="file2" class="d-none">
                                    <input type="hidden" name="type" value="Real estate financing">
                                </form>
                                <div class="col-lg-12 text-center">
                                    <button class="btn btn-primary upload2">UPLOAD DOCUMENT</button>
                                </div>

                                @if($estate)
                                    @foreach($estate->estate as $estate)
                                        <div class="col-lg-6 col-md-12 col-12 mt-3">
                                            <div
                                                class="display-msg-success d-flex justify-content-start align-items-center">
                                                <h6 class="mb-0">Document {{$j++}}</h6>
                                                <div class="file-details">
                                                  {{$estate->file}}
                                                    <i class="icofont-tick-mark"></i>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page body End -->

@endsection


@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>

        $(".upload-btn").click(function () {

        $('.upload-btn').removeClass('active');
        $(this).addClass('active');
        var id=$(this).attr('sec');
        $('.div1').hide();
        $('.div2').hide();
        $('.div'+id).show();



        });

        $('.upload1').click(function () {
            $('#file1').click();
        });
        $('.upload2').click(function () {
            $('#file2').click();
        });

        $('#file1').change(function () {
            $('#form1').submit();
        });

        $('#file2').change(function () {
            $('#form2').submit();
        });


    </script>

@endsection
