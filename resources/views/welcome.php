<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, world</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="app.css">
</head>
<body>

<div id="app">
    <div v-if="formKey" class="modal_window">
        <div class="form">
            <i @click="closeFrom" class="fa fa-times-circle" aria-hidden="true"></i>
            <input id="value" type="text">
            <br>
            <button @click="search" type="button" class="btn btn-primary">Искать</button>
            <div class="filter_list">
                <button @click="setExp('>')">></button>
                <button @click="setExp('=')">=</button>
                <button @click="setExp('<')"><</button>
                <br>
                <ul>
                    <li v-for="value, key in allFilters">
                        <span @click="deleteFilter(key)">del</span> {{key}} {{value.exp}} {{value.val}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
            <th scope="col">
                <i @click="openForm('id')" class="fa fa-filter" aria-hidden="true"></i>
                id
            </th>
            <th scope="col">
                <i @click="openForm('product_name')" class="fa fa-filter" aria-hidden="true"></i>
                Наименование
            </th>
            <th scope="col">
                <i @click="openForm('articul')" class="fa fa-filter" aria-hidden="true"></i>
                Артикул
            </th>
            <th scope="col">
                <i @click="openForm('category')" class="fa fa-filter" aria-hidden="true"></i>
                Категория
            </th>
            <th scope="col">
                <i @click="openForm('weight')" class="fa fa-filter" aria-hidden="true"></i>
                Вес
            </th>
            <th scope="col">
                <i @click="openForm('price')" class="fa fa-filter" aria-hidden="true"></i>
                Себестоимость
            </th>
            <th scope="col">
                <i @click="openForm('status')" class="fa fa-filter" aria-hidden="true"></i>
                Состояние продукта
            </th>
            <th scope="col">
                <i @click="openForm('created_at')" class="fa fa-filter" aria-hidden="true"></i>
                Дата добавления
            </th>
            <!-- <th scope="col">Дата добавления</th> -->
            </tr>
        </thead>
        <tbody v-if="allProductsKey">
            <tr v-for="product in products">
            <th scope="row">{{product.id}}</th>
            <td>{{product.product_name}}</td>
            <td>{{product.articul}}</td>
            <td>{{product.category}}</td>
            <td>{{product.weight}}</td>
            <td>{{product.price}}</td>
            <td>{{product.status}}</td>
            <td>{{product.created_at | data}}</td>
            </tr>
        </tbody>
        <tbody v-if="searchingProductsKey">
            <tr v-for="product in searchingProducts">
            <th scope="row">{{product.id}}</th>
            <td>{{product.product_name}}</td>
            <td>{{product.articul}}</td>
            <td>{{product.category}}</td>
            <td>{{product.weight}}</td>
            <td>{{product.price}}</td>
            <td>{{product.status}}</td>
            <td>{{product.created_at }}</td>
            </tr>
        </tbody>
    </table>
    <button v-if="backKey" @click="back" type="button" class="btn btn-primary to-main">На главную</button>
</div>



<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script>

let app = new Vue({
    el: '#app',
    data: {
        hello: 'hello',
        products: [],
        formKey: false,
        backKey: false,
        allProductsKey: true,
        searchingProductsKey: false,
        searchingData: {},
        searchingProducts: [],
        

        filterData: {
            id: {val: 0, exp: '='},
            product_name: {val: '', exp: '='},
            articul: {val: '', exp: '='},
            category: {val: '', exp: '='},
            weight: {val: 0, exp: '='},
            price: {val: 0, exp: '='},
            status: {val: '', exp: '='},
        },

        //new filter
        nameOfParam: '',
        valueOfParam: 0,
        exp: '=',
        sql: '',
        expList: [],
        filters: [],
        allFilters: {
            
        },
    },
    mounted: function(){
        axios.get('/products').then(data => {
            this.products = data.data;
        });
    },
    methods: {
        openForm: function(param){
            this.formKey = true;
            this.searchingData.param = param;

            //new filter
            this.nameOfParam = param;
        },
        openExpList: function(){
            //open expressions list
        },
        setExp: function(exp){
            //set expression
            this.exp = exp;
        },
        closeFrom: function(){
            this.formKey = false
        },
        
        search: function(){
            //keys
            this.backKey = true;
            this.formKey = false;
            this.allProductsKey = false;
            this.searchingProductsKey = true;
            //

            let value = document.getElementById('value').value;
            let param = this.searchingData.param;

            //new filter
            this.valueOfParam = value;
            this.filterData[this.nameOfParam].val = this.valueOfParam;
            this.filterData[this.nameOfParam].exp = this.exp;
            console.log(this.sql);
            let sqlQuery = this.sql;
            let fd = this.filterData;
            console.log(fd);
            axios.get('/products/search', {params: {
                                    sql: fd
                                }
                            })
                .then(data => {
                    this.searchingProducts = data.data;
                    console.log(data.data);
                });
            this.getFilters();
        },
        deleteFilter: function(prop){
            this.filterData[prop].val = 0;
        },
        getFilters: function(){
            Object.assign(this.allFilters, this.filterData)
            for(let key in this.allFilters){
                if(this.allFilters[key].val == '' || this.allFilters[key].val == 0){
                    delete this.allFilters[key];
                }
            }
            
        },
        back: function(){
            this.backKey = false;
            this.allProductsKey = true;
            this.searchingProductsKey = false;
            this.searchingProducts = [];
            axios.get('/products').then(data => {
                this.products = data.data;
            });
        }
    },
    filters: {
        data: function(value){
            value = value.split('T');
            value[1] = value[1].split('.');
            value = value[0] + " " + value[1][0];
            return value;
        }
    }
})
</script>
</body>
</html>