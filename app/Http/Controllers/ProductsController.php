<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
class ProductsController extends Controller
{
    public function showAll(){ 
        $allProducts = Products::getAll();
        return json_encode($allProducts);
    }
    public function search(Request $request){
        $gotObj = json_decode($request->input('searching_obj'));
        $sql = 'SELECT * FROM products WHERE ';
        foreach($gotObj as $key => $value){
            if($value != ''){
                $sql .= "$key = '$value' ,";
            }
        }
        $sql = substr($sql,0,-1);
        $j = DB::select($sql);
        return json_encode($j);
    }
}
