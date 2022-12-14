@extends('layouts.warehouse')     
<link href="{{ asset('datepicker/dist/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
<link href="{{ asset('select2/select2.min.css') }}" rel="stylesheet" />
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

        label{
                font-family: 'Kanit', sans-serif;
                font-size: 14px;
           
        } 
        @media only screen and (min-width: 1200px) {
   
        }        
        .text-pedding{
    padding-left:10px;
    padding-right:10px;
                        }


        .text-font {
    font-size: 13px;
                  }
                  .form-control {
    font-size: 13px;
                  }

                  table {
            border: 1px solid black;
            }  
            td {
            border: 0.1px solid black;
            font-size: 13px;
            /* text-align: right; */
           
            }  
            th {
            border: 0.1px solid black;
            font-size: 13px;
            text-align: center;
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
    use App\Http\Controllers\ReportWarehouseController;
    
    $checktype = ReportWarehouseController::checktype();
    $checktotalmain = ReportWarehouseController::checktotalmain();
    $checktotalsub = ReportWarehouseController::checktotalsub();
    $checkbuymount = ReportWarehouseController::checkbuymount();
    $checkpayrpst = ReportWarehouseController::checkpayrpst();
    $checkpayrpr = ReportWarehouseController::checkpayrpr();
    $checkpayrpr_sub = ReportWarehouseController::checkpayrpr_sub();
  
 
?>

   
    <div class="container-fuid mr-3 ml-3">      
        <div class="row">          
            <div class="col-md-12">
                <div class="block block-rounded block-bordered shadow-lg">
                    <div class="block-content" style="width: 100%;">
                            <h2 class="content-heading pt-0" style="font-family: 'Kanit', sans-serif;">?????????????????????????????????????????????????????? ??????????????????????????? </h2> 
                           
                            <div class="row text-center"> 
                                <div class="col-md-6">
                                    <form method="POST" id="insert_report">
                                 
                                        @csrf()
                                  
                                        <input type="text" value="{{$m_budget}}">

                                        <div class="row">  
                                                <div class="col-md-1">??????</div>
                                                <div class="col-md-2">
                                                    <select name="YEAR_ID" id="YEAR_ID" class="form-control input-lg" style=" font-family: 'Kanit', sans-serif;">                     
                                                        @foreach ($budgets as $budget)
                                                                @if($budget->LEAVE_YEAR_ID== $year_max)
                                                                    <option value="{{ $budget->LEAVE_YEAR_ID  }}" selected>{{ $budget->LEAVE_YEAR_ID}}</option>
                                                                @else
                                                                    <option value="{{ $budget->LEAVE_YEAR_ID  }}">{{ $budget->LEAVE_YEAR_ID}}</option>
                                                                @endif                                 
                                                            @endforeach  
                                                        </select>
                                                </div>                                         
                                            <div class="col-md-1 ">???????????????</div>
                                            <div class="col-md-4">
                                                <span>
                                                    <select name="SEND_MONTH" id="SEND_MONTH" class="form-control input-lg" style=" font-family: 'Kanit', sans-serif;">
                                                    
                                                    @if($m_budget== '1')<option value="1" selected>??????????????????</option> @else<option value="1" >??????????????????</option>@endif
                                                    @if($m_budget== '2')<option value="2" selected>??????????????????????????????</option> @else<option value="2" >??????????????????????????????</option>@endif
                                                    @if($m_budget== '3')<option value="3" selected>??????????????????</option> @else<option value="3" >??????????????????</option>@endif
                                                    @if($m_budget== '4')<option value="4" selected>??????????????????</option> @else<option value="4" >??????????????????</option>@endif
                                                    @if($m_budget== '5')<option value="5" selected>?????????????????????</option> @else<option value="5" >?????????????????????</option>@endif
                                                    @if($m_budget== '6')<option value="6" selected>????????????????????????</option> @else<option value="6" >????????????????????????</option>@endif
                                                    @if($m_budget== '7')<option value="7" selected>?????????????????????</option> @else<option value="7" >?????????????????????</option>@endif
                                                    @if($m_budget== '8')<option value="8" selected>?????????????????????</option> @else<option value="8" >?????????????????????</option>@endif
                                                    @if($m_budget== '9')<option value="9" selected>?????????????????????</option> @else<option value="9" >?????????????????????</option>@endif
                                                    @if($m_budget== '10')<option value="10" selected>??????????????????</option> @else<option value="10" >??????????????????</option>@endif
                                                    @if($m_budget== '11')<option value="11" selected>???????????????????????????</option> @else<option value="11" >???????????????????????????</option>@endif
                                                    @if($m_budget== '12')<option value="12" selected>?????????????????????</option> @else<option value="12" >?????????????????????</option>@endif                                                     
                                                            
                                                    </select>
                                                </span>
                                               
                                            </div> 
                                            <div class="col-md-1"></div>
                                            {{-- @endif --}}
                                            @if($checktype != 0) 
                                            <div class="col-md-3"> 
                                               
                                                <button type="submit" class="btn btn-hero-sm btn-hero-info" id="submit" style="font-family: 'Kanit', sans-serif; font-size: 14px;font-weight:normal;">????????????????????????</button>                                               
                                            </div>  
                                            @endif  
                                            @if($checktotalmain != 0)                               
                                                <a href="{{url('manager_warehouse/reportstore_main_totalmain')}}" class="btn btn-hero-sm btn-hero-info" style="font-family: 'Kanit', sans-serif; font-size: 14px;font-weight:normal;">?????????????????????????????????????????? <br>????????????????????????</a>
                                            @endif  
                                            @if($checktotalsub != 0) 
                                            <a href="" class="btn btn-hero-sm btn-hero-secondary" style="font-family: 'Kanit', sans-serif; font-size: 14px;font-weight:normal;">?????????????????????????????????????????? <br>????????????????????????</a>
                                            @endif
                                            @if($checkbuymount != 0) 
                                            <a href="" class="btn btn-hero-sm btn-hero-secondary" style="font-family: 'Kanit', sans-serif; font-size: 14px;font-weight:normal;">???????????????????????????????????????????????? <br>?????????</a>
                                            @endif
                                            @if($checkpayrpst != 0) 
                                            <a href="" class="btn btn-hero-sm btn-hero-secondary" style="font-family: 'Kanit', sans-serif; font-size: 14px;font-weight:normal;">????????????????????????????????? <br>??????.??????</a>
                                            @endif
                                            @if($checkpayrpr != 0) 
                                            <a href="" class="btn btn-hero-sm btn-hero-secondary" style="font-family: 'Kanit', sans-serif; font-size: 14px;font-weight:normal;">????????????????????????????????? ????????? <br>????????????????????????</a>
                                            @endif
                                            @if($checkpayrpr_sub != 0) 
                                            <a href="" class="btn btn-hero-sm btn-hero-secondary" style="font-family: 'Kanit', sans-serif; font-size: 14px;font-weight:normal;">????????????????????????????????? ????????? <br>????????????????????????</a>
                                            @endif
                                            
                                            
                                        </div>  
                                   
                                </div> 
                                <div class="col-md-3">      
                                  
                                </div>                            
                                <div class="col-md-3">
                                   
                                </div>                               
                            </div>
                        </form> 
                            <br>
                            <div class="table-responsive">                               
                                <table class="table-striped table-vcenter" style="width: 100%;">
                                    <thead style="background-color: #F8F9F9;">
                                        <tr height="25">
                                            <th>???????????????</th>
                                            <th>??????????????????</th>
                                            <th>??????????????????????????????????????????<br>????????????????????????</th>  
                                            <th>??????????????????????????????????????????<br>????????????????????????</th> 
                                            <th>??????????????????????????????????????????<br>?????????</th> 
                                            <th>????????????????????????????????????????????????<br>?????????</th> 
                                            <th>???????????????????????????</th> 
                                            <th>????????????????????????????????? ??????.??????.</th> 
                                            <th>????????????????????????????????? ?????????. <br>(????????????????????????)</th> 
                                            <th>????????????????????????????????? ?????????. <br>(????????????????????????)</th> 
                                            <th>??????????????????????????????????????? <br>(?????????????????????????????????????????????)</th> 
                                            <th>??????????????????????????????????????? <br>(?????????????????????????????????????????????)</th>    
                                        </tr>
                                    </thead>
                                    <tbody >
                                        <?php $number=0;  ?>
                                        @foreach ($inforeportmains as $inforeportmain)
                                        <?php $number++; ?>
                                        <tr height="20" style="background-color: #FFFFFF;">
                                            <td class="text-font" align="center">{{$number}}</td>
                                            <td class="text-font text-pedding" style="text-align: left;">{{ $inforeportmain->REPMAIN_LISTTYPE_NAME }}</td>                                           
                                            <td class="text-font text-pedding" style="text-align: right;">{{ $inforeportmain->REPMAIN_TOTAL_MAIN }}</td>
                                            <td class="text-font text-pedding" style="text-align: right;">{{ $inforeportmain->REPMAIN_TOTAL_SUB }}</td>
                                            <td class="text-font text-pedding" style="text-align: right;">{{ $inforeportmain->REPMAIN_TOTAL_MAINSUB }}      </td>
                                            <td class="text-font text-pedding" style="text-align: right;">{{ $inforeportmain->REPMAIN_TOTAL_BUY }}</td>
                                            <td class="text-font text-pedding" style="text-align: right;">{{ $inforeportmain->REPMAIN_TOTAL_MAINSUBBUY }}   </td>                                           
                                            <td class="text-font text-pedding" style="text-align: right;">{{ $inforeportmain->REPMAIN_TOTAL_PAY_RPST }}</td>
                                            <td class="text-font text-pedding" style="text-align: right;">{{ $inforeportmain->REPMAIN_TOTAL_PAY_RPR_MAIN }}</td>
                                            <td class="text-font text-pedding" style="text-align: right;">{{ $inforeportmain->REPMAIN_TOTAL_PAY_RPR_SUB }}</td>
                                            <td class="text-font text-pedding" style="text-align: right;">{{ $inforeportmain->REPMAIN_TOTAL_CUTMAIN }}</td>
                                            <td class="text-font text-pedding" style="text-align: right;">{{ $inforeportmain->REPMAIN_TOTAL_CUTSUB }}</td>
                                        </tr>   
                                        @endforeach 
                                        <tr height="20" style="background-color: #FFB6C1;">  
                                            <td  colspan="2" style="text-align: center; font-size: 13px;">?????????</td>
                                            <td class="text-font text-pedding" style="text-align: right;"></td>
                                            <td class="text-font text-pedding" style="text-align: right;"></td>
                                            <td class="text-font text-pedding" style="text-align: right;"></td>
                                            <td class="text-font text-pedding" style="text-align: right;"></td>
                                            <td class="text-font text-pedding" style="text-align: right;"></td>
                                            <td class="text-font text-pedding" style="text-align: right;">0.0000</td>
                                            <td class="text-font text-pedding" style="text-align: right;"></td>
                                            <td class="text-font text-pedding" style="text-align: right;"></td>
                                            <td class="text-font text-pedding" style="text-align: right;"></td>
                                            <td class="text-font text-pedding" style="text-align: right;"></td>                                   
                                        </tr>    
                                    </tbody> 
                                </table>
                                <br>
                            </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
<script src="{{ asset('select2/select2.min.js') }}"></script>
<script src="{{ asset('asset/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
<script>jQuery(function(){ Dashmix.helpers(['masked-inputs']); });</script>

<script src="{{ asset('datepicker/dist/js/bootstrap-datepicker-custom.js') }}"></script>
<script src="{{ asset('datepicker/dist/locales/bootstrap-datepicker.th.min.js') }}" charset="UTF-8"></script>
<script>
     $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function(){

            $(document).on('submit','#insert_report', function(e){
                e.preventDefault();

                let formData = new FormData($('#insert_report')[0]);

                $.ajax({
                    type: "POST",
                    url: "/manager_warehouse/reportstore_main_insert",
                    data: formData,
                    contentType:false,
                    processData:false,
                    // dataType: "dataType",
                    success: function (response) {
                        // alert('OK');
                        if (response.status == 400)
                        {

                           $.each(response.error, function (key, err_value) { 
                                $('#save_errorList').append('<li>'+err_value+'</li>');
                           }); 
                        }
                        else if (response.status == 200) {
                            $('#insert_report').find('input').val('');  // ???????????????????????????????????????????????????
                            alert(response.message);
                        }
                    }
                });
            });
        });
</script>
<script>
        $(document).ready(function() {
                $('select').select2({
                    width: '100%'
            });
        });   
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