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
                                           <th align="center"><a class="" href="{{route('themmon')}}">Thêm Môn Học</a>    </th>
                                                                             
                                          </tr>
                                          </tr >
                                           
                                                                                  
                                          </tr>
                                     </thread>
</table>     
</div>
                          
          </div>

          <div class ="col-sm-10 border ">
               <div class="card-header bg-primary text-white">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn"> Quản Lý Môn Học</h1>
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
                                           <th align="center">MÃ MÔN</th>
                                           <th align="center">TÊN MÔN</th>
                                           <th align="center">TÍN CHỈ</th>
                                           <th align="center">TÙY CHỈNH</th>
                                           
                                          </tr>
                                     </thread>
                                     <tbody>
                                      @foreach ($monhoc as $mh)
                                         <tr>
                                             <td>{{$mh->id}}</td>
                                             <td>{{$mh->ma_mon}}</td>
                                             <td>{{$mh->ten_mon}}</td>
                                             <td>{{$mh->tin_chi}}</td>
                                             <td class="td-actions">
                        <a href="{!! URL::route('suamon',$mh->id) !!}" class="  btn-xs btn-primary"><i class="btn-icon-only icon-edit">Sửa</i></a>

                        <a href="{!! URL::route('xoamon',$mh->id) !!}" class="  btn-xs btn-danger"><i class="btn-icon-only icon-remove">Xóa</i>                      </a>
                    </td>
                                        </tr>
                                        @endforeach     
                                    </tbody>
                               </table>
                               <!--code gọi phân trang-->
                               {{$monhoc->links("pagination::bootstrap-4")}}
                 
                 
                 </div >   
              </div>
           </div>
           
</div> <!--||KẾT THÚC VÙNG CHIA DIV THÀNH 2 PHẦN||-->
       </div>

@stop

