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



                            @if(!isset($equity->doc1_1))


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
                                    {{$equity->doc1_1}}
                                    <i class="icofont-tick-mark" for="doc1_1"></i>
                                </div>
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


                            @if(!isset($equity->doc1_2))


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
                                    {{$equity->doc1_2}}
                                    <i class="icofont-tick-mark" for="doc1_2"></i>
                                </div>
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


                            @if(!isset($equity->doc1_3))


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
                                    {{$equity->doc1_3}}
                                    <i class="icofont-tick-mark" for="doc1_3"></i>
                                </div>
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


                            @if(!isset($equity->doc1_4))


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
                                    {{$equity->doc1_4}}
                                    <i class="icofont-tick-mark" for="doc1_4"></i>
                                </div>
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



                            @if(!isset($equity->doc1_5))


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
                                    {{$equity->doc1_5}}
                                    <i class="icofont-tick-mark" for="doc1_5"></i>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
