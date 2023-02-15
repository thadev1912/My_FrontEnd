<template>	
  <a-card title="DANH SACH KHO " class=" card-header table-bordered border-primary">
    <div class="" style="">
        <router-link :to="{ name: 'themkho' }" class="btn btn-primary mb-3">Them moi</router-link>
      <table class="table table-bordered border-primary">
        <thead>
          <tr>
            
            <th>Ma Kho</th>
            <th>Ten Kho</th>
            <th>Lien He</th>
            <th>Dia Chi</th>
            <th>So Dien Thoai</th>
            <th>Quan Ly</th>
            <th>Ghi Chu</th>
            <th>Sua</th>
            <th>Xoa</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for='data in posts' :key="data._id">  
                 
            <td>{{ data.ma_kho }}</td>
            <td>{{ data.ten_kho }}</td>
            <td>{{ data.lienhe }}</td>
            <td>{{ data.diachi }}</td>
            <td>{{ data.sdt }}</td>
             <td>{{ data.quanly }}</td>
            <td>{{ data.ghichu }}</td>           
            <td><router-link :to="{ name: 'suakho',params:{ id: data._id } }" class="btn btn-info">Sua</router-link></td>
            <td><button class="btn btn-danger" @click.prevent="xoa(data._id)">Xoa</button></td>
          </tr>

        </tbody>
      </table>
    </div>
  </a-card>
</template>
<script>
import {store_menu} from "../../store/main_store.js";
export default {
  setup(){
 const menu=store_menu();
  menu.onSelectedKeys(['kho']);

},
  data() {
    return {
      posts: []
    }
  },
  

  created: function () {
    this.info();
    // let uri = 'http://127.0.0.1:8000/api/kho';
    // axios.get(uri).then(response => {
    //   this.posts = response.data.data;
    // });
  },
  methods: {
    info() {
      let uri = 'http://127.0.0.1:8000/api/kho';
      axios.get(uri).then(response => {
      	console.log(response);
        this.posts = response.data.data;
      })
        .catch((error) => {
          console.log(error);
          //console.log(error.toJSON());
        });

    },
     // bat buoc phai ghi dung _id nay nhe
   xoa(_id) {
      let uri = `http://127.0.0.1:8000/api/xoa/${_id}`;
      axios.delete(uri).then(response => {
      //this.posts.splice(this.posts.indexOf(_id),1);
      for(let i=0;i<this.posts.length;i++)
         {
          if(_id===this.posts[i]._id)
          {
            this.posts.splice(i,1);
          }
         }
      });
     
    }

     
    },


  }



</script>

