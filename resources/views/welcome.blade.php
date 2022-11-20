@extends('layout')

@section('content')

<style>
    /* import dv.ttf font from public folder */
    @font-face {
        font-family: 'dv';
        src: url('{{URL::to("/")}}/dv.ttf');
    }
   
</style>

<div >
    <section>
        <div class="card float-right bodyPanel" style="width:75%;/*margin:20px 20px 20px 20px;*//*margin-right:22%;*//*background-color:rgba(255,255,255,0.5);*/">
            <div class="card-body">
                <div class="input-group float-right searchbar" style="width:350px;">
                    <div class="input-group-prepend"></div><input class="form-control" type="text" style="border-radius:20px 0px 00px 20px;background-color:rgba(255,255,255,0);border:1px solid grey;">
                    <div class="input-group-append"><button class="btn btn-primary" type="button" id="searchBtn" style="border-radius:0px 20px 20px 0px;background-color:rgba(0,123,255,0);border:1px solid grey;"><i class="fa fa-search" style="color:rgb(128,128,128);"></i></button></div>
                </div>
                {{-- <h4>Login | Register&nbsp;&nbsp;<i class="fa fa-user-circle-o"></i></h4> --}}
                <div class="container" style="width:100%;">
                    <div class="row" style="width:100%;margin-top:30px;">
                        <div class="col-xl-8"><img class="rounded" src="assets/img/stephanie-leblanc-uRqAjW1l8TY-unsplash 1.png" style="width:100%;padding:0;"></div>
                        <div class="col">
                            <div class="card" style="margin-left:-100px;margin-top:100px;background-color:rgba(255,255,255,0.7);border-radius:20px;border-color:white;min-height:300px;">
                                <div class="card-body" style="margin:0;">
                                    <h4 class="text-right dv dv1">އަދަބީ ބަސް</h4>
                                    <p class="text-right card-text dv dv2">އެކަކުންޏެއް ހަރު ކޮންނާނީ އެކަކުންޏެއްގެ ވަރުންނެވެ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
