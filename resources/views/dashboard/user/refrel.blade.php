@extends('dashboard.layout.main')
@section('refrel')
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
                            <li class="breadcrumb-item"><a href="#">Afiliados</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center mt-4">

                <div class="col-xl-6 col-lg-9">
                    <div class="affilate">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend px-mg-3 px-1 align-items-center d-flex ">
                                <img src="{{asset('assets/dashboard/img/bx_link.png')}}" alt="">

                            </div>
                            <input type="text" class="form-control" id="url" value="{{$url}}">
                            <div class="copy-link">
                                <button  onclick="myFunction()">Copiar Link</button>
                            </div>
                        </div>
                        <p class="mt-5">
                            Compartilhe esse link para ganhar <span> 10%</span> <br> da primeira operação do seu afiliado!
                        </p>
                        <div class="affilate-img text-center mt-4">
                            <img src="{{asset('assets/dashboard/img/Moneyverse.png')}}" alt="" class="mx-auto img-fluid">
                        </div>
                    </div>

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

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($refrel as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>

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
    <script>
        function myFunction() {
            /* Get the text field */
            var copyText = document.getElementById("url");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.value);

            /* Alert the copied text */
            swal("Link Copied Successfully", "", "success", {
                button: "Close",

            });
        }
    </script>
@endsection
