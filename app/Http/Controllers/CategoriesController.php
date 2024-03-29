<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use Auth;
use App\User;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::forLoggedInUser()->get()->toArray();
        $categoriesForForm = Category::forLoggedInUser()->lists('name', 'id');

        return view('categories.index', compact('categories','categoriesForForm'));
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
            $root = new Category(['name' => $request->all()['name']]);
            $user = User::find(Auth::id());
            $user->categories()->save($root);
        }
        else
        {
            $root = Category::where(['id' => $request->all()['parentId']])->first();
            $child = new Category(['name' => $request->all()['name']]);
            $user = User::find(Auth::id());
            $user->categories()->save($child);
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
        $categories = Category::forLoggedInUser()->where('id','!=', $id)->lists('name', 'id');
        $category = Category::forLoggedInUser()->where(['id' => $id])->first();
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
        $category = Category::forLoggedInUser()->findOrFail($id);
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
