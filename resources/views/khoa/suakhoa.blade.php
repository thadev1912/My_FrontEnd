@extends('qlsinhvien')
   @section('sinhvien')
    
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
                                           <th align="center">Chuyển Khoa</th>
                                                                                  
                                          </tr>
                                     </thread>
</table>     
</div>
                          
          </div>
          
          <div class ="col-sm-10 border ">
               <div class="card-header bg-primary text-white">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn"> QUẢN LÝ KHOA</h1>
                                  </div>
                                 
                    
                     </div>
</div>
<div class="card-body">

            <form action="{!! route('capnhat',$data->id) !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                    <div class="col">
                        <label>Mã Phòng Khoa</label>
                        <input id="current-pass-control" name="txtmakh" class="form-control" type="text" value="{!! $data->makh !!}">
                                <div>
                                    {!! $errors->first('txtmakh') !!}
                                </div>
                    </div>
                   <div class="col">
                        <label>Tên Phòng Khoa</label>
                        <input id="new-pass-control" name="txttenkh" class="form-control" type="text" value="{!! $data->tenkh !!}">
                                <div>
                                    {!! $errors->first('txttenkh') !!}
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