<div class="col-lg-12">
    <div id="accordion3">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link tabclick text-dark" data-toggle="collapse" data-target="#collapse3One" aria-expanded="true" aria-controls="collapseOne">
                         Imóvel
                    </button>
                </h5>
            </div>
        
            <div id="collapse3One" class="collapse " aria-labelledby="headingOne" data-parent="#accordion3">
                <div class="card-body">

<div class="col-lg-12  my-2">
    <b>1.	Certidão de Inteiro teor de Matrícula (não precisa estar atualizada)</b>
</div>
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
                    <div class="col-lg-12  my-2">
                      <b>  2.	Ficha Cadastral – IPTU, contendo metragem do terreno e construção (se houver) </b>
                    </div>
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
                    <div class="col-lg-12  my-2">
                        <b>  3.	Fotos do imóvel</b> 
                    </div>
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
        {{-- <div class="card">
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


                            @if(!isset($structured->doc1_2))


                                <div class="file-details-fail">
                                    <form id="form1_2" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="type" value="structured">
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
                                    {{$structured->doc1_2}}
                                    <i class="icofont-tick-mark" for="doc1_2"></i>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="card">
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


                            @if(!isset($structured->doc1_3))


                                <div class="file-details-fail">
                                    <form id="form1_3" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="type" value="structured">
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
                                    {{$structured->doc1_3}}
                                    <i class="icofont-tick-mark" for="doc1_3"></i>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link tabclick collapsed text-dark" data-toggle="collapse" data-target="#collapse3Two" aria-expanded="false" aria-controls="collapseTwo">
                        Cadastro Pessoa Física
                    </button>
                </h5>
            </div>
            <div id="collapse3Two" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion3">
                <div class="card-body">
                    <div class="col-lg-12   my-2">
                    <b>   1 CNH do sócio e cônjuge (se houver)</b>
                    </div>
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
                    <div class="col-lg-12   my-2">
                        <b> 2 Comprovante de residência</b>
                     </div>
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
                    <div class="col-lg-12   my-2">
                        <b>3 Certidão de nascimento, casamento ou de divórcio</b>
                     </div>
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
                    <div class="col-lg-12   my-2">
                        <b>4 Imposto de Renda (declaração e recibo)</b>
                     </div> 
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
                    <div class="col-lg-12   my-2">
                       <b> 5 Últimos 06 (seis) meses de extratos de todas as contas PF + mês atual</b>
                     </div>
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
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link tabclick collapsed text-dark" data-toggle="collapse" data-target="#collapse3Three" aria-expanded="false" aria-controls="collapseThree">
                        Cadastro Pessoa Jurídica
                    </button>
                </h5>
            </div>
            <div id="collapse3Three" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                <div class="card-body">
                    <div class="col-lg-12   my-2">
                        <b> 1 Contrato Social</b>
                    </div>
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
                    <div class="col-lg-12   my-2">
                        <b>  2 Comprovante de Endereço Pessoa Jurídica</b>
                     </div>
                     <div class="col-lg-6  m-auto">
                        <div class="display-msg-success d-flex justify-content-start align-items-center">


                            @if(!isset($structured->doc3_10))


                                <div class="file-details-fail">
                                    <form id="form3_10" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="type" value="structured">
                                        <input type="hidden" name="field" value="doc3_10">
                                        <label >

                                            <i class="icofont-cloud-upload" for="doc3_10"></i> Selecione o documento
                                            <input type="file" name="file" class="d-none upload_form_data" main_form="3" form_id="10" id="doc3_10">
                                            <i class="icofont-exclamation error-icon"></i>
                                        </label>
                                    </form>
                                </div>

                            @else
                                <div class="file-details">
                                    {{$structured->doc3_10}}
                                    <i class="icofont-tick-mark" for="doc3_10"></i>
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="col-lg-12   my-2">
                      <b>  3 Últimos 06 (seis) extratos de todas as contas da empresa + mês atual</b>
                     </div>
                     <div class="col-lg-6  m-auto">
                        <div class="display-msg-success d-flex justify-content-start align-items-center">


                            @if(!isset($structured->doc3_11))


                                <div class="file-details-fail">
                                    <form id="form3_11" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="type" value="structured">
                                        <input type="hidden" name="field" value="doc3_11">
                                        <label >

                                            <i class="icofont-cloud-upload" for="doc3_11"></i> Selecione o documento
                                            <input type="file" name="file" class="d-none upload_form_data" main_form="3" form_id="11" id="doc3_11">
                                            <i class="icofont-exclamation error-icon"></i>
                                        </label>
                                    </form>
                                </div>

                            @else
                                <div class="file-details">
                                    {{$structured->doc3_11}}
                                    <i class="icofont-tick-mark" for="doc3_11"></i>
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="col-lg-12   my-2">
                       <b> 4 Declaração de faturamento parcial dos últimos 3 anos (assinada por contador responsável e sócio administrador)</b>
                     </div>
                     <div class="col-lg-6  m-auto">
                        <div class="display-msg-success d-flex justify-content-start align-items-center">


                            @if(!isset($structured->doc3_12))


                                <div class="file-details-fail">
                                    <form id="form3_12" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="type" value="structured">
                                        <input type="hidden" name="field" value="doc3_12">
                                        <label >

                                            <i class="icofont-cloud-upload" for="doc3_12"></i> Selecione o documento
                                            <input type="file" name="file" class="d-none upload_form_data" main_form="3" form_id="12" id="doc3_12">
                                            <i class="icofont-exclamation error-icon"></i>
                                        </label>
                                    </form>
                                </div>

                            @else
                                <div class="file-details">
                                    {{$structured->doc3_12}}
                                    <i class="icofont-tick-mark" for="doc3_12"></i>
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="col-lg-12   my-2">
                       <b> 5 Balanço patrimonial dos últimos 3 anos (assinado por contador responsável e sócio administrador)</b>
                     </div>
                     <div class="col-lg-6  m-auto">
                        <div class="display-msg-success d-flex justify-content-start align-items-center">


                            @if(!isset($structured->doc3_13))


                                <div class="file-details-fail">
                                    <form id="form3_13" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="type" value="structured">
                                        <input type="hidden" name="field" value="doc3_13">
                                        <label >

                                            <i class="icofont-cloud-upload" for="doc3_13"></i> Selecione o documento
                                            <input type="file" name="file" class="d-none upload_form_data" main_form="3" form_id="13" id="doc3_13">
                                            <i class="icofont-exclamation error-icon"></i>
                                        </label>
                                    </form>
                                </div>

                            @else
                                <div class="file-details">
                                    {{$structured->doc3_13}}
                                    <i class="icofont-tick-mark" for="doc3_13"></i>
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="col-lg-12   my-2">
                        <b>  6 Demonstrativo de Resultado do Exercício dos últimos 3 anos (assinados por contador responsável e sócio administrador)</b>
                     </div>
                     <div class="col-lg-6  m-auto">
                        <div class="display-msg-success d-flex justify-content-start align-items-center">


                            @if(!isset($structured->doc3_14))


                                <div class="file-details-fail">
                                    <form id="form3_14" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="type" value="structured">
                                        <input type="hidden" name="field" value="doc3_14">
                                        <label >

                                            <i class="icofont-cloud-upload" for="doc3_14"></i> Selecione o documento
                                            <input type="file" name="file" class="d-none upload_form_data" main_form="3" form_id="14" id="doc3_14">
                                            <i class="icofont-exclamation error-icon"></i>
                                        </label>
                                    </form>
                                </div>

                            @else
                                <div class="file-details">
                                    {{$structured->doc3_14}}
                                    <i class="icofont-tick-mark" for="doc3_14"></i>
                                </div>
                            @endif

                        </div>
                    </div> 
                    <div class="col-lg-12   my-2">
                        <b> 7 Última Escrituração Contábil Fiscal – ECF (se a empresa não for do Simples Nacional)</b>
                     </div>
                     <div class="col-lg-6  m-auto">
                        <div class="display-msg-success d-flex justify-content-start align-items-center">


                            @if(!isset($structured->doc3_15))


                                <div class="file-details-fail">
                                    <form id="form3_15" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="type" value="structured">
                                        <input type="hidden" name="field" value="doc3_15">
                                        <label >

                                            <i class="icofont-cloud-upload" for="doc3_15"></i> Selecione o documento
                                            <input type="file" name="file" class="d-none upload_form_data" main_form="3" form_id="15" id="doc3_15">
                                            <i class="icofont-exclamation error-icon"></i>
                                        </label>
                                    </form>
                                </div>

                            @else
                                <div class="file-details">
                                    {{$structured->doc3_15}}
                                    <i class="icofont-tick-mark" for="doc3_15"></i>
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="col-lg-12   my-2">
                       <b> 8 PGDAS + DEFIS do exercício de 2021 até o presente (se do Simples Nacional)</b>
                     </div>
                     <div class="col-lg-6  m-auto">
                        <div class="display-msg-success d-flex justify-content-start align-items-center">


                            @if(!isset($structured->doc3_16))


                                <div class="file-details-fail">
                                    <form id="form3_16" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="type" value="structured">
                                        <input type="hidden" name="field" value="doc3_16">
                                        <label >

                                            <i class="icofont-cloud-upload" for="doc3_16"></i> Selecione o documento
                                            <input type="file" name="file" class="d-none upload_form_data" main_form="3" form_id="16" id="doc3_16">
                                            <i class="icofont-exclamation error-icon"></i>
                                        </label>
                                    </form>
                                </div>

                            @else
                                <div class="file-details">
                                    {{$structured->doc3_16}}
                                    <i class="icofont-tick-mark" for="doc3_16"></i>
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="col-lg-12   my-2">
                       <b> 9 Planilha de endividamento (modelo em relatórios)</b>
                     </div>
                     <div class="col-lg-6  m-auto">
                        <div class="display-msg-success d-flex justify-content-start align-items-center">


                            @if(!isset($structured->doc3_17))


                                <div class="file-details-fail">
                                    <form id="form3_17" action="{{url('user/upload/loan')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="type" value="structured">
                                        <input type="hidden" name="field" value="doc3_17">
                                        <label >

                                            <i class="icofont-cloud-upload" for="doc3_17"></i> Selecione o documento
                                            <input type="file" name="file" class="d-none upload_form_data" main_form="3" form_id="17" id="doc3_17">
                                            <i class="icofont-exclamation error-icon"></i>
                                        </label>
                                    </form>
                                </div>

                            @else
                                <div class="file-details">
                                    {{$structured->doc3_17}}
                                    <i class="icofont-tick-mark" for="doc3_17"></i>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>

        

    </div>
</div>

