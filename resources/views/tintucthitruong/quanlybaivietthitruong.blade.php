@extends('layout')
@section('quanlybaiviet')
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
                                           <th align="center"><a class="" href="{!! URL::route('thembaivietthitruong') !!}">Thêm Bài Viết</a>    </th>
                                                                             
                                          </tr>
                                         
                                     </thread>
</table>     
</div>
                          
          </div>

          <div class ="col-sm-10 border ">
               <div class="card-header bg-primary text-white">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                
                                       <h1 class="btn"> QUẢN LÝ BÀI VIẾT</h1>
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
                                          
                                           <th align="center">MÃ BÀI</th>
                                           <th align="center">TIÊU ĐỀ</th>
                                           <th align="center">NỘI DUNG</th>
                                           <th align="center">HÌNH ẢNH</th>
                                           <th align="center">TỦY CHỈNH</th>
                                          </tr>
                                     </thread>
                                     <tbody>
                                   
                                      @foreach ($thitruong as $tt)
                                         <tr>
                                            
                                             <td>{{$tt->id}}</td>
                                             <td>{{$tt->title}}</td>
                                             <td>{!! Illuminate\Support\Str::limit($tt->noidung, 150, $end='...') !!}</td>
                                             <td><img src="../public/img/images/{{$tt->hinh}}" style="width:70px;height:70px;"></td>
                                             <td class="td-actions">
                        <a href="{!! URL::route('suabaivietthitruong', $tt->id) !!}" class="  btn-xs btn-primary"><i class="btn-icon-only icon-edit">Sửa</i></a>

                        <a href="{!! URL::route('xoabaivietthitruong', $tt->id) !!}" class="  btn-xs btn-danger">
                            <i class="btn-icon-only icon-remove">Xóa</i>
                        </a>
                    </td>
                                        </tr>
                                        @endforeach     
                                    </tbody>
                               </table>
                               <!--code gọi phân trang-->
                               {{$thitruong->links("pagination::bootstrap-4")}}
                 
                 </div >   
              </div>
           </div>
           
</div> <!--||KẾT THÚC VÙNG CHIA DIV THÀNH 2 PHẦN||-->
       </div>

                            
                                        
                                            
                              
                              
                                @endsection