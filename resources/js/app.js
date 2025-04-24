import { createApp } from 'vue';
import { setDefaultHeaders, setDefaultBaseUrl } from '@/utils/fetchJson.js';
import App from './App.vue';
import router from './routes/router';

const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') ?? '';
console.log('CSRF Token:', csrfToken);

setDefaultHeaders({'X-CSRF-TOKEN': csrfToken});
const urlApi = document.querySelector('meta[name="api-base-url"]')?.getAttribute('content') ?? '';
console.log('API Base URL:', urlApi);
setDefaultBaseUrl(urlApi);

const myApp = createApp(App);
// myApp.mount('#app');
myApp.use(router).mount('#app');