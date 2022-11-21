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
                    <h2 class="text-right dv dv1">ދިވެހި ތާރީޚު</h2>
                </div>
            </div>
            <div id="list" class="container" style="width:100%;">
                <div class="row photos">
                    @foreach ($data as $item)
                        <div data-id="{{$item->id}}" data-name="{{$item->name}}" data-description="{{$item->description}}" data-image="{{$item->image}}" data-caption="{{$item->caption}}" data-date="{{$item->date}}" class="col-sm-6 col-md-4 col-lg-3 item" style="margin-top:5px;margin-bottom:5px;">
                            <a style="color: black"><div class="card"><img class="card-img-top w-100 d-block" src="{{URL::to('/')}}/{{$item->image}}">
                                <div class="card-body">
                                    <h5 class="text-right card-title dv dv2">{{$item->caption}}</h5>
                                </div>
                            </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div id="details" style="display:none;">
                <div class="row" style="margin-top:15px;">
                    <div class="col">
                        <button id="close" class="btn btn-primary btnRound dv dv2" style="background-color: grey" type="button">ފަހަތަށް</button>
                    </div>
                    <div class="col-xl-8 offset-xl-0 float-right">
                        <div class="card contentCard"><img class="card-img w-100 d-block" style="max-width:500px" id="img"src=""></div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <h3 class="float-right dv dv1" id="name"></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="float-right dv dv2" id="description"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="float-right dv dv2" id="date"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

{{-- /*// $("#img").attr("src","{{URL::to('/')}}/assets/img/history/{{$data->image}}")*/ --}}
@push('scripts')

<script>

    $("#list").on("click",".item", function(){
        var id = $(this).data('id')
        var title = $(this).data('item')
        var name = $(this).data('name')
        var description = $(this).data('description')
        var image = $(this).data('image')
        var caption = $(this).data('caption')
        var date = $(this).data('date')

        $("#name").html(name)
        $("#description").html(description)
        $("#date").html(date)
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