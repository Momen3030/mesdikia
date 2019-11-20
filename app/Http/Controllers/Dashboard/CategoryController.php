<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(4);
        return view('dashboard.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'image'=>'required',
                'name'=>'required|string|unique:categories|max:255'
            ]
        );

        $category = new Category();
        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('productimages'), $imageName);
        $category->image = $imageName;
        $category->name = $request->input('name');
        $category->save();

        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.categories.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catagory=Category::findOrfail($id);
        return view('dashboard.categories.createsub',compact('catagory'));
    }

    public function addsub(Request $request){
//        dd($request->all());
        $request->validate(
            [
                'image'=>'required',
                'subname'=>'required|string|max:255'
            ]
        );

        $category = new Category();
        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('productimages'), $imageName);
        $category->image = $imageName;
        $category->name = $request->input('subname');
        $category->hasparent = $request->input('cat_id');
        $category->save();

        session()->flash('success',__('site.added_successfully'));
        return redirect()->route('dashboard.categories.index');


    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $change = Category::find($id);
        return view('dashboard.categories.edit',compact('change'));
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
        $request->validate(
            [
                'image'=>'required',
                'name'=>'required|string|max:255'
            ]
        );

        $add_im_text=Category::find($id);
        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('productimages'), $imageName);
        $add_im_text->image = $imageName;
        $add_im_text->name = $request->input('name');
        $add_im_text->update();
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Category::find($id);
        $cat->delete();
        session()->flash('success',__('site.deleted_successfully'));
        return redirect()->route('dashboard.categories.index');
    }
}
