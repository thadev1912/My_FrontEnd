@extends('layout')
@section('qlsinhvien')
<div class="qlsinhvien" id="test4">

<nav class=" navbar navbar-expand-xl bg-primary navbar-light">

<ul class="navbar-nav">
                 <li class="nav-item border text-center">
                 <a class="nav-link " href="{!! URL::route('index') !!}">
                          <img src="{{ asset('/images/khuvuc.png')}}" width="40px" height="30px" style="margin-top:-10px; " ><br> Quản Lý Sinh Viên
                      </a>
                  </li>
                  <li class="nav-item border text-center">
                  <a class="nav-link" href="{!! URL::route('khoa') !!}">
                          <img src="{{ asset('/images/nhasanxuat.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br> Quản Lý Khoa
                      </a>
                  </li>
                  <li class="nav-item border text-center">
                  <a class="nav-link" href="#">
                          <img src="{{ asset('/images/nhaphanphoi.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br>Quản Lý Giáo Viên
                      </a>
                  </li>
                  <li class="nav-item border text-center">
                  <a class="nav-link" href="#">
                          <img src="{{ asset('/images/khohang.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br>Quản Lý Lịch Học
                      </a>
                  </li>
                  <li class="nav-item border text-center">
                  <a class="nav-link" href="#">
                          <img src="{{ asset('/images/phanquyen.png')}}" width="40px" height="30px" style="margin-top:-10px;" ><br>Quản Lý Điểm
                      </a>
                  </li>
                 
                 
</ul>
      
</nav>

    @if(View::hasSection('sinhvien'))
        @yield('sinhvien')
    @else
      <h1> Chào mừng bạn đến trang Danh Mục Sinh Viên</h1>
    @endif


</div>  
@endsection