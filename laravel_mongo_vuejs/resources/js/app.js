import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/css/bootstrap-utilities.min.css';

import { createPinia } from 'pinia';
import { createApp } from 'vue';
import { Button,
         Drawer,
         List,
         Menu,
         Card,
         Table,
        message 
    } from 'ant-design-vue';
import 'ant-design-vue/dist/antd.css';
import App from './App.vue';
import router from './router/connect_routers.js'
import axios from 'axios';
window.axios=axios;
const pinia = createPinia()
const app = createApp(App);
app.use(pinia);
app.use(router);
app.mount("#app");
app.config.globalProperties.$message = message;
app.use(Button);
app.use(Drawer);
app.use(List);
app.use(Menu);
app.use(List);
app.use(Card);
app.use(Table);



