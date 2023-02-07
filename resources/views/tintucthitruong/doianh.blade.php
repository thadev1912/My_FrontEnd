@extends('layout')
   @section('quanlybaiviet')
    
    
        <div class="container">
          <div class="row">  <!--||VÙNG CHIA DIV THÀNH 2 PHẦN||-->
          <div class="col-sm-2 border bg-info ">
                          <div class="card-header bg-primary text-white">
                           
                                        <h1 class="btn"> CHỨC NĂNG</h1>
                           </div>
                           <div class="card-body bg-info">
                           <table class="table  ">
                                     <thread >
                                         </tr >
                                           <th align="center">Thêm Mới</th>
                                                                                  
                                          </tr>
                                          </tr >
                                           <th align="center">Quản Lý Bài Viết</th>
                                                                                  
                                          </tr>
                                     </thread>
</table>     
</div>
                          
          </div>
          
          <div class ="col-sm-10 border ">
               <div class="card-header bg-primary text-white">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn"> CHỈNH SỬA BÀI VIẾT MỚI</h1>
                                  </div>
                                 
                    
                     </div>
</div>
<div class="card-body">

            <form action="{!! URL::route('doianh') !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                    
</div>

<div class="form-row"> 
                   <div class="col">
                        <label>Ảnh Hiện Thị </label>
                        <div class="khungchenanh">
      <div class="preview">
                <img id="img-preview"  src="../img/images/{{$tdx->hinh}}" />
                 <a class="btn btn-primary" href="{!! route('doianh') !!}">Thay Thế Ảnh Đại Diện Mới</a>
                   
                                <div>
                                     {!! $errors->first('txt_hinh') !!}
                                </div>
                
     </div>
     
<div>
                <script>
    const input = document.getElementById("file-input");
    const image = document.getElementById("img-preview");

    input.addEventListener("change", (e) => {
  if (e.target.files.length) {
    const src = URL.createObjectURL(e.target.files[0]);
    image.src = src;
  }
 


   
});
</script>
                                
                    </div>
</div>


<div class="card-header text-white">
                    <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="icon-save"></i>&nbsp&nbspLưu Lại&nbsp&nbsp</button>
                    <a href="" class="btn btn-primary"><i class="icon-remove"></i>&nbsp&nbspLàm Mới&nbsp&nbsp</a>
</div>


</div>
<link rel="stylesheet" href="{{ asset('/ckeditor/ckeditor.js') }}">
    </div>
    
       </div>
       @endsection