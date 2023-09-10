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
            public function update(Request $request){
                //            Validate Data
                $request->validate([
                    'title'              => 'required|string|max:255',
                    'price'              => 'required|numeric',
                    'description'        => 'nullable|string|max:1020',
                    'available_quantity' => 'required|integer',
                    'category_id'        => 'required|integer'
                ]);
                    //Create All Data In Product Api
                Product::create($request->all());
            }
}
