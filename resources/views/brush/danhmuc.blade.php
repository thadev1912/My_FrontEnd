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
                        <a href="{!! URL::route('edit', $sv->id) !!}" class="btn btn-small btn-info"><i class="btn-icon-only icon-edit">Sửa</i></a>

                        <a href="{!! URL::route('delete',$sv->id) !!}" class="btn btn-small btn-danger">
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
       </div>

@endsection


