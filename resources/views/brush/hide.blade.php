<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <title>Title of the document</title>
   <style>
 
    #test5
    {
        display:none;
    }
    #test6
    {
        display:none;
    }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white ">
            <ul class="navbar-nav ">
                    <li class="nav-item" id="test1">
                           <a class="nav-link" href="#">QUẢN LÝ SINH VIÊN</a>
                    </li>
                    <li class="nav-item" id="test2">
                           <a class="nav-link " href="#">DANH MỤC</a>                       
                             
                    </li>
                    <li class="nav-item" id="test3">
                           <a class="nav-link" href="#">CHỨC NĂNG</a>
                    </li>
                   
    
          </ul>
     </nav >
     <div class="danhmuc" id="test4">

             <nav class=" navbar navbar-expand-xl bg-primary navbar-light">
             
             <ul class="navbar-nav">
                              <li class="nav-item border text-center">
                              <a class="nav-link " href="{!! URL::route('index') !!}">
                                       <img src="{{ asset('/images/khuvuc.png')}}" width="40px" height="30px" style="margin-top:-10px; " ><br> Quản Lý Sinh Viên
                                   </a>
                               </li>
                               <li class="nav-item border text-center">
                               <a class="nav-link" href="{!! URL::route('create') !!}">
                                       <img src="{{ asset('/images/nhasanxuat.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br> Phòng Khoa
                                   </a>
                               </li>
                               <li class="nav-item border text-center">
                               <a class="nav-link" href="#">
                                       <img src="{{ asset('/images/nhaphanphoi.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br>Thời Khóa Biểu
                                   </a>
                               </li>
                               <li class="nav-item border text-center">
                               <a class="nav-link" href="#">
                                       <img src="{{ asset('/images/vattu.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br> Bảng Điểm
                                   </a>
                               </li>
</ul>
                   
           </nav>
              
          </div>  
          <div class="hethong" id="test5">

<nav class=" navbar navbar-expand-xl bg-primary navbar-light">

<ul class="navbar-nav">
                 <li class="nav-item border text-center">
                 <a class="nav-link " href="{!! URL::route('index') !!}">
                          <img src="{{ asset('/images/khuvuc.png')}}" width="40px" height="30px" style="margin-top:-10px; " ><br> Quản Lý Sinh Viên
                      </a>
                  </li>
                  <li class="nav-item border text-center">
                  <a class="nav-link" href="{!! URL::route('create') !!}">
                          <img src="{{ asset('/images/nhasanxuat.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br> Phòng Khoa
                      </a>
                  </li>
                 
</ul>
      
</nav>
 
</div>  
<div class="chuc năng" id="test6">

<nav class=" navbar navbar-expand-xl bg-primary navbar-light">

<ul class="navbar-nav">
                 <li class="nav-item border text-center">
                 <a class="nav-link " href="{!! URL::route('index') !!}">
                          <img src="{{ asset('/images/khuvuc.png')}}" width="40px" height="30px" style="margin-top:-10px; " ><br> Quản Lý Sinh Viên
                      </a>
                  </li>
                  <li class="nav-item border text-center">
                  <a class="nav-link" href="{!! URL::route('create') !!}">
                          <img src="{{ asset('/images/nhasanxuat.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br> Phòng Khoa
                      </a>
                  </li>
                  <li class="nav-item border text-center">
                  <a class="nav-link" href="#">
                          <img src="{{ asset('/images/nhaphanphoi.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br>Thời Khóa Biểu
                      </a>
                  </li>
                  <li class="nav-item border text-center">
                               <a class="nav-link" href="#">
                                       <img src="{{ asset('/images/khohang.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br> Bảng Điểm
                                   </a>
                               </li>
                               <li class="nav-item border text-center">
                               <a class="nav-link" href="#">
                                       <img src="{{ asset('/images/donvi.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br> Bảng Điểm
                                   </a>
                               </li>
                               <li class="nav-item border text-center">
                               <a class="nav-link" href="#">
                                       <img src="{{ asset('/images/chatluong.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br> Bảng Điểm
                                   </a>
                               </li>
                 
</ul>
      
</nav>
 
</div>  
    
    </div>
    <script>
        
      document.getElementById("test1").onclick = function() {
          document.getElementById("test4").style.display = "block";
          document.getElementById("test5").style.display = "none";
          document.getElementById("test6").style.display = "none";

        }
      document.getElementById("test2").onclick = function() {
          document.getElementById("test4").style.display = "none";
          document.getElementById("test5").style.display = "block";
          document.getElementById("test6").style.display = "none";
        }
      document.getElementById("test3").onclick = function() {
          document.getElementById("test4").style.display = "none";
          document.getElementById("test5").style.display = "none";
          document.getElementById("test6").style.display = "block";
        }
    </script>
    Đây là trang demo
  </body>
</html>