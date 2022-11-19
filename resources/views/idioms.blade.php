@extends('layout')

@section('content')
<style>
    
   
</style>
<section>
    <div class="card float-right bodyPanel" style="width:75%;/*margin:20px 20px 20px 20px;*//*margin-right:22%;*//*background-color:rgba(255,255,255,0.5);*/">
        <div class="card-body">
            <div class="input-group float-right searchbar" style="width:350px;">
                <div class="input-group-prepend"></div><input class="form-control" type="text" style="border-radius:20px 0px 00px 20px;background-color:rgba(255,255,255,0);border:1px solid grey;">
                <div class="input-group-append"><button class="btn btn-primary" type="button" style="border-radius:0px 20px 20px 0px;background-color:rgba(0,123,255,0);border:1px solid grey;"><i class="fa fa-search" style="color:rgb(128,128,128);"></i></button></div>
            </div>
            <h4>Login | Register&nbsp;&nbsp;<i class="fa fa-user-circle-o"></i></h4>
         
            <div class="card float-right contentCard" style="background-color:rgba(255,255,255,0.0);width: 100%">
                <div class="card-body">
                    <h2 class="text-right dv dv1">އަދަބީބަސް</h2>
                <h5 class="text-right dv dv2">އަދަބީ ބަހަކީ، ބުނީ ކާކުކަން ނޭނގޭ ތަފާތު މާނަ ދޭހަވާ ބަސްބަހާއި ބަސްކޯޅިތަކެވެ. އަދަބީ ބަސްތައް ބެހެނީ މައިގަނޑު 8 ބަޔަށެވެ.</h5>
                </div>
            </div>
            <div>
                @foreach ($data as $data)

                <div class="card float-right contentCard" style="background-color:rgba(255,255,255,0.48);width: 100%">
                    <div class="card-body">
                        <h5 class="text-right dv dv3">{{$data->name}}</h5>
                        <p class="card-text text-right  dv dv2">{{$data->meaning}}</p>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
