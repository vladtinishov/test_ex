<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class ProductsController extends Controller
{
    public function showAll(){ 
        $allProducts = Products::getAll();
        return json_encode($allProducts);
    }
    public function search(Request $request){
        $param = $request->input('param');
        $value = $request->input('value');
        $searchedProduct = Products::getSearched($param, $value);
        return json_encode($searchedProduct);
    }
}
