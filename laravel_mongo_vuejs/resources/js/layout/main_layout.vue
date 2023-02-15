 <template>
  <div class="container-fluid">
             <Thenavbar/> 
              <div class="sidebar d-sm-flex ">
                <div class="col-2 d-none d-sm-flex">
    <Thenavleft/>
            </div>
    <div class="container col-12">
      <div class="col-12">
                             <router-view>                             
                             </router-view>
      </div>
         <div class="col-12">
           <Thefooter/>
         </div>                
                            
       </div>                
    
 </div>

  </div>          
    

   



      
                         
    
       
                
               
              
                       
                
                    

 </template>
<script>
import Thenavbar from "../component/Thenavbar.vue";
import Thenavleft from "../component/Thenavleft.vue";
import Thefooter from "../component/Thefooter.vue";
export default {
  components: {
   

  Thenavbar,
  Thenavleft,
  Thefooter,

   
  },
};



</script>