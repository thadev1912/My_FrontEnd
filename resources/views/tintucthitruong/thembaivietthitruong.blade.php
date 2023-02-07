@extends('layout')
   @section('quanlybaiviet')
    
    
        <div class="container">
          <div class="row">  <!--||VÙNG CHIA DIV THÀNH 2 PHẦN||-->
          <div class="col-sm-2 border bg-info ">
                          <div class="card-header bg-primary text-white">
                           
                                        <h1 class="btn">CHỨC NĂNG</h1>
                           </div>
                           <div class="card-body bg-info">
                           <table class="table">
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
                                       <h1 class="btn"> THÊM BÀI VIẾT MỚI</h1>
                                  </div>
                                 
                    
                     </div>
</div>
<div class="card-body">

            <form action="{!! route('luubaivietthitruong') !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                    <div class="col">
                        <label>Tiêu đề bài viết</label>
                        <input id="current-pass-control" name="txt_title" class="form-control" type="text" value="{!! old('txtmakh') !!}">
                        <div>
                                    {!! $errors->first('txt_title') !!}
                                </div>
                    </div>
</div>
<div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                   <div class="col">
                        <label>Nội dung bài viết</label>
                        <textarea id="editor" name="txt_noidung" class="form-control" type="text" value="{!! old('txttenkh') !!}"></textarea>
                        <div>
                                    {!! $errors->first('txt_noidung') !!}
                                </div>
                       <script>
                 CKEDITOR.replace("editor",{
                    width: ['100%'], height: ['500px'],
        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );/*đây là chỉnh chiều dài ckeditor*/
               </script>
                               
                    </div>
</div>
<div class="form-row"> 
                    <div class="col">
                        <label>HagTag</label>
                        <input data-role="tagsinput" id="current-pass-control" name="txt_hagtag" class="form-control" type="text" value="{!! old('txtmakh') !!}">
                        <div>
                                    {!! $errors->first('txt_title') !!}
                                </div>
                    </div>
</div>
<div class="form-row"> 
                   <div class="col">
                        <label>Ảnh Hiện Thị Cho Bài Viết</label>
                        <div class="khungchenanh">
      <div class="preview ">
                <img id="img-preview"  src="{{ asset('/img/iconaddimage.png')}}" />
                     <label class="btn btn-primary" for="file-input"> CHỌN ẢNH </label>
                     <input accept="image/*" type='file' id="file-input" name ="txt_hinh"/>
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