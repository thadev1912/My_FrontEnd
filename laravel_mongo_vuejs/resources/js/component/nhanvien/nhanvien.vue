<template>	
  <a-card title="DANH SACH NHAN VIEN " class=" card-header table-bordered border-primary">
    <div class="" style="">
      <router-link :to ="{ name: 'themnhanvien' }" class="btn btn-primary mb-3">Them nhan vien</router-link>
         
      <table class="table table-bordered border-primary">
        <thead>
          <tr>
            
            <th>Ma Nhan Vien</th>
            <th>Ten Nhan Vien</th>
            <th>Gioi Tinh</th>
            <th>Dia Chi</th>
            <th>So Dien Thoai</th>          
            <th>Sua</th>
            <th>Xoa</th>
          </tr>
        </thead>
        <tbody>
         
          <tr v-for = 'dt in nhanvien' :key ="dt._id">    
            <td>{{ dt.ma_nhanvien}}</td>
            <td>{{dt.ten_nhanvien}}</td>
            <td>{{dt.gioitinh}}</td>
            <td>{{dt.diachi}}</td>
            <td>{{dt.sdt}}</td>                               
            <td><router-link :to="{name : 'suanhanvien',params : {id : dt._id}}" class="btn btn-info">Sua</router-link></td>
            <td> <button class="btn btn-danger" @click.prevent="xoa(dt._id)">Xoa</button></td>
          </tr>

        </tbody>
      </table>
    </div>
  </a-card>
</template>
<script>
import {store_menu} from "../../store/main_store.js";
export default
{
  setup(){
 const menu=store_menu();
  menu.onSelectedKeys(['nhanvien']);

},
    data() {
        return {
          nhanvien:[]
        }
      },
      created:function () {
        this.info();
      },
      methods:
      {
        info()
         {
          axios.get('http://127.0.0.1:8000/api/nhanvien').then(response =>
               {
                console.log(response);
                this.nhanvien=response.data.data;

               });
         },
         xoa(_id)
         {
         let uri=`http://127.0.0.1:8000/api/xoanhanvien/${_id}`;
            axios.delete(uri).then((response)=>
             {
                  for(let i=0;i<this.nhanvien.length;i++)
                     {
                      if(_id===this.nhanvien[i]._id)
                         {
                          this.nhanvien.splice(i,1);
                         }
                     }
             });

         }
      },
 

}





</script>

