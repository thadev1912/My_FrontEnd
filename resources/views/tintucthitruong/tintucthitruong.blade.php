@extends('layout')
@section('tindatxanh')
<div class="body">
<div class="container">
<div class="section-header" data-aos="fade-up" data-aos-duration="6000">
                                          
                                          <h2>  TIN TỨC THỊ TRƯỜNG</h2>

                                         
                                        
                                            
                                           
                                 </div>
                                 
                                 <div class="news row "><!--create one line -->
                                            <!--thông tin đầu tiên-->
                                            @foreach ($tintucthitruong as $ttt)
                                      <div class="subnew col-lg-4" data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-durartion="6000">
                                            <div class="card">
                                                    <div class="card-img">
                                                    <figure><img src="../public/img/images/{{$ttt->hinh}}" style="width:100%;height:300px;" alt="" class="img-fluid"><figure>
                                                    </div>
                                                    <div class="content text-justify" style="height:180px">
                                                          <h4><a href="{!! URL::route('chitietbaivietthitruong', $ttt->id) !!}" class="stretched-link">{{$ttt->title}}</a></h4>
                                                          {!! Illuminate\Support\Str::limit($ttt->noidung, 230, $end='...') !!}
                                                    </div>
                                                      </div>
                                      </div><!-- End  -->
                                      @endforeach     
                                     
                                      </div> 
                                        
                                     
                                      
                                      <div class="col-6">
                                      {{$tintucthitruong->links("pagination::bootstrap-4")}}
                                      </div> 

                                </div>
                               
                               

                                          
                                </div>
                                <script>
  AOS.init();
</script>
                              
                                @endsection