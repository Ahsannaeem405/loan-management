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
                                `
                                <div class="col-lg-3 mt-3">
                                    <div sec="1"
                                         class="upload-btn active py-4 d-flex align-items-center justify-content-center">
                                        <i class="icofont-home"></i>
                                        Crédito com Garantia de Imóvel
                                    </div>
                                </div>
                                <div class="col-lg-3 mt-3">
                                    <div sec="2"
                                         class="upload-btn py-4 d-flex align-items-center justify-content-center">
                                        <img src="{{asset('assets/dashboard/img/hand.png')}}" width="30" height="30" alt="">
                                        Financiamento
                                    </div>
                                </div>
                                <div class="col-lg-3 mt-3">
                                    <div sec="3"
                                         class="upload-btn py-4 d-flex align-items-center justify-content-center">
                                        <img src="{{asset('assets/dashboard/img/puzzle.png')}}" width="30" height="30" alt="">
                                        Estruturada
                                    </div>
                                </div>

                            </div>
                            <div class="row mt-4 div1">
                                <form id="form1" action="{{url('user/upload/loan')}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="file" id="file1" class="d-none">
                                    <input type="hidden" name="type" value="Home equity">
                                </form>

                            @include('dashboard.user.uploadComponent.home')




                                @if($equity)
                                    @foreach($equity->equity as $equity)
                                        <div class="col-lg-6 col-md-12 col-12 mt-3">
                                            <div
                                                class="display-msg-success d-flex justify-content-start align-items-center">
                                                <h6 class="mb-0">Additional Document {{$i++}}</h6>
                                                <div class="file-details">
                                                    {{$equity->file}}
                                                    <i class="icofont-tick-mark"></i>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                @endif

                                <div class="col-lg-12 text-center my-5">
                                    <button class="btn btn-primary upload1"><i class="fa fa-plus"></i> Adicionar novo
                                    </button>
                                </div>


                            </div>
                            <div class="row mt-4 div2 " style="display: none">
                                <form id="form2" action="{{url('user/upload/loan')}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="file" id="file2" class="d-none">
                                    <input type="hidden" name="type" value="Real estate financing">
                                </form>


                                @include('dashboard.user.uploadComponent.financ')






                                @if($estate)
                                    @foreach($estate->estate as $estate)
                                        <div class="col-lg-6 col-md-12 col-12 mt-3">
                                            <div
                                                class="display-msg-success d-flex justify-content-start align-items-center">
                                                <h6 class="mb-0">Additional Document {{$j++}}</h6>
                                                <div class="file-details">
                                                    {{$estate->file}}
                                                    <i class="icofont-tick-mark"></i>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                @endif

                                <div class="col-lg-12 text-center my-5">
                                    <button class="btn btn-primary upload2"><i class="fa fa-plus"></i> Adicionar novo
                                    </button>
                                </div>

                            </div>

                            <div class="row mt-4 div3 " style="display: none">
                                <form id="form3" action="{{url('user/upload/loan')}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="file" id="file3" class="d-none">
                                    <input type="hidden" name="type" value="structured">
                                </form>

                                @include('dashboard.user.uploadComponent.estruucred')




                                @if($structured)
                                    @foreach($structured->estate as $structured)
                                        <div class="col-lg-6 col-md-12 col-12 mt-3">
                                            <div
                                                class="display-msg-success d-flex justify-content-start align-items-center">
                                                <h6 class="mb-0">Additional Document {{$k++}}</h6>
                                                <div class="file-details">
                                                    {{$structured->file}}
                                                    <i class="icofont-tick-mark"></i>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                @endif

                                <div class="col-lg-12 text-center my-5">
                                    <button class="btn btn-primary upload3"><i class="fa fa-plus"></i> Adicionar novo
                                    </button>
                                </div>

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
            var id = $(this).attr('sec');
            $('.div1').hide();
            $('.div2').hide();
            $('.div3').hide();
            $('.div' + id).show();


        });

        $('.upload1').click(function () {
            $('#file1').click();
        });
        $('.upload2').click(function () {
            $('#file2').click();
        });

        $('.upload3').click(function () {
            $('#file3').click();
        });


        $('#file1').change(function () {
            $('#form1').submit();
        });

        $('#file2').change(function () {
            $('#form2').submit();
        });

        $('#file3').change(function () {
            $('#form3').submit();
        });

        $('.upload_form_data').change(function () {
            var form_id=$(this).attr('form_id');
            var main=$(this).attr('main_form');
             $('#form'+main+'_'+form_id).submit();
        });

        $('.tabclick').click(function () {
            $('.tabclick').removeClass('activeTab');
            $('.tabclick').addClass('text-dark');
            $(this).removeClass('text-dark');
            $(this).addClass('activeTab');
            $('.tabclick').parent().parent().removeClass('activeTab2');
            $(this).parent().parent().addClass('activeTab2');


        })


    </script>

@endsection
