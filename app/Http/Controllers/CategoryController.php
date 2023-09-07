<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id' , 'desc')
        ->simplePaginate(4);
        return view('pages.categories.index' , compact('categories'));

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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        //
        $category = Category::find($id);
        return view('pages.categories.edit' , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        //Validate Category
        $request->validate([
            'title'       => 'required|max:255',
            'description' => 'nullable|max:255',
        ]);

        //Update Category
        $category_old = Category::find($id);
        $category     = Category::find($id);

        $category->title       = $request->title;
        $category->description =$request->description;
        $category->save();

        if($category_old->title != $category->title &&
        $category_old->description == $category->description){
            $message_title = "successful_category_title_updated";
            $message_body  = "The Category with ID ($category->id) was successfully updated from \"$category_old->title\" to \"$category->title\".";
        }
        elseif(($category_old->description != $category->description &&
        $category_old->title == $category->title)){
            $message_title = "successful_category_description_updated";
            $message_body  = "The Category with ID ($category->id) description was updated successfully.";
        }
        else{
            $message_title = "successful_category_updated";
            $message_body  = "The Category with ID ($category->id) all attributes was updated successfully.";
        }
        return redirect('/categories')->with($message_title, $message_body);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
