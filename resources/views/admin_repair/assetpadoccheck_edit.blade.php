@extends('layouts.backend_admin')
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
        font-size: 13px;
        
        }

    label{
                font-family: 'Kanit', sans-serif;
                font-size: 13px;
              
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

    if($status=='USER' and $user_id != $id_user  ){
        echo "You do not have access to data.";
        exit();
    }
?>          
                    <!-- Advanced Tables -->               
<div class="content">
    <div class="block block-rounded block-bordered">
        <div class="block-content"> 
            <h2 class="content-heading pt-0" style="font-family: 'Kanit', sans-serif;">แก้ไขผลการตรวจเช็ค</h2> 
    <form  method="post" action="{{ route('admin.updateassetpadoccheck') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row push">                            
                                    <input type="hidden" name = "DOCCHECK_ID"  id="DOCCHECK_ID" class="form-control input-lg" style=" font-family: 'Kanit', sans-serif;" value="{{$doccheckT->DOCCHECK_ID}}" >
                              
                            <div class="col-lg-2">
                                <label >ผลการตรวจเช็ค</label>
                            </div>
                            <div class="col-lg-4">
                                <input  name = "DOCCHECK_NAME"  id="DOCCHECK_NAME" class="form-control input-lg" style=" font-family: 'Kanit', sans-serif;" value="{{$doccheckT->DOCCHECK_NAME}}" onkeyup="check_doccheckname();">
                                <div style="color: red; font-size: 16px;" id="doccheckname"></div> 
                            </div>
                            <div class="col-lg-6">
                                
                            </div>                       
                       
                    </div>
            <div class="modal-footer">
                <div align="right">
                    <button type="submit"  class="btn btn-hero-sm btn-hero-info" >บันทึกข้อมูล</button>
                        <a href="{{ url('admin_repair/Setupassetpadoccheck')  }}" class="btn btn-hero-sm btn-hero-danger" onclick="return confirm('ต้องการที่จะยกเลิกการเพิ่มข้อมูล ?')" >ยกเลิก</a> 
                </div>  
            </div>
    </form>  
 
@endsection

@section('footer')

<script>   
    function check_doccheckname()
    {                         
        doccheckname = document.getElementById("DOCCHECK_NAME").value;             
            if (doccheckname==null || doccheckname==''){
            document.getElementById("doccheckname").style.display = "";     
            text_doccheckname = "*กรุณาระบุผลการตรวจเช็ค";
            document.getElementById("doccheckname").innerHTML = text_doccheckname;
            }else{
            document.getElementById("doccheckname").style.display = "none";
            }
    }
 

   </script>
    <script>      
    $('form').submit(function () {
     
      var doccheckname,text_doccheckname; 
     
     
      doccheckname = document.getElementById("DOCCHECK_NAME").value; 
     
   
                     
      if (doccheckname==null || doccheckname==''){
      document.getElementById("doccheckname").style.display = "";     
      text_doccheckname = "*กรุณาระบุผลการตรวจเช็ค";
      document.getElementById("doccheckname").innerHTML = text_doccheckname;
      }else{
      document.getElementById("doccheckname").style.display = "none";
      }
      
  
      if(doccheckname==null || doccheckname=='' 
         
       )
    {
    alert("กรุณาตรวจสอบความถูกต้องของข้อมูล");      
    return false;   
    }
    }); 
</script>

@endsection