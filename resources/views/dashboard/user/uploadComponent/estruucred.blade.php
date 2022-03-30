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



                            @if(!isset($structured->doc3_1))


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
                                    {{$structured->doc3_1}}
                                    <i class="icofont-tick-mark" for="doc3_1"></i>
                                </div>
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



                            @if(!isset($structured->doc3_2))


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
                                    {{$structured->doc3_2}}
                                    <i class="icofont-tick-mark" for="doc3_2"></i>
                                </div>
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



                            @if(!isset($structured->doc3_3))


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
                                    {{$structured->doc3_3}}
                                    <i class="icofont-tick-mark" for="doc3_3"></i>
                                </div>
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



                            @if(!isset($structured->doc3_4))


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
                                    {{$structured->doc3_4}}
                                    <i class="icofont-tick-mark" for="doc3_4"></i>
                                </div>
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



                            @if(!isset($structured->doc3_5))


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
                                    {{$structured->doc3_5}}
                                    <i class="icofont-tick-mark" for="doc3_5"></i>
                                </div>
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



                            @if(!isset($structured->doc3_6))


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
                                    {{$structured->doc3_6}}
                                    <i class="icofont-tick-mark" for="doc3_6"></i>
                                </div>
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



                            @if(!isset($structured->doc3_7))


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
                                    {{$structured->doc3_7}}
                                    <i class="icofont-tick-mark" for="doc3_7"></i>
                                </div>
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



                            @if(!isset($structured->doc3_8))


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
                                    {{$structured->doc3_8}}
                                    <i class="icofont-tick-mark" for="doc3_8"></i>
                                </div>
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



                            @if(!isset($structured->doc3_9))


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
                                    {{$structured->doc3_9}}
                                    <i class="icofont-tick-mark" for="doc3_9"></i>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
</div>
