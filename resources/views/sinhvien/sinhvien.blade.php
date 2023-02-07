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
                                         </tr>
                                           <th align="center"><a class="" href="{{route('create')}}">Thêm Sinh Viên</a>    </th>
                                                                             
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
                                       <h1 class="btn"> THÔNG TIN SINH VIÊN</h1>
                                  </div>
                                 
                    
                     </div>
</div>
                   <div class="card-body">
                    @if(Session::has('thongbao'))
                      <div class="alert alert-success">
                         {{Session::get('thongbao')}}
                      </div>
                      @endif
                                <table class="table table-bordered ">
                                     <thread >
                                         </tr >
                                           <th align="center">STT</th>
                                           <th align="center">MÃ SINH VIÊN</th>
                                           <th align="center">HỌ TÊN SINH VIÊN</th>
                                           <th align="center">KHOA</th>
                                           <th align="center">ĐỊA CHỈ</th>
                                           <th align="center">TỦY CHỈNH</th>
                                          </tr>
                                     </thread>
                                     <tbody>
                                      @foreach ($sinhvien as $sv)
                                         <tr>
                                             <td>{{$sv->id}}</td>
                                             <td>{{$sv->masv}}</td>
                                             <td>{{$sv->tensv}}</td>
                                             <td>{{$sv->pban}}</td>
                                             <td>{{$sv->noisinh}}</td>
                                             <td class="td-actions">
                        <a href="{!! URL::route('edit', $sv->id) !!}" class="  btn-xs btn-primary"><i class="btn-icon-only icon-edit">Sửa</i></a>

                        <a href="{!! URL::route('delete', $sv->id) !!}" class="  btn-xs btn-danger">
                            <i class="btn-icon-only icon-remove">Xóa</i>
                        </a>
                    </td>
                                        </tr>
                                        @endforeach     
                                    </tbody>
                               </table>
                               <!--code gọi phân trang-->
                               {{$sinhvien->links("pagination::bootstrap-4")}}
                 
                 </div >   
              </div>
           </div>
           
</div> <!--||KẾT THÚC VÙNG CHIA DIV THÀNH 2 PHẦN||-->
       </div>

@stop

