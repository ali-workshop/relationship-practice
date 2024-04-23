<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $categories=Category::all();
        return view('category.index',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $category_name=$request->validate([
                'name'=>['required','string','max:8'],

            ]);

            $category=new Category();
            $category->name=$request->name;
            $category->save();
            
            // another way : Category::creat($category_name);

            return redirect()
            ->route('categories.index')
            ->with('success','the category is added successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('category.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {   
        return view('category.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category_name=$request->validate([
            'name'=>['required','string','max:8'],

        ]);

        $category=Category::find($category->id);
        $category->name=$request->name;
        $category->save();
        
        // another way : Category::creat($category_name);

        return redirect()
        ->route('categories.index')
        ->with('success','the category is updated successfully');
    
        }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
       $category->delete();
       return redirect()
       ->route('categories.index')
       ->with('success','the category is Deleted successfully');
    
    }
}
