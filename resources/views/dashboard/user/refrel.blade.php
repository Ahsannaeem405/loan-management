@extends('dashboard.layout.main')

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
                <div class="col-6">
                    <div class="affilate">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend px-3 align-items-center d-flex ">
                                <img src="./img/bx_link.png " alt="">
                            </div>
                            <input type="text" class="form-control" value="http://acredite.com.br/afiliados/86asda54as">
                            <div class="copy-link">
                                <button>Copiar Link</button>
                            </div>
                        </div>
                        <p class="mt-5">
                            Compartilhe esse link para ganhar <span> 10%</span> <br> da primeira operação do seu afiliado!
                        </p>
                        <div class="affilate-img text-center mt-4">
                            <img src="./img/Moneyverse.png" alt="" class="mx-auto img-fluid">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard End -->


@endsection
