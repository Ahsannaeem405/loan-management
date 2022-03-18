@extends('dashboard.layout.main')
@section('loan')
    active
@endsection


@section('content')






    <div class="container">

        <div class="row mt-5 mb-5 p-2 mr-0 ml-0"  style="border: 1px solid #cbd7e3;border-radius: 10px" >

            <div class="col-lg-12">


                <p class="font-weight-bold">{{$loanadd->loan->type}}</p>


                <hr>

               <div class="table-responsive" >
                   @foreach($loanadd->document as $detail)
                       <div class="row m-0" >
                           <div class=" col-md-1 ">
                               <img src="{{asset('assets/dashboard/profile/'.$detail->user->profile.'')}}"
                                    style="width: 100%;border-radius: 10px">
                           </div>
                           <div class="col-10">
                               <span class="font-weight-bold">{{$detail->user->name}}</span>
                               <span style="float: right">{{$detail->created_at}}</span>

                               <p>        <div class="col-lg-12 col-md-12 col-12 mt-3">
                                   <div
                                       class="display-msg-success d-flex justify-content-start align-items-center">
                                       <h6 class="mb-0">Document </h6>

                                       <div class="file-details">
                                           {{$detail->file}}

                                           <i class="icofont-tick-mark"></i>

                                       </div>
                                       <a href="{{asset('assets/dashboard/document/'.$detail->file.'')}}" download=""> <i
                                               class="icofont-download"></i></a>
                                   </div>
                               </div></p>
                           </div>
                       </div>

                       <hr>
                   @endforeach
               </div>


                @if($loanadd->user_id==Auth::user()->id)
                    <div class="row mt-5">

                        <form method="post" action="{{url(''.Auth::user()->role.'/document/send/'.$loanadd->id.'')}}" enctype="multipart/form-data">

                            @csrf
                            <div class="row  mt-5 mb-4">
                                <div class=" col-md-2 col-2 justify-content-center d-flex align-items-center">
                                    <img src="{{asset('assets/dashboard/profile/'.Auth::user()->profile.'')}}"
                                         style="width: 80%;border-radius: 10px">
                                </div>
                                <div class="col-10">
                                    <lable>Select file</lable>
                                    <input type="file" name="file" required class="form-control">

                                </div>


                                <div class="col-lg-12 mt-2 " style="text-align: right">
                                    <button  class="btn btn-success" style="background-color: green;">Submit</button>
                                </div>
                            </div>

                        </form>


                    </div>
                @endif





            </div>



            <br>



        </div>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".add_file").click(function(){
                $('#image_select').click();
            });
        });
    </script>

@endsection

