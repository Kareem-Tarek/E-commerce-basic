<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

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
        $product  = Product::findOrFail($id);
        return view('pages.products.show' , compact('product'));
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
        $product = Product::find($id);
        return view('pages.products.edit' , compact('product'));

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
                'title'              => 'required|string|max:255',
                'price'              => 'required|numeric',
                'description'        => 'nullable|string|max:1020',
                'available_quantity' => 'required|numeric',
                'category_id'        => 'required|numeric',
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
                $message_body  ="the product  With ID ($product->id0) description was updated successfully.";
            }
            else{
                $message_title = "Successful_product_update";
                $message_body  = "The Products With ID ($product->id) All Attributes update was Successfully";
            }
                return redirect('/products')->with($message_title, $message_body);
        }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        //
        $product = Product::findOrfail($id);
        $product->delete();
        return redirect('/products')->with('Product_deleted_successfully ' , "the product($product->title) with Id($product->id) was successfully deleted!");

    }

    public function delete()
    {
        $products = Product::orderBy('id','desc')->onlyTrashed()->paginate(5);
        $products_count = $products->count();
        return view('pages.products.delete', compact('products', 'products_count'));

    }

    public function restore($id)
    {
        Product::withTrashed()->find($id)->restore();
        $product = Product::findOrFail($id);
        return redirect()->route('products.delete')
            ->with('restored_product_message', "($product->name) has been Restored successfully.");
    }

    public function forceDelete($id)
    {
        Product::where('id', $id)->forceDelete();
        return redirect()->route('products.forceDelete')
            ->with('permanent_deleted_product_message', "The product has been permanently deleted successfully.");
    }
}
