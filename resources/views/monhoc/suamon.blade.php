@extends('qldaotao')
   @section('daotao')
    
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
                                       <h1 class="btn "> QUẢN LÝ SINH VIÊN</h1>
                                  </div>
                                 
                    
                     </div>
</div>
<div class="card-body">

            <form action="{!! route('capnhatmon',$data->id) !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                    <div class="col">
                        <label>Mã Môn</label>
                        <input id="current-pass-control" name="txtma_mon" class="form-control" type="text" value="{!! $data->ma_mon !!}">
                                <div>
                                    {!! $errors->first('txtma_mon') !!}
                                </div>
                    </div>
</div>
<div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                   <div class="col">
                        <label>Tên Môn</label>
                        <input id="new-pass-control" name="txtten_mon" class="form-control" type="text" value="{!! $data->ten_mon !!}">
                                <div>
                                    {!! $errors->first('txtten_mon') !!}
                                </div>
                    </div>
</div>
<div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                   <div class="col">
                        <label>Số Tín Chỉ</label>
                        <input id="new-pass-control" name="txttin_chi" class="form-control" type="text" value="{!! $data->tin_chi !!}">
                                <div>
                                    {!! $errors->first('txttin_chi') !!}
                                </div>
                    </div>
</div>




<div class="card-header text-white">
                    <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="icon-save"></i>&nbsp&nbspCập Nhật&nbsp&nbsp</button>
                    <a href="{!! URL::route('thongtinmon') !!}" class="btn btn-primary"><i class="icon-remove"></i>&nbsp&nbspLàm Mới&nbsp&nbsp</a>
</div>


</div>
    </div>
       </div>
</form>
       @endsection