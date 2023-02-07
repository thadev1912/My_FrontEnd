@extends('layout')
@section('tindatxanh')
<div class="body">
<div class="container">
<div class="section-header" data-aos="fade-up" data-aos-duration="6000">
                                          
                                          <h2>  TIN ĐẤT XANH</h2>

                                         
                                        
                                            
                                           
                                 </div>
                                
                                 <div class="news row "><!--create one line -->
                                            <!--thông tin đầu tiên-->
                                            @foreach ($tindatxanh as $tdx)
                                      <div class="subnew col-lg-4" data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-durartion="6000">
                                            <div class="card">
                                                    <div class="card-img">
                                                    <figure><img src="../public/img/images/{{$tdx->hinh}}" style="width:100%;height:300px;" alt="" class="img-fluid"><figure>
                                                    </div>
                                                    <div class="content text-justify" style="height: 180px;0px">
                                                          <h4><a href="{!! URL::route('chitietbaiviet', $tdx->id) !!}" class="stretched-link">{{$tdx->title}}</a></h4>
                                                           {!! Illuminate\Support\Str::limit($tdx->noidung, 230, $end='...') !!}-- code cắt chữ--> 
                                                    </div>
                                                      </div>
                                      </div><!-- End  -->
                                      @endforeach     
                                     
                                      </div> 
                                        
                                     
                                      
                                      <div class="col-6">
                                      {{$tindatxanh->links("pagination::bootstrap-4")}}
                                      </div> 
                                     

                                </div>
                               
                                

                                          
                                </div>
                                <script>
  AOS.init();
</script>
                              
                                @endsection