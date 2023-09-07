<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id' , 'desc')
        ->simplePaginate(5);
        return view('pages.products.index' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        if($product == null){
            return '404';
        }
        else{
            return view('pages.products.show' , compact('product'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        //
        $Product = Product::find($id);
        return view('pages.products.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , int $id)
    {
        //Validate
            $request->validate([
                'title'        => 'required|max255',
                'price'        => 'nullabel|max255',
                'description'  => 'nullable|max255'
            ]);
            //Update Products
            $product_old = Product::find($id);
            $product     = Product::find($id);

            $product->title       =$request->title;
            $product->price       =$request->price;
            $product->description =$request->description;
            $product->save();

            if($product_old->title    != $product->title &&
            $product_old->price       == $product->price &&
            $product_old->description == $product->description){
                $message_title ="Successful_product_title_updated";
                $message_body  ="the product with Id($product->id)  Was Successfully update from \"$product_old->title\".";
            }
            elseif(($product_old->dsecription != $product->description &&
            $product_old->title  == $product->title)){
                $messagr_title ="Successfully_category_description_updated";
                $message_body  ="the product  With ID ($product->id0) description was updated successfully."
            }
            else{
                $message_title = "Successful_"
            }
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
