<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quản Lý Sinh Viên</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
 
        
</head>

<body>
  <div class="container mt-5">
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
            <ul class="navbar-nav">
                    <li class="nav-item">
                           <a class="nav-link" href="{!! URL::route('index') !!}">QUẢN LÝ SINH VIÊN</a>
                    </li>
                    <li class="nav-item">
                           <a class="nav-link" href="{!! URL::route('create1') !!}">DANH MỤC</a>
                    </li>
                    <li class="nav-item">
                           <a class="nav-link" href="{!! URL::route('create2') !!}">CHỨC NĂNG</a>
                    </li>
                    <li class="nav-item">
                           <a class="nav-link " href="#">HỆ THỐNG</a>
                    </li>
                   <li class="nav-item">
                          <a class="nav-link " href="#">TRỢ GIÚP </a>
                  </li>
    
          </ul>
     </nav >
          <div class="danhmuc">
             @yield('danhmuc')
             @yield('hethong')
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
 </div>
             
            <div class="container">  
            <section class="page container" >
                     @yield('content')
</section>
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
