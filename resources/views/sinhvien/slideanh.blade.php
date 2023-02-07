<html>
    <head>
        <title>Chuyển ảnh</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
        <style>
            .slide  
            {
                
                width: 1000px;
                height:400px ;
                padding-top:50px;
                margin: 0 auto;
                border: 1px;
                position: relative;
                left: 0;
                overflow: hidden;
                
               
            }
           
            .show
            {
                width:1000px;
                height: 400px;
                opacity: 1;
                border-radius: 10px;
                position: absolute;
                left: 100%; 
                transition: left 0s .75s;
            }
        
            
            #dem
            {   
                margin-top: 50%;
                position: absolute;
                font-size: medium;
                text-align: center;
                background-color: aquamarine;
                

            }  
            .show.active
            {
                opacity: 1;
                left: 0;
                z-index: 100;
               width:1200px;
               height: 500px;
               transition: left .80s ease-in-out;
               
            

              
               
               
            }
         
            
            


        </style>
    </head>
    <body>
        <div class="slide">
          
            <img class="show active" src="../DBSCT/assets/img/1.jpg">
            <img class="show active" src="../DBSCT/assets/img/2.jpg">
            <img class="show active" src="../DBSCT/assets/img/3.jpg">
            <div class="dieuhuong">
                <i class="fa fa-chevron-circle-left" onclick="next()"></i>
                <i class="fa fa-chevron-circle-right"></i>
            </div>
            <p id="dem">1/3</p>
        </div>
        <script>
          var hinh=document.getElementsByClassName('show');
          var index=0;
          function submitactive()
          {
          for(i=0;i<hinh.length;i++)
           {
               hinh[i].classList.remove("active");
           }
        }
         var bien= function next()

          {
             
             submitactive();
            
             hinh[index].classList.add("active");
             index++;
             if(index==hinh.length)
              {
                  index=0;
              }

            
          }
            setInterval(bien,3000);
        </script>
    </body>
</html>