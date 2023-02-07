@extends('layout')
   @section('content')
    
        <div class="container">
          <div class ="card">
               <div class="card-header bg-primary text-white">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn btn-primary  "> QUẢN LÝ SINH VIÊN</h1>
                                  </div>
                                  <div class="col-md-12" align="right">
                                        <a class="btn btn-danger float-end" href="{{route('create')}}">Thêm Mới Sinh Viên</a>
                                        
                                  </div>
                    
                     </div>
</div>
<div class="card-body">

            <form action="{!! route('store') !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                    <div class="col">
                        <label>Mã Số Nhân Viên</label>
                        <input id="current-pass-control" name="txtMa" class="form-control" type="text" value="{!! old('txtMa') !!}">
                                <div>
                                    {!! $errors->first('txtMa') !!}
                                </div>
                    </div>
                   <div class="col">
                        <label>Họ và Tên Nhân Viên</label>
                        <input id="new-pass-control" name="txtTen" class="form-control" type="text" value="{!! old('txtTen') !!}">
                                <div>
                                    {!! $errors->first('txtTen') !!}
                                </div>
                    </div>
</div>

<div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                    <div class="col">
                        <label>Giới Tính</label>
                        <input id="current-pass-control" name="txtgioitinh" class="form-control" type="text" value="{!! old('txtgioitinh') !!}">
                                <div>
                                    {!! $errors->first('txtgioitinh') !!}
                                </div>
                    </div>
                   <div class="col">
                        <label>Phòng Ban</label>
                        <input id="new-pass-control" name="txtpb" class="form-control" type="text" value="{!! old('txtpban') !!}">
                                <div>
                                    {!! $errors->first('txtpban') !!}
                                </div>
                    </div>
</div>
<div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                    <div class="col">
                        <label>Nơi Sinh</label>
                        <input id="current-pass-control" name="txtns" class="form-control" type="text" value="{!! old('txtgioitinh') !!}">
                                <div>
                                    {!! $errors->first('txtns') !!}
                                </div>
                    </div>
                   
</div>


<div class="card-header text-white">
                    <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="icon-save"></i>&nbsp&nbspCập Nhật&nbsp&nbsp</button>
                    <a href="{!! URL::route('index') !!}" class="btn btn-primary"><i class="icon-remove"></i>&nbsp&nbspLàm Mới&nbsp&nbsp</a>
</div>


</div>
    </div>
       </div>
       @endsection