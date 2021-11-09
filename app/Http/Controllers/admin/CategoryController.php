<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ProductType;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view( 'pages.admin.category_management.categories', ['categories' => $categories]);
    }

    public function create()
    {

        return view( 'pages.admin.category_management.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required',
            'product_type' => 'required',
            'image' => 'required',
        ]);
        $category = new Category();
        $category->name = $request->category_name;
        $category->product_type_id = $request->product_type;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/img/category/');
            $PATH = url('/img/category').'/'.$request->image;

            $image->move($destinationPath, $filename);
            $category->image = '/img/category/'.$filename;
        }
        $category->save();
        return redirect()->to('admin/category')->with('message', 'Successfully Added');
    }

    public function edit()
    {
        return view( 'pages.dashboard');
    }

    public function update(Request $request)
    {
        return view( 'pages.dashboard');
    }

    public function destroy()
    {
        return view( 'pages.dashboard');
    }

    public function searchCategory(Request $request) {

        if(isset($request->search_value )){
            $categories = Category::where('name', $request->search_value)->get();
        } else {
            $categories = Category::all();
        }
        return view( 'pages.admin.category_management.categories', ['categories' => $categories]);
    }

}
