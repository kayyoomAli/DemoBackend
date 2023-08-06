<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class ProductController extends Controller
{
    public function register (Request $request)
    {
        $categories = Category::all();
        return view ('admin.product.register',compact('categories'));
    }

    public function insertproducts (Request $request)
    {
        $cats = Category::find($request->category_id);

        $insertpro = new Product();
        // dd($insertpro);

        $insertpro->name = $request->name;
        $insertpro->price = $request->price;

        if($request->hasFile('image'))
        {

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/categoryimage/'.$filename, );
            $insertpro->image = $filename;

            //print_r($student);
        }

        $cats->products()->save($insertpro);

        return redirect('show');
    }

    public function show(Request $request)
    {
        $fatchdata = Product::all();

        // dd($fatchdata);

        return view('admin.product.listing',compact('fatchdata'));
    }

    public function edit(Request $request,$id)
    {
        $productedit = Product::find($id);
        // dd($productedit);

        return view('admin.product.edit',compact('productedit'));

    }

    public function update(Request $request)
    {
        $updatepro = $request->pro_id;

        $update = Product::find($updatepro);

        $update->name = $request->name;
        $update->price = $request->price;
        $update->save();

        return redirect('show');

    }

    public function destroy(Request $request,$id)
    {
        $crud=Product::find($id);
        $crud->delete();
        return redirect('show');

    }




}
