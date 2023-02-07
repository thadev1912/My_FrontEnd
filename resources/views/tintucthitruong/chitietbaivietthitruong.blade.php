@extends('layout')
   @section('quanlybaiviet')
   <div class="body">
<div class="container">
         
<div class="row">  <!--||VÙNG CHIA DIV THÀNH 2 PHẦN||-->
          <div class=" col-sm-2 border text-uppercas">
          <ul class="list-group">
               <li class="list-group-item active">
               DANH MỤC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <span class="badge"><i class='fas fa-angle-double-down' style='font-size:14px'></i></span>
                      
               </li>
               <li class="list-group-item list-group-item-action list-group-item-danger"><a href="{!! URL::route('tindatxanh') !!}">Tin Đất Xanh</a></li>
               <li class="list-group-item list-group-item-action list-group-item-danger"><a href="{!! URL::route('tintucthitruong') !!}">Tin Thị Trường</a></li>
               <li class="list-group-item list-group-item-action list-group-item-danger"><a href="#">Tin Tức Cộng Đồng</a></li>

          </ul>
                 
               
           
                           <div class="card-body">
                           
</div>
                          
          </div>
          <div class ="col-sm-10 border ">
          <div class="section-header">
                                          
                                          <h2>  TIN TỨC THỊ TRƯỜNG</h2>
                                 </div>
                                 <div class="fb-share-button" data-href="http://localhost/bdsct/public/chitietbaivietthitruong" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Fbdsct%2Fpublic%2Fchitietbaivietthitruong&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                                 <div class="title text-uppercase">
                                       <h3>{!!$ttt->title !!}</h3>
                                 </div>
                                 <div class="content text-justify ">
                                      <p> {!!$ttt->noidung !!}</p>
                                 </div>
                                 </div>
@endsection