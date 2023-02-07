@extends('layout')
@section('tindatxanh')
<meta property="og:title"         content="Your Website Title" />
<div class="body">
<div class="container">
     <div class="row">
          <div class="col-3">
          <ul class="list-group position-static">
               <li class="list-group-item active">
               DANH MỤC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <span class="badge"><i class='fas fa-angle-double-down' style='font-size:14px' ></i></span>
                      
               </li>
               <li class="list-group-item list-group-item-action list-group-item-danger"><a href="{!! URL::route('tindatxanh') !!}">Tin Đất Xanh</a></li>
               <li class="list-group-item list-group-item-action list-group-item-danger"><a href="{!! URL::route('tintucthitruong') !!}">Tin Thị Trường</a></li>
               <li class="list-group-item list-group-item-action list-group-item-danger"><a href="#">Tin Tức Cộng Đồng</a></li>

          </ul>
          </div>
          <div class="col-9 border">
               <div class="card-body">
               <div class="fb-share-button" data-href="https://carariverpark.net/chitietbaiviet/20" data-layout="button" data-size="small"><a target="_blank" href="https%3A%2F%2Fcarariverpark.net%2Fchitietbaiviet%2F7&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                                       <div class="section-header" data-aos="fade-up" data-aos-duration="6000">                                         
                                                                      <h2>  TIN ĐẤT XANH</h2>
                                      </div>
                                
                                      <div class="title text-uppercase">
                                           <h3>{!!$tt->title !!}</h3>
                                     </div>
                                      <div class="content text-justify ">
                                                 <p> {!!$tt->noidung !!}</p>
                                     </div>
                                     </div>
          </div>
     </div>
                                      
                                        
                                     
                                      
                       
                                     


 
                                   
                                </div>
                                   
                                </div>
                                <script>
  AOS.init();
</script>
                              
                                @endsection