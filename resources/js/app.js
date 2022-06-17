import './bootstrap';
import {createApp} from 'vue'
import AdminComponent from './components/admin/AdminComponent.vue'
import FormComponent from './components/admin/FormComponent.vue'
import Files from './components/admin/Files.vue'
import Home from './components/home/Home.vue'

const app = createApp({})
app.component('admin-component', AdminComponent)
app.component('home', Home)
app.component('form-component', FormComponent)
app.component('files-component', Files)
app.mount("#content")
