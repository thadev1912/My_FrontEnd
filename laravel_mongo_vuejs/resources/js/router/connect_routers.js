
import { createRouter, createWebHistory } from 'vue-router';
import main from './main_routers.js';
const routes = [...main];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;