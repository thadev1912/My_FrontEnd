<!-- ======= BEGIN LOCAL THE TOP HEADER ======= -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cara River Park</title>
  <link type="icon/x-icon" href="{{ asset('/img/caraicon.ico')}}" rel="shortcut icon" />
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Code share facebook -->
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0" nonce="84M5xXjj"></script>
<meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="" />
<meta property="og:description"   content="Your description" />
<meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />

      
                     

  <!-- End Code share facebook -->
      


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
  
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  
 

  <!-- Template Main CSS & JS File -->
  <link href="assets/css/main1.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap-tagsinput.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/mycss.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/flash.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/rungrac.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/hieuunganh.css') }}">
  <link rel="stylesheet" href="{{ asset('/js/main.js') }}">
  <script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
  <script src="{{ asset('/js/bootstrap-tagsinput.js') }}"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  
  <script
  src="https://code.jquery.com/jquery-3.6.1.js"></script>
  </head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{!! URL::route('index') !!}" class="logo d-flex align-items-center">
       
        <h1><img src="{{ asset('/img/dxmt.png')}}" style="width:115%;height:80px;"></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
              <ul>
                    <li><a href="{!! URL::route('index') !!}" class="active"> TRANG CH???</a></li>
                    <li><a href="{!! URL::route('gioithieu') !!}">GI???I THI???U </a></li>
                    <li class="dropdown"><a href="#"><span>TIN T???C</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                             <li><a href="{!! URL::route('tindatxanh') !!}">TIN ?????T XANH</a></li>
                             <li><a href="{!! URL::route('tintucthitruong') !!}">TIN T???C TH??? TR?????NG</a></li>
                             <li><a href="#">V??N H??A C???NG ?????NG</a></li>          
                  
             </ul>
                 </li>
                         <li><a href="{!! URL::route('nhamau') !!}">NH?? M???U</a></li>
                         <li><a href="{!! URL::route('lienhe') !!}">LI??N H???</a></li>
                         @if(Auth::check())
                         <li class="dropdown font-italic"><a class="text-danger" href="#"><span> Ch??o {{Auth::user()->name}}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                       <ul>
                       <a  href="{!! URL::route('thoat') !!}">????ng Xu???t</a>
                         <ul>
</li>
                      @endif
             </ul>
                          <label class="icon_btn" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          
                         <i class="fas fa-bars ms-1"></i>
        </label>
              
      </nav>
      <script> 
$(document).ready(function(){
  $(".icon_btn").click(function()
  
  {
    $("ul").toggleClass('show');
  });
 
});
</script>
    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= d??? li???u b??n trong th??? header ======= -->
     <section class="hero d-flex align-items-center">
                        <div class="container">
						
						
                        </div><!-- End Stats Item -->           
  </section><!-- End Hero Section -->
    
	
 <!-- ======= END THE TOP HEADER ======= -->






 <!-- ======= Footer ======= -->
 
  @yield('bdscantho')
  @yield('tindatxanh')
  @yield('gioithieu')
  @yield('quanlybaiviet')
  @yield('lienhe')
 
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center" > 
  <img src="{{ asset('/img/rocket.png')}}" style="width:100px;height:100px;">
         </a>

  <div id="preloader"></div>

  
 <script src="{{ asset('/js/main.js') }}"></script>
 <!-- ======= End Footer ======= -->
 <!-- ======= Share Facebook ======= -->
 <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0" nonce="wyYmXYQZ"></script>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>

</html>
<!-- Begin Footer -->
<footer id="footer" class="footer">
     <div class="row">
      <div class="col-7">
    
          <div class="#">
                <div class="#">

                      
                                                                                  
                                <h3>C??NG TY C??? PH???N B???T ?????NG S???N C???N TH??</h3>
                                        <span class="font-italic">?????a ch???:29C-M???u Th??n-Ph?????ng An H??a-Tp C???n Th??</span>
                                          
                       <div class="social-links d-flex mt-4">
                               <a href="#" class="twitter"><img src="{{ asset('/img/youtube.png')}}" style="width=50px; height=50px; margin-top:21px;"></a>
                               <a href="#" class="twitter"><img src="{{ asset('/img/facebook.png')}}" style="width=60px; height=60px; margin-top:21px;"></a>
                               <a href="#" class="twitter"><img src="{{ asset('/img/tiktok.png')}}" style="width=60px; height=60px; margin-top:21px;"></a>
                  
                      </div>
                 </div>
           </div> 
</div>
          
            <div class="col-5">
                             <a href="{!! URL::route('lienhe') !!}" class=""> <h3 class="nhapnhay">LI??N H??? CH??NG T??I NGAY!!!</h3>
                             
                                 </a> 
        
                     <span class="font-italic nhapnhay">Hotline: 0789 999 889-0292 36 55555</span> 
                     
           <div class="hotline-phone-ring">
           <div class="hotline-phone-ring-img-circle"> 
                <a href="tel:0789 999 899" class="pps-btn-img">
                <img src="{{ asset('/img/phone.png')}}" style="width:60px; height:60px;" ></a> 
            </div>
          
            
</div>
        
    

   
      
 

    

  </footer><!-- End Footer -->