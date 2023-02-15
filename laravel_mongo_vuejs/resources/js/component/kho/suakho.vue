// Editpost.vue

<template>
     <div>
    <h1>Sua Kho</h1>
     <form @submit.prevent="capnhat">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Ma Kho:</label>
            <input type="text" class="form-control"  v-model="info.ma_kho" >
          </div>
          <div class="form-group">
            <label>Ten Kho:</label>
            <input type="text" class="form-control" v-model="info.ten_kho" >
          </div>
          <div class="form-group">
            <label>Lien He:</label>
            <input type="text" class="form-control" v-model="info.lienhe">
          </div>
          <div class="form-group">
            <label>Dia Chi:</label>
            <input type="text" class="form-control" v-model="info.diachi">
          </div>
          <div class="form-group">
            <label>So Dien Thoai:</label>
            <input type="text" class="form-control" v-model="info.sdt">
          </div>
           <div class="form-group">
            <label>Quan Ly:</label>
            <input type="text" class="form-control" v-model="info.quanly">
          </div>
           <div class="form-group">
            <label>Ghi Chu:</label>
            <input type="text" class="form-control" v-model="info.ghichu">
          </div>
          <div class="form-group">
            <button class="btn btn-primary mt-3">Luu Lai</button>
          </div>
        </div>
      </div>

    </form>
  </div>
</template>
<script>
import { EditFilled } from '@ant-design/icons-vue';

export default {

    data() {
        return {
            info: {}
        }
    },
    created: function () {
        let uri = `http://127.0.0.1:8000/api/suakho/${this.$route.params.id}`;
        axios.get(uri).then((response) => {
            console.log(response);
            this.info = response.data.data;

        });
    },
    methods: {
    capnhat() {
            let uri = `http://127.0.0.1:8000/api/capnhat/${this.$route.params.id}`;
            console.log(this.info);
            axios.post(uri, this.info).then((response) => {
                this.$router.push({ name: 'kho' });
               
            })
                .catch((error) => {
                    console.log(error);
                    //console.log(error.toJSON());
                });
        }
    
    }
}

</script>