@extends('dashboard.layout.main')
@section('myprofile')
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
                            <li class="breadcrumb-item"><a href="#">Meu Perfil</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center mt-4 ">

                <div class="col-lg-11 col-12">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-md-5 col-12 ">

                            <div class="profile-details p-4">
                                <div class="profile-img mx-auto my-3">
                                    <img src="{{asset('assets/dashboard/profile/'.$user->profile.'')}}"
                                         alt="user-img">
                                    {{--                                    <div class="add-profile text-center">--}}
                                    {{--                                        <img src="{{asset('assets/dashboard/img/add-img.png')}}" alt="" class="mx-auto">--}}
                                    {{--                                    </div>--}}
                                </div>
                                <h4>
                                    {{$user->name}}
                                </h4>

                                <div class="profile-menu px-xl-3 px-1 mt-4 mb-5">

                                    <ul class="list-group" id="tabs-nav">
                                        <a href="#tab1"
                                           class="list-group-item d-flex justify-content-between align-items-center item-active">
                                            <h5 class="mb-0"><img
                                                    src="{{asset('assets/dashboard/img/profile-icon.png')}}" alt="icon">
                                                Meus dados</h5>
                                            <span class=""><i class="icofont-simple-right"></i></span>
                                        </a>
                                        <a href="#tab2"
                                           class="list-group-item d-flex justify-content-between align-items-center ">
                                            <h5 class="mb-0"><img
                                                    src="{{asset('assets/dashboard/img/change-pass.png')}}" alt="icon">
                                                Alterar senha</h5>
                                            <span class=""><i class="icofont-simple-right"></i></span>
                                        </a>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-7 col-12 mt-4 mt-md-0">

                            <div class="profile-items p-5 tab-content" id="tab1">

                                <div class="profile-img mx-auto my-3">
                                    <img src="{{asset('assets/dashboard/profile/'.$user->profile.'')}}"
                                         alt="user-img" id="my_image">
                                    <div class="add-profile text-center">
                                        <img src="{{asset('assets/dashboard/img/add-img.png')}}" id="pofile_btn" alt=""
                                             class="mx-auto">
                                    </div>
                                </div>


                                <form action="{{url('admin/profile/update')}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input class="d-none" onchange="readURL(this);" type="file" name="profile"
                                           id="profile">
                                    <div class="row mt-5">

                                        <div class="col-lg-6">
                                            <lable>Name</lable>
                                            <input type="text" name="name" required placeholder="Name"
                                                   value="{{$user->name}}" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <lable>Email</lable>
                                            <input type="email" name="email" required placeholder="Email"
                                                   value="{{$user->email}}" class="form-control">
                                        </div>

                                        <div class="col-lg-12 text-center">
                                            <button type="submit" class="btn w-50 my-4 change-pass-btn">Salvar</button>
                                        </div>

                                    </div>

                                </form>

                            </div>


                            <div class="profile-items p-5 tab-content" id="tab2">
                                <h5>
                                    Alterar senh
                                </h5>

                                <form action="{{url('admin/password/update')}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf

                                <div class="change-pass mt-5">

                                        <div class="form-group text-start mt-4">
                                            <label>Senha atual</label>
                                            <input type="password" name="old_pass" class="form-control">
                                        </div>
                                        <div class="form-group text-start mt-4">
                                            <label>Nova senha</label>
                                            <input type="password" name="password" class="form-control">
                                            @if($errors->has('password'))

                                                <span style="color: red" >
                                        <strong>{{$errors->first('password')}}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <div class="form-group text-start mt-4">
                                            <label>Repetir nova senha</label>
                                            <input type="password" name="password_confirmation" class="form-control">
                                        </div>

                                    <div class="col-lg-12 text-center">
                                        <button type="submit" class="btn w-50 my-5 change-pass-btn ">Salvar</button>


                                    </div>


                                </div>
                                </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        // Show the first tab and hide the rest
        $('#tabs-nav li:first-child').addClass('active');
        $('.tab-content').hide();
        $('.tab-content:first').show();

        // Click function
        $('#tabs-nav a').click(function () {
            $('#tabs-nav a').removeClass('item-active');
            $(this).addClass('item-active');
            $('.tab-content').hide();

            var activeTab = $(this).attr('href');
            console.log(activeTab);
            $(activeTab).fadeIn();
            return false;
        });


        $("#pofile_btn").click(function () {

            $('#profile').click();


        });

        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#my_image')
                        .attr('src', e.target.result);
                };


                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
@endsection
