@extends('layouts.backend')

<link href="{{ asset('datepicker/dist/css/bootstrap-datepicker.css') }}" rel="stylesheet" />

<link rel="stylesheet" href="{{ asset('asset/js/plugins/datatables/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('asset/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">



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

    label {
        font-family: 'Kanit', sans-serif;
        font-size: 14px;

    }


    .text-pedding {
        padding-left: 10px;
        padding-right: 10px;
    }

    .text-font {
        font-size: 13px;
    }
    }
</style>
<style>
    body {
        font-family: 'Kanit', sans-serif;
        font-size: 14px;

    }

    .form-control {
        font-family: 'Kanit', sans-serif;
        font-size: 13px;
    }
</style>
<script>
    function checklogin() {
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

<body onload="checkdateyear()">
    <!-- Advanced Tables -->
    <div class="bg-body-light">
        <div class="content">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 style="font-family: 'Kanit', sans-serif; font-size:15px;font-size: 1.3rem;font-weight:normal;">
                    {{ $inforperson -> HR_PREFIX_NAME }} {{ $inforperson -> HR_FNAME }} {{ $inforperson -> HR_LNAME }}
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <div class="row">

                            <div>
                                <a href="{{ url('person_work/carcalendarhealth/'.$inforpersonid -> ID)}}" class="btn"
                                    style="font-family: 'Kanit', sans-serif; font-size: 10px;font-size: 1.0rem;font-weight:normal;background-color:#DCDCDC;color:#696969;">??????????????????</a>
                            </div>
                            <div>&nbsp;</div>

                    
                            <div>
                                <a href="{{ url('person_work/personworkscreening/checkup/'.$inforpersonid -> ID)}}"
                                    class="btn btn-primary">??????????????????????????????????????????????????????</a>
                            </div>
                            <div>&nbsp;</div>




                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="content">
        <!-- Dynamic Table Simple -->
        <div class="block block-rounded block-bordered">
            <div class="block-header block-header-default">
                <h3 class="block-title" style="font-family: 'Kanit', sans-serif;"><B>??????????????????????????????????????? ?????????????????????
                        {{date('Y')+543}}</B></h3>
            </div>
            <div class="block-content block-content-full">

                <form method="post" action="{{ route('health.screen_save') }}">
                    @csrf
                    <input type="hidden" name="HEALTH_SCREEN_YEAR" id="HEALTH_SCREEN_YEAR" value="{{date('Y')+543}}">
                    <input type="hidden" name="HEALTH_SCREEN_PERSON_ID" id="HEALTH_SCREEN_PERSON_ID"
                        value="{{$inforpersonid -> ID}}">


                    <div class="block block-rounded block-bordered">
                        <ul class="nav nav-tabs nav-tabs-info" data-toggle="tabs" role="tablist"
                            style="background-color: #E6E6FA;">
                            <li class="nav-item">
                                <a class="nav-link active" href="#object9"
                                    style="font-family: 'Kanit', sans-serif; font-size:12px;font-size: 1.0rem;font-weight:normal;">1.???????????????????????????????????????</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#object1"
                                    style="font-family: 'Kanit', sans-serif; font-size:12px;font-size: 1.0rem;font-weight:normal;">2.??????????????????????????????????????????</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#object2"
                                    style="font-family: 'Kanit', sans-serif; font-size:12px;font-size: 1.0rem;font-weight:normal;">3.??????????????????????????????????????????????????????</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#object3"
                                    style="font-family: 'Kanit', sans-serif; font-size:12px;font-size: 1.0rem;font-weight:normal;">4.????????????????????????????????????</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#object4"
                                    style="font-family: 'Kanit', sans-serif; font-size:12px;font-size: 1.0rem;font-weight:normal;">5.????????????????????????????????????????????????</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#object5"
                                    style="font-family: 'Kanit', sans-serif; font-size:12px;font-size: 1.0rem;font-weight:normal;">6.??????????????????????????????????????????</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#object6"
                                    style="font-family: 'Kanit', sans-serif; font-size:12px;font-size: 1.0rem;font-weight:normal;">7.???????????????????????????????????????????????????</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#object7"
                                    style="font-family: 'Kanit', sans-serif; font-size:12px;font-size: 1.0rem;font-weight:normal;">8.?????????????????????????????????????????????????????????</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#object8"
                                    style="font-family: 'Kanit', sans-serif; font-size:12px;font-size: 1.0rem;font-weight:normal;">9.?????????????????????????????????</a>
                            </li>





                        </ul>
                        <div class="block-content tab-content">

                            <div class="tab-pane active" id="object9" role="tabpanel">
                                <center>
                                    <div class="checkdateyear"></div>
                                </center>
                                <div class="row push">
                                    <div class="col-sm-2">
                                        ???????????????????????????????????????
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="HEALTH_SCREEN_DATE" id="HEALTH_SCREEN_DATE"
                                            onchange="checkdateyear()" value="{{formate(date('Y-m-d'))}}"
                                            class="form-control input-lg datepicker" data-date-format="mm/dd/yyyy"
                                            style=" font-family: 'Kanit', sans-serif;" readonly>
                                    </div>

                                    <div class="col-sm-2">
                                        ????????????
                                    </div>
                                    <div class="col-sm-2">
                                        {{ getAge($inforperson -> HR_BIRTHDAY) }}

                                        <input type="hidden" name="HEALTH_SCREEN_AGE" id="HEALTH_SCREEN_AGE"
                                            class="form-control input-sm" style=" font-family: 'Kanit', sans-serif;"
                                            value="  {{ getAge($inforperson -> HR_BIRTHDAY) }}">
                                    </div>
                                    <div class="col-sm-2">
                                        ??????
                                    </div>


                                </div>

                                <div class="row push">
                                    <div class="col-sm-2">
                                        ?????????????????????
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="HEALTH_SCREEN_HEIGHT" id="HEALTH_SCREEN_HEIGHT" onkeyup="calbmi()"
                                            OnKeyPress="return chkNumber(this)" class="form-control input-sm"
                                            style=" font-family: 'Kanit', sans-serif;">
                                    </div>
                                    <div class="col-sm-2">
                                        ???????????????????????????
                                    </div>


                                    <div class="col-sm-2">
                                        ?????????????????????
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="HEALTH_SCREEN_WEIGHT" id="HEALTH_SCREEN_WEIGHT" onkeyup="calbmi()"
                                            OnKeyPress="return chkNumber(this)" class="form-control input-sm"
                                            style=" font-family: 'Kanit', sans-serif;">
                                    </div>
                                    <div class="col-sm-2">
                                        ????????????????????????
                                    </div>

                                </div>
                                <div class="row push">

                                    <div class="col-sm-2">
                                        ?????????????????????????????????
                                    </div>
                                    <div class="col-sm-2">

                                        <div class="bmiresult"></div>

                                    </div>
                                    <div class="col-sm-2">
                                        ??????./??????.???.
                                    </div>

                                    <div class="col-sm-2">
                                        BMI
                                    </div>

                                    <div class="col-sm-4" style="font-size: 20px;">
                                        <div class="bodysize"></div>
                                    </div>

                                </div>
                                <br>

                                <table>
                                    <tr>
                                        <td>????????????????????????????????? (BMI)</td>
                                        <td></td>
                                    <tr>
                                    <tr>
                                        <td>???????????????????????? 18</td>
                                        <td>??????. ????????????????????????????????????</td>
                                    <tr>
                                    <tr>
                                        <td>18.5-22.9</td>
                                        <td>??????????????????</td>
                                    <tr>
                                    <tr>
                                        <td>23.0-24.9</td>
                                        <td>?????????????????????????????????</td>
                                    <tr>
                                    <tr>
                                        <td>25.0-29.9</td>
                                        <td>?????????????????????</td>
                                    <tr>
                                    <tr>
                                        <td>????????????????????? 30</td>
                                        <td>??????????????????????????????????????????</td>
                                    <tr>
                                </table>



                            </div>

                            <div class="tab-pane" id="object1" role="tabpanel">

                                ??????????????????????????????????????????????????????????????????????????????????????????????????????????????? <br> <br>

                                <div class="row">

                                    <div class="col-sm-2">
                                        <input type="checkbox" id="HEALTH_SCREEN_FM_DIA" name="HEALTH_SCREEN_FM_DIA">
                                        &nbsp;?????????????????????
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" id="HEALTH_SCREEN_FM_BLOOD"
                                            name="HEALTH_SCREEN_FM_BLOOD">
                                        &nbsp;?????????????????????????????????????????????
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" id="HEALTH_SCREEN_FM_GOUT" name="HEALTH_SCREEN_FM_GOUT">
                                        &nbsp;????????????????????????
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" id="HEALTH_SCREEN_FM_KIDNEY"
                                            name="HEALTH_SCREEN_FM_KIDNEY">
                                        &nbsp;???????????????????????????????????????
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" id="HEALTH_SCREEN_FM_HEART"
                                            name="HEALTH_SCREEN_FM_HEART">
                                        &nbsp;??????????????????????????????????????????????????????
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" id="HEALTH_SCREEN_FM_BRAIN"
                                            name="HEALTH_SCREEN_FM_BRAIN">
                                        &nbsp;?????????????????????????????????????????????
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" id="HEALTH_SCREEN_FM_EMPHY"
                                            name="HEALTH_SCREEN_FM_EMPHY">
                                        &nbsp;????????????????????????????????????
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" id="HEALTH_SCREEN_FM_UNKNOW"
                                            name="HEALTH_SCREEN_FM_UNKNOW">
                                        &nbsp;?????????????????????
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" id="HEALTH_SCREEN_FM_OTHER"
                                            name="HEALTH_SCREEN_FM_OTHER">
                                        &nbsp;???????????????
                                    </div>

                                </div>
                                <br> <br>
                                ????????????????????? (??????????????????) ???????????????????????????????????????????????????????????????????????? <br> <br>

                                <div class="row">

                                    <div class="col-sm-2">
                                        <input type="checkbox" id="HEALTH_SCREEN_BS_DIA" name="HEALTH_SCREEN_BS_DIA">
                                        &nbsp;?????????????????????
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" id="HEALTH_SCREEN_BS_BLOOD"
                                            name="HEALTH_SCREEN_BS_BLOOD">
                                        &nbsp;?????????????????????????????????????????????
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" id="HEALTH_SCREEN_BS_GOUT" name="HEALTH_SCREEN_BS_GOUT">
                                        &nbsp;????????????????????????
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" id="HEALTH_SCREEN_BS_KIDNEY"
                                            name="HEALTH_SCREEN_BS_KIDNEY">
                                        &nbsp;???????????????????????????????????????
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" id="HEALTH_SCREEN_BS_HEART"
                                            name="HEALTH_SCREEN_BS_HEART">
                                        &nbsp;??????????????????????????????????????????????????????
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" id="HEALTH_SCREEN_BS_BRAIN"
                                            name="HEALTH_SCREEN_BS_BRAIN">
                                        &nbsp;?????????????????????????????????????????????
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" id="HEALTH_SCREEN_BS_EMPHY"
                                            name="HEALTH_SCREEN_BS_EMPHY">
                                        &nbsp;????????????????????????????????????
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" id="HEALTH_SCREEN_BS_UNKNOW"
                                            name="HEALTH_SCREEN_BS_UNKNOW">
                                        &nbsp;?????????????????????
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" id="HEALTH_SCREEN_BS_OTHER"
                                            name="HEALTH_SCREEN_BS_OTHER">
                                        &nbsp;???????????????
                                    </div>

                                </div>
                                <br><br>

                            </div>
                            <div class="tab-pane" id="object2" role="tabpanel">

                                ???????????????????????????????????????????????????????????????????????????????????? <br><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_1">
                                                        ?????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_1">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_1" name="HEALTH_SCREEN_H_1"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_1">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_1" name="HEALTH_SCREEN_H_1"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_1">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_1" name="HEALTH_SCREEN_H_1"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_2">
                                                        ?????????????????????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_2">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_2" name="HEALTH_SCREEN_H_2"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_2">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_2" name="HEALTH_SCREEN_H_2"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_2">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_2" name="HEALTH_SCREEN_H_2"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        ???????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" style="cursor:pointer" style="cursor:pointer" for="HEALTH_SCREEN_H_29_1">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_29_1" name="HEALTH_SCREEN_H_29"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" style="cursor:pointer" for="HEALTH_SCREEN_H_29_2">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_29_2" name="HEALTH_SCREEN_H_29"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" style="cursor:pointer" for="HEALTH_SCREEN_H_29_3">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_29_3" name="HEALTH_SCREEN_H_29"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            </div>
                                            <div class="col-md-8 d-flex align-items-center">
                                                <label for="HEALTH_SCREEN_H_29_COMMENT" style="cursor:pointer">????????????&nbsp;:&nbsp; </label><input type="text" maxlength="255" class="form-control"
                                                            id="HEALTH_SCREEN_H_29_COMMENT" name="HEALTH_SCREEN_H_29_COMMENT"
                                                            value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_3">
                                                        ??????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_3">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_3" name="HEALTH_SCREEN_H_3"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_3">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_3" name="HEALTH_SCREEN_H_3"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_3">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_3" name="HEALTH_SCREEN_H_3"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_4">
                                                        ???????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_4">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_4" name="HEALTH_SCREEN_H_4"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_4">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_4" name="HEALTH_SCREEN_H_4"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_4">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_4" name="HEALTH_SCREEN_H_4"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        ????????????????????? ???????????????????????????????????????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" style="cursor:pointer" for="HEALTH_SCREEN_H_30_1">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_30_1" name="HEALTH_SCREEN_H_30"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" style="cursor:pointer" for="HEALTH_SCREEN_H_30_2">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_30_2" name="HEALTH_SCREEN_H_30"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" style="cursor:pointer" for="HEALTH_SCREEN_H_30_3">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_30_3" name="HEALTH_SCREEN_H_30"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            </div>
                                            <div class="col-md-8 d-flex align-items-center">
                                                <label for="HEALTH_SCREEN_H_30_COMMENT" style="cursor:pointer">????????????&nbsp;:&nbsp; </label><input type="text" maxlength="255" class="form-control"
                                                            id="HEALTH_SCREEN_H_30_COMMENT" name="HEALTH_SCREEN_H_30_COMMENT"
                                                            value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_5">
                                                        ????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_5">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_5" name="HEALTH_SCREEN_H_5"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_5">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_5" name="HEALTH_SCREEN_H_5"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_5">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_5" name="HEALTH_SCREEN_H_5"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_6">
                                                        ?????????????????????????????????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_6">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_6" name="HEALTH_SCREEN_H_6"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_6">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_6" name="HEALTH_SCREEN_H_6"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_6">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_6" name="HEALTH_SCREEN_H_6"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        ??????????????????????????????????????????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" style="cursor:pointer" for="HEALTH_SCREEN_H_31_1">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_31_1" name="HEALTH_SCREEN_H_31"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" style="cursor:pointer" for="HEALTH_SCREEN_H_31_2">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_31_2" name="HEALTH_SCREEN_H_31"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" style="cursor:pointer" for="HEALTH_SCREEN_H_31_3">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_31_3" name="HEALTH_SCREEN_H_31"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            </div>
                                            <div class="col-md-8 d-flex align-items-center">
                                                <label for="HEALTH_SCREEN_H_31_COMMENT" style="cursor:pointer">????????????&nbsp;:&nbsp; </label><input type="text" maxlength="255" class="form-control"
                                                            id="HEALTH_SCREEN_H_31_COMMENT" name="HEALTH_SCREEN_H_31_COMMENT"
                                                            value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_7">
                                                        ??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_7">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_7" name="HEALTH_SCREEN_H_7"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_7">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_7" name="HEALTH_SCREEN_H_7"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_7">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_7" name="HEALTH_SCREEN_H_7"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_8">
                                                        ????????????????????????????????????????????????????????? 4 ????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_8">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_8" name="HEALTH_SCREEN_H_8"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_8">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_8" name="HEALTH_SCREEN_H_8"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_8">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_8" name="HEALTH_SCREEN_H_8"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_9">
                                                        ???????????????????????????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_9">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_9" name="HEALTH_SCREEN_H_9"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_9">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_9" name="HEALTH_SCREEN_H_9"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_9">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_9" name="HEALTH_SCREEN_H_9"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_10">
                                                        ?????????????????????????????????????????? 3 ?????????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_10">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_10" name="HEALTH_SCREEN_H_10"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_10">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_10" name="HEALTH_SCREEN_H_10"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_10">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_10" name="HEALTH_SCREEN_H_10"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_11">
                                                        ???????????????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_11">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_11" name="HEALTH_SCREEN_H_11"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_11">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_11" name="HEALTH_SCREEN_H_11"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_11">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_11" name="HEALTH_SCREEN_H_11"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_12">
                                                        ???????????????????????????/???????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_12">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_12" name="HEALTH_SCREEN_H_12"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_12">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_12" name="HEALTH_SCREEN_H_12"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_12">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_12" name="HEALTH_SCREEN_H_12"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_13">
                                                        ??????????????????????????????????????????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_13">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_13" name="HEALTH_SCREEN_H_13"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_13">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_13" name="HEALTH_SCREEN_H_13"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_13">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_13" name="HEALTH_SCREEN_H_13"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_14">
                                                        ???????????????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_14">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_14" name="HEALTH_SCREEN_H_14"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_14">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_14" name="HEALTH_SCREEN_H_14"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_14">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_14" name="HEALTH_SCREEN_H_14"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_15">
                                                        ????????????????????????????????????????????????????????????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_15">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_15" name="HEALTH_SCREEN_H_15"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_15">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_15" name="HEALTH_SCREEN_H_15"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_15">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_15" name="HEALTH_SCREEN_H_15"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_16">
                                                        ????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_16">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_16" name="HEALTH_SCREEN_H_16"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_16">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_16" name="HEALTH_SCREEN_H_16"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_16">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_16" name="HEALTH_SCREEN_H_16"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_17">
                                                        ????????????????????????????????????????????????????????? ????????????????????? ???????????? 6 ?????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_17">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_17" name="HEALTH_SCREEN_H_17"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_17">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_17" name="HEALTH_SCREEN_H_17"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_17">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_17" name="HEALTH_SCREEN_H_17"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_18">
                                                        ?????????????????????????????????????????? ????????????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_18">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_18" name="HEALTH_SCREEN_H_18"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_18">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_18" name="HEALTH_SCREEN_H_18"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_18">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_18" name="HEALTH_SCREEN_H_18"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_19">
                                                        ?????????????????????????????????????????????????????????????????????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_19">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_19" name="HEALTH_SCREEN_H_19"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_19">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_19" name="HEALTH_SCREEN_H_19"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_19">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_19" name="HEALTH_SCREEN_H_19"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_20">
                                                        ????????????????????????????????????????????????????????? 3 ?????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_20">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_20" name="HEALTH_SCREEN_H_20"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_20">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_20" name="HEALTH_SCREEN_H_20"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_20">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_20" name="HEALTH_SCREEN_H_20"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_21">
                                                        ???????????????????????????????????????????????????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_21">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_21" name="HEALTH_SCREEN_H_21"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_21">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_21" name="HEALTH_SCREEN_H_21"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_21">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_21" name="HEALTH_SCREEN_H_21"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_22">
                                                        ???????????????????????????????????????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_22">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_22" name="HEALTH_SCREEN_H_22"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_22">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_22" name="HEALTH_SCREEN_H_22"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_22">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_22" name="HEALTH_SCREEN_H_22"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_23">
                                                        ?????????????????????????????????????????????????????????????????????????????? 1 ???????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_23">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_23" name="HEALTH_SCREEN_H_23"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_23">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_23" name="HEALTH_SCREEN_H_23"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_23">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_23" name="HEALTH_SCREEN_H_23"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_24">
                                                        ????????????????????????????????????????????????????????? 10 ?????? 6 ???????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_24">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_24" name="HEALTH_SCREEN_H_24"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_24">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_24" name="HEALTH_SCREEN_H_24"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_24">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_24" name="HEALTH_SCREEN_H_24"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_25">
                                                        ??????????????????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_25">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_25" name="HEALTH_SCREEN_H_25"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_25">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_25" name="HEALTH_SCREEN_H_25"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_25">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_25" name="HEALTH_SCREEN_H_25"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_26">
                                                        ???????????????????????????????????? ????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_26">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_26" name="HEALTH_SCREEN_H_26"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_26">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_26" name="HEALTH_SCREEN_H_26"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_26">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_26" name="HEALTH_SCREEN_H_26"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_27">
                                                        ????????????????????????????????????????????????????????????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_27">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_27" name="HEALTH_SCREEN_H_27"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_27">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_27" name="HEALTH_SCREEN_H_27"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_27">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_27" name="HEALTH_SCREEN_H_27"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_28">
                                                        ?????????????????????????????????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_28">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_28" name="HEALTH_SCREEN_H_28"
                                                            value="nothave" checked>???????????????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_28">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_28" name="HEALTH_SCREEN_H_28"
                                                            value="have">??????
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label" for="HEALTH_SCREEN_H_28">
                                                        <input type="radio" class="form-check-input"
                                                            id="HEALTH_SCREEN_H_28" name="HEALTH_SCREEN_H_28"
                                                            value="never">??????????????????????????????
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <br>



                                <div class="row">
                                    <div class="col-sm-12">
                                        <B> ???????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????? </B>

                                    </div>
                                    <br>
                                    <div class="row col-sm-12">

                                        <div class="col-sm-4">
                                            <div class="form-check-inline">
                                                <label class="form-check-label" for="HEALTH_SCREEN_H_HAVE">
                                                    <input type="radio" class="form-check-input"
                                                        id="HEALTH_SCREEN_H_HAVE" name="HEALTH_SCREEN_H_HAVE"
                                                        value="nothave">?????????????????????????????????????????????/?????????????????????????????????????????????????????????????????????
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-check-inline">
                                                <label class="form-check-label" for="HEALTH_SCREEN_H_HAVE">
                                                    <input type="radio" class="form-check-input"
                                                        id="HEALTH_SCREEN_H_HAVE" name="HEALTH_SCREEN_H_HAVE"
                                                        value="have">????????????????????????????????? ??????????????????????????????????????????
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-check-inline">
                                                <label class="form-check-label" for="HEALTH_SCREEN_H_HAVE">
                                                    <input type="radio" class="form-check-input"
                                                        id="HEALTH_SCREEN_H_HAVE" name="HEALTH_SCREEN_H_HAVE"
                                                        value="never">???????????????????????? ??????????????????????????????????????????/??????????????????????????????
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>



                                </div>
                            </div>
                            <div class="tab-pane" id="object3" role="tabpanel">

                                ???????????????????????????????????????????????????????????? <br> <br>
                                <div class="row">
                                    <div class="col-sm-1">
                                        <input type="radio" id="HEALTH_SCREEN_SMOK" name="HEALTH_SCREEN_SMOK"
                                            value="smok">
                                        &nbsp;?????????
                                    </div>
                                    <div class="col-sm-1">
                                        &nbsp;???????????????
                                    </div>
                                    <div class="col-sm-1">
                                        <input type="text" class="form-control" id="HEALTH_SCREEN_SMOK_AMOUNT"
                                            name="HEALTH_SCREEN_SMOK_AMOUNT">
                                    </div>
                                    <div class="col-sm-1">
                                        ?????????/?????????
                                    </div>
                                    <div class="col-sm-1">
                                        ???????????????????????????????????????
                                    </div>

                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="HEALTH_SCREEN_SMOK_TYPE"
                                            name="HEALTH_SCREEN_SMOK_TYPE">
                                    </div>


                                    <div class="col-sm-1">

                                        ????????????????????????
                                    </div>


                                    <div class="col-sm-1">
                                        <input type="text" class="form-control" id="HEALTH_SCREEN_SMOK_TIME"
                                            name="HEALTH_SCREEN_SMOK_TIME">
                                    </div>
                                    <div class="col-sm-2">
                                        ??????
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input type="radio" id="HEALTH_SCREEN_SMOK" name="HEALTH_SCREEN_SMOK"
                                            value="onsmok">
                                        &nbsp;??????????????????
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input type="radio" id="HEALTH_SCREEN_SMOK" name="HEALTH_SCREEN_SMOK"
                                            value="usesmok">
                                        &nbsp;???????????????????????????????????????????????????
                                    </div>


                                </div>
                                <br>
                                <br>
                            </div>
                            <div class="tab-pane" id="object4" role="tabpanel">

                                <div class="row">
                                    <div class="col-sm-1">
                                        <input type="radio" id="HEALTH_SCREEN_DRINK" name="HEALTH_SCREEN_DRINK"
                                            value="drink">
                                        &nbsp;????????????
                                    </div>
                                    <div class="col-sm-1">
                                        &nbsp;???????????????
                                    </div>
                                    <div class="col-sm-1">
                                        <input type="text" class="form-control" id="HEALTH_SCREEN_DRINK_AMOUNT"
                                            name="HEALTH_SCREEN_DRINK_AMOUNT">
                                    </div>
                                    <div class="col-sm-2">
                                        ???????????????/?????????????????????
                                    </div>




                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input type="radio" id="HEALTH_SCREEN_DRINK" name="HEALTH_SCREEN_DRINK"
                                            value="nodrink">
                                        &nbsp;?????????????????????
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input type="radio" id="HEALTH_SCREEN_DRINK" name="HEALTH_SCREEN_DRINK"
                                            value="usedrink">
                                        &nbsp;??????????????????????????????????????????????????????
                                    </div>

                                </div>
                                <br>

                            </div>
                            <div class="tab-pane" id="object5" role="tabpanel">

                                ??????????????????????????????????????????<br>

                                &nbsp;<input type="radio" class="form-check-input" id="HEALTH_SCREEN_EXERCISE"
                                    name="HEALTH_SCREEN_EXERCISE" value="1"> ?????????????????????????????????????????? ????????????????????? 30 ????????????<br>
                                &nbsp;<input type="radio" class="form-check-input" id="HEALTH_SCREEN_EXERCISE"
                                    name="HEALTH_SCREEN_EXERCISE" value="2"> ???????????????????????????????????????????????????????????? 3 ??????????????? ????????????????????? 30
                                ???????????? <br>
                                &nbsp;<input type="radio" class="form-check-input" id="HEALTH_SCREEN_EXERCISE"
                                    name="HEALTH_SCREEN_EXERCISE" value="3"> ???????????????????????????????????????????????????????????? 3 ??????????????? <br>
                                &nbsp;<input type="radio" class="form-check-input" id="HEALTH_SCREEN_EXERCISE"
                                    name="HEALTH_SCREEN_EXERCISE" value="4"> ?????????????????????????????????????????? <br>

                            </div>
                            <div class="tab-pane" id="object6" role="tabpanel">
                                ??????????????????????????????????????? <br>
                                &nbsp;<input type="checkbox" class="form-check-input" id="HEALTH_SCREEN_FOOD_1"
                                    name="HEALTH_SCREEN_FOOD_1" value="1"> ???????????? <br>
                                &nbsp;<input type="checkbox" class="form-check-input" id="HEALTH_SCREEN_FOOD_2"
                                    name="HEALTH_SCREEN_FOOD_2" value="2"> ???????????? <br>
                                &nbsp;<input type="checkbox" class="form-check-input" id="HEALTH_SCREEN_FOOD_3"
                                    name="HEALTH_SCREEN_FOOD_3" value="3"> ????????? <br>
                                &nbsp;<input type="checkbox" class="form-check-input" id="HEALTH_SCREEN_FOOD_4"
                                    name="HEALTH_SCREEN_FOOD_4" value="4"> ????????????????????? <br>
                                &nbsp;<input type="checkbox" class="form-check-input" id="HEALTH_SCREEN_FOOD_5"
                                    name="HEALTH_SCREEN_FOOD_5" value="5"> ???????????????????????????????????? <br>

                                <br>
                            </div>

                            <div class="tab-pane" id="object7" role="tabpanel">

                                ???????????????????????????????????????????????????????????????????????????????????????????????????/???????????????????????????????????????<br>
                                &nbsp;<input type="radio" class="form-check-input" id="HEALTH_SCREEN_DRIVE"
                                    name="HEALTH_SCREEN_DRIVE" value="1"> ??????????????????????????????????????????????????????<br>
                                &nbsp;<input type="radio" class="form-check-input" id="HEALTH_SCREEN_DRIVE"
                                    name="HEALTH_SCREEN_DRIVE" value="2"> ??????????????????/??????????????????
                                ???????????????????????????????????????????????????/???????????????????????????????????????????????????????????????????????? <br>
                                &nbsp;<input type="radio" class="form-check-input" id="HEALTH_SCREEN_DRIVE"
                                    name="HEALTH_SCREEN_DRIVE" value="3"> ??????????????????/??????????????????
                                ???????????????????????????????????????????????????/???????????????????????????????????????????????????????????????????????? <br>
                                &nbsp;<input type="radio" class="form-check-input" id="HEALTH_SCREEN_DRIVE"
                                    name="HEALTH_SCREEN_DRIVE" value="4"> ??????????????????/??????????????????
                                ???????????????????????????????????????????????????/????????????????????????????????????????????????????????? ??? ??????????????? (?????????????????????????????????????????????????????????????????????) <br>


                            </div>



                            <div class="tab-pane" id="object8" role="tabpanel">


                                ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????
                                ??????????????????????????????????????????????????????????????????<br>
                                &nbsp;<input type="radio" class="form-check-input" id="HEALTH_SCREEN_SEX"
                                    name="HEALTH_SCREEN_SEX" value="1"> ?????????????????????????????????<br>
                                &nbsp;<input type="radio" class="form-check-input" id="HEALTH_SCREEN_SEX"
                                    name="HEALTH_SCREEN_SEX" value="2"> ???????????????????????????????????????????????????<br>
                                &nbsp;<input type="radio" class="form-check-input" id="HEALTH_SCREEN_SEX"
                                    name="HEALTH_SCREEN_SEX" value="3"> ?????????????????? <br>
                                &nbsp;<input type="radio" class="form-check-input" id="HEALTH_SCREEN_SEX"
                                    name="HEALTH_SCREEN_SEX" value="4">
                                ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????<br>
                                &nbsp;<input type="radio" class="form-check-input" id="HEALTH_SCREEN_SEX"
                                    name="HEALTH_SCREEN_SEX" value="5"> ?????????????????? <br>




                                <br>
                                <div align='right'>
                                    <button type="submit" class="btn btn-hero-sm btn-hero-info"><i
                                            class="fas fa-save"></i> &nbsp;??????????????????</button>
                                    <a href="{{ url('person_work/personworkscreening/checkup/'.$inforpersonid -> ID)}}"
                                        onclick="return confirm('???????????????????????????????????????????????????????????????????????????????????????????????? ?')"
                                        class="btn btn-hero-sm btn-hero-danger"><i class="fas fa-window-close"></i>
                                        &nbsp;??????????????????</a></div><br>
                            </div>


                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
            <br>
            <br>





            @endsection

            @section('footer')

            <script src="{{ asset('asset/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
            <script>
                jQuery(function () {
                    Dashmix.helpers(['masked-inputs']);
                });
            </script>

            <script src="{{ asset('datepicker/dist/js/bootstrap-datepicker-custom.js') }}"></script>
            <script src="{{ asset('datepicker/dist/locales/bootstrap-datepicker.th.min.js') }}" charset="UTF-8">
            </script>


            <script>
                $(document).ready(function () {

                    $('.datepicker').datepicker({
                        format: 'dd/mm/yyyy',
                        todayBtn: true,
                        language: 'th', //????????????????????? label ????????????????????? ?????????????????? ????????????????????? ?????????????????????   (????????????????????????????????? bootstrap-datepicker.th.min.js ?????????????????????)
                        thaiyear: true,
                        autoclose: true //Set ?????????????????? ???.???.
                    }); //?????????????????????????????????????????????????????????
                });




                function checkdateyear() {

                    var IDUSER = document.getElementById("HEALTH_SCREEN_PERSON_ID").value;
                    var HEALTH_SCREEN_DATE = document.getElementById("HEALTH_SCREEN_DATE").value;
                    var HEALTH_SCREEN_YEAR = document.getElementById("HEALTH_SCREEN_YEAR").value;

                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{route('health.checkdateyear')}}",
                        method: "GET",
                        data: {
                            IDUSER: IDUSER,
                            HEALTH_SCREEN_DATE: HEALTH_SCREEN_DATE,
                            HEALTH_SCREEN_YEAR: HEALTH_SCREEN_YEAR,
                            _token: _token
                        },
                        success: function (result) {
                            $('.checkdateyear').html(result);

                        }
                    })

                }

                function calbmi() {


                    var HEALTH_SCREEN_HEIGHT = document.getElementById("HEALTH_SCREEN_HEIGHT").value;
                    var HEALTH_SCREEN_WEIGHT = document.getElementById("HEALTH_SCREEN_WEIGHT").value;



                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{route('health.calbmi')}}",
                        method: "GET",
                        data: {
                            HEALTH_SCREEN_HEIGHT: HEALTH_SCREEN_HEIGHT,
                            HEALTH_SCREEN_WEIGHT: HEALTH_SCREEN_WEIGHT,
                            _token: _token
                        },
                        success: function (result) {
                            $('.bmiresult').html(result);
                            bodysize();
                        }
                    })

                }




                function bodysize() {


                    var HEALTH_SCREEN_BODY = document.getElementById("HEALTH_SCREEN_BODY").value;



                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{route('health.bodysize')}}",
                        method: "GET",
                        data: {
                            HEALTH_SCREEN_BODY: HEALTH_SCREEN_BODY,
                            _token: _token
                        },
                        success: function (result) {
                            $('.bodysize').html(result);

                        }
                    })

                }


                function chkNumber(ele) {
                    var vchar = String.fromCharCode(event.keyCode);
                    if ((vchar < '0' || vchar > '9') && (vchar != '.')) return false;
                    ele.onKeyPress = vchar;
                }
            </script>
            @endsection