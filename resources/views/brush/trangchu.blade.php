<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quản Lý Sinh Viên</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
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
<div class="container mt-5">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white ">
            <ul class="navbar-nav ">
                    <li class="nav-item" id="qlsv">
                           <a class="nav-link" href="#">QUẢN LÝ SINH VIÊN</a>
                    </li>
                    <li class="nav-item" id="danhmuc">
                           <a class="nav-link " href="#">DANH MỤC</a>                       
                             
                    </li>
                    <li class="nav-item" id="chucnang">
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
                               <li class="nav-item border text-center">
                               <a class="nav-link" href="#">
                                       <img src="{{ asset('/images/khohang.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br> Bảng Điểm
                                   </a>
                               </li>
                               <li class="nav-item border text-center">
                               <a class="nav-link" href="#">
                                       <img src="{{ asset('/images/nhomvattu.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br> Bảng Điểm
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
          <div class="hethong" id="test5">

<nav class=" navbar navbar-expand-xl bg-primary navbar-light">

<ul class="navbar-nav">
                 <li class="nav-item border text-center">
                 <a class="nav-link " href="{!! URL::route('index') !!}">
                          <img src="{{ asset('/images/xuatkho.png')}}" width="40px" height="30px" style="margin-top:-10px; " ><br> Quản Lý Sinh Viên
                      </a>
                  </li>
                  <li class="nav-item border text-center">
                  <a class="nav-link" href="{!! URL::route('create') !!}">
                          <img src="{{ asset('/images/chuyenkho.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br> Phòng Khoa
                      </a>
                  </li>
                  <li class="nav-item border text-center">
                  <a class="nav-link" href="{!! URL::route('create') !!}">
                          <img src="{{ asset('/images/thekho.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br> Phòng Khoa
                      </a>
                  </li>
                  <li class="nav-item border text-center">
                  <a class="nav-link" href="{!! URL::route('create') !!}">
                          <img src="{{ asset('/images/khohang.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br> Phòng Khoa
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
                          <img src="{{ asset('/images/logout.png')}}" width="40px" height="30px" style="margin-top:-10px; " ><br> Thoát Chương Trình
                      </a>
                  </li>
                  <li class="nav-item border text-center">
                  <a class="nav-link" href="{!! URL::route('create') !!}">
                          <img src="{{ asset('/images/thongtincongty.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br> Thông Tin Trường
                      </a>
                  </li>
                  <li class="nav-item border text-center">
                  <a class="nav-link" href="#">
                          <img src="{{ asset('/images/taotaikhoan.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br>Tạo Tài Khoản
                      </a>
                  </li>
                  <li class="nav-item border text-center">
                  <a class="nav-link" href="#">
                          <img src="{{ asset('/images/phanquyen.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br>Phân Quyền
                      </a>
                  </li>
                  <li class="nav-item border text-center">
                  <a class="nav-link" href="#">
                          <img src="{{ asset('/images/doimatkhau.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br>Đổi Mật Khẩu
                      </a>
                  </li>
                 
</ul>
      
</nav>
 
</div>  
    
    </div>
    <script>
        
      document.getElementById("qlsv").onclick = function() {
          document.getElementById("test4").style.display = "block";
          document.getElementById("test5").style.display = "none";
          document.getElementById("test6").style.display = "none";

        }
      document.getElementById("danhmuc").onclick = function() {
          document.getElementById("test4").style.display = "none";
          document.getElementById("test5").style.display = "block";
          document.getElementById("test6").style.display = "none";
        }
      document.getElementById("chucnang").onclick = function() {
          document.getElementById("test4").style.display = "none";
          document.getElementById("test5").style.display = "none";
          document.getElementById("test6").style.display = "block";
        }
    </script>
 </div>
             
            <div class="container">  
            
                     @yield('content')

           </div>
      
          
            <div class="container text-center">
            <b> <p>Trường Đại Học ABC</p></b>
                        <div class="font-italic">
                            <p>Địa chỉ: Số 06 CMT8-Quận Ninh Kiều-Thành Phố Cần Thơ</p>
                            <p>Điện thoại:0868896944 - Fax: 0868896944;  Email: ctec@edu.vn</p>
                      
                        </div>
            </div>
       
 </div>
             
</body>
</html>
