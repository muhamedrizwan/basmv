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
                                <label class="float-right dv dv2" for="lastName">ނަަން</label>
                                <input type="text" name="Name" id="Name" class="form-control" value="" required> 
                              
                            </div>
                            <div class="form-group"> 
                                <label class="float-right dv dv2" for="lastName">އީމެއިލް</label>
                                <input type="email" name="Email" id="Email" class="form-control" value="" required> 
                              
                            </div>
                            <div class="form-group"> 
                                <div class="float-right dv dv2" ><label for="formFile" class="form-label "> ފޮޓޯ</label></div>
                                <input class="form-control" type="file" name="Image" id="Image">
                              
                            </div>
                            <div class="form-group">
                                <label class="float-right dv dv2" for="lastName">ޔޫސާ ޓައިޕް</label>
                                <select name="UserType" id="UserType" class="form-control">
                                  <option value="admin">އެޑްމިން</option>
                                  <option value="linguist">އަދީބުން</option>
                                </select>
                              </div>

                            <div class="form-group"> 
                                <label class="float-right dv dv2" for="password">ފާސް ބަސް</label> 
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
        data.append('_token', $("meta[name='csrf-token']").attr('content')); //csrf token appending from layout blade
        $.ajax({
            type: "POST",
            url: "{{URL::to('/')}}/admin/users/create",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success: function (data) {
                if (data.Status == 'error') {
                    swal(data.Message, "", "error")
                } else if (data.validator) {
                    $.each(data.validator, function (i, val) {
                        swal(val, "", "error");
                    });
                } else {
                    swal("Row Created!", "", "success").then((value) => {
                    window.location.reload();
                    });
                }
            },
            error:function(response){
                if(response.status == 422){
                    Object.keys(response.responseJSON.errors).forEach(function(key){
                        swal(response.responseJSON.errors[key][0], "", "error")
                    })
                }
            }
        });
    });
</script>
@endpush