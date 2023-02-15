<template>

 <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" @click="showDrawer()"></span>
    </button>
    <div class=" container collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand text-white" href="#">Logo</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" href="#">DANH MUC</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">CHUC NANG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">HE THONG</a>
        </li>
          <li class="nav-item">
          <a class="nav-link text-white" href="#">HO TRO</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
  
  <a-drawer
    v-model:visible="visible" title="Quan Ly Kho Hang"  placement="left" style="width:100%;height:400px">
    <Thenavleft/>
  </a-drawer>
</template>
<script>  
import Thenavleft from "../component/Thenavleft.vue";
import { defineComponent, ref } from 'vue';

export default defineComponent ({
  components: {
    Thenavleft,
  },
  setup() {
         const visible = ref(false);
         

             const showDrawer = () => {
             visible.value = true;
                                         };

           return {
                  visible,
                  showDrawer,
                  };
          },
         });

</script>