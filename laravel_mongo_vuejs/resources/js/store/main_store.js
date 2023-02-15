import { defineStore } from 'pinia'

export const store_menu = defineStore('menu_id', {
 
  state: () => ({
     
     
      selectedKeys: [],
      openKeys: [],
    
  }),
  actions:{
     onSelectedKeys(data)
     {
      this.selectedKeys=data;
     },
     onOpenKeys(data)
     {
      this.openKeys=data;
     },
 
  }
})