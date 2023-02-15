<template>
	 <div>
    <h1>Sua Nhan Vien</h1>
     <form @submit.prevent="capnhat">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Ma Nhan Vien:</label>
            <input type="text" class="form-control" v-model="data.ma_nhanvien">
          </div>
          <div class="form-group">
            <label>Ten Nhan Vien:</label>
            <input type="text" class="form-control" v-model="data.ten_nhanvien">
          </div>
          <div class="form-group">
            <label>Gioi Tinh:</label>
            <input type="text" class="form-control" v-model="data.gioitinh">
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
            <button class="btn btn-primary mt-3">Luu Lai</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>
<script>
  export default
  {
        data() {
            return {
              data: {}
            }
          }
            ,
            created :function(){
                this.info();
            },
            methods: {
              info(){
                  
                let uri= `http://127.0.0.1:8000/api/suanhanvien/${this.$route.params.id}`;
                 axios.get(uri).then((response)=>
                 {

                  this.data=response.data.data;
                  console.log(this.data);
                 });                

              },
               capnhat(){
                  
                let uri= `http://127.0.0.1:8000/api/capnhatnhanvien/${this.$route.params.id}`;
                 axios.put(uri,this.data).then((response)=>
                 {

                  this.$router.push({name :'nhanvien'});
                  
                 });                

              }

            },



        }

  
</script>