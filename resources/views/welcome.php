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
            <br><br>
            <button @click="search" type="button" class="btn btn-primary">Искать</button>
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
        <tbody>
            <tr v-for="product in products">
            <th scope="row">{{product.id}}</th>
            <td>{{product.product_name}}</td>
            <td>{{product.articul}}</td>
            <td>{{product.category}}</td>
            <td>{{product.weight}}</td>
            <td>{{product.price}}</td>
            <td>{{product.status}}</td>
            <td>{{product.created_at}}</td>
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
        searchingData: {
            param: '',
        }
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
            document.getElementById('value').placeholder = param;
        },
        closeFrom: function(){
            this.formKey = false
        },
        search: function(){
            this.backKey = true;
            this.formKey = false;
            let value = document.getElementById('value').value;
            let param = this.searchingData.param;
            axios.get('/products/search', {params: {param: param, value: value}})
                .then(data => {
                    this.products = data.data;
                })
        },
        back: function(){
            this.backKey = false;
            axios.get('/products').then(data => {
                this.products = data.data;
            });
        }
    }
})
</script>
</body>
</html>