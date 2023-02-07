<html>
  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="{{ asset('/ckeditor/ckeditor.js')}}"></script>
  <script src="{{ asset('/ckeditor/ckfinder.js')}}"></script>
 
</head>
<body>

<label>Nội dung bài viết</label>
                        <textarea  id="text1" name="txtten_mon" class="form-control" type="text" value="{!! old('txttenkh') !!}"></textarea>
                        <script>
                 CKEDITOR.replace("text1",{
        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );/*đay là chỉnh chiều dài ckeditor*/
               </script>
</body>   



