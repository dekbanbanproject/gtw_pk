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
            <h2 class="content-heading pt-0" style="font-family: 'Kanit', sans-serif;"><i class="fas fa-plus"></i> เพิ่มยี่ห้อ/รุ่น</h2>    
        <form  method="post" action="{{ route('admin.saveinformcombrand') }}" enctype="multipart/form-data">
            @csrf
            <div class="row push">
  
                <div class="col-lg-1">
                    <label >ยี่ห้อ/รุ่น</label>
                </div>
                <div class="col-lg-5">
                    <input  name = "BRAND_NAME"  id="BRAND_NAME" class="form-control input-lg" style=" font-family: 'Kanit', sans-serif;" onkeyup="check_brandname();">
                    <div style="color: red; font-size: 16px;" id="brandname"></div> 
                </div>
            </div>
            <div class="col-lg-6">
                
            </div>
            <div class="modal-footer">
            <div align="right">
                <button type="submit"  class="btn btn-hero-sm btn-hero-info" ><i class="fas fa-save"></i> &nbsp;บันทึกข้อมูล</button>
                <a href="{{ url('admin_repair/Setupinformcombrand')  }}" class="btn btn-hero-sm btn-hero-danger" onclick="return confirm('ต้องการที่จะยกเลิกการเพิ่มข้อมูล ?')" ><i class="fas fa-window-close"></i> &nbsp;  ยกเลิก</a> 
            </div>
        </div>
        </form>  
         
@endsection

@section('footer')

<script>   
    function check_brandname()
    {                         
        brandname = document.getElementById("BRAND_NAME").value;             
            if (brandname==null || brandname==''){
            document.getElementById("brandname").style.display = "";     
            text_brandname = "*กรุณาระบุยี่ห้อ/รุ่น";
            document.getElementById("brandname").innerHTML = text_brandname;
            }else{
            document.getElementById("brandname").style.display = "none";
            }
    }
 

   </script>
    <script>      
    $('form').submit(function () {
     
      var brandname,text_brandname; 
     
     
      brandname = document.getElementById("BRAND_NAME").value; 
     
   
                     
      if (brandname==null || brandname==''){
      document.getElementById("brandname").style.display = "";     
      text_brandname = "*กรุณาระบุยี่ห้อ/รุ่น";
      document.getElementById("brandname").innerHTML = text_brandname;
      }else{
      document.getElementById("brandname").style.display = "none";
      }
      
  
      if(brandname==null || brandname=='' 
         
       )
    {
    alert("กรุณาตรวจสอบความถูกต้องของข้อมูล");      
    return false;   
    }
    }); 
</script>

@endsection