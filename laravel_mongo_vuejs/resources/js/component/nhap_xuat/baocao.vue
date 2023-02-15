<template>
	<a-card title="BAO CAO " class=" card-header table-bordered border-primary">
    <div class="" style="">
     
      <table class="table table-bordered border-primary">
        <thead>
          <tr>
            
            <th class="text-center col-1">Ma Kho</th>
            <th class="text-center col-1">Ten Kho</th>
            <th class="text-center col-1">Ma Nhan Vien</th>
            <th class="text-center col-2">Ten Nhan Vien</th> 
            <th class="text-center col-2">So Luong Nhap</th>
            <th class="text-center col-2">So Luong Xuat</th>    
             <th class="text-center col-1">So Luong Ton</th>   
                  <th class="text-center col-1">Ngay Cap nhat</th>            
            <th class="text-center col-1">Sua</th>
            <th class="text-center col-1">Xoa</th>
          </tr>
        </thead>
        <tbody>          
<tr v-for='data in nhanvien' :key="data._id">  
                 
            <td class="text-center col-1">{{ data.ma_kho }}</td>
            <td class="text-center col-1">{{ data.ten_kho }}</td>
            <td class="text-center col-1">{{ data.getnhanvien.ma_nhanvien }}</td>
            <td class="text-center col-2">{{ data.getnhanvien.ten_nhanvien }}</td>  
            <td class="text-center col-2">{{ formatPrice(data.sl_nhap) }} VND </td>
            <td class="text-center col-2">{{ formatPrice(data.sl_xuat) }} VND</td>
            <td class="text-center col-1">{{ formatPrice(data.sl_nhap - data.sl_xuat)}} VND</td>   
            <td class="text-center col-2">{{ formatDate(data.getnhanvien.updated_at) }} </td>         
            <td class="text-center col-1">Sua</td>
            <td class="text-center col-1">Xoa</td>
          </tr>
        </tbody>
      </table>
    </div>
  </a-card>
</template>
<script>
import moment from 'moment';
	export default{
       data() {
               return {

                nhanvien:[]

               }



       },
       created:function() {
        this.info();

       },
       methods:{
           info(){
           	let url=`http://127.0.0.1:8000/api/baocao`;
            axios.get(url).then((response)=> {
               console.log(response);
               this.nhanvien = response.data.data;



            });

           },
         formatDate: function (value) {
         return moment(value).format("DD/MM/YYYY");
    },
    formatPrice(value) {
        let val = (value/1).toFixed(3).replace('.', ',')
        return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
    }


       },






	}
</script>