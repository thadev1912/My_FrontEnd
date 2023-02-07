@extends('layout')
@section('tindatxanh')
<div class="body">
<div class="container">
<div class="section-header" data-aos="fade-up">
                                          
                                          <h2>  NHÀ MẪU</h2>
                                         
                                        
                                            
                                           
                                 </div>
                                
                                 <div class="news row "><!--create one line -->
                                            <!--thông tin đầu tiên-->
                                            @foreach ($nhamau as $nm)
                                      <div class="subnew col-lg-6" data-aos="fade-up-left" data-aos-durartion="6000">
                                           
                                                    <div class="card-img">
                                                           <figure><img src="../public/img/{{$nm->hinh}}" style="width:100%;height:400px;" alt="" class="img-fluid"><figure>
                                                    </div>
                                                   
                                                     
                                      </div><!-- End  -->
                                      @endforeach     
                                     
                                      </div> 
                                        
                                     
                                   

                                </div>
                               
                               

                                          
                                </div>
                                <script>
  AOS.init();
</script>
                              
                                @endsection