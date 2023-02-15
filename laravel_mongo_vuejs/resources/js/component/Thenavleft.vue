<template>
    <!--- cong thuc an tren dien thoai va xuat hien tren desktop-->

   
    <a-menu
      v-model:openKeys="openKeys"
      v-model:selectedKeys="selectedKeys"
      style="width: 350px;height:400px"
      mode="inline"> 
          <a-sub-menu key="Chuc Nang">
        <template #icon>
          <MailOutlined />
             </template>
          <template #title>Quan Ly Nhap Xuat</template>
              <a-menu-item key="baocao"><router-link :to="{ name: 'baocao' }">Bao Cao Xuat Nhap Ton</router-link></a-menu-item>
              <a-menu-item key="nhapkho"><router-link :to="{ name: 'nhapkho' }">Nhap kho</router-link></a-menu-item>
        
      </a-sub-menu>      
      <a-sub-menu key="danhmuc">
        <template #icon>
          <AppstoreOutlined />
        </template>
        <template #title>Kho</template>
        <a-menu-item key="nhanvien"> <router-link :to="{ name: 'nhanvien' }">Quan Ly Nhan Vien</router-link></a-menu-item>
        <a-menu-item key="kho"><router-link :to="{ name: 'kho' }">Quan Ly Kho</router-link></a-menu-item>
     
        <a-sub-menu key="sub1-2" title="Submenu">
          <a-menu-item key="5">Option 5</a-menu-item>
          <a-menu-item key="6">Option 6</a-menu-item>
        </a-sub-menu>
      </a-sub-menu>
      <a-sub-menu key="sub2">
        <template #icon>
          <SettingOutlined />
        </template>
        <template #title>Navigation Four</template>
        <a-menu-item key="7">Option 7</a-menu-item>
        <a-menu-item key="8">Option 8</a-menu-item>
        <a-menu-item key="9">Option 9</a-menu-item>
        <a-menu-item key="10">Option 10</a-menu-item>
      </a-sub-menu>
    </a-menu>
 
</template>
<script lang="ts">
import { defineComponent, reactive, toRefs } from 'vue';
import {store_menu} from "../store/main_store.js";
import { storeToRefs } from 'pinia';
import {
  MailOutlined,
  CalendarOutlined,
  AppstoreOutlined,
  SettingOutlined,
} from '@ant-design/icons-vue';
export default defineComponent({
  components: {
    MailOutlined,
    CalendarOutlined,
    AppstoreOutlined,
    SettingOutlined,
  },
  setup() {
          
   const menu=store_menu();
    return {
      ...storeToRefs(menu)
      
    };
  },
});
</script>

