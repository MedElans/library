<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all()->toArray();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::lists('name', 'id');
        return view('categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(empty($request->all()['parentId']))
        {
            $root = Category::create(['name' => $request->all()['name']]);
        }
        else
        {
            $root = Category::where(['id' => $request->all()['parentId']])->first();
            $child = Category::create(['name' => $request->all()['name']]);
            $child->makeChildOf($root);
        }
        return redirect(route('admin.category.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::lists('name', 'id');
        $category = Category::where(['id' => $id])->first();
        return view('categories.show', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        if(empty($request->all()['parentId']))
        {
            $category->fill(['name' => $request->all()['name']])->save();
        }
        else
        {
            $root = Category::where(['id' => $request->all()['parentId']])->first();
            $category->fill(['name' => $request->all()['name']])->save();
            $category->makeChildOf($root);
        }
        return redirect(route('admin.category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect(route('admin.category.index'));

    }
}
