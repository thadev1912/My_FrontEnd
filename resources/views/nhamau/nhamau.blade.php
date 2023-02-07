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
                                      <div class="subnew col-lg-6"  data-aos-durartion="6000">
                                           
                                      <figure class="snip1477">
            <img src="../public/img/{{$nm->hinh}}" alt="sample38" />
            <div class="title">
              <div>
                <h2>CaRa River Park</h2>
                <h4>Xem Chi Tiết</h4>
              </div>
            </div>
            <figcaption>
              <p>Không gian thoáng mát<br> Cửa sổ hướng thiên</p>
            </figcaption>
            <a href="#"></a>
          </figure>
                                                   
                                                     
                                      </div><!-- End  -->

                                      @endforeach     
                                            <script>
            /* Demo purposes only */
$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);

          </script>
                                      </div> 
                                        
                                     
                                   

                                </div>
                               
                               

                                          
                                
                                <script>
  AOS.init();
</script>
                              
                                @endsection