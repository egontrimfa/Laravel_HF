
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue'
import VueAxios from 'vue-axios';
import axios from 'axios';
import BootstrapVue from 'bootstrap-vue';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';

require('./bootstrap');

window.Vue = require('vue');
Vue.use(VueAxios, axios);
Vue.use(BootstrapVue);

//import './custom.scss';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('students', require('./components/Students.vue').default);
Vue.component('thread-view', require('./pages/Thread.vue'));

const options = {
    transformAssetUrls: {
        video: ['src', 'poster'],
        source: 'src',
        img: 'src',
        image: 'xlink:href',
        'b-img': 'src',
        'b-img-lazy': ['src', 'blank-src'],
        'b-card': 'img-src',
        'b-card-img': 'src',
        'b-card-img-lazy': ['src', 'blank-src'],
        'b-carousel-slide': 'img-src',
        'b-embed': 'src'
        }
    }

const app = new Vue({
    el: '#app',
    data:{
        students:[],
        students_edit:{},
        fields: ['first_name', 'last_name', 'email', 'actions'],
        student:{
            id:'',
            first_name:'',
            last_name:'',
            email:'',
        },
        products:[],
        product_edit:{},
        product:{
            id:'',
            name:'',
            desc:'',
            price:'',
        },
        errors:'',
        edit_true: true,
        deleteModal: {
          id: 'delete-modal',
        },
        options : {
          transformAssetUrls: {
            video: ['src', 'poster'],
            source: 'src',
            img: 'src',
            image: 'xlink:href',
            'b-img': 'src',
            'b-img-lazy': ['src', 'blank-src'],
            'b-card': 'img-src',
            'b-card-img': 'src',
            'b-card-img-lazy': ['src', 'blank-src'],
            'b-carousel-slide': 'img-src',
            'b-embed': 'src'
          }
        }
    },
    methods:{
        add_student(){
            axios.post('save-student',{
                first_name:this.student.first_name,
                last_name:this.student.last_name,
                email:this.student.email,
            })
                .then(response=>{
                    this.get_students()
                    //console.log(response)
                    this.student.first_name = '';
                    this.student.last_name = '';
                    this.student.email = '';
                })
                .catch(error=>{
                    if(error.response.status==422){
                        this.errors = error.response.data.errors
                    }
                })

        },
        get_students(){
            axios.get('get-students')
            .then(response=>this.students = response.data);
            console.log("Students in method: ", this.students);
        },
        delete_student(id,index){
            axios.get('del-student/'+id)
            .then(response=>this.students.splice(index,1))

        },
        edit_student(id){
            this.edit_true = false;
            axios.get('edit-student/'+id)
            .then(response=>{
                //console.log("Student to edit: ", response.data);
                var student =  response.data;
                this.student.id = student.id;
                this.student.first_name = student.first_name;
                this.student.last_name = student.last_name;
                this.student.email = student.email;
            })

        },
        update_student(){
            this.edit_true = true;
            axios.post('update-student',{
                id:this.student.id,
                first_name:this.student.first_name,
                last_name:this.student.last_name,
                email:this.student.email,
            })
                .then(response=>{
                    this.get_students()
                    // console.log(response)
                    this.student.first_name = '';
                    this.student.last_name = '';
                    this.student.email = '';
                })
                .catch(error=>{
                    if(error.response.status==422){
                        this.errors = error.response.data.errors
                    }
                })

        },
        delete(button) {
            this.$root.$emit('bv::show::modal', this.deleteModal.id, button);
        },
        add_product(){
            axios.post('save-post',{
                name:this.product.name,
                desc:this.product.desc,
                price:this.product.price,
            })
                .then(response=>{
                    this.get_product()
                    // console.log(response)
                    this.product.name = '';
                    this.product.desc = '';
                    this.product.price = '';
                })
                .catch(error=>{
                    if(error.response.status==422){
                        this.errors = error.response.data.errors
                    }
                })

        },
        get_product(){
            axios.get('get-product')
            .then(response=>this.products = response.data)
        },
        delete_product(id,index){
            axios.get('del-product/'+id)
            .then(response=>this.products.splice(index,1))

        },
        edit_product(id){
            this.edit_true = false
            axios.get('edit-product/'+id)
            .then(response=>{
                var post =  response.data;
                this.product.id = post.id;
                this.product.name = post.name;
                this.product.desc = post.desc;
                this.product.price = post.price;
            })

        },
        update_product(){
            this.edit_true = true
            axios.post('update-post',{
                id:this.product.id,
                name:this.product.name,
                desc:this.product.desc,
                price:this.product.price,
            })
                .then(response=>{
                    this.get_product()
                    // console.log(response)
                    this.product.name = '';
                    this.product.desc = '';
                    this.product.price = '';
                })
                .catch(error=>{
                    if(error.response.status==422){
                        this.errors = error.response.data.errors
                    }
                })

        },
    },
    mounted(){
        console.log("Students in mounted: ", this.students);
    },
    created(){
        this.get_product();
        this.get_students();
    }
});
