@extends('layouts.guesthouse')  
    
    <link href="{{ asset('datepicker/dist/css/bootstrap-datepicker.css') }}" rel="stylesheet" />



@section('content')
<style>
.center {
  margin: auto;
  width: 100%;
  padding: 10px;
}
body {
      font-family: 'Kanit', sans-serif;
      font-size: 14px;
      
      }

      .form-control{
            font-family: 'Kanit', sans-serif;
            font-size: 13px;
            }

label{
            font-family: 'Kanit', sans-serif;
            font-size: 14px;
            
      }   

      input::-webkit-calendar-picker-indicator{ 
  
    font-family: 'Kanit', sans-serif;
            font-size: 14px;
         
}     
</style>

<script>
    function checklogin(){
     window.location.href = '{{route("index")}}'; 
    }
    </script>
<?php
if(Auth::check()){
    $status = Auth::user()->status;
    $id_user = Auth::user()->PERSON_ID;   
}else{    
    echo "<body onload=\"checklogin()\"></body>";
    exit();
} 
$url = Request::url();
$pos = strrpos($url, '/') + 1;
$user_id = substr($url, $pos); 


?>
<style>
        body {
            font-family: 'Kanit', sans-serif;
            font-size: 14px;
          
            }
            .form-control {
            font-family: 'Kanit', sans-serif;
            font-size: 14px;
            }

                .table-fixed tbody {
        height: 300px;
        overflow-y: auto;
        width: 100%;
    }

    .table-fixed thead,
    .table-fixed tbody,
    .table-fixed tr,
    .table-fixed td,
    .table-fixed th {
        display: block;
    }

    .table-fixed tbody td,
    .table-fixed tbody th,
    .table-fixed thead > tr > th {
        float: left;
        position: relative;

        &::after {
            content: '';
            clear: both;
            display: block;
        }
    }
</style>

<center>    
    <div class="block mt-5 shadow-lg" style="width: 95%;">
        <div class="block block-rounded block-bordered">
            <div class="block-header block-header-default">
                <h3 class="block-title" style="font-family: 'Kanit', sans-serif;"><B>????????????????????????????????????????????????????????????</B></h3>
               
            </div>
            <div class="block-content block-content-full">

          
    <form  method="post" action="" enctype="multipart/form-data">
        @csrf      
        <div class="row push">
    
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-lg-2">
                        <label style="text-align: left"> ?????????????????????????????? :</label>
                    </div> 
            
                    <div class="col-lg-10 ">
                            <input name="PROBLEM_NAME" id="PROBLEM_NAME" class="form-control input-lg" style=" font-family: 'Kanit', sans-serif;">
                    </div> 


                    </div>
                    <br>
                    <div class="row">
                    <div class="col-lg-2">
                        <label style="text-align: left"> ??????????????? :</label>
                    </div> 
            
                    <div class="col-lg-10 ">
                    <select name="LOCATION_ID" id="LOCATION_ID" class="form-control input-lg provice" style=" font-family: 'Kanit', sans-serif;" >
                        <option value="" >--?????????????????????????????????????????????--</option>
                            @foreach ($infolocations as $infolocation)
                           
                                <option value=" {{ $infolocation -> LOCATION_ID }}" >{{ $infolocation -> LOCATION_NAME }}</option>
                           
                            @endforeach         
                        </select>
                    </div> 
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-2">
                            <label style="text-align: left"> ???????????? :</label>
                        </div> 
                        <div class="col-lg-4 ">
                        <select name="LOCATION_LEVEL_ID" id="LOCATION_LEVEL_ID" class="form-control input-lg provice" style=" font-family: 'Kanit', sans-serif;" >
                        <option value="" >--??????????????????????????????????????????--</option>
                            @foreach ($infolocationlevels as $infolocationlevel)
                            
                                <option value=" {{ $infolocationlevel -> LOCATION_LEVEL_ID }}" >{{ $infolocationlevel -> LOCATION_LEVEL_NAME }}</option>
                               
                            @endforeach         
                        </select>
            
                        </div>                 
                    
                    <div class="col-lg-2">
                            <label style="text-align: left"> ???????????? :</label>
                        </div> 
                        <div class="col-lg-4 ">
                        <select name="LEVEL_ROOM_ID" id="LEVEL_ROOM_ID" class="form-control input-lg provice" style=" font-family: 'Kanit', sans-serif;" >
                        <option value="" >--??????????????????????????????????????????--</option>
                                @foreach ($infolocationlevelrooms as $infolocationlevelroom)
                             
                                <option value=" {{ $infolocationlevelroom -> LEVEL_ROOM_ID }}" >{{ $infolocationlevelroom -> LEVEL_ROOM_NAME }}</option>
                              
                                @endforeach         
                                </select>
                        </div>                 
                    </div>
                    <br>

                    <div class="row">
                    <div class="col-lg-2">
                            <label style="text-align: left"> ????????????????????????????????? :</label>
                        </div> 
                        <div class="col-lg-4 ">

                        <select name="PROBLEM_TYPE" id="PROBLEM_TYPE" class="form-control input-lg provice" style=" font-family: 'Kanit', sans-serif;" >
                                <option value="" >--????????????????????????????????? --</option>
                              
                                <option value="1" >???????????????</option>
                                <option value="2" >???????????????</option>
                                <option value="3" >????????????????????????????????????</option>
                                <option value="4" >??????????????????????????????????????????</option>
                                <option value="5" >???????????????????????????</option>
                                <option value="6" >?????????????????????</option>
                                <option value="7" >???????????????</option>
                                </select>
                      
                        </div>                 
                    
                        <div class="col-lg-2">
                            <label style="text-align: left"> ?????????????????? :</label>
                        </div> 
                        <div class="col-lg-4 ">
                            <input name="PROBLEM_PICE" id="PROBLEM_PICE" class="form-control input-lg "  style=" font-family: 'Kanit', sans-serif;" >
                        </div>                 
                    </div>

                    <br>

                    <div class="row">
                    <div class="col-lg-2">
                            <label style="text-align: left"> ????????????????????? :</label>
                        </div> 
                        <div class="col-lg-4 ">
                      
                        </div>                 
                    
                    <div class="col-lg-2">
                            <label style="text-align: left"> ????????? :</label>
                        </div> 
                        <div class="col-lg-4 ">
                            <input name="PROBLEM_HR_TEL" id="PROBLEM_HR_TEL" class="form-control input-lg "  style=" font-family: 'Kanit', sans-serif;" >
                        </div>                 
                    </div>
                    <br>
                    
            </div> 
        </div> 

       

        <div class="modal-footer">
        <div align="right">
        <button type="submit"  class="btn btn-hero-sm btn-hero-info" >??????????????????</button>
        <a href="{{ url('manager_guesthouse/guesthouseproblem')  }}" class="btn btn-hero-sm btn-hero-danger" onclick="return confirm('???????????????????????????????????????????????????????????????????????????????????????????????? ?')" >??????????????????</a>
        </div>

       
        </div>
        </form>  

@endsection

@section('footer')



<script src="{{ asset('asset/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
<script>jQuery(function(){ Dashmix.helpers(['masked-inputs']); });</script>

<script src="{{ asset('datepicker/dist/js/bootstrap-datepicker-custom.js') }}"></script>
<script src="{{ asset('datepicker/dist/locales/bootstrap-datepicker.th.min.js') }}" charset="UTF-8"></script>




<script>
   

   $(document).ready(function () {
            
            $('.datepicker').datepicker({
                format: 'dd/mm/yyyy',
                todayBtn: true,
                language: 'th',             //????????????????????? label ????????????????????? ?????????????????? ????????????????????? ?????????????????????   (????????????????????????????????? bootstrap-datepicker.th.min.js ?????????????????????)
                thaiyear: true,
                autoclose: true                    //Set ?????????????????? ???.???.
            }).datepicker("setDate", 0);  //?????????????????????????????????????????????????????????
    });

function chkNumber(ele){
var vchar = String.fromCharCode(event.keyCode);
if ((vchar<'0' || vchar>'9')) return false;
ele.onKeyPress=vchar;
}

function chkmunny(ele){
var vchar = String.fromCharCode(event.keyCode);
if ((vchar<'0' || vchar>'9' )&& (vchar != '.')) return false;
ele.onKeyPress=vchar;
}
    

    $('body').on('keydown', 'input, select, textarea', function(e) {
    var self = $(this)
      , form = self.parents('form:eq(0)')
      , focusable
      , next
      ;
    if (e.keyCode == 13) {
        focusable = form.find('input,a,select,button,textarea').filter(':visible');
        next = focusable.eq(focusable.index(this)+1);
        if (next.length) {
            next.focus();
        } else {
            form.submit();
        }
        return false;
    }
});



  
</script>



@endsection