@extends('layout')

@section('content')

<section>
    <div class="card float-right bodyPanel" style="width:75%;/*margin:20px 20px 20px 20px;*//*margin-right:22%;*//*background-color:rgba(255,255,255,0.5);*/">
        <div class="card-body">
        

            <div class="card float-right contentCard" style="background-color:rgba(255,255,255,0.0);width:500px;margin-top:5%;margin-right:25%">
                <div class="card-body">
                    <form id = "loginForm" style="max-width:500px">
                        <div class="latestForm">
                            <div class="form-group"> 
                                <label class="form-control-placeholder" for="lastName">Email</label>
                                <input type="text" name="Email" id="Email" class="form-control" value="" required> 
                              
                            </div>
                            <div class="form-group"> 
                                <label class="form-control-placeholder" for="password">Password</label> 
                                <input type="password" name="Password" id="Password" class="form-control" value="" required> 
                                
                            </div> 
                             
                        </div> 
                        <input type="submit" name="submit" class="btn btn-primary btn-block btnRound" style="margin-bottom: 10px !important;" id="register" value="Login">
                    </form>	
                </div>
            </div>


        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>


    $("#loginForm").submit(function(e){
            e.preventDefault();
            var form = $('#loginForm')[0];
            var data = new FormData(form);
            $.ajax({
            type:"POST",
            url: "<?php echo e(URL::to('/')); ?>/login",
            data:{
                email: $("#Email").val(),
                password: $("#Password").val(),
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success:function(response){
                if(response.Status == "error") {
                    alert(response.message)
                } else if(response.Status == "success"){
                    window.location.replace("<?php echo e(URL::to('/')); ?>")
                }
            },
            error:function(response){
                if(response.status == 422){
                    Object.keys(response.responseJSON.errors).forEach(function(key){
                        alert(response.responseJSON.errors[key][0])
                    })
                }
            }
        });

    });

</script>
@endpush