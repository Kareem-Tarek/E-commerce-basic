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
            public function store(Request $request){
                //            Validate Data
                $request->validate([
                    'title'       => 'required|max255',
                    'price'       => 'nullabel|max255',
                    'description' => 'nullabel|max255'
                ]);
                    //Create All Data In Product Api
                    Product::create($request->all());
            }
}
