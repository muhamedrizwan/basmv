@extends('layout')

@section('content')

<section>
    <div class="card float-right bodyPanel" style="width:75%;/*margin:20px 20px 20px 20px;*//*margin-right:22%;*//*background-color:rgba(255,255,255,0.5);*/ ">
        <div class="card-body">
            <div class="input-group float-right searchbar" style="width:350px;">
                <div class="input-group-prepend"></div><input class="form-control" type="text" style="border-radius:20px 0px 00px 20px;background-color:rgba(255,255,255,0);border:1px solid grey;">
                <div class="input-group-append"><button class="btn btn-primary" type="button" style="border-radius:0px 20px 20px 0px;background-color:rgba(0,123,255,0);border:1px solid grey;"><i class="fa fa-search" style="color:rgb(128,128,128);"></i></button></div>
            </div>
            <h4>Login | Register&nbsp;&nbsp;<i class="fa fa-user-circle-o"></i></h4>

            <div class="card float-right contentCard" style="background-color:rgba(255,255,255,0.0);width: 100%; margin-bottom:2em">
                <div class="card-body">
                    <h2 class="text-right dv dv1">ގަވާއިދުތައް</h2>
                </div>
            </div>
            <div>
                @foreach ($data as $item)
                <div id="list" class="card float-right contentCard list" style="background-color:rgba(255,255,255,0.48);width: 100%">
                    <div  data-id="{{$item->id}}" data-name="{{$item->name}}" data-writer="{{$item->writer}}" data-date="{{$item->written_date}}"data-description="{{$item->description}}" class="card-body item" >
                        <p class="text-right dv dv2">{{$item->name}}</p>
                        <p class="text-right dv dv2">{{$item->citation}}</p>
                        <p class="card-text">{{$item->writer}} | {{$item->written_date}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div id="details" style="display:none;">
                <button id="close" class="btn btn-primary float-right btnRound dv dv2" type="button">ފަހަތަށް</button>
                    <div id="list" class="card contentCard float-right " style="background-color:rgba(255,255,255,0.48);width:100%">
                        <div class="card-body item" >
                            <p class="text-right dv dv3" id="name">{{$item->name}}</p>
                            <p class="text-right dv dv2" id="description">{{$item->description}}</p>
                            <p class="card-text dv dv2" id="writer">{{$item->writer}}</p>
                            <p class="card-text" id="date">{{$item->written_date}}</p>
                        </div>
                    </div>
           
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')

<script>

    $(".list").on("click",".item", function(){
        var id = $(this).data('id')
        var name = $(this).data('name')
        var description = $(this).data('description')
        var writer = $(this).data('writer')
        var written_date = $(this).data('date')

        $("#name").html(name)
        $("#description").html(description)
        $("#writer").html(writer)
        $("#date").html(written_date)

        $(".list").hide();
        $("#details").show();

    })

    // $(documemt).on("click", "#close", function(){
    $("#close").click(function(){
        $(".list").show();
        $("#details").hide();
    })

</script>


@endpush

