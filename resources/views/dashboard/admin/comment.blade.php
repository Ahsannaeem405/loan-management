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

               <div class="table-responsive" style="height: 300px">
                   @foreach($loanadd->comment as $detail)
                       <div class="row m-0" >
                           <div class=" col-md-1 ">
                               <img src="{{asset('assets/dashboard/profile/'.$detail->user->profile.'')}}"
                                    style="width: 100%;border-radius: 10px">
                           </div>
                           <div class="col-10">
                               <span class="font-weight-bold">{{$detail->user->name}}</span>
                               <span style="float: right">{{$detail->created_at}}</span>

                               <p>{{$detail->comment}}</p>
                           </div>
                       </div>

                       <hr>
                   @endforeach
               </div>


                <div class="row mt-5">

                    <form method="post" action="{{url(''.Auth::user()->role.'/comment/send/'.$loanadd->id.'')}}" enctype="multipart/form-data">

                        @csrf
                        <div class="row  mt-5 mb-4">
                            <div class=" col-md-2 col-2 justify-content-center d-flex align-items-center">
                                <img src="{{asset('assets/dashboard/profile/'.Auth::user()->profile.'')}}"
                                     style="width: 80%;border-radius: 10px">
                            </div>
                            <div class="col-10">
                                <textarea class="form-control" placeholder="Type here..." name="msg" required rows="4"></textarea>

                            </div>


                            <div class="col-lg-12 mt-2 " style="text-align: right">
                                <button  class="btn btn-success" style="background-color: green;">Submit</button>
                            </div>
                        </div>

                    </form>


                </div>




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

