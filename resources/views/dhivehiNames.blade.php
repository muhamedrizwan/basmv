@extends('layout')

@section('content')

<section>
    <div class="card float-right bodyPanel" style="width:75%;/*margin:20px 20px 20px 20px;*//*margin-right:22%;*//*background-color:rgba(255,255,255,0.5);*/">
        <div class="card-body">
            <div class="input-group float-right searchbar" style="width:350px;">
                <div class="input-group-prepend"></div><input class="form-control" type="text" style="border-radius:20px 0px 00px 20px;background-color:rgba(255,255,255,0);border:1px solid grey;">
                <div class="input-group-append"><button class="btn btn-primary" type="button" style="border-radius:0px 20px 20px 0px;background-color:rgba(0,123,255,0);border:1px solid grey;"><i class="fa fa-search" style="color:rgb(128,128,128);"></i></button></div>
            </div>
            {{-- <h4>Login | Register&nbsp;&nbsp;<i class="fa fa-user-circle-o"></i></h4> --}}
            <div class="card float-right contentCard" style="background-color:rgba(255,255,255,0.0);width: 100%; margin-bottom:2em">
                <div class="card-body">
                    <h2 class="text-right dv dv1">ދިވެހި ނަން</h2>
                </div>
            </div>
            <div class="container" style="width:100%;margin-top:5em;">
                {{-- <div class="row">
                    <div class="col-xl-12 offset-xl-0"><button class="btn btn-primary float-right btnRound" type="button">Button</button><button class="btn btn-primary float-right btnRound" type="button">Button</button></div>
                </div> --}}
                <div id="list" class="row ">
                    @foreach ($data as $item)
                    <div class="col-xl-4 offset-xl-0 ">
                        <div data-id="{{$item->id}}" data-name="{{$item->name}}"  data-thumbnail="{{$item->thumbnail}}" data-image="{{$item->image}}" class="card item" style="background-color:rgba(255,255,255,0.5);border-color:white;border-radius:20px;max-height:40vh;min-height:40vh;">
                            <div class="card-body">
                                <h4 class="text-center dv dv1">{{$item->name}}</h4><img src="{{URL::to('/')}}/{{$item->thumbnail}}"></div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div id="details" style="display:none;">
                    <div class="col">
                        <button id="close" class="btn btn-primary btnRound dv dv2" style="background-color: grey" type="button">ފަހަތަށް</button>
                    </div>
                    <div class="row" style="margin-top:15px;">
                        <div class="col-xl-10 offset-xl-0 float-right">
                            <div class="card"><img class="card-img w-100 d-block" style="max-width:500px" id="img"src=""></div>
                        </div>
                        <div class="col ">
                            <div class="row">
                                <div class="col">
                                    <h3 class="float-right dv dv1" id="name"></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')

<script>

    $("#list").on("click",".item", function(){
        var id = $(this).data('id')
        var name = $(this).data('name')
        var image = $(this).data('image')
        $("#name").html(name)
        $("#img").attr("src","{{URL::to('/')}}/"+image)
        $("#list").hide();
        $("#details").show();

    })

    // $(documemt).on("click", "#close", function(){
    $("#close").click(function(){
        $("#list").show();
        $("#details").hide();
    })

</script>


@endpush
