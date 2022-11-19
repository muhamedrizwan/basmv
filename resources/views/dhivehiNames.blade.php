@extends('layout')

@section('content')

<section>
    <div class="card float-right bodyPanel" style="width:75%;/*margin:20px 20px 20px 20px;*//*margin-right:22%;*//*background-color:rgba(255,255,255,0.5);*/">
        <div class="card-body">
            <div class="input-group float-right searchbar" style="width:350px;">
                <div class="input-group-prepend"></div><input class="form-control" type="text" style="border-radius:20px 0px 00px 20px;background-color:rgba(255,255,255,0);border:1px solid grey;">
                <div class="input-group-append"><button class="btn btn-primary" type="button" style="border-radius:0px 20px 20px 0px;background-color:rgba(0,123,255,0);border:1px solid grey;"><i class="fa fa-search" style="color:rgb(128,128,128);"></i></button></div>
            </div>
            <h4>Login | Register&nbsp;&nbsp;<i class="fa fa-user-circle-o"></i></h4>
            <div class="card float-right contentCard" style="background-color:rgba(255,255,255,0.0);width: 100%; margin-bottom:2em">
                <div class="card-body">
                    <h2 class="text-right dv dv1">ދިވެހި ނަން</h2>
                </div>
            </div>
            <div class="container" style="width:100%;margin-top:5em;">
                {{-- <div class="row">
                    <div class="col-xl-12 offset-xl-0"><button class="btn btn-primary float-right btnRound" type="button">Button</button><button class="btn btn-primary float-right btnRound" type="button">Button</button></div>
                </div> --}}
                <div class="row">
                    @foreach ($data as $data)
                    <div class="col-xl-4 offset-xl-0">
                        <div class="card" style="background-color:rgba(255,255,255,0.5);border-color:white;border-radius:20px;max-height:40vh;min-height:40vh;">
                            <div class="card-body">
                                <h4 class="text-center dv dv1">{{$data->name}}</h4><img src="{{URL::to('/')}}/assets/img/dhivehinan/{{$data->thumbnail}}"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
