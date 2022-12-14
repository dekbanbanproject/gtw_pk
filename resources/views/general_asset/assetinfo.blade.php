@extends('layouts.backend')
<link href="{{ asset('datepicker/dist/css/bootstrap-datepicker.css') }}" rel="stylesheet" />


@section('content')
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
<?php

     $yearbudget = date("Y")+543;
     
     $yearnow = date("Y")+543;
     $monthnow = date("m");
     $datenow1 = date("d");
     $timenow = date(" H:i:s");
 
     $datenow = $datenow1.'/'.$monthnow.'/'.$yearnow.' '.$timenow;
 

?>

<style>
        body {
            font-family: 'Kanit', sans-serif;
            font-size: 15px;
           
            }

            .text-pedding{
   padding-left:10px;
                    }

        .text-font {
    font-size: 13px;
                  }   
      }


  
#pages{
    text-align: center;
}
.page{
    width: 90%;
    margin: 10px;
    box-shadow: 0px 0px 5px #000;
    animation: pageIn 1s ease;
    transition: all 1s ease, width 0.2s ease;
}
@keyframes pageIn{
  0%{
      transform: translateX(-300px);
      opacity: 0;
  }
  100%{
      transform: translateX(0px);
      opacity: 1;
  }
}
#zoom-in{
    
}
#zoom-percent{
    display: inline-block;
}
#zoom-percent::after{
    content: "%";
}
#zoom-out{
    
}

.form-control {
            font-family: 'Kanit', sans-serif;
            font-size: 13px;
            }
      
       
</style>

<div class="bg-body-light">
    <div class="content">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
             <h1 style="font-family: 'Kanit', sans-serif; font-size:15px;font-size: 1.3rem;font-weight:normal;">{{ $inforpersonuser -> HR_PREFIX_NAME }}   {{ $inforpersonuser -> HR_FNAME }}  {{ $inforpersonuser -> HR_LNAME }}</h1> 
             <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <div class="row">
                                <div>
                                <a href="{{ url('general_asset/dashboard/'.$inforpersonuserid -> ID)}}" class="btn loadscreen" style="font-family: 'Kanit', sans-serif; font-size: 10px;font-size: 1.0rem;font-weight:normal;background-color:#DCDCDC;color:#696969;">Dashboard</a> 
                                </div>
                                <div>&nbsp;</div>     
                                <div>

                                <a href="{{ url('general_asset/genassetindex/'.$inforpersonuserid -> ID)}}" class="btn btn-success loadscreen" style="font-family: 'Kanit', sans-serif; font-size: 10px;font-size: 1.0rem;font-weight:normal;">?????????????????????????????????????????????</a> 

                                </div>
                                <div>&nbsp;</div>                      
                                <div>
                                <a href="{{ url('general_asset/genassetdisburseindex/'.$inforpersonuserid -> ID)}}" class="btn loadscreen" style="font-family: 'Kanit', sans-serif; font-size: 10px;font-size: 1.0rem;font-weight:normal;background-color:#DCDCDC;color:#696969;">?????????????????????????????????????????????????????????  
                                </a> 
                                </div>
                                <div>&nbsp;</div>
                                <div>
                                <a href="{{ url('general_asset/infolendindex/'.$inforpersonuserid -> ID)}}" class="btn loadscreen" style="font-family: 'Kanit', sans-serif; font-size: 10px;font-size: 1.0rem;font-weight:normal;background-color:#DCDCDC;color:#696969;">??????????????????????????????
                                </a>   
                                </div>           
                                <div>&nbsp;</div>
                                <div>
                                <a href="{{ url('general_asset/infogiveindex/'.$inforpersonuserid -> ID)}}" class="btn loadscreen" style="font-family: 'Kanit', sans-serif; font-size: 10px;font-size: 1.0rem;font-weight:normal;background-color:#DCDCDC;color:#696969;">???????????????????????????????????????
                                </a>   
                                </div>    
                         
                                
                                </div>
                                </ol>
                            </nav> 
        </div>
    </div>
    </div>
    <div class="content">
<!-- Dynamic Table Simple -->
<div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
<h3 class="block-title" style="font-family: 'Kanit', sans-serif;"><B>?????????????????????????????? ???????????????????????? ???????????????????????????????????? {{$infoasset->SUP_FSN}}</B></h3>

</div>
<form  method="post" action=""  enctype="multipart/form-data"  class="needs-validation" novalidate>      
    @csrf

<div class="block-content block-content-full">
<div class="row">
   <div class="col-md-3" style="text-align: center">
   <div class="row">
        <div class="col-lg-12">
        <div class="form-group">
        <img src="data:image/png;base64,{{chunk_split(base64_encode($infoasset->IMG))}}" id="image_upload_preview"   height="300px" width="100%"/>
        </div>                             
  
         </div>
         </div>
  


   </div>
   

   <div class="col-md-9">
   <div class="row">
   <div class="col">
   <h2 class="content-heading pt-0" style="font-family: 'Kanit', sans-serif;text-align: left"><span style="border-radius: 5px;font-size: 18px;">&nbsp;&nbsp;??????????????????????????????&nbsp;&nbsp;</span></h2>   
   </div>

   </div>
        
 
        <div class="row">
            <div class="col">
            <p style="text-align: left">?????????????????????????????????????????????</p>
            </div> 
            <div class="col-md-4" >
           {{$infoasset->ARTICLE_NUM}}
                     
            </div>
            <div class="col">
            <p style="text-align: left">??????????????????????????????</p>
            </div> 
            <div class="col-md-4" >
            {{$infoasset->YEAR_ID}}        
            </div>
         
        </div>

     

        <div class="row">
            <div class="col">
            <p style="text-align: left">????????????????????????????????????</p>
            </div>
            <div class="col-md-4" >
            {{$infoasset->ARTICLE_NAME}}
            </div>
            <div class="col">
            <p style="text-align: left">??????????????????</p>
            </div>
            <div class="col-md-4" >
            {{$infoasset->ARTICLE_PROP}}
            </div>
         
        </div>
        
        <div class="row">
            <div class="col">
            <p style="text-align: left">????????????????????????</p>
            </div>
            <div class="col-md-4" >
           
             {{ $infoasset -> SUP_UNIT_NAME }}
                            
            
            </div>
            <div class="col">
            <p style="text-align: left">??????????????????????????????</p>
            </div>
            <div class="col-md-4" >
            {{$infoasset->SERIAL_NO}}
            </div>
           
         
        </div>

        <div class="row">
        <div class="col">
            <p style="text-align: left">??????????????????????????????????????????</p>
            </div>
            <div class="col-md-4" >
            
            {{ $infoasset -> BRAND_NAME }}
           
            </div>
            <div class="col">
            <p style="text-align: left">??????????????????????????????</p>
            </div>
            <div class="col-md-4" >
            {{ $infoasset -> COLOR_NAME }}
            </div>
            </div>

            <div class="row">
        <div class="col">
            <p style="text-align: left">????????????</p>
            </div>
            <div class="col-md-4" >
          
                {{ $infoasset -> MODEL_NAME }}
 
            
            </div>
            <div class="col">
            <p style="text-align: left">????????????</p>
            </div>
            <div class="col-md-4" >
             {{ $infoasset -> SIZE_NAME }}
                         
            
            </div>
     
        </div>
       
  

        <div class="row">
            <div class="col">
            <p style="text-align: left">????????????</p>
            </div>
            <div class="col-md-4" >
            {{$infoasset->PRICE_PER_UNIT}}
            </div>
            <div class="col">
            <p style="text-align: left">???????????????????????????????????????</p>
            </div>
            <div class="col-md-4" >
            {{DateThai($infoasset->RECEIVE_DATE)}}
            </div>
         
        </div>

        
        <div class="row">
            <div class="col">
            <p style="text-align: left">???????????????????????????</p>
            </div>
            <div class="col-md-4" >
           
            
            {{ $infoasset -> METHOD_NAME }}
            
            </div>
            <div class="col">
            <p style="text-align: left">??????????????????????????????</p>
            </div>
            <div class="col-md-4" >
           
        {{ $infoasset -> BUY_NAME }}
                             
            
            
            </div>
         
        </div>

        <div class="row">
            <div class="col">
            <p style="text-align: left">????????????????????????</p>
            </div>
            <div class="col-md-4" >
         {{ $infoasset -> BUDGET_NAME }}
              
            
            
            </div>
            <div class="col">
            <p style="text-align: left">??????????????????</p>
            </div>
            <div class="col-md-4" >
            
            {{ $infoasset -> SUP_TYPE_NAME }}
    
            
            
            </div>
         
        </div>

        <div class="row">
            <div class="col">
            <p style="text-align: left">?????????????????????????????????????????????</p>
            </div>
            <div class="col-md-4" >
                {{ $infoasset -> DECLINE_NAME }}
                                
           
            </div>
            <div class="col">
            <p style="text-align: left">??????????????????????????????</p>
            </div>
            <div class="col-md-4" >
           
            {{ $infoasset -> VENDOR_NAME }}
         
            
            
            </div>
         
        </div>
        <div class="row">
            <div class="col">
            <p style="text-align: left">???????????????????????????????????????</p>
            </div>
            <div class="col-md-4" >
            
            
            {{ $infoasset -> HR_DEPARTMENT_SUB_NAME }}
                      
            
            
            </div>
            <div class="col">
            <p style="text-align: left">???????????????</p>
            </div>
            <div class="col-md-4" >
            
            
        
                 {{ $infoasset -> LOCATION_NAME }}
              
            
            
            </div>
         
        </div>
        <div class="row">
            <div class="col">
            <p style="text-align: left">????????????</p>
            </div>
            <div class="col-md-4" >
          
            {{ $infoasset -> LOCATION_LEVEL_NAME }}
                    
            
            </div>
            <div class="col">
            <p style="text-align: left">????????????</p>
            </div>
            <div class="col-md-4" >
            
           {{ $infoasset -> LEVEL_ROOM_NAME }}
             
            
            </div>
         
        </div>
        <div class="row">
            <div class="col">
            <p style="text-align: left">????????????????????????????????????</p>
            </div>
            <div class="col-md-4" >
         
                {{ $infoasset -> HR_FNAME }} {{ $infoasset -> HR_LNAME }}
            
            
            </div>
            <div class="col">
            <p style="text-align: left">????????????????????????</p>
            </div>
            <div class="col-md-4" >
            {{$infoasset->REMARK}}
            </div>
         
        </div>

        <br>
        <h2 class="content-heading pt-0" style="font-family: 'Kanit', sans-serif;text-align: left"><span style="border-radius: 5px;font-size: 18px;">&nbsp;&nbsp;????????????????????????????????????&nbsp;&nbsp;</span></h2>  

        <div class="row">
            <div class="col">
            <p style="text-align: left">??????????????????????????????????????????</p>
            </div>
            <div class="col-md-4" >
            {{ $infoasset -> STATUS_NAME }} 
           
            
            
            </div>
            <div class="col">
            <p style="text-align: left">???????????????????????????????????????</p>
            </div>
            <div class="col-md-4" >
           {{$infoasset->OLD_USE}}
            </div>
         
        </div>
        <div class="row">
            <div class="col-md-2">
            <p style="text-align: left">?????????????????????</p>
            </div>
            <div class="col-md-4" >
           {{DateThai($infoasset->EXPIRE_DATE)}}
            </div>
  
         
        </div>
        <br>
        <h2 class="content-heading pt-0" style="font-family: 'Kanit', sans-serif;text-align: left"><span style="border-radius: 5px;font-size: 18px;">&nbsp;&nbsp;????????????????????????????????????????????????????????????&nbsp;&nbsp;</span></h2>  

        <div class="row">
            <div class="col">
            <p style="text-align: left">??????????????????????????????????????? PM</p>
            </div>
            <div class="col-md-4" >
         
          {{ $infoasset -> PM_TYPE_NAME }}
                         
            

            </div>
            <div class="col">
            <p style="text-align: left">????????????????????????????????? CAL</p>
            </div>
            <div class="col-md-4" >
           {{ $infoasset -> CAL_TYPE_NAME }}
           
            
            
           
            </div>
         
        </div>
        <div class="row">
            <div class="col-md-2">
            <p style="text-align: left">??????????????????????????????</p>
            </div>
            <div class="col-md-4" >
           
        {{ $infoasset -> RISK_TYPE_NAME }} 
           
            
            
            </div>
       
         
        </div>
    
    

        </div>
</div>
<br>
<div class="modal-footer">
        <div align="right">
       
        <a href="{{ url('general_asset/genassetindex/'.$inforpersonuserid -> ID)  }}" class="btn btn-hero-sm btn-hero-danger" >?????????????????????????????????</a>
        </div>

</form>



 
@endsection

@section('footer')

<script src="{{ asset('datepicker/dist/js/bootstrap-datepicker-custom.js') }}"></script>
<script src="{{ asset('datepicker/dist/locales/bootstrap-datepicker.th.min.js') }}" charset="UTF-8"></script>

<script src="{{ asset('pdfupload/pdf_up.js') }}"></script>

<script>
   $(document).ready(function () {
            
            $('.datepicker').datepicker({
                format: 'dd/mm/yyyy',
                todayBtn: true,
                language: 'th',             //????????????????????? label ????????????????????? ?????????????????? ????????????????????? ?????????????????????   (????????????????????????????????? bootstrap-datepicker.th.min.js ?????????????????????)
                thaiyear: true,
                autoclose: true                         //Set ?????????????????? ???.???.
            });  //?????????????????????????????????????????????????????????
    });
</script>


@endsection