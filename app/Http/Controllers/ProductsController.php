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
        $gotObj = $request->input('sql');
        $sql = 'SELECT * FROM products WHERE ';
        // foreach($gotObj as $key => $value){
        //     if($value != ''){
        //         $sql .= "$key = '$value' AND ";
        //     }
        // }
        // $sql = substr($sql,0,-4);
        // $j = DB::select($sql);
        // $sql = 'select * from products where ';
        // $sql .= $request->input('sql');
        $sql .= substr($gotObj,0,-4);  
        $result = DB::select($sql);
        return json_encode($result);
    }
}
