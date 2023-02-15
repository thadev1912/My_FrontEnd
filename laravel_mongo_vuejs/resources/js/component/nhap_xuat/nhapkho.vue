<template>
	<div class="row mt-5">
		<h2>DANH MUC NHAP KHO</h2>
		<div class="col-6">
			<div class="mb-3">                
                  <input type="text" class="form-control" v-model="timkiem">
					  <ul v-if="data.length > 0">
                               <li v-for="dt in data" :key="dt._id" v-text="dt.ma_kho"></li>
                     </ul>
            </div>
		</div>
		<div class="col-6">
			<div class="mb-3"> 

                  <input type="text" class="form-control" v-for="result in results" :key="result._id" v-model="result.ten_kho">
					 
            </div>
		</div>
		<select class="form-select" aria-label="Default select example">
  <option selected>Danh Sach Ma Nhan Vien</option>
  <option v-for="nhanvien in nhanviens" v-bind:value="nhanvien._id" >{{ nhanvien.ten_nhanvien }}</option>
</select>
	</div>                
</template>
<script>
	export default{
         data() {
             return {
             	timkiem:null,
             	 results:{},
             	 data:{},
             	 nhanviens:{}
             }


         },
         //dung watch de duyet check input
         // check resquest bang ?name_request='gia tri'
         watch: {
				 timkiem (after, before) {
				  this.info();
				  this.goiy();
				  this.nhanvien();
				  
               }
               },
         
         methods:{
         	info() {
         		let url=`http://127.0.0.1:8000/api/timkiem`;
         		axios.get(url,{ params: { timkiem: this.timkiem } }).then((response)=> {         			
                      this.results=response.data.data;


         		});
         		
         	},
         	goiy() {
         		let url=`http://127.0.0.1:8000/api/goiy`;
         		axios.get(url,{ params: { timkiem: this.timkiem } }).then((response)=> {         			
                      this.data=response.data.data;


         		});
         		
         	},
         	nhanvien() {
         		let url=`http://127.0.0.1:8000/api/nhanvien`;
         		axios.get(url).then((response)=> {         			
                      this.nhanviens=response.data.data;


         		});
         		
         	},

         }





	}
</script>