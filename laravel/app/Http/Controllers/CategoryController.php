<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
      
        return response()->json([
            'category' => $category 
        ], 200);
    }
   
    
    public function store(StoreCategoryRequest $request)
    {

         
            $category = Category::create([ 
                'name' => $request->name,
                'product_id' => $request->product_id
            ]);

           
            return response()->json([
                'message' => 'category created avec succsse ',
                'category' => $category
            ], 201); 

       
    }

    public function update(UpdateCategoryRequest $request,Category $category)
    {


            $category->update($request->validated());

            return response()->json([
                'message' => 'category updated avec succes.',
                'category' => $category
            ], 200);

    }
    public function destroy(Category $category)
    {

            $category->delete();

            return response()->json([
                'message' => 'category delated avec succes.'
            ], 200);

       
    }
}
