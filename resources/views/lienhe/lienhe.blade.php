
@extends('layout')
@section('lienhe')

    <div class="container">
    <div class="section-header" data-aos="fade-up" >
                     <h2>THÔNG TIN LIÊN HỆ</h2>
</div>
        <div class="row">
            <div class="col-sm-6">
                <h4 class="text-primary container mt-3 font-weight-bold">&nbsp;CÔNG TY CỔ PHẦN BẤT ĐỘNG SẢN CẦN THƠ<h4>
                  <div class="location1">
                <p class="font-italic" ><strong> <i class="fas fa-university">&nbsp;Trụ sở chính:</i></strong> 29C-Mậu Thân-P.An Hòa-Quận Ninh Kiều-Tp. Cần Thơ</p>
                <p class="font-italic" ><strong> <i class="fas fa-phone-volume">&nbsp;Hotline:</i></strong> 0292 36 55555- 0789 999 889</p>
                </div>
                <div class="location2">
                <p class="font-italic" ><strong> <i class="fas fa-university">&nbsp;VP2:</i></strong> 243 Nguyễn Văn Cừ-P.An Hòa-Quận Ninh Kiều-Tp. Cần Thơ</p>
                <p class="font-italic" ><strong> <i class="fas fa-phone-volume">&nbsp;Hotline:</i></strong> 0292 36 55555- 0789 999 889</p>
</div>
              </div>
            <!-- Bắt đầu cột bên trái-->
            <div class="col-sm-6">
            

<button class="btn btn-primary form-control mt-3 mb-3" type="submit"> <p class="nhapnhay">ĐIỀN THÔNG TIN VÀO ĐÂY</p></button>
                     
            <form action="{!! route('luuthongtin') !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                     <div class="form-floating mb-3 mt-3 border border-danger">
                              <input type="text" class="form-control" id="email" placeholder="Họ và Tên" name="txt_hoten">  
                    </div>

                    <div class="form-floating mb-3 mt-3 border border-danger">
                              <input type="text" class="form-control" id="email" placeholder="Địa chỉ" name="txt_diachi">  
                    </div>

                    <div class="form-floating mb-3 mt-3 border border-danger">
                              <input type="text" class="form-control" id="email" placeholder="Tiêu đề" name="txt_tieude">  
                    </div>

                    <div class="form-floating mt-3 mb-3 border border-danger">
                               <textarea type="text" class="form-control" id="pwd" placeholder="Nội dung" name="txt_noidung"></textarea>
                    </div>
                    <div class="form-floating mt-3 mb-3 border border-danger">
                               <input type="text" class="form-control" id="pwd" placeholder="Số điện thoại" name="txt_sdt">
                    </div>
                    <button class="btn btn-danger mt-3 mb-3" type="submit"> Gửi Thông Tin </button>
</form>
           
            </div>
             <!--Kết thúc cột bên trái-->

        </div>

        <!--Khu vực chèn code bản đồ-->
        <div id="map" style="width:100%;height:500px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.717842644159!2d105.76575541399986!3d10.04012619282366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a08810e70888e5%3A0x6afdfa8aedb2581c!2zMjljIMSQLiBN4bqtdSBUaMOibiwgQW4gTmdoaeG7h3AsIE5pbmggS2nhu4F1LCBD4bqnbiBUaMahIDk0MDAwLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1661849974281!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
           <!-- Code chèn bản đồ ở đây -->
       
         

    </div>
    <script>
  AOS.init();
</script>
@endsection
