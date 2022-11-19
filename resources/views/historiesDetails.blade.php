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
            <div class="container" style="width:100%;margin-top:2em;">
                <div class="row">
                    <div class="col-xl-12 offset-xl-0"><button class="btn btn-primary float-right btnRound" type="button">Button</button>
                        <h3 class="float-left">A,B,C,D...</h3><button class="btn btn-primary float-right btnRound" type="button">Button</button></div>
                </div>
                <div class="row" style="margin-top:15px;">
                    <div class="col-xl-8 offset-xl-0 float-right">
                        <div class="card"><img class="card-img w-100 d-block" src="assets/img/desk.jpg"></div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <h3 class="float-right">Heading</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="float-right">Paragraph</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="float-right">Paragraph</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
