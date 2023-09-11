<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class ProductApiController extends Controller
{
    //Get All Products Api
        public function getProducts(){
            return Product::all();
        }
    //Get Single Product
        public function getProduct($id){
    //Find Product By Id
            $product = Product::find($id);
            return $product;
        }
    //Save New Product
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
    //Update Product Api
        public function updateProduct(Request $request , $id){
                $product = Product::find($id);
                $product->update($request->all());
                return $product;
        }
    //delete Product Api
        public function deleteProduct($id){
            return product::destroy($id);
        }

}

