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
                    <h2 class="text-right dv dv1">މަޝްވަރާ ޖަގަހަ</h2>
                </div>
            </div>
            <div >
                @foreach ($data as $item)
                <a href="{{URL::to('/')}}/discussionDetail/{{$item->id}}">
                <div id="list" class="card float-right contentCard" style="background-color:rgba(255,255,255,0.48); width:100%; color:black">
                    <div class="card-body item" >
                        <div class="row">
                            <div class="col-xl-10">
                                <p class="text-right dv dv3">{{$item->title}}</p>
                                <p class="text-right dv dv2">ލިޔުންތެރޔާ</p>
                            </div>
                            <div class="col-xl-2"><img class="rounded-circle img-fluid float-right" src="assets/img/2.jpg" style="width:50px;"></div>
                        </div>
                    </div>
                </div>
                @endforeach
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

