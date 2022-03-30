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



                            @if(!isset($estate->doc2_1))


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
                                    {{$estate->doc2_1}}
                                    <i class="icofont-tick-mark" for="doc2_1"></i>
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
                    <button class="btn btn-link tabclick collapsed text-dark" data-toggle="collapse" data-target="#collapse2Two" aria-expanded="false" aria-controls="collapseTwo">
                        2.	Comprovante de residência atualizado
                    </button>
                </h5>
            </div>
            <div id="collapse2Two" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion2">
                <div class="card-body">

                    <div class="col-lg-6  m-auto">
                        <div class="display-msg-success d-flex justify-content-start align-items-center">


                            @if(!isset($estate->doc2_2))


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
                                    {{$estate->doc2_2}}
                                    <i class="icofont-tick-mark" for="doc2_2"></i>
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
                    <button class="btn btn-link tabclick collapsed text-dark" data-toggle="collapse" data-target="#collapse2Three" aria-expanded="false" aria-controls="collapseThree">
                        3.	Certidão de nascimento (Solteiro), Certidão de casamento (Casados), ou Certidão de casamento com averbação (separados, divorciados ou viúvos)
                    </button>
                </h5>
            </div>
            <div id="collapse2Three" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                <div class="card-body">
                    <div class="col-lg-6  m-auto">
                        <div class="display-msg-success d-flex justify-content-start align-items-center">



                            @if(!isset($estate->doc2_3))


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
                                    {{$estate->doc2_3}}
                                    <i class="icofont-tick-mark" for="doc2_3"></i>
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
                    <button class="btn btn-link tabclick collapsed text-dark" data-toggle="collapse" data-target="#collapse2Four" aria-expanded="false" aria-controls="collapseThree">
                        4.	Imposto de Renda do último ano (Declaração e Recibo)
                    </button>
                </h5>
            </div>
            <div id="collapse2Four" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                <div class="card-body">

                    <div class="col-lg-6  m-auto">
                        <div class="display-msg-success d-flex justify-content-start align-items-center">



                            @if(!isset($estate->doc2_4))


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
                                    {{$estate->doc2_4}}
                                    <i class="icofont-tick-mark" for="doc2_4"></i>
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
                    <button class="btn btn-link tabclick collapsed text-dark" data-toggle="collapse" data-target="#collapse2Five" aria-expanded="false" aria-controls="collapseThree">
                        5.	Últimos 06 (seis) meses de extratos de todas as contas PF + mês atual
                    </button>
                </h5>
            </div>
            <div id="collapse2Five" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                <div class="card-body">

                    <div class="col-lg-6  m-auto">
                        <div class="display-msg-success d-flex justify-content-start align-items-center">




                            @if(!isset($estate->doc2_5))


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
                                    {{$estate->doc2_5}}
                                    <i class="icofont-tick-mark" for="doc2_5"></i>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
