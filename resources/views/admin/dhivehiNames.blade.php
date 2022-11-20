@extends('layout')

@section('content')

<section>
    <div class="card float-right bodyPanel" style="width:75%;/*margin:20px 20px 20px 20px;*//*margin-right:22%;*//*background-color:rgba(255,255,255,0.5);*/">
        <div class="card-body">
            <div class="input-group float-right searchbar" style="width:350px;">
                <div class="input-group-prepend"></div><input class="form-control" type="text" style="border-radius:20px 0px 00px 20px;background-color:rgba(255,255,255,0);border:1px solid grey;">
                <div class="input-group-append"><button class="btn btn-primary" type="button" style="border-radius:0px 20px 20px 0px;background-color:rgba(0,123,255,0);border:1px solid grey;"><i class="fa fa-search" style="color:rgb(128,128,128);"></i></button></div>
            </div>
            <div class="card float-right contentCard" style="background-color:rgba(255,255,255,0.0);width: 100%; margin-bottom:2em">
                <div class="card-body">
                    <h2 class="text-right dv dv1">ދިވެހި ނަން</h2>
                </div>
            </div>
            <div class="container" >
                <form id="newDataForm">
                    <div class="form-group"><input class="form-control dv dv2" type="text" name="Name" placeholder="ނަން"required="" dir="rtl"></div>
                    <div class="mb-3 ">
                        <div class="float-right dv dv2" ><label for="formFile" class="form-label ">ކުޑަ ފޮޓޯ</label></div>
                        <input class="form-control" type="file" id="formFile">
                      </div>
                      <div class="mb-3 ">
                        <div class="float-right dv dv2"><label for="formFile" class="form-label">ފޮޓޯ</label></div>
                        <input class="form-control" type="file" id="formFile">
                      </div>
                    <div class="form-group float-right"><button class="btn btn-primary btnRound" type="submit">Post</button></div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection