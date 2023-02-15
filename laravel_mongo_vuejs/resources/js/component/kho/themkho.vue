
// CreatePost.vue

<template>
  <div>
    <h1>Them Kho</h1>
     <form @submit.prevent="addPost">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Ma Kho:</label>
            <input type="text" class="form-control"  v-model="data.ma_kho" >
          </div>
          <div class="form-group">
            <label>Ten Kho:</label>
            <input type="text" class="form-control" v-model="data.ten_kho" >
          </div>
          <div class="form-group">
            <label>Lien He:</label>
            <input type="text" class="form-control" v-model="data.lienhe">
          </div>
          <div class="form-group">
            <label>Dia Chi:</label>
            <input type="text" class="form-control" v-model="data.diachi">
          </div>
          <div class="form-group">
            <label>So Dien Thoai:</label>
            <input type="text" class="form-control" v-model="data.sdt">
          </div>
           <div class="form-group">
            <label>Quan Ly:</label>
            <input type="text" class="form-control" v-model="data.quanly">
          </div>
           <div class="form-group">
            <label>Ghi Chu:</label>
            <input type="text" class="form-control" v-model="data.ghichu">
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
export default {
  data() {
    return {
      data: {}
    }
  },
  methods: {
    addPost() {
      let uri = 'http://127.0.0.1:8000/api/luukho';
      axios.post(uri, this.data).then((response) => {
        this.$router.push({ name: 'kho' });
        console.log(this.data);
      });
      
    }
  }
}
</script>
