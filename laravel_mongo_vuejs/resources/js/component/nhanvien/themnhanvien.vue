<template>
	 <div>
    <h1>Them Nhan Vien</h1>
     <form @submit.prevent="themmoi">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Ma Nhan Vien:</label>
            <input type="text" class="form-control" v-model="nhanvien.ma_nhanvien">
          </div>
          <div class="form-group">
            <label>Ten Nhan Vien:</label>
            <input type="text" class="form-control" v-model="nhanvien.ten_nhanvien">
          </div>
          <div class="form-group">
            <label>Gioi Tinh:</label>
            <input type="text" class="form-control" v-model="nhanvien.gioitinh">
          </div>
          <div class="form-group">
            <label>Dia Chi:</label>
            <input type="text" class="form-control" v-model="nhanvien.diachi">
          </div>
          <div class="form-group">
            <label>So Dien Thoai:</label>
            <input type="text" class="form-control" v-model="nhanvien.sdt">
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
			return 	{
				nhanvien: {}
			}
		},
			methods:
		{
			themmoi()
			{
				axios.post('http://127.0.0.1:8000/api/luunhanvien',this.nhanvien).then((response) =>
         {
				
					
                    this.$router.push({ name: 'nhanvien' });
                    console.log(this.data);
				});
			}
		}
	}
</script>