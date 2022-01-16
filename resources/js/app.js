require('./bootstrap');

import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import routes from './routes.js'
import App from './App'

const router = createRouter({
    history: createWebHistory(),
    routes: routes.routes,
});

const app = createApp(App)
app.use(router)
app.mount('#app')