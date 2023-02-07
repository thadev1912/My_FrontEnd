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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white ">
            <ul class="navbar-nav ">
                    <li class="nav-item" id="trangchu">
                           <a class="nav-link" href="{!! URL::route('trangchinh') !!}">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item" id="qlsinhvien">
                           <a class="nav-link " href="{!! URL::route('qldaotao') !!}">PHÒNG ĐÀO TẠO</a>                       
                             
                    </li>
                    <li class="nav-item" id="qlsinhvien">
                           <a class="nav-link " href="{!! URL::route('qlsinhvien') !!}">QUẢN LÝ SINH VIÊN</a>                       
                             
                    </li>
                    <li class="nav-item" id="qlsinhvien">
                           <a class="nav-link " href="">PHÒNG TÀI VỤ</a>                       
                             
                    </li>
                  
               
                   
                    <li class="nav-item" id="hethong">
                           <a class="nav-link" href="{!! URL::route('qlhethong') !!}">HỆ THỐNG</a>
                    </li>
                   
    
          </ul>
     </nav >
     <div class="danhmuc" id="test4">
    @yield('qlsinhvien')
    @yield('qldaotao')
    @yield('qlhethong')
   
 </div>
               @yield('trangchinh')
       
          
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
