@if($loan->type=='Home equity')
    <div class="col-lg-12">
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link tabclick text-dark" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            1.	Certidão de Inteiro teor de Matrícula (não precisa estar atualizada)
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">


                        <div class="col-lg-6  m-auto">
                            <div class="display-msg-success d-flex justify-content-start align-items-center">



                                @if(!isset($loan->doc1_1))


                                    <div class="file-details-fail">
                                        <form id="form1_1" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="Home equity">
                                            <input type="hidden" name="field" value="doc1_1">
                                            <label >

                                                <i class="icofont-cloud-upload" for="doc1_1"></i> Selecione o documento
                                                <input type="file" name="file" class="d-none upload_form_data" main_form="1" form_id="1" id="doc1_1">
                                                <i class="icofont-exclamation error-icon"></i>
                                            </label>
                                        </form>
                                    </div>

                                @else
                                    <div class="file-details">
                                        {{$loan->doc1_1}}
                                        <i class="icofont-tick-mark" for="doc1_1"></i>
                                    </div>
                                    <a href="{{asset('assets/dashboard/document/'.$loan->doc1_1.'')}}" download=""> <i
                                            class="icofont-download"></i></a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link tabclick collapsed text-dark" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2.	Ficha Cadastral – IPTU, contendo metragem do terreno e construção (se houver)
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">

                        <div class="col-lg-6  m-auto">
                            <div class="display-msg-success d-flex justify-content-start align-items-center">


                                @if(!isset($loan->doc1_2))


                                    <div class="file-details-fail">
                                        <form id="form1_2" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="Home equity">
                                            <input type="hidden" name="field" value="doc1_2">
                                            <label >

                                                <i class="icofont-cloud-upload" for="doc1_2"></i> Selecione o documento
                                                <input type="file" name="file" class="d-none upload_form_data" main_form="1" form_id="2" id="doc1_2">
                                                <i class="icofont-exclamation error-icon"></i>
                                            </label>
                                        </form>
                                    </div>

                                @else
                                    <div class="file-details">
                                        {{$loan->doc1_2}}
                                        <i class="icofont-tick-mark" for="doc1_2"></i>
                                    </div>
                                    <a href="{{asset('assets/dashboard/document/'.$loan->doc1_2.'')}}" download=""> <i
                                            class="icofont-download"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link tabclick collapsed text-dark" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3.	Fotos do imóvel
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class="col-lg-6  m-auto">
                            <div class="display-msg-success d-flex justify-content-start align-items-center">


                                @if(!isset($loan->doc1_3))


                                    <div class="file-details-fail">
                                        <form id="form1_3" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="Home equity">
                                            <input type="hidden" name="field" value="doc1_3">
                                            <label >

                                                <i class="icofont-cloud-upload" for="doc1_3"></i> Selecione o documento
                                                <input type="file" name="file" class="d-none upload_form_data" main_form="1" form_id="3" id="doc1_3">
                                                <i class="icofont-exclamation error-icon"></i>
                                            </label>
                                        </form>
                                    </div>

                                @else
                                    <div class="file-details">
                                        {{$loan->doc1_3}}
                                        <i class="icofont-tick-mark" for="doc1_3"></i>
                                    </div>
                                    <a href="{{asset('assets/dashboard/document/'.$loan->doc1_3.'')}}" download=""> <i
                                            class="icofont-download"></i></a>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link tabclick collapsed text-dark" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                            4.	Contrato Social
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">

                        <div class="col-lg-6  m-auto">
                            <div class="display-msg-success d-flex justify-content-start align-items-center">


                                @if(!isset($loan->doc1_4))


                                    <div class="file-details-fail">
                                        <form id="form1_4" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="Home equity">
                                            <input type="hidden" name="field" value="doc1_4">
                                            <label >

                                                <i class="icofont-cloud-upload" for="doc1_4"></i> Selecione o documento
                                                <input type="file" name="file" class="d-none upload_form_data" main_form="1" form_id="4" id="doc1_4">
                                                <i class="icofont-exclamation error-icon"></i>
                                            </label>
                                        </form>
                                    </div>

                                @else
                                    <div class="file-details">
                                        {{$loan->doc1_4}}
                                        <i class="icofont-tick-mark" for="doc1_4"></i>
                                    </div>
                                    <a href="{{asset('assets/dashboard/document/'.$loan->doc1_4.'')}}" download=""> <i
                                            class="icofont-download"></i></a>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link tabclick collapsed text-dark" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                            5.	Identificação
                        </button>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">

                        <div class="col-lg-6  m-auto">
                            <div class="display-msg-success d-flex justify-content-start align-items-center">



                                @if(!isset($loan->doc1_5))


                                    <div class="file-details-fail">
                                        <form id="form1_5" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="Home equity">
                                            <input type="hidden" name="field" value="doc1_5">
                                            <label >

                                                <i class="icofont-cloud-upload" for="doc1_5"></i> Selecione o documento
                                                <input type="file" name="file" class="d-none upload_form_data" main_form="1" form_id="5" id="doc1_5">
                                                <i class="icofont-exclamation error-icon"></i>
                                            </label>
                                        </form>
                                    </div>

                                @else
                                    <div class="file-details">
                                        {{$loan->doc1_5}}
                                        <i class="icofont-tick-mark" for="doc1_5"></i>
                                    </div>
                                    <a href="{{asset('assets/dashboard/document/'.$loan->doc1_5.'')}}" download=""> <i
                                            class="icofont-download"></i></a>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endif


@if($loan->type=='Real estate financing')
    <div class="col-lg-12">

        <div id="accordion2">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link tabclick text-dark" data-toggle="collapse" data-target="#collapse2One" aria-expanded="true" aria-controls="collapseOne">
                            1.	Cópia legível da CNH ou RG + CPF, e do cônjuge (se houver)
                        </button>
                    </h5>
                </div>

                <div id="collapse2One" class="collapse " aria-labelledby="headingOne" data-parent="#accordion2">
                    <div class="card-body">


                        <div class="col-lg-6  m-auto">
                            <div class="display-msg-success d-flex justify-content-start align-items-center">



                                @if(!isset($loan->doc2_1))


                                    <div class="file-details-fail">
                                        <form id="form2_1" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="Real estate financing">
                                            <input type="hidden" name="field" value="doc2_1">
                                            <label >

                                                <i class="icofont-cloud-upload" for="doc2_1"></i> Selecione o documento
                                                <input type="file" name="file" class="d-none upload_form_data" main_form="2" form_id="1" id="doc2_1">
                                                <i class="icofont-exclamation error-icon"></i>
                                            </label>
                                        </form>
                                    </div>

                                @else
                                    <div class="file-details">
                                        {{$loan->doc2_1}}
                                        <i class="icofont-tick-mark" for="doc2_1"></i>
                                    </div>
                                    <a href="{{asset('assets/dashboard/document/'.$loan->doc2_1.'')}}" download=""> <i
                                            class="icofont-download"></i></a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link tabclick collapsed text-dark" data-toggle="collapse" data-target="#collapse2Two" aria-expanded="false" aria-controls="collapseTwo">
                            2.	Comprovante de residência atualizado
                        </button>
                    </h5>
                </div>
                <div id="collapse2Two" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion2">
                    <div class="card-body">

                        <div class="col-lg-6  m-auto">
                            <div class="display-msg-success d-flex justify-content-start align-items-center">


                                @if(!isset($loan->doc2_2))


                                    <div class="file-details-fail">
                                        <form id="form2_2" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="Real estate financing">
                                            <input type="hidden" name="field" value="doc2_2">
                                            <label >

                                                <i class="icofont-cloud-upload" for="doc2_2"></i> Selecione o documento
                                                <input type="file" name="file" class="d-none upload_form_data" main_form="2" form_id="2" id="doc2_2">
                                                <i class="icofont-exclamation error-icon"></i>
                                            </label>
                                        </form>
                                    </div>

                                @else
                                    <div class="file-details">
                                        {{$loan->doc2_2}}
                                        <i class="icofont-tick-mark" for="doc2_2"></i>
                                    </div>
                                    <a href="{{asset('assets/dashboard/document/'.$loan->doc2_2.'')}}" download=""> <i
                                            class="icofont-download"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link tabclick collapsed text-dark" data-toggle="collapse" data-target="#collapse2Three" aria-expanded="false" aria-controls="collapseThree">
                            3.	Certidão de nascimento (Solteiro), Certidão de casamento (Casados), ou Certidão de casamento com averbação (separados, divorciados ou viúvos)
                        </button>
                    </h5>
                </div>
                <div id="collapse2Three" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                    <div class="card-body">
                        <div class="col-lg-6  m-auto">
                            <div class="display-msg-success d-flex justify-content-start align-items-center">



                                @if(!isset($loan->doc2_3))


                                    <div class="file-details-fail">
                                        <form id="form2_3" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="Real estate financing">
                                            <input type="hidden" name="field" value="doc2_3">
                                            <label >

                                                <i class="icofont-cloud-upload" for="doc2_3"></i> Selecione o documento
                                                <input type="file" name="file" class="d-none upload_form_data" main_form="2" form_id="3" id="doc2_3">
                                                <i class="icofont-exclamation error-icon"></i>
                                            </label>
                                        </form>
                                    </div>

                                @else
                                    <div class="file-details">
                                        {{$loan->doc2_3}}
                                        <i class="icofont-tick-mark" for="doc2_3"></i>
                                    </div>
                                    <a href="{{asset('assets/dashboard/document/'.$loan->doc2_3.'')}}" download=""> <i
                                            class="icofont-download"></i></a>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link tabclick collapsed text-dark" data-toggle="collapse" data-target="#collapse2Four" aria-expanded="false" aria-controls="collapseThree">
                            4.	Imposto de Renda do último ano (Declaração e Recibo)
                        </button>
                    </h5>
                </div>
                <div id="collapse2Four" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                    <div class="card-body">

                        <div class="col-lg-6  m-auto">
                            <div class="display-msg-success d-flex justify-content-start align-items-center">



                                @if(!isset($loan->doc2_4))


                                    <div class="file-details-fail">
                                        <form id="form2_4" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="Real estate financing">
                                            <input type="hidden" name="field" value="doc2_4">
                                            <label >

                                                <i class="icofont-cloud-upload" for="doc2_4"></i> Selecione o documento
                                                <input type="file" name="file" class="d-none upload_form_data" main_form="2" form_id="4" id="doc2_4">
                                                <i class="icofont-exclamation error-icon"></i>
                                            </label>
                                        </form>
                                    </div>

                                @else
                                    <div class="file-details">
                                        {{$loan->doc2_4}}
                                        <i class="icofont-tick-mark" for="doc2_4"></i>
                                    </div>
                                    <a href="{{asset('assets/dashboard/document/'.$loan->doc2_4.'')}}" download=""> <i
                                            class="icofont-download"></i></a>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link tabclick collapsed text-dark" data-toggle="collapse" data-target="#collapse2Five" aria-expanded="false" aria-controls="collapseThree">
                            5.	Últimos 06 (seis) meses de extratos de todas as contas PF + mês atual
                        </button>
                    </h5>
                </div>
                <div id="collapse2Five" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                    <div class="card-body">

                        <div class="col-lg-6  m-auto">
                            <div class="display-msg-success d-flex justify-content-start align-items-center">




                                @if(!isset($loan->doc2_5))


                                    <div class="file-details-fail">
                                        <form id="form2_5" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="Real estate financing">
                                            <input type="hidden" name="field" value="doc2_5">
                                            <label >

                                                <i class="icofont-cloud-upload" for="doc2_5"></i> Selecione o documento
                                                <input type="file" name="file" class="d-none upload_form_data" main_form="2" form_id="5" id="doc2_5">
                                                <i class="icofont-exclamation error-icon"></i>
                                            </label>
                                        </form>
                                    </div>

                                @else
                                    <div class="file-details">
                                        {{$loan->doc2_5}}
                                        <i class="icofont-tick-mark" for="doc2_5"></i>
                                    </div>
                                    <a href="{{asset('assets/dashboard/document/'.$loan->doc2_5.'')}}" download=""> <i
                                            class="icofont-download"></i></a>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endif


@if($loan->type=='structured')


    <div class="col-lg-12">

        <div id="accordion3">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link tabclick text-dark" data-toggle="collapse" data-target="#collapse3One" aria-expanded="true" aria-controls="collapseOne">
                            1.	Contrato Social
                        </button>
                    </h5>
                </div>

                <div id="collapse3One" class="collapse " aria-labelledby="headingOne" data-parent="#accordion3">
                    <div class="card-body">


                        <div class="col-lg-6  m-auto">
                            <div class="display-msg-success d-flex justify-content-start align-items-center">



                                @if(!isset($loan->doc3_1))


                                    <div class="file-details-fail">
                                        <form id="form3_1" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="structured">
                                            <input type="hidden" name="field" value="doc3_1">
                                            <label >

                                                <i class="icofont-cloud-upload" for="doc3_1"></i> Selecione o documento
                                                <input type="file" name="file" class="d-none upload_form_data" main_form="3" form_id="1" id="doc3_1">
                                                <i class="icofont-exclamation error-icon"></i>
                                            </label>
                                        </form>
                                    </div>

                                @else
                                    <div class="file-details">
                                        {{$loan->doc3_1}}
                                        <i class="icofont-tick-mark" for="doc3_1"></i>
                                    </div>
                                    <a href="{{asset('assets/dashboard/document/'.$loan->doc3_1.'')}}" download=""> <i
                                            class="icofont-download"></i></a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link tabclick text-dark" data-toggle="collapse" data-target="#collapse3Two" aria-expanded="true" aria-controls="collapseOne">
                            2.	Comprovante de Endereço Pessoa Jurídica
                        </button>
                    </h5>
                </div>

                <div id="collapse3Two" class="collapse " aria-labelledby="headingOne" data-parent="#accordion3">
                    <div class="card-body">


                        <div class="col-lg-6  m-auto">
                            <div class="display-msg-success d-flex justify-content-start align-items-center">



                                @if(!isset($loan->doc3_2))


                                    <div class="file-details-fail">
                                        <form id="form3_2" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="structured">
                                            <input type="hidden" name="field" value="doc3_2">
                                            <label >

                                                <i class="icofont-cloud-upload" for="doc3_2"></i> Selecione o documento
                                                <input type="file" name="file" class="d-none upload_form_data" main_form="3" form_id="2" id="doc3_2">
                                                <i class="icofont-exclamation error-icon"></i>
                                            </label>
                                        </form>
                                    </div>

                                @else
                                    <div class="file-details">
                                        {{$loan->doc3_2}}
                                        <i class="icofont-tick-mark" for="doc3_2"></i>
                                    </div>
                                    <a href="{{asset('assets/dashboard/document/'.$loan->doc3_2.'')}}" download=""> <i
                                            class="icofont-download"></i></a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link tabclick text-dark" data-toggle="collapse" data-target="#collapse3Three" aria-expanded="true" aria-controls="collapseOne">
                            3.	Últimos 06 (seis) extratos de todas as contas da empresa + mês atual
                        </button>
                    </h5>
                </div>

                <div id="collapse3Three" class="collapse " aria-labelledby="headingOne" data-parent="#accordion3">
                    <div class="card-body">


                        <div class="col-lg-6  m-auto">
                            <div class="display-msg-success d-flex justify-content-start align-items-center">



                                @if(!isset($loan->doc3_3))


                                    <div class="file-details-fail">
                                        <form id="form3_3" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="structured">
                                            <input type="hidden" name="field" value="doc3_3">
                                            <label >

                                                <i class="icofont-cloud-upload" for="doc3_3"></i> Selecione o documento
                                                <input type="file" name="file" class="d-none upload_form_data" main_form="3" form_id="3" id="doc3_3">
                                                <i class="icofont-exclamation error-icon"></i>
                                            </label>
                                        </form>
                                    </div>

                                @else
                                    <div class="file-details">
                                        {{$loan->doc3_3}}
                                        <i class="icofont-tick-mark" for="doc3_3"></i>
                                    </div>
                                    <a href="{{asset('assets/dashboard/document/'.$loan->doc3_3.'')}}" download=""> <i
                                            class="icofont-download"></i></a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link tabclick text-dark" data-toggle="collapse" data-target="#collapse3Four" aria-expanded="true" aria-controls="collapseOne">
                            4.	Declaração de faturamento parcial de 2019, 2020 e 2021 (assinada por contador responsável e sócio administrador)
                        </button>
                    </h5>
                </div>

                <div id="collapse3Four" class="collapse " aria-labelledby="headingOne" data-parent="#accordion3">
                    <div class="card-body">


                        <div class="col-lg-6  m-auto">
                            <div class="display-msg-success d-flex justify-content-start align-items-center">



                                @if(!isset($loan->doc3_4))


                                    <div class="file-details-fail">
                                        <form id="form3_4" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="structured">
                                            <input type="hidden" name="field" value="doc3_4">
                                            <label >

                                                <i class="icofont-cloud-upload" for="doc3_4"></i> Selecione o documento
                                                <input type="file" name="file" class="d-none upload_form_data" main_form="3" form_id="4" id="doc3_4">
                                                <i class="icofont-exclamation error-icon"></i>
                                            </label>
                                        </form>
                                    </div>

                                @else
                                    <div class="file-details">
                                        {{$loan->doc3_4}}
                                        <i class="icofont-tick-mark" for="doc3_4"></i>
                                    </div>
                                    <a href="{{asset('assets/dashboard/document/'.$loan->doc3_4.'')}}" download=""> <i
                                            class="icofont-download"></i></a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link tabclick text-dark" data-toggle="collapse" data-target="#collapse3Five" aria-expanded="true" aria-controls="collapseOne">
                            5.	Balanço patrimonial de 2019, 2020 e 2021 (assinado por contador responsável e sócio administrador)
                        </button>
                    </h5>
                </div>

                <div id="collapse3Five" class="collapse " aria-labelledby="headingOne" data-parent="#accordion3">
                    <div class="card-body">


                        <div class="col-lg-6  m-auto">
                            <div class="display-msg-success d-flex justify-content-start align-items-center">



                                @if(!isset($loan->doc3_5))


                                    <div class="file-details-fail">
                                        <form id="form3_5" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="structured">
                                            <input type="hidden" name="field" value="doc3_5">
                                            <label >

                                                <i class="icofont-cloud-upload" for="doc3_5"></i> Selecione o documento
                                                <input type="file" name="file" class="d-none upload_form_data" main_form="3" form_id="5" id="doc3_5">
                                                <i class="icofont-exclamation error-icon"></i>
                                            </label>
                                        </form>
                                    </div>

                                @else
                                    <div class="file-details">
                                        {{$loan->doc3_5}}
                                        <i class="icofont-tick-mark" for="doc3_5"></i>
                                    </div>
                                    <a href="{{asset('assets/dashboard/document/'.$loan->doc3_5.'')}}" download=""> <i
                                            class="icofont-download"></i></a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link tabclick text-dark" data-toggle="collapse" data-target="#collapse3Six" aria-expanded="true" aria-controls="collapseOne">
                            6.	Demonstrativo de Resultado do Exercício de 2019, 2020 e 2021 (assinados por contador responsável e sócio administrador)
                        </button>
                    </h5>
                </div>

                <div id="collapse3Six" class="collapse " aria-labelledby="headingOne" data-parent="#accordion3">
                    <div class="card-body">


                        <div class="col-lg-6  m-auto">
                            <div class="display-msg-success d-flex justify-content-start align-items-center">



                                @if(!isset($loan->doc3_6))


                                    <div class="file-details-fail">
                                        <form id="form3_6" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="structured">
                                            <input type="hidden" name="field" value="doc3_6">
                                            <label >

                                                <i class="icofont-cloud-upload" for="doc3_6"></i> Selecione o documento
                                                <input type="file" name="file" class="d-none upload_form_data" main_form="3" form_id="6" id="doc3_6">
                                                <i class="icofont-exclamation error-icon"></i>
                                            </label>
                                        </form>
                                    </div>

                                @else
                                    <div class="file-details">
                                        {{$loan->doc3_6}}
                                        <i class="icofont-tick-mark" for="doc3_6"></i>
                                    </div>
                                    <a href="{{asset('assets/dashboard/document/'.$loan->doc3_6.'')}}" download=""> <i
                                            class="icofont-download"></i></a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link tabclick text-dark" data-toggle="collapse" data-target="#collapse3Seven" aria-expanded="true" aria-controls="collapseOne">
                            7.	Última Escrituração Contábil Fiscal – ECF (Se a empresa não for do Simples Nacional)
                        </button>
                    </h5>
                </div>

                <div id="collapse3Seven" class="collapse " aria-labelledby="headingOne" data-parent="#accordion3">
                    <div class="card-body">


                        <div class="col-lg-6  m-auto">
                            <div class="display-msg-success d-flex justify-content-start align-items-center">



                                @if(!isset($loan->doc3_7))


                                    <div class="file-details-fail">
                                        <form id="form3_7" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="structured">
                                            <input type="hidden" name="field" value="doc3_7">
                                            <label >

                                                <i class="icofont-cloud-upload" for="doc3_7"></i> Selecione o documento
                                                <input type="file" name="file" class="d-none upload_form_data" main_form="3" form_id="7" id="doc3_7">
                                                <i class="icofont-exclamation error-icon"></i>
                                            </label>
                                        </form>
                                    </div>

                                @else
                                    <div class="file-details">
                                        {{$loan->doc3_7}}
                                        <i class="icofont-tick-mark" for="doc3_7"></i>
                                    </div>
                                    <a href="{{asset('assets/dashboard/document/'.$loan->doc3_7.'')}}" download=""> <i
                                            class="icofont-download"></i></a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link tabclick text-dark" data-toggle="collapse" data-target="#collapse3OEight" aria-expanded="true" aria-controls="collapseOne">
                            8.	PGDAS + DEFIS do exercício de 2021 até o presente (Se do Simples Nacional)
                        </button>
                    </h5>
                </div>

                <div id="collapse3OEight" class="collapse " aria-labelledby="headingOne" data-parent="#accordion3">
                    <div class="card-body">


                        <div class="col-lg-6  m-auto">
                            <div class="display-msg-success d-flex justify-content-start align-items-center">



                                @if(!isset($loan->doc3_8))


                                    <div class="file-details-fail">
                                        <form id="form3_8" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="structured">
                                            <input type="hidden" name="field" value="doc3_8">
                                            <label >

                                                <i class="icofont-cloud-upload" for="doc3_8"></i> Selecione o documento
                                                <input type="file" name="file" class="d-none upload_form_data" main_form="3" form_id="8" id="doc3_8">
                                                <i class="icofont-exclamation error-icon"></i>
                                            </label>
                                        </form>
                                    </div>

                                @else
                                    <div class="file-details">
                                        {{$loan->doc3_8}}
                                        <i class="icofont-tick-mark" for="doc3_8"></i>
                                    </div>
                                    <a href="{{asset('assets/dashboard/document/'.$loan->doc3_8.'')}}" download=""> <i
                                            class="icofont-download"></i></a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link tabclick text-dark" data-toggle="collapse" data-target="#collapse3Nine" aria-expanded="true" aria-controls="collapseOne">
                            9.	Planilha de endividamento (Baixar modelo na aba de “Reports”)
                        </button>
                    </h5>
                </div>

                <div id="collapse3Nine" class="collapse " aria-labelledby="headingOne" data-parent="#accordion3">
                    <div class="card-body">


                        <div class="col-lg-6  m-auto">
                            <div class="display-msg-success d-flex justify-content-start align-items-center">



                                @if(!isset($loan->doc3_9))


                                    <div class="file-details-fail">
                                        <form id="form3_9" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="structured">
                                            <input type="hidden" name="field" value="doc3_9">
                                            <label >

                                                <i class="icofont-cloud-upload" for="doc3_9"></i> Selecione o documento
                                                <input type="file" name="file" class="d-none upload_form_data" main_form="3" form_id="9" id="doc3_9">
                                                <i class="icofont-exclamation error-icon"></i>
                                            </label>
                                        </form>
                                    </div>

                                @else
                                    <div class="file-details">
                                        {{$loan->doc3_9}}
                                        <i class="icofont-tick-mark" for="doc3_9"></i>
                                    </div>
                                    <a href="{{asset('assets/dashboard/document/'.$loan->doc3_9.'')}}" download=""> <i
                                            class="icofont-download"></i></a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>

@endif
