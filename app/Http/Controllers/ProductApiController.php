<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductApiController extends Controller
{
    //get All Products Api
    public function getProducts(){
        return Product::all();
    }

    //get Single Product
    public function getProduct($id){
        $product = Product::find($id);
        return $product;
    }

    //save New Product
    public function storeProduct(Request $request){
        //Validate Product Api
        $request->validate([
            'title'              => 'required|string|max:255',
            'description'        => 'nullable|string|max:1020',
            'price'              => 'required|numeric',
            'available_quantity' => 'required|integer',
            'category_id'        => 'required|integer',
        ]);
        return Product::create($request->all());
    }

    //update Product Api
    public function updateProduct(Request $request , $id){
        $product = Product::find($id);
        $product->update($request->all());
        return $product;
    }

    //delete Product Api
    public function deleteProduct($id){
        return Product::destroy($id);
    }

    //restore Product Api
    public function restoreProduct($id){
        return Product::restore($id);
    }

    //forceDelete Product Api
    public function forceDeleteProduct($id){
        return Product::forceDelete($id);
    }

}

